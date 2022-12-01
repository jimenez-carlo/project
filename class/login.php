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

    $user = $this->get_one("SELECT *,count(*) as user_count FROM tbl_users u inner join tbl_users_info ui on ui.id = u.id WHERE (u.username = '$serial_no' OR u.serial_no = '$serial_no') and u.status_id <> 3 GROUP BY u.id");
    if (!isset($user->password)) {
      $msg .= "Invalid Username/Password!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $required_fields);
      $result->message = $msg;
      return $result;
    }
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

      if (($_POST['password'] === "12345678")) {
        $_SESSION['force_change_password'] = ($_POST['password'] === "12345678");
        $_SESSION['user_id'] = $user->id;
        $result->result = $this->response_success("Please wait...", "Force change password.");
        $result->refresh = true;
        return $result;
      }

      $_SESSION['user'] = $user;
      $_SESSION['is_logged_in'] = true;
      $result->status = true;
      $result->refresh = true;
      $result->result = $this->response_success("Please wait...", "Logging In");
      return $result;
    } else {
      $msg .= "Invalid Username/Password!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $required_fields);
      $result->message = $msg;
      return $result;
    }
  }

  public function change_password()
  {
    extract($this->escape_data($_POST));

    $result = $this->response_obj();
    if ($password !== $password_confirmation) {
      $result->result = $this->response_error("Password not match!", "");
      return $result;
    }

    if (strlen($password) < 8) {
      $result->result = $this->response_error("Password must be at least 8 characters!", "");
      return $result;
    }

    $new_password = password_hash($password, PASSWORD_DEFAULT);
    $this->query("UPDATE tbl_users SET `password` = '$new_password', updated_date = NOW() WHERE id = {$_SESSION['user_id']}");
    session_destroy();
    $result->result = $this->response_success("Success!!!", "Password updated successfully.");
    $result->refresh = true;
    return $result;
  }
}
