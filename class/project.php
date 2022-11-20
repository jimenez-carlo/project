<?php
class Project extends Base
{
  private $conn;
  public $drop_down_data;
  public function __construct($db)
  {
    parent::__construct($db);
    $this->conn = $db;
  }

  public function create()
  {
    extract($this->escape_data(array_merge($_POST, $_FILES)));
    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('pabac_nr', 'upr_nr', 'upr_date', 'project_description', 'qty', 'end_user', 'assigned_officer');

    foreach ($required_fields as $res) {
      if (empty(${$res})) {
        $errors[] = $res;
        $blank++;
      }
    }

    if (empty($assigned_personell)) {
      $errors[] = 'assigned_personell[]';
      $blank++;
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', $errors);
      return $result;
    }

    if (!isset($supplier)) {
      $msg .= "No Selected Supplier!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('supplier'));
      return $result;
    }

    $this->start_transaction();

    try {
      $created_by = $_SESSION['user']->id;
      $personell_ids = implode(",", $assigned_personell);
      $asa_date = (!empty($asa_date) && DateTime::createFromFormat('Y-m-d', $asa_date) !== false) ? "'$asa_date'" : "null";


      $app_file_name = "null";

      if (!empty($app_file['name'])) {
        $ext = explode(".", $app_file["name"]);
        $app_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($app_file['tmp_name'], "files/app/" . $app_file_name);
        $app_file_name = "'$app_file_name'";
        echo "seige";
      }


      $ppmp_file_name = "null";
      if (!empty($ppmp_file['name'])) {
        $ext = explode(".", $ppmp_file["name"]);
        $ppmp_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($ppmp_file['tmp_name'], "files/ppmp/" . $ppmp_file_name);
        $ppmp_file_name = "'$ppmp_file_name'";
      }

      $procurement_file_name = "null";
      if (!empty($procurement_file['name'])) {
        $ext = explode(".", $procurement_file["name"]);
        $procurement_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($procurement_file['tmp_name'], "files/procurement/" . $procurement_file_name);
        $procurement_file_name = "'$procurement_file_name'";
      }

      $tech_specs_file_name = "null";
      if (!empty($tech_specs_file['name'])) {
        $ext = explode(".", $tech_specs_file["name"]);
        $tech_specs_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($tech_specs_file['tmp_name'], "files/tech/" . $tech_specs_file_name);
        $tech_specs_file_name = "'$tech_specs_file_name'";
      }

      $bidding_file_name = "null";
      if (isset($bidding_file) && !empty($bidding_file['name'])) {
        $ext = explode(".", $bidding_file["name"]);
        $bidding_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($bidding_file['tmp_name'], "files/bidding/" . $bidding_file_name);
        $bidding_file_name = "'$bidding_file_name'";
      }

      $upr_file_name = "null";
      if (isset($upr_file) && !empty($upr_file['name'])) {
        $ext = explode(".", $upr_file["name"]);
        $upr_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($upr_file['tmp_name'], "files/upr/" . $upr_file_name);
        $upr_file_name = "'$upr_file_name'";
      }

      $other_file_name = "null";
      if (isset($other_file) && !empty($other_file['name'])) {
        $ext = explode(".", $other_file["name"]);
        $other_file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($other_file['tmp_name'], "files/other/" . $other_file_name);
        $other_file_name = "'$other_file_name'";
      }


      $project_id = $this->insert_get_id("INSERT INTO tbl_project (`epa`,`implementing_unit_id`,`pabac_id`,`pabac_nr`,`upr_nr`,`upr_date`,`comodity_id`,`program_manager_id`,`asa_nr`,`asa_date`,`object_code`,`asa_amount`,`expense_class_id`,`project_description`,`qty`,`unit_id`,`abc`,`end_user`,`mode_of_proc_id`,`status_id`,`app_file`,`ppmp_file`,`procurement_file`,`tech_specs_file`,`bidding_file`,`upr_file`,`other_file`,`officer_id`,`personell_ids`,`created_by`) VALUES('$epa','$implementing_unit','$pabac','$pabac_nr','$upr_nr','$upr_date','$comodity','$program_manager','$asa_nr', $asa_date,'$object_code','$asa_amount','$expense_class','$project_description','$qty','$unit','$abc','$end_user','$mode_of_proc',1,$app_file_name,$ppmp_file_name,$procurement_file_name,$tech_specs_file_name,$bidding_file_name,$upr_file_name,$other_file_name,'$assigned_officer','$personell_ids','$created_by')");

      foreach ($supplier as $key => $res) {
        $supplier_id = $supplier[$key];
        $local_id = $local[$key];
        $price = $bid_price[$key];
        $this->query("INSERT INTO tbl_project_supplier (project_id,price,local_id,supplier_id)  values ($project_id,'$price', '$local_id','$supplier_id')");
      }
      $this->query("INSERT INTO tbl_project_history (`project_id`,`project_status_id`,`created_by`) VALUES('$project_id',1, '$created_by')");

      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("User Project Created Successfully!", 'Successfull!');
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

    if (isset($delete_list) && !empty($delete_list)) {
      return $this->delete($delete_list);
    }

    $result = $this->response_obj();
    $blank = 0;
    $errors = array();
    $msg = '';

    $required_fields = array('branch_name', 'description');

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

    $check_branch_name = $this->get_one("SELECT if(max(b.id) is null, 0, max(b.id) + 1) as `res` from tbl_branch b where b.name ='$branch_name' and id <> $id  and deleted_flag = 0 limit 1");

    if (!empty($check_branch_name->res)) {
      $msg .= "Branch Name Already In-use!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('branch_name'));
      return $result;
    }

    $this->start_transaction();
    try {
      $this->query("UPDATE tbl_branch set `name` = '$branch_name', `description` = '$description' where id = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_success("Branch Updated Successfully!", 'Successfull!');
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
      $this->query("UPDATE tbl_users set `deleted_flag` = 1 where id = $id");
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
}
