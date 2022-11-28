<?php


class Base
{
  private $conn;
  public function __construct($db)
  {
    $this->conn = $db;
    $this->conn_failed = $db;
  }


  public function get_list($sql)
  {
    $data = array();
    $result = mysqli_query($this->conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    return $data;
  }

  public function get_one($sql)
  {
    if ($result = mysqli_query($this->conn, $sql)) {
      $obj = mysqli_fetch_object($result);
      return $obj;
    }
    return false;
  }

  public function query($sql)
  {
    mysqli_query($this->conn, $sql);
  }

  public function insert_get_id($sql)
  {
    mysqli_query($this->conn, $sql);
    return mysqli_insert_id($this->conn);
  }

  public function escape_data($data = array())
  {
    foreach ($data as $key => $value) {
      if (is_array($value) || is_object($value)) {
        continue;
      } else {
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        $data[$key] = mysqli_real_escape_string($this->conn, $value);
      }
      return $data;
    }
  }

  public function response_error($message = "Oops Something Went Wrong!", $title = "System Error!")
  {
    return sprintf(
      '<div class="alert alert-sm alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-warning"></i> <strong>%s</strong> %s </div>',
      $title,
      $message
    );
  }


  public function response_success($message = "Action Successfull!", $title = "Action Successfull!")
  {
    return sprintf(
      '<div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="fa fa-check"></i> <strong>%s</strong> %s </div>',
      $title,
      $message
    );
  }
  public function response_swal($message = "Action Successfull!", $title = "Action Successfull!")
  {
    return sprintf(
      '<script> Swal.fire({title:"%s",text:"%s",icon:"success",showConfirmButton: false,timer: 1500})</script>',
      $title,
      $message
    );
  }

  public function response_obj()
  {
    $result = new stdClass();
    $result->status = false;
    $result->result = $this->response_error();
    $result->items = '';
    return $result;
  }

  public function close_connection()
  {
    $this->conn->close();
  }

  public function start_transaction()
  {
    return mysqli_begin_transaction($this->conn);
  }

  public function commit_transaction()
  {
    return mysqli_commit($this->conn);
  }

  public function roll_back()
  {
    return mysqli_rollback($this->conn);
  }

  public function save_error($error = '')
  {
    $error = addslashes($error);
    $this->query("insert into tbl_system_error (message) values('$error')");
  }

  public function upload_file($file = null, $path, $default = "null")
  {
    if (isset($file) && !empty($file['name'])) {
      $ext = explode(".", $file["name"]);
      $file_name = 'file_' . date('YmdHis') . "." . end($ext);
      move_uploaded_file($file['tmp_name'], "files/$path/" . $file_name);
      $file_name = "'$file_name'";
      return $file_name;
    }
    return $default;
  }


  public function get_dropdown()
  {
    extract($_POST);
    $data = $this->get_list("select $value as `value`, $display as `display` from $table where $where = $id ");
    foreach ($data as $res) {
      echo ($res['value'] == $selected) ? "<option value='" . $res['value'] . "' selected> " . $res['display'] . "</option>" : "<option value='" . $res['value'] . "'> " . $res['display'] . "</option>";
    }
    die;
  }


  public function set_default_data()
  {
    $data = array();
    // User
    $data['access'] = $this->get_list("select * from tbl_access where deleted_flag = 0");
    $data['user_status'] = $this->get_list("select * from tbl_users_status where deleted_flag = 0");
    $data['rank'] = $this->get_list("select * from tbl_rank where deleted_flag = 0");
    $data['classification'] = $this->get_list("select * from tbl_classification where deleted_flag = 0");
    $data['suffix'] = $this->get_list("select * from tbl_suffix where deleted_flag = 0");
    $data['branch'] = $this->get_list("select * from tbl_branch where deleted_flag = 0");
    $data['users'] = $this->get_list("select id,concat(last_name, ', ', first_name,' ', LEFT(middle_name, 1), '[#',id,']') as name from tbl_users_info where deleted_flag = 0");
    $data['officers'] = $this->get_list("select u.id,u.access_id,concat(ui.last_name, ', ', ui.first_name,' ', LEFT(ui.middle_name, 1), '[#',u.id,']') as name from tbl_users_info ui inner join tbl_users u on u.id = ui.id where u.deleted_flag = 0 and u.access_id = 2");
    $data['personells'] = $this->get_list("select u.id,u.access_id,concat(ui.last_name, ', ', ui.first_name,' ', LEFT(ui.middle_name, 1), '[#',u.id,']') as name from tbl_users_info ui inner join tbl_users u on u.id = ui.id where u.deleted_flag = 0 and u.access_id = 3");
    // Project
    $data['end_user'] = $this->get_list("select * from tbl_end_user where deleted_flag = 0");
    $data['comodity'] = $this->get_list("select * from tbl_comodity where deleted_flag = 0");
    $data['expense_class'] = $this->get_list("select * from tbl_expense_class where deleted_flag = 0");
    $data['implementing_unit'] = $this->get_list("select * from tbl_implementing_unit where deleted_flag = 0");
    $data['mode_of_proc'] = $this->get_list("select * from tbl_mode_of_proc where deleted_flag = 0");
    $data['pabac'] = $this->get_list("select * from tbl_pabac where deleted_flag = 0");
    $data['program_manager'] = $this->get_list("select * from tbl_program_manager where deleted_flag = 0");
    $data['project_status'] = $this->get_list("select * from tbl_project_status where deleted_flag = 0");
    // $data['supplier'] = $this->get_list("select * from tbl_supplier where deleted_flag = 0");
    $data['local'] = $this->get_list("select * from tbl_local where deleted_flag = 0");
    $data['unit'] = $this->get_list("select * from tbl_unit where deleted_flag = 0");
    $data['supplier_status'] = $this->get_list("select * from tbl_supplier_status where deleted_flag = 0");
    $data['designation'] = $this->get_list("select * from tbl_designation where deleted_flag = 0");
    $data['project_status'] = $this->get_list("select * from tbl_project_status where deleted_flag = 0");
    return $data;
  }
  public function breadcrumb($id = null)
  {
    if (empty($id)) {
      return '';
    }
    $list = $this->get_list("select * from tbl_project_status where id < $id+1 and deleted_flag = 0  and type = 1 order by id asc ");
    $tmp = "";
    foreach ($list as $res) {
      $tmp .= '<li class="breadcrumb-item active text-' . $res['color'] . '">' . ucfirst(strtolower($res['name'])) . '</li>';
    }
    return $tmp;
  }
  public function insert_project_status($project_id, $status_id, $remarks)
  {
    $created_by =  $_SESSION['user']->id;
    $this->query("INSERT INTO tbl_project_history (project_id,project_status_id,remarks,created_by) values($project_id, $status_id,'$remarks', $created_by)");
  }
}
