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

    $this->start_transaction();
    try {
      switch ($dropdown_name) {
        case 'COMMODITY':
          $table = 'tbl_comodity';
          break;
        case 'END USER':
          $table = 'tbl_end_user';
          break;
        case 'PABAC':
          $table = 'tbl_pabac';
          break;
        case 'PROGRAM MANAGER':
          $table = 'tbl_program_manager';
          break;
      }

      $this->query("INSERT INTO $table (`name`,`created_date`,`updated_date`,`deleted_flag`) VALUES('$dropdown_value', NOW(), NOW(), 0)");

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
}
