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

    $required_fields = array('pabac_nr', 'project_description', 'qty', 'end_user', 'assigned_officer', 'preproc_target_date');

    if ($implementing_unit == 2) {
      $required_fields += array('upr_nr', 'upr_date');
    }

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

    if (!$epa && !isset($asa_nr)) {
      $msg .= "No ASA Entry!";
      $result->result = $this->response_error($msg);
      $result->items = implode(',', array('asa_nr'));
      return $result;
    }

    // if (!isset($supplier)) {
    //   $msg .= "No Selected Supplier!";
    //   $result->result = $this->response_error($msg);
    //   $result->items = implode(',', array('supplier'));
    //   return $result;
    // }
    $this->start_transaction();

    try {
      $created_by = $_SESSION['user']->id;
      $personell_ids = implode(",", $assigned_personell);
      $upr_date = (!empty($upr_date) && DateTime::createFromFormat('Y-m-d', $upr_date) !== false) ? "'$upr_date'" : "null";

      $app_file_name = $this->upload_file($app_file, "app");
      $ppmp_file_name = $this->upload_file($ppmp_file, "ppmp");
      $procurement_file_name = $this->upload_file($procurement_file, "procurement");
      $tech_specs_file_name = $this->upload_file($tech_specs_file, "tech");
      $bidding_file_name = $this->upload_file($bidding_file, "bidding");
      $upr_file_name = $this->upload_file($upr_file, "upr");
      $other_file_name = $this->upload_file($other_file, "other");


      $project_id = $this->insert_get_id("INSERT INTO tbl_project (`epa`,`implementing_unit_id`,`pabac_id`,`pabac_nr`,`upr_nr`,`upr_date`,`comodity_id`,`program_manager_id`,`project_description`,`qty`,`unit_id`,`abc`,`end_user`,`contract_nr`,`contract_price`,`residuals`,`mode_of_proc_id`,`status_id`,`app_file`,`ppmp_file`,`procurement_file`,`tech_specs_file`,`bidding_file`,`upr_file`,`other_file`,`officer_id`,`personell_ids`,`created_by`,`preproc_target_date`) VALUES('$epa','$implementing_unit','$pabac','$pabac_nr','$upr_nr',$upr_date,'$comodity','$program_manager','$project_description','$qty','$unit','$abc','$end_user','$contract_nr','$contract_price','$residuals','$mode_of_proc',1,$app_file_name,$ppmp_file_name,$procurement_file_name,$tech_specs_file_name,$bidding_file_name,$upr_file_name,$other_file_name,'$assigned_officer','$personell_ids','$created_by','$preproc_target_date')");

      $this->insert_project_status($project_id, 1, "Project Initialize");

      if (isset($asa_nr)) {
        $tmp = 0;
        foreach ($asa_nr as $key => $res) {
          $tmp++;
          $asa_nr_value = $asa_nr[$key];
          $asa_date = ${'asa_date_' . $tmp};
          $asa_code = $asa_object[$key];
          $asa_amt = $asa_amount[$key];
          $asa_class = $asa_expense_class[$key];

          $this->query("INSERT INTO tbl_project_asa (project_id,asa_nr,asa_date,object_code,asa_amount,expense_class_id,created_by)  values ($project_id,'$asa_nr_value','$asa_date', '$asa_code','$asa_amt','$asa_class','$created_by')");
        }
      }

      if (isset($supplier)) {
        foreach ($supplier as $key => $res) {
          $supplier_r = $supplier_rank[$key];
          $supplier_id = $supplier[$key];
          $local_id = $local[$key];
          $price = $bid_price[$key];
          $supplier_status = $supplier_status[$key];
          $this->query("INSERT INTO tbl_project_supplier (project_id,price,local_id,supplier,status_id,`rank`,created_by)  values ('$project_id','$price', '$local_id','$supplier_id','$supplier_status','$supplier_r','$created_by')");
        }
      }

      if (isset($twg_rank)) {
        foreach ($twg_rank as $key => $res) {
          $rank_id = $twg_rank[$key];
          $ln = $last_name[$key];
          $fn = $first_name[$key];
          $mn = $middle_name[$key];
          $suffix_id = $suffix[$key];
          $branch_id = $branch[$key];
          $serial = $serial_no[$key];
          $designation_id = $designation[$key];
          $auth = $authority[$key];
          $this->query("INSERT INTO tbl_project_twg (project_id,rank_id,first_name,middle_name,last_name,suffix_id,branch_id,serial_no,designation_id,authority)  values ('$project_id','$rank_id', '$fn','$mn','$ln','$suffix_id','$branch_id','$serial','$designation_id','$auth')");
        }
      }

      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("User Project Created Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      print_r($exception);
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
