<?php
class User extends Base
{
  private $conn;
  public $drop_down_data;
  public function __construct($db)
  {
    parent::__construct($db);
    $this->conn = $db;
    $this->drop_down_data = $this->set_default_data();
  }



  public function get_user($id = false)
  {
    if (empty($id)) {
      return false;
    }
    return $this->get_one("select u.*,ui.*,a.name as access_name FROM tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id left join tbl_suffix ss on ss.id = ui.suffix_id where u.id = $id and u.deleted_flag = 0");
  }
  public function get_id($id)
  {
    return $this->get_one("select *, DATE_ADD(issued_date, INTERVAL 1 YEAR) as expire_date  from tbl_request_id where id = $id limit 1");
  }



  public function create()
  {
    extract($this->escape_data($_POST));
    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('first_name', 'last_name', 'serial_no');

    foreach ($required_fields as $res) {
      if (empty(${$res})) {
        $errors[] = $res;
        $blank++;
      }
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $errors);
      return $result;
    }
    $username = $serial_no;
    $password = "12345678";

    $check_username = $this->get_one("SELECT if(max(b.id) is null, 0, max(b.id) + 1) as `res` from tbl_users b where b.username ='$username' and b.status_id <> 3 limit 1");

    if (!empty($check_username->res)) {
      $msg .= "Username Already In-use!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('username'));
      return $result;
    }

    $check_serial_no = $this->get_one("SELECT if(max(b.id) is null, 0, max(b.id) + 1) as `res` from tbl_users b where b.serial_no ='$serial_no' and b.status_id <> 3 limit 1");

    if (!empty($check_serial_no->res)) {
      $msg .= "Serial No Already In-use!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('serial_no'));
      return $result;
    }

    $this->start_transaction();

    try {
      $created_by = $_SESSION['user']->id;
      $new_password = password_hash($password, PASSWORD_DEFAULT);
      $user_id = $this->insert_get_id("INSERT INTO tbl_users (`serial_no`,`access_id`,`branch_id`,`rank_id`, `username`,`password`,`created_by`,`status_id`) VALUES('$serial_no','$access','$branch','$rank','$username','$new_password','$created_by','$status')");
      $this->query("INSERT INTO tbl_users_info (`id`,`first_name`,`middle_name`,`last_name`,`suffix_id`) VALUES('$user_id','$first_name', '$middle_name','$last_name', '$suffix')");

      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("User Account Created Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }

  public function update()
  {
    extract($this->escape_data($_POST));
    if (isset($verify)) {
      return $this->verify($id);
    }

    if (isset($delete_list) && !empty($delete_list)) {
      return $this->delete($delete_list);
    }

    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('first_name', 'last_name', 'serial_no');

    foreach ($required_fields as $res) {
      if (empty(${$res})) {
        $errors[] = $res;
        $blank++;
      }
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $errors);
      return $result;
    }

    $username = $serial_no;
    $check_username = $this->get_one("SELECT if(max(b.id) is null, 0, max(b.id) + 1) as `res` from tbl_users b where b.username ='$username' and b.status_id <> 3 and b.id <> $id limit 1");

    if (!empty($check_username->res)) {
      $msg .= "Username Already In-use!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('username'));
      return $result;
    }

    if (!empty($check_serial_no->res)) {
      $msg .= "Serial No Already In-use!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('serial_no'));
      return $result;
    }

    $this->start_transaction();
    try {

      if (isset($reset_password)) {
        $new_password = password_hash("12345678", PASSWORD_DEFAULT);
        $this->query("UPDATE tbl_users SET `password` = '$new_password', updated_date = NOW() WHERE id = $id");
      }

      $this->query("UPDATE tbl_users set `serial_no` = '$serial_no' ,`access_id` = '$access' ,`branch_id` = '$branch' ,`rank_id` = '$rank' ,`username` = '$username' ,`status_id` = '$status' where id = $id");
      $this->query("UPDATE tbl_users_info set `first_name` = '$first_name',`middle_name` = '$middle_name',`last_name` = '$last_name',`suffix_id`= '$suffix' where id = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("Account Updated Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }

  public function delete($id)
  {
    $result = $this->response_obj();

    $this->start_transaction();
    try {
      $this->query("UPDATE tbl_users set `status_id` = 3 where id = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("User Deleted Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }

  public function verify($id)
  {
    $result = $this->response_obj();

    $this->start_transaction();
    try {
      $this->query("UPDATE tbl_users set `verified_flag` = 1, updated_date = NOW(), approved_by = {$_SESSION['user']->id} WHERE id = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("User Verified Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }
}
