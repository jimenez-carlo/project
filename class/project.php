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

    $required_fields = array('abc', 'project_description', 'qty', 'assigned_officer', 'preproc_target_date');

    // if ($implementing_unit == 2) {
    //   $required_fields[] = 'upr_nr';
    //   $required_fields[] = 'upr_date';
    // }


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

    if (empty($end_user)) {
      $errors[] = 'end_user[]';
      $blank++;
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', $errors);
      return $result;
    }



    if (!$epa && !isset($asa_nr)) {
      $msg .= "No ASA Entry!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', array('asa_nr'));
      return $result;
    }

    if (!isset($twg_rank)) {
      $msg .= "No TWG Entry!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', array('twg_rank'));
      $result->status = false;
      return $result;
    }


    $this->start_transaction();

    try {

      $created_by = $_SESSION['user']->id;
      $personell_ids = implode(",", $assigned_personell);
      $officer_ids = implode(",", $assigned_officer);
      $end_user_ids = implode(",", $end_user);
      $upr_date = (!empty($upr_date) && DateTime::createFromFormat('d-m-Y', $upr_date) !== false) ? "'" . date("Y-m-d", strtotime($upr_date)) . "'" : "null";
      $preproc_target_date = (!empty($preproc_target_date) && DateTime::createFromFormat('d-m-Y', $preproc_target_date) !== false) ? "'" . date("Y-m-d", strtotime($preproc_target_date)) . "'" : null;

      $app_file_name = $this->upload_file($app_file, "app");
      $ppmp_file_name = $this->upload_file($ppmp_file, "ppmp");
      $procurement_file_name = $this->upload_file($procurement_file, "procurement");
      $tech_specs_file_name = $this->upload_file($tech_specs_file, "tech");
      $bidding_file_name = $this->upload_file($bidding_file, "bidding");
      $upr_file_name = $this->upload_file($upr_file, "upr");
      $other_file_name = $this->upload_file($other_file, "other");

      $abc = floatval(str_replace(",", "", $abc));
      $contract_price = floatval(str_replace(",", "", $contract_price));
      // $residuals = floatval(str_replace(",", "", $residuals));

      // echo "INSERT INTO tbl_project (`epa`,`implementing_unit_id`,`pabac_id`,`pabac_nr`,`upr_nr`,`upr_date`,`comodity_id`,`program_manager_id`,`project_description`,`qty`,`unit_id`,`abc`,`end_user`,`contract_nr`,`contract_price`,`residuals`,`mode_of_proc_id`,`status_id`,`app_file`,`ppmp_file`,`procurement_file`,`tech_specs_file`,`bidding_file`,`upr_file`,`other_file`,`officer_id`,`personell_ids`,`created_by`,`preproc_target_date`) VALUES('$epa','$implementing_unit','$pabac','$pabac_nr','$upr_nr',$upr_date,'$comodity','$program_manager','$project_description','$qty','$unit','$abc','$end_user_ids','$contract_nr','$contract_price','$residuals','$mode_of_proc',1,$app_file_name,$ppmp_file_name,$procurement_file_name,$tech_specs_file_name,$bidding_file_name,$upr_file_name,$other_file_name,'$officer_ids','$personell_ids','$created_by','$preproc_target_date')";
      $project_id = $this->insert_get_id("INSERT INTO tbl_project (`epa`,`implementing_unit_id`,`pabac_id`,`pabac_nr`,`upr_nr`,`upr_date`,`comodity_id`,`program_manager_id`,`project_description`,`qty`,`unit_id`,`abc`,`end_user`,`contract_nr`,`contract_price`,`mode_of_proc_id`,`status_id`,`app_file`,`ppmp_file`,`procurement_file`,`tech_specs_file`,`bidding_file`,`upr_file`,`other_file`,`officer_id`,`personell_ids`,`created_by`,`preproc_target_date`) VALUES('$epa','$implementing_unit','$pabac','$pabac_nr','$upr_nr',$upr_date,'$comodity','$program_manager','$project_description','$qty','$unit','$abc','$end_user_ids','$contract_nr','$contract_price','$mode_of_proc',1,$app_file_name,$ppmp_file_name,$procurement_file_name,$tech_specs_file_name,$bidding_file_name,$upr_file_name,$other_file_name,'$officer_ids','$personell_ids','$created_by',$preproc_target_date)");


      $this->insert_project_status($project_id, 1, "Project Initialize", date("Y-m-d"));

      if (isset($asa_nr)) {
        $tmp = 0;
        foreach ($asa_nr as $key => $res) {
          $tmp++;
          $asa_nr_value = $asa_nr[$key];
          $asa_date = ${'asa_date_' . $tmp};
          $asa_code = $asa_object[$key];
          $asa_amt = floatval(str_replace(",", "", $asa_amount[$key]));
          $asa_amount[$key];
          $asa_class =  $asa_expense_class[$key];
          $asa_date_final = (!empty($upr_date) && DateTime::createFromFormat('d-m-Y', $asa_date) !== false) ? "'" . date("Y-m-d", strtotime($asa_date)) . "'" : null;

          $this->query("INSERT INTO tbl_project_asa (project_id,asa_nr,asa_date,object_code,asa_amount,expense_class_id,created_by)  values ($project_id,'$asa_nr_value',$asa_date_final, '$asa_code','$asa_amt','$asa_class','$created_by')");
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
      $this->roll_back();
      $result->result = $this->response_error();
      return $result;
    }
  }

  public function update()
  {
    extract($this->escape_data(array_merge($_POST, $_FILES)));
    if (isset($delete_list) && !empty($delete_list)) {
      return $this->delete($delete_list);
    }


    $result = $this->response_obj();
    $errors = array();
    $msg = '';
    $where = '';
    $required_fields = array('abc', 'project_description', 'qty', 'preproc_target_date');

    $where .= isset($epa) ? ", `epa` = '$epa'" : "";
    $where .= isset($implementing_unit) ? ", `implementing_unit_id` = '$implementing_unit'" : "";
    $where .= isset($pabac) ? ", `pabac_id` = '$pabac'" : "";
    $where .= isset($pabac_nr) ? ", `pabac_nr` = '$pabac_nr'" : "";
    $where .= isset($upr_date) ? ", `upr_date` = '$upr_date'" : "";
    $where .= isset($upr_nr) ? ", `upr_nr` = '$upr_nr'" : "";
    $where .= isset($comodity) ? ", `comodity_id` = '$comodity'" : "";
    $where .= isset($program_manager) ? ", `program_manager_id` = '$program_manager'" : "";
    $where .= isset($project_description) ? ", `project_description` = '$project_description'" : "";
    $where .= isset($qty) ? ", `qty` = '$qty'" : "";
    $where .= isset($unit) ? ", `unit_id` = '$unit'" : "";
    $where .= isset($abc) ? ", `abc` = '" . floatval(str_replace(",", "", $abc)) . "'" : "";
    $where .= isset($contract_nr) ? ", `contract_nr` = '$contract_nr'" : "";
    $where .= isset($contract_price) ? ", `contract_price` = '" . floatval(str_replace(",", "", $contract_price)) . "'" : "";
    $where .= isset($residuals) ? ", `residuals` = '" . floatval(str_replace(",", "", $residuals)) . "'" : "";

    if (isset($end_user)) {
      $tmp_end_user = implode(",", $end_user);
      $where .= isset($end_user) ? ", `end_user` = '$tmp_end_user'" : "";
    }

    $where .= isset($mode_of_proc) ? ", `mode_of_proc_id` = '$mode_of_proc'" : "";
    $where .= isset($preproc_target_date) ? ", `preproc_target_date` = " . ((!empty($preproc_target_date) && DateTime::createFromFormat('d-m-Y', $preproc_target_date) !== false) ? "'" . date("Y-m-d", strtotime($preproc_target_date)) . "'"  : "preproc_target_date") : "";
    $where .= isset($preproc_conducted_date) ? ", `preproc_conducted_date` = " . ((!empty($preproc_conducted_date) && DateTime::createFromFormat('d-m-Y', $preproc_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($preproc_conducted_date)) . "'"  : "preproc_conducted_date") : "";
    $where .= isset($prebid_target_date) ? ", `prebid_target_date`= " . ((!empty($prebid_target_date) && DateTime::createFromFormat('d-m-Y', $prebid_target_date) !== false) ? "'" . date("Y-m-d", strtotime($prebid_target_date)) . "'"  : "prebid_target_date") : "";
    $where .= isset($prebid_conducted_date) ? ", `prebid_conducted_date` = " . ((!empty($prebid_conducted_date) && DateTime::createFromFormat('d-m-Y', $prebid_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($prebid_conducted_date)) . "'"  : "prebid_conducted_date") : "";
    $where .= isset($sobe_target_date) ? ", `sobe_target_date` = " . ((!empty($sobe_target_date) && DateTime::createFromFormat('d-m-Y', $sobe_target_date) !== false) ? "'" . date("Y-m-d", strtotime($sobe_target_date)) . "'"  : "sobe_target_date") : "";
    $where .= isset($sobe_conducted_date) ? ", `sobe_conducted_date`= " . ((!empty($sobe_conducted_date) && DateTime::createFromFormat('d-m-Y', $sobe_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($sobe_conducted_date)) . "'"  : "sobe_conducted_date") : "";
    $where .= isset($no_bidder) ? ", `no_bidder` = '$no_bidder'" : "";
    $where .= isset($pq_target_date) ? ", `pq_target_date` = " . ((!empty($pq_target_date) && DateTime::createFromFormat('d-m-Y', $pq_target_date) !== false) ? "'" . date("Y-m-d", strtotime($pq_target_date)) . "'"  : "pq_target_date") : "";
    $where .= isset($pq_conducted_date) ? ", `pq_conducted_date` = " . ((!empty($pq_conducted_date) && DateTime::createFromFormat('d-m-Y', $pq_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($pq_conducted_date)) . "'"  : "pq_conducted_date") : "";
    $where .= isset($pqr_conducted_date) ? ", `pqr_conducted_date`= " . ((!empty($pqr_conducted_date) && DateTime::createFromFormat('d-m-Y', $pqr_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($pqr_conducted_date)) . "'"  : "pqr_conducted_date") : "";
    $where .= isset($noa_conducted_date) ? ", `noa_conducted_date` = " . ((!empty($noa_conducted_date) && DateTime::createFromFormat('d-m-Y', $noa_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($noa_conducted_date)) . "'"  : "noa_conducted_date") : "";
    $where .= isset($ors_conducted_date) ? ", `ors_conducted_date` = " . ((!empty($ors_conducted_date) && DateTime::createFromFormat('d-m-Y', $ors_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($ors_conducted_date)) . "'"  : "ors_conducted_date") : "";
    $where .= isset($ntp_conducted_date) ? ", `ntp_conducted_date` = " . ((!empty($ntp_conducted_date) && DateTime::createFromFormat('d-m-Y', $ntp_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($ntp_conducted_date)) . "'"  : "ntp_conducted_date") : "";
    $where .= isset($ntp_conforme_conducted_date) ? ", `ntp_conforme_conducted_date` = " . ((!empty($ntp_conforme_conducted_date) && DateTime::createFromFormat('d-m-Y', $ntp_conforme_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($ntp_conforme_conducted_date)) . "'"  : "ntp_conforme_conducted_date") : "";
    $where .= isset($ntp_delivery_period) ? ", `delivery_period` = '$ntp_delivery_period'"   : "";
    $where .= isset($ldd_date) ? ", `ldd` = " . ((!empty($ldd_date) && DateTime::createFromFormat('d-m-Y', $ldd_date) !== false) ? "'" . date("Y-m-d", strtotime($ldd_date)) . "'"  : "ldd") : "";
    $where .= isset($delivery_conducted_date) ? ", `delivery_conducted_date` = " . ((!empty($delivery_conducted_date) && DateTime::createFromFormat('d-m-Y', $delivery_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($delivery_conducted_date)) . "'"  : "delivery_conducted_date") : "";
    $where .= isset($inspected_conducted_date) ? ", `inspected_conducted_date`= " . ((!empty($inspected_conducted_date) && DateTime::createFromFormat('d-m-Y', $inspected_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($inspected_conducted_date)) . "'"  : "inspected_conducted_date") : "";
    $where .= isset($accepted_conducted_date) ? ", `accepted_conducted_date`= " . ((!empty($accepted_conducted_date) && DateTime::createFromFormat('d-m-Y', $accepted_conducted_date) !== false) ? "'" . date("Y-m-d", strtotime($accepted_conducted_date)) . "'"  : "accepted_conducted_date") : "";
    $where .= isset($dv) ? ", `dv` = '$dv'" : "";
    $where .= isset($amount) ? ", `amount` = '" . floatval(str_replace(",", "", $amount)) . "'" : "";
    $where .= isset($accepted_date_1) ? ", `accepted_date_1` = " . ((!empty($accepted_date_1) && DateTime::createFromFormat('d-m-Y', $accepted_date_1) !== false) ? "'" . date("Y-m-d", strtotime($accepted_date_1)) . "'"  : "accepted_date_1") : "";
    $where .= isset($retention_percentage) ? ", `retention_percent` = '$retention_percentage'" : "";
    $where .= isset($retention_amount) ? ", `retention_amount` = '$retention_amount'" : "";
    $where .= isset($accepted_date_2) ? ", `accepted_date_2` = " . ((!empty($accepted_date_2) && DateTime::createFromFormat('d-m-Y', $accepted_date_2) !== false) ? "'" . date("Y-m-d", strtotime($accepted_date_2)) . "'"  : "accepted_date_2") : "";
    $where .= isset($ld_amount) ? ", `ld_amount` = '" . floatval(str_replace(",", "", $ld_amount)) . "'" : "";
    $where .= isset($total) ? ", `total` = '" . floatval(str_replace(",", "", $total)) . "'" : "";


    if (isset($assigned_personell)) {
      $personell_ids = implode(",", $assigned_personell);
      $where .= isset($assigned_personell) ? ", `personell_ids` = '$personell_ids'" : "";
    }

    if (isset($assigned_officer)) {
      $officer_ids = implode(",", $assigned_officer);
      $where .= isset($assigned_officer) ? ", `officer_id` = '$officer_ids'" : "";
    }

    // Implementing unit = ASCOM
    // if ($implementing_unit == 2) {
    //   $required_fields[] = 'upr_nr';
    //   $required_fields[] = 'upr_date';
    // }

    // IF EPA Yes
    if (!$epa && !isset($asa_nr)) {
      $msg .= "No ASA Entry!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', array('asa_nr'));
      return $result;
    }

    if (!isset($twg_rank)) {
      $msg .= "No TWG Entry!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', array('twg_rank'));
      $result->status = false;
      return $result;
    }

    # CHANGE STATUS
    if (isset($change_status)) {
      // If status PREPROC PASSED/FAILED


      $new_status_id = (int)$new_status_id;
      if ($new_status_id == 2 || $new_status_id == 3) {
        $required_fields[] = 'preproc_target_date';
        $required_fields[] = 'preproc_conducted_date';

        if ($new_status_id == 2) {
          $prebid_target_date = date('Y-m-d', strtotime($preproc_conducted_date . ' + 7 days'));
          $where .=  ", `prebid_target_date` = '$prebid_target_date'";
        }
      }

      if ($new_status_id == 4) {
        $required_fields[] = 'prebid_conducted_date';
        $sobe_target_date = date('Y-m-d', strtotime($prebid_conducted_date . ' + 8 days'));
        $where .=  ", `sobe_target_date` = '$sobe_target_date'";
      }


      if ($new_status_id == 6) {
        if ($status_id == 5) {
          // $required_fields[] = 'no_bidder';
        } else {
          $required_fields[] = 'no_bidder';
          $required_fields[] = 'sobe_conducted_date';
        }
      }

      if ($new_status_id == 5) {
        if (isset($no_bidder)) {
          $msg .= "Cant Change Status To SOBE PASSED No Bidder Checked!";
          $result->result = $this->response_swal($msg, "System Error", "error");
          $result->items = implode(',', array('no_bidder'));
          return $result;
        }

        if (!isset($bidder_new_rank) && !isset($bidder_rank)) {
          $msg .= "No Supplier Entry!";
          $result->result = $this->response_swal($msg, "System Error", "error");
          $result->items = implode(',', array('bidder_supplier'));
          return $result;
        }

        $required_fields[] = 'sobe_conducted_date';
        $pq_target_date = date('Y-m-d', strtotime($sobe_conducted_date . ' + 5 days'));
        $where .=  ", `pq_target_date` = '$pq_target_date'";
      }

      if ($new_status_id == 7 || $new_status_id == 17) {
        $required_fields[] = 'pq_conducted_date';
        $required_fields[] = 'pq_supplier';
        // $required_fields[] = 'pq_price';
        // $required_fields[] = 'pq_local';
      }

      if ($new_status_id == 8) {
        $required_fields[] = 'pqr_conducted_date';
      }

      if ($new_status_id == 9) {
        $abc = floatval(str_replace(",", "", $abc));
        $contract_price = floatval(str_replace(",", "", $contract_price));
        $residuals = floatval(str_replace(",", "", $residuals));


        if (empty($residuals) || $residuals <= 0) {
          $required_fields[] = 'residuals_display';
        }
        $required_fields[] = 'abc';
        $required_fields[] = 'contract_nr';
        $required_fields[] = 'contract_price';
        $required_fields[] = 'residuals';
        $required_fields[] = 'noa_conducted_date';
      }

      if ($new_status_id == 10) {
        $required_fields[] = 'ors_conducted_date';
      }

      if ($new_status_id == 11) {
        $required_fields[] = 'ntp_conducted_date';
      }

      if ($new_status_id == 12) {
        $required_fields[] = 'ntp_conforme_conducted_date';
        $required_fields[] = 'ntp_delivery_period';
        $required_fields[] = 'ldd_date';
        if (empty($ldd_date)) {
          $required_fields[] = 'ldd_date_display';
        }
      }

      if ($new_status_id == 13) {
        $required_fields[] = 'delivery_conducted_date';
      }

      if ($new_status_id == 15) {
        $amount = floatval(str_replace(",", "", $amount));
        $retention_amount = floatval(str_replace(",", "", $retention_amount));
        $ld_amount = floatval(str_replace(",", "", $ld_amount));
        $total = floatval(str_replace(",", "", $total));

        if (empty($total)) {
          $required_fields[] = 'total_display';
        }
        if (empty($retention_amount)) {
          $required_fields[] = 'retention_display';
        }

        $required_fields[] = 'accepted_conducted_date';
        $required_fields[] = 'amount';
        $required_fields[] = 'accepted_date_1';
        $required_fields[] = 'retention_percentage';
        $required_fields[] = 'retention_amount';
        $required_fields[] = 'accepted_date_2';
        $required_fields[] = 'ld_amount';
        $required_fields[] = 'total';
      }
    } else {
      // If status PREPROC PASSED/FAILED
      $status_id = (int)$status_id;
      if ($status_id >= 2 || $status_id >= 3) {
        $required_fields[] = 'preproc_target_date';
        $required_fields[] = 'preproc_conducted_date';

        if ($status_id >= 2) {
          // $prebid_target_date = date('Y-m-d', strtotime($preproc_conducted_date . ' + 7 days'));
          // $where .=  ", `prebid_target_date` = '$prebid_target_date'";
        }
      }

      if ($status_id >= 4) {
        $required_fields[] = 'prebid_conducted_date';
        // $sobe_target_date = date('Y-m-d', strtotime($prebid_conducted_date . ' + 14 days'));
        // $where .=  ", `sobe_target_date` = '$sobe_target_date'";
      }


      if ($status_id == 6) {
        if ($status_id == 5) {
          // $required_fields[] = 'no_bidder';
          if (!isset($bidder_rank)) {
            $msg .= "No Supplier Entry!";
            $result->result = $this->response_swal($msg, "System Error", "error");
            $result->items = implode(',', array('bidder_supplier'));
            return $result;
          }
        } else {
          $required_fields[] = 'no_bidder';
          $required_fields[] = 'sobe_conducted_date';
        }
      }

      if ($status_id >= 5) {
        // $required_fields[] = 'supplier';
        $required_fields[] = 'sobe_conducted_date';
        // $pq_target_date = date('Y-m-d', strtotime($sobe_conducted_date . ' + 5 days'));
        // $where .=  ", `pq_target_date` = '$pq_target_date'";
      }

      if ($status_id == 7 || $status_id == 17) {
        $required_fields[] = 'pq_conducted_date';
        $required_fields[] = 'pq_supplier';
        // $required_fields[] = 'pq_price';
        // $required_fields[] = 'pq_local';
      }
      if ($status_id == 8) {
        $required_fields[] = 'pqr_conducted_date';
      }

      if ($status_id >= 9) {

        if (empty($residuals)) {
          $required_fields[] = 'residuals_display';
        }

        $required_fields[] = 'abc';
        $required_fields[] = 'contract_nr';
        $required_fields[] = 'contract_price';
        $required_fields[] = 'residuals';
        $required_fields[] = 'noa_conducted_date';
      }

      if ($status_id >= 10) {
        $required_fields[] = 'ors_conducted_date';
      }

      if ($status_id >= 11) {
        $required_fields[] = 'ntp_conducted_date';
      }

      if ($status_id >= 12) {

        $required_fields[] = 'ntp_conforme_conducted_date';
        $required_fields[] = 'ntp_delivery_period';
        $required_fields[] = 'ldd_date';
        if (empty($ldd_date)) {
          $required_fields[] = 'ldd_date_display';
        }
      }

      if ($status_id >= 13) {
        $required_fields[] = 'delivery_conducted_date';
      }

      if ($status_id >= 15) {
        $amount = floatval(str_replace(",", "", $amount));
        $retention_amount = floatval(str_replace(",", "", $retention_amount));
        $ld_amount = floatval(str_replace(",", "", $ld_amount));
        $total = floatval(str_replace(",", "", $total));

        if (empty($total)) {
          $required_fields[] = 'total_display';
        }
        if (empty($retention_amount)) {
          $required_fields[] = 'retention_display';
        }

        $required_fields[] = 'accepted_conducted_date';
        $required_fields[] = 'amount';
        $required_fields[] = 'accepted_date_1';
        $required_fields[] = 'retention_percentage';
        $required_fields[] = 'retention_amount';
        $required_fields[] = 'accepted_date_2';
        $required_fields[] = 'ld_amount';
        $required_fields[] = 'total';
        // if ($status_id == 14 && !isset($twg_rank)) {
        //   $msg .= "No TWG Entry!";
        //   $result->result = $this->response_swal($msg);
        //   $result->items = implode(',', array('twg_rank'));
        //   return $result;
        // }
      }
    }


    foreach ($required_fields as $res) {
      if (empty(${$res})) {
        $errors[] = $res;
      }
    }

    if (empty($end_user)) {
      $errors[] = 'end_user[]';
    }

    if (empty($assigned_personell)) {
      $errors[] = 'assigned_personell[]';
    }

    $required_fields += isset($change_status) ? array('remarks') : array();

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = $this->response_swal($msg, "System Error", "error");
      $result->items = implode(',', $errors);
      return $result;
    }





    $this->start_transaction();
    try {
      $updated_by = $_SESSION['user']->id;
      $updated_date = date('Y-m-d H:i:s');

      $old_data = $this->get_one("SELECT * from tbl_project where id = $id ");

      $app_file_name = $this->upload_file($app_file, "app", (!empty($old_data->app_file) ? $old_data->app_file : "null"));
      $ppmp_file_name = $this->upload_file($ppmp_file, "ppmp", (!empty($old_data->ppmp_file) ? $old_data->ppmp_file : "null"));
      $procurement_file_name = $this->upload_file($procurement_file, "procurement", (!empty($old_data->procurement_file) ? $old_data->procurement_file : "null"));
      $tech_specs_file_name = $this->upload_file($tech_specs_file, "tech", (!empty($old_data->tech_specs_file) ? $old_data->tech_specs_file : "null"));
      $bidding_file_name = $this->upload_file($bidding_file, "bidding", (!empty($old_data->bidding_file) ? $old_data->bidding_file : "null"));
      $upr_file_name = $this->upload_file($upr_file, "upr", (!empty($old_data->upr_file) ? $old_data->upr_file : "null"));
      $other_file_name = $this->upload_file($other_file, "other", (!empty($old_data->other_file) ? $old_data->other_file : "null"));

      $where .= isset($app_file) ? ", `app_file` = '$app_file_name'" : "";
      $where .= isset($ppmp_file) ? ", `ppmp_file` = '$ppmp_file_name'" : "";
      $where .= isset($procurement_file) ? ", `procurement_file` = '$procurement_file_name'" : "";
      $where .= isset($tech_specs_file) ? ", `tech_specs_file` = '$tech_specs_file_name'" : "";
      $where .= isset($bidding_file) ? ", `bidding_file` = '$bidding_file_name'" : "";
      $where .= isset($upr_file) ? ", `upr_file` = '$upr_file_name'" : "";
      $where .= isset($other_file) ? ", `other_file` = '$other_file_name'" : "";

      // echo "UPDATE tbl_project set id = id $where , updated_by = '$updated_by', updated_date = '$updated_date' where id = $id";
      $this->query("UPDATE tbl_project set id = id $where , updated_by = '$updated_by', updated_date = '$updated_date' where id = $id");

      $this->query("DELETE FROM tbl_project_asa where project_id = $id");
      // $this->query("DELETE FROM tbl_project_supplier where project_id = $id");

      if (isset($asa_nr)) {
        $tmp = 0;
        foreach ($asa_nr as $key => $res) {
          $tmp++;
          $asa_nr_value = $asa_nr[$key];
          $asa_date = date("Y-m-d", strtotime(${'asa_date_' . $tmp}));
          $asa_code = $asa_object[$key];
          $asa_amt = floatval(str_replace(",", "", $asa_amount[$key]));
          $asa_class = $asa_expense_class[$key];

          $this->query("INSERT INTO tbl_project_asa (project_id,asa_nr,asa_date,object_code,asa_amount,expense_class_id,created_by)  values ($id,'$asa_nr_value','$asa_date', '$asa_code','$asa_amt','$asa_class','$updated_by')");
        }
      }

      if (isset($change_status) && ($new_status_id == 7 || $new_status_id == 17)) {
        $pq_final_date = date("Y-m-d", strtotime($pq_conducted_date));
        $tmp_supp = $this->get_one("SELECT * from tbl_project_bidder where id = $pq_supplier");
        $this->query("INSERT INTO tbl_project_supplier (project_id,price,local_id,supplier,status_id,created_by,`conducted_date`)  values ('$id','$tmp_supp->price', '$tmp_supp->local_id','$tmp_supp->supplier','$new_status_id','$updated_by','$pq_final_date')");
      }



      if ((isset($bidder_modify)) || (!isset($bidder_modify) && !isset($bidder_new_rank))) {
        $array = 0;
        if (isset($bidder_modify)) {
          foreach ($bidder_modify  as $key => $res) {
            $b_rank = $bidder_rank[$key];
            $b_supplier = $bidder_supplier[$key];
            $b_price = floatval(str_replace(",", "", $bidder_price[$key]));
            $b_local = $bidder_local[$key];
            $this->query("UPDATE tbl_project_bidder set `rank` = '$b_rank',supplier = '$b_supplier',price = '$b_price',`local_id`='$b_local'  where project_id = $id and id = '$key' ");
          }
          $array = implode(",", $bidder_modify);
          $array = !empty($array) ? $array : 0;
        }
        $this->query("DELETE FROM tbl_project_bidder where project_id = $id and id NOT IN (" . $array . ")");
      }

      if (isset($bidder_new_rank)) {
        foreach ($bidder_new_rank  as $key => $res) {
          $b_rank = $bidder_new_rank[$key];
          $b_supplier = $bidder_new_supplier[$key];
          $b_price = floatval(str_replace(",", "", $bidder_new_price[$key]));
          $b_local = $bidder_new_local[$key];
          $this->query("INSERT INTO tbl_project_bidder (project_id,`rank`,supplier,price,`local_id`)  values ('$id','$b_rank', '$b_supplier','$b_price','$b_local')");
        }
      }

      if (isset($twg_rank)) {
        $this->query("DELETE FROM tbl_project_twg where project_id = $id");
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
          $this->query("INSERT INTO tbl_project_twg (project_id,rank_id,first_name,middle_name,last_name,suffix_id,branch_id,serial_no,designation_id,authority)  values ('$id','$rank_id', '$fn','$mn','$ln','$suffix_id','$branch_id','$serial','$designation_id','$auth')");
        }
      }

      if (isset($change_status)) {

        $tbl = array(2 => "preproc_conducted_date", 3 => "preproc_conducted_date", 4 => "prebid_conducted_date", 5 => "sobe_conducted_date", 6 => "sobe_conducted_date", 7 => "pq_conducted_date", 17 => "pq_conducted_date", 8 => "pqr_conducted_date", 9 => "noa_conducted_date", 10 => "ors_conducted_date", 11 => "ntp_conducted_date", 12 => "ntp_conforme_conducted_date",  13 => "delivery_conducted_date", 14 => "inspected_conducted_date", 15 => "accepted_conducted_date");
        $conducted_date = date("Y-m-d");

        if (in_array($new_status_id, array_keys($tbl))) {
          $tmp = ${$tbl[$new_status_id]};
          $conducted_date = ((!empty($tmp) && DateTime::createFromFormat('d-m-Y', $tmp) !== false) ?  date("Y-m-d", strtotime($tmp)) : $tmp);
        }
        $other_details = "null";
        if ($new_status_id == 7 || $new_status_id == 8) {
          $other_details = "'$pq_supplier'";
        }
        if (isset($no_bidder)) {
          $other_details = "'No Bidder'";
          $this->query("UPDATE tbl_project set id = id, no_bidder = 0, updated_by = '$updated_by', updated_date = '$updated_date' where id = $id");
        }


        $this->insert_project_status($id, $new_status_id, $remarks, $conducted_date, $other_details);
        $this->query("UPDATE tbl_project set status_id = $new_status_id where id = $id");
        $this->commit_transaction();
        $result->status = true;
        $result->result = $this->response_swal("Project Changed Status Successfully!", 'Successfull!');
        return $result;
      }

      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("Project Updated Successfully!", 'Successfull!');
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
      $this->query("UPDATE tbl_project set `deleted_flag` = 1 where id = $id");
      $this->commit_transaction();
      $result->status = true;
      $result->result = $this->response_swal("Project Deleted Successfully!", 'Successfull!');
      return $result;
    } catch (mysqli_sql_exception $exception) {
      $this->roll_back();

      $result->result = $this->response_error();
      return $result;
    }
  }
}
