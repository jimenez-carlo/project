<?php
class Dashboard extends Base
{
  private $conn;
  public function __construct($db)
  {
    parent::__construct($db);
    $this->conn = $db;
    $this->is_admin = $_SESSION['user']->access_id !== "1" ? " AND  created_by = {$_SESSION['user']->id} " : "";
  }

  public function get_data()
  {
    $data = new stdClass();
    $data->for_preproc = $this->get_one("select count(*) as count from tbl_project where status_id = 1 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->preproc_passed = $this->get_one("select count(*) as count from tbl_project where status_id = 2 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->preproc_failed = $this->get_one("select count(*) as count from tbl_project where status_id = 3 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->prebid = $this->get_one("select count(*) as count from tbl_project where status_id = 4 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->sobe_passed = $this->get_one("select count(*) as count from tbl_project where status_id = 5 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->sobe_failed = $this->get_one("select count(*) as count from tbl_project where status_id = 6 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->pq = $this->get_one("select count(*) as count from tbl_project where status_id = 7 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->pqr = $this->get_one("select count(*) as count from tbl_project where status_id = 8 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->noa = $this->get_one("select count(*) as count from tbl_project where status_id = 9 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->ors = $this->get_one("select count(*) as count from tbl_project where status_id = 10 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->ntp = $this->get_one("select count(*) as count from tbl_project where status_id = 11 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->ntp_conforme = $this->get_one("select count(*) as count from tbl_project where status_id = 12 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->delivery = $this->get_one("select count(*) as count from tbl_project where status_id = 13 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->inspected = $this->get_one("select count(*) as count from tbl_project where status_id = 14 and deleted_flag = 0 {$this->is_admin}")->count;
    $data->accepted = $this->get_one("select count(*) as count from tbl_project where status_id = 15 and deleted_flag = 0 {$this->is_admin}")->count;

    return $data;
  }
}
