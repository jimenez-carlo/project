<?php

class Maintenance extends Base
{
  private $conn;
  public function __construct($db)
  {
    parent::__construct($db);
    $this->conn = $db;
  }

	public function upsert_dropdown() {
    extract($this->escape_data($_POST));
    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('dropdown_name', 'dropdown_value');

    foreach ($required_fields as $res) {
      if (empty(${$res})) {
        $errors[] = $res;
        $blank++;
      }
    }
    switch ($dropdown_name) {
      case 'COMMODITY':
        $table = 'tbl_comodity';
        break;
      case 'END USER':
        $table = 'tbl_end_user';
        break;
      case 'MODE OF PROC':
        $table = 'tbl_mode_of_proc';
        break;
      case 'PABAC':
        $table = 'tbl_pabac';
        break;
      case 'PROGRAM MANAGER':
        $table = 'tbl_program_manager';
        break;
    }
    
    if ($this->get_one("SELECT COUNT(*) AS count FROM $table WHERE name = '$dropdown_value' AND deleted_flag = 0")->count > 0) {
      $result->result = $this->response_error("$dropdown_value already exist!", "Duplicate error!");
      return $result;
    }


    $this->start_transaction();
    try {
      $this->query("
        INSERT INTO 
          $table (`name`,`created_date`,`updated_date`,`deleted_flag`) 
          VALUES(UPPER('$dropdown_value'), NOW(), NOW(), 0)
          ON DUPLICATE KEY UPDATE deleted_flag = 0, updated_date = NOW()
      ");

      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("$dropdown_name Created Successfully!", 'Successfull!');
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
    $result = $this->response_obj();
    switch ($dropdown_name) {
      case 'COMMODITY':
        $table = 'tbl_comodity';
        break;
      case 'END USER':
        $table = 'tbl_end_user';
        break;
      case 'MODE OF PROC':
        $table = 'tbl_mode_of_proc';
        break;
      case 'PABAC':
        $table = 'tbl_pabac';
        break;
      case 'PROGRAM MANAGER':
        $table = 'tbl_program_manager';
        break;
    }

    $this->start_transaction();
    try {
      $this->query("UPDATE $table SET `name` = '$dropdown_value', `updated_date` = NOW() WHERE `id` = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("$dropdown_name ID $id Updated Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error("Name $dropdown_value already exist!", "Duplicate error!");
      return $result;
    }
  }

  public function delete()
  {
    extract($this->escape_data($_POST));
    $result = $this->response_obj();
    switch ($dropdown_name) {
      case 'COMMODITY':
        $table = 'tbl_comodity';
        break;
      case 'END USER':
        $table = 'tbl_end_user';
        break;
      case 'MODE OF PROC':
        $table = 'tbl_mode_of_proc';
        break;
      case 'PABAC':
        $table = 'tbl_pabac';
        break;
      case 'PROGRAM MANAGER':
        $table = 'tbl_program_manager';
        break;
    }

    $this->start_transaction();
    try {
      $this->query("UPDATE $table SET `deleted_flag` = 1, `updated_date` = NOW() WHERE `id` = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("$dropdown_name ID $id Deleted Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }
}
