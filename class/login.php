<?php
class Login extends Base
{
  private $conn;
  public function __construct($db)
  {
    parent::__construct($db);
    $this->conn = $db;
  }

  public function index()
  {
    extract($this->escape_data($_POST));

    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('serial_no', 'password');

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
      $result->message = $msg;
      return $result;
    }

    $user = $this->get_one("SELECT *,count(*) as user_count FROM tbl_users u inner join tbl_users_info ui on ui.id = u.id WHERE (u.username = '$serial_no' OR u.serial_no = '$serial_no') and u.status_id <> 3");
    if (password_verify($password, $user->password)) {
      if (!$user->verified_flag) {
        $msg .= "This Account Has Not Been Verified!";
        $result->result = $this->response_error($msg);
        $result->items = implode(',', $required_fields);
        $result->message = $msg;
        return $result;
      }
      // if ($user->status_id == 3) {
      //   $msg .= "This Account !";
      //   $result->result = $this->response_error($msg);
      //   $result->items = implode(',', $required_fields);
      //   $result->message = $msg;
      //   return $result;
      // }
      $_SESSION['user'] = $user;
      $_SESSION['is_logged_in'] = true;
      $result->status = true;
      $result->refresh = true;
      $result->result = $this->response_success("Please wait...", "Logging In");
    } else {
      $msg .= "Invalid Username/Password!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $required_fields);
      $result->message = $msg;
    }
    return $result;
  }
}
