<?php 

require('../../../../config/functions.php');
require('../../../../db/conn.php');
require('../../../../class/base.php');

$base = new Base($conn);

$is_admin = "";
if ($_SESSION['user']->access_id != "1") {
	$is_admin  = "AND p.created_by = ".$_SESSION['user']->id;
}

$select = "p.id";
if (isset($_GET["col_status"])) {
	$select .= ", s.name AS `Status`";
}
if (isset($_GET["col_epa"])) {
	$select .= ", IF(p.epa, 'Yes', 'No') AS EPA";
}
if (isset($_GET["col_emplementing_unit"])) {
	$select .= ", iu.name AS `Implementing Unit`";
}
if (isset($_GET["col_pabac"])) {
	$select .= ", pabac.name AS `PABAC`";
}
if (isset($_GET["col_pabac_nr"])) {
	$select .= ", p.pabac_nr AS `PABAC NR`";
}
if (isset($_GET["col_upr_nr"])) {
	$select .= ", p.upr_nr AS `UPR NR`";
}
if (isset($_GET["col_commodity"])) {
	$select .= ", cm.name AS `Comodity`";
}
if (isset($_GET["col_program_manager"])) {
	$select .= ", pm.name AS `Program Manager`";
}
if (isset($_GET["col_project_description"])) {
	$select .= ", p.project_description AS `Project Description`";
}
if (isset($_GET["col_quantity"])) {
	$select .= ", p.qty AS `Quantity`";
}
if (isset($_GET["col_unit"])) {
	$select .= ", unit.name AS `Unit`";
}
if (isset($_GET["col_abc"])) {
	$select .= ", p.abc AS `ABC`";
}
if (isset($_GET["col_contract_nr"])) {
	$select .= ", p.contract_nr AS `Contract NR`";
}
if (isset($_GET["col_contract_price"])) {
	$select .= ", p.contract_price AS `Contract Price`";
}
if (isset($_GET["col_residuals"])) {
	$select .= ", p.residuals AS `Residuals`";
}
if (isset($_GET["col_end_user"])) {
	$select .= ", p.end_user AS `End User`";
}
if (isset($_GET["col_mode_of_proc"])) {
	$select .= ", mop.name AS `Mode Of Proc`";
}
if (isset($_GET["col_preproc_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.preproc_conducted_date, '%d-%b-%Y') AS `Preproc Conducted Date`";
}
if (isset($_GET["col_prebid_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.prebid_conducted_date, '%d-%b-%Y') AS `Prebid Conducted Date`";
}
if (isset($_GET["col_sobe_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.sobe_conducted_date, '%d-%b-%Y') AS `Sobe Conducted Date`";
}
if (isset($_GET["col_no_bidder"])) {
	$select .= ", IF(p.no_bidder, 'Yes', 'No') AS `No Bidder`";
}
if (isset($_GET["col_pq_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.pq_conducted_date, '%d-%b-%Y') AS `PQ Conducted Date`";
}
if (isset($_GET["pqr_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.pqr_conducted_date, '%d-%b-%Y') AS `PQR Conducted Date`";
}
if (isset($_GET["col_noa_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.noa_conducted_date, '%d-%b-%Y') AS `NOA Conducted Date`";
}
if (isset($_GET["col_ors_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ors_conducted_date, '%d-%b-%Y') AS `ORS Conducted Date`";
}
if (isset($_GET["col_ntp_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ntp_conducted_date, '%d-%b-%Y') AS `NTO Conducted Date`";
}
if (isset($_GET["col_ntp_conforme_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ntp_conforme_conducted_date, '%d-%b-%Y') AS `NTP Conforme Conducted Date`";
}
if (isset($_GET["col_delivery_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.delivery_conducted_date, '%d-%b-%Y') AS `Delivery Conducted Date`";
}
if (isset($_GET["col_ldd"])) {
	$select .= ", DATE_FORMAT(p.ldd, '%d-%b-%Y') AS `LDD`";
}
if (isset($_GET["col_inspected_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.inspected_conducted_date, '%d-%b-%Y') AS `Inspected Conducted Date`";
}
if (isset($_GET["col_accepted_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.accepted_conducted_date, '%d-%b-%Y') AS `Accepted Conducted Date`";
}
if (isset($_GET["col_dv"])) {
	$select .= ", p.dv AS `DV`";
}
if (isset($_GET["col_amount"])) {
	$select .= ", p.amount AS `Amount`";
}
if (isset($_GET["col_retention_percent"])) {
	$select .= ", p.retention_percent AS `Retention Percent`";
}
if (isset($_GET["col_retention_amount"])) {
	$select .= ", p.retention_amount AS `Retention Amount`";
}
if (isset($_GET["col_ld_amount"])) {
	$select .= ", p.ld_amount AS `LD Amount`";
}
if (isset($_GET["col_total"])) {
	$select .= ", p.total AS `Total`";
}
if (isset($_GET["col_twg"])) {
	$select .= ", GROUP_CONCAT(IFNULL(rnk.name,''), IF(rnk.name IS NOT NULL, ', ', ''), IFNULL(twg.last_name,''), IF(twg.last_name IS NOT NULL, ', ', ''), IFNULL(twg.first_name,''), ' ', IFNULL(twg.middle_name, ''), ' ', IFNULL(IF(twg.suffix_id != 1, sfx.name, NULL), ''), IF(twg.suffix_id != 1, ', ', ''), IFNULL(branch.name, ''), IF(branch.name IS NOT NULL, ', ', ''), IFNULL(designation.name, ''), IF(designation.name IS NOT NULL, ', ', ''), IFNULL(twg.authority,''), IF(twg.authority IS NOT NULL, ', ', ''), IFNULL(twg.serial_no, '') SEPARATOR '\n') AS `TWG`";
}
if (isset($_GET["col_supplier"])) {
	$select .= ", GROUP_CONCAT(IFNULL(sup_rnk.name, ''), IF(sup_rnk.name IS NOT NULL, ', ', ''), IFNULL(ps.supplier,''), IF(ps.supplier IS NOT NULL, ', ', ''), IFNULL(ps.price, ''), IF(ps.price IS NOT NULL, ', ', ''), IFNULL(lcl.name, ''), IF(lcl.name IS NOT NULL, ', ', ''), IFNULL(ss.name, '') SEPARATOR '\n') AS `Supplier`";
}
if (isset($_GET["col_created_by"])) {
	$select .= ", CONCAT(IFNULL(o.first_name, ''), ' ', IFNULL(o.middle_name, ''), ' ', IFNULL(o.last_name, '')) AS `Created By`";
}
if (isset($_GET["col_created_date"])) {
	$select .= ", DATE_FORMAT(p.created_date, '%d-%b-%Y %H:%i:%s') AS `Created Date`";
}
if (isset($_GET["col_updated_date"])) {
	$select .= ",DATE_FORMAT(p.updated_date, '%d-%b-%Y %H:%i:%s') AS `Updated Date`";
}

$where = [];

if (isset($_GET['project_status'])) {
	$status_ids = implode(",", $_GET['project_status']);
	$where[] = "p.status_id IN($status_ids)";
}

if (isset($_GET['commodity'])) {
	$commodity_ids = implode(",", $_GET['commodity']);
	$where[] = "p.comodity_id IN($commodity_ids)";
}

if (isset($_GET['end_user'])) {
	$where_end_user = [];
	foreach ($_GET['end_user'] as $key => $value) {
		$where_end_user[] = "FIND_IN_SET($value, 'p.end_user')";
	}
	$where[] = "(".implode(" OR ", $where_end_user).")";
}

if (isset($_GET['unit'])) {
	$unit_ids = implode(",", $_GET['unit']);
	$where[] = "p.unit_id IN($unit_ids)";
}

if (isset($_GET['mode_of_proc'])) {
	$mode_of_proc_ids = implode(",", $_GET['mode_of_proc']);
	$where[] = "p.mode_of_proc_id IN($mode_of_proc_ids)";
}

if (isset($_GET['epa'])) {
	$epa_ids = implode(",", $_GET['epa']);
	$where[] = "p.epa IN($epa_ids)";
}

if (isset($_GET['pabac'])) {
	$pabac_ids = implode(",", $_GET['pabac']);
	$where[] = "p.pabac_id IN($pabac_ids)";
}

if (isset($_GET['program_manager'])) {
	$program_manager_ids = implode(",", $_GET['program_manager']);
	$where[] = "p.program_manager_id IN($program_manager_ids)";
}

if (isset($_GET['implementing_unit'])) {
	$implementing_unit_ids = implode(",", $_GET['implementing_unit']);
	$where[] = "p.implementing_unit_id IN($implementing_unit_ids)";
}

$filter = "";
if (count($where) > 0) {
	$filter .= "OR (".implode(" AND ", $where).")";
}

$date_range_created = "";
if (isset($_GET['created_date'])) {
	$created_dates = explode(" - ", $_GET['created_date']);
	$created_date_from =  date("Y-m-d", strtotime($created_dates[0]));
	$created_date_to = date("Y-m-d", strtotime($created_dates[1]));
	$date_range_created .= "AND (p.created_date > '$created_date_from 00:00:00' AND p.created_date < '$created_date_to 23:59:59')";
}

$qry = <<<SQL
	SELECT 
		{$select}
	FROM
	  tbl_project p
	    LEFT JOIN
	  tbl_implementing_unit iu ON iu.id = p.implementing_unit_id
	    LEFT JOIN
		tbl_pabac pabac ON pabac.id = p.pabac_id
	    LEFT JOIN
		tbl_unit unit ON unit.id = p.unit_id
			LEFT JOIN
	  tbl_comodity cm ON cm.id = p.comodity_id
	    LEFT JOIN
		tbl_mode_of_proc mop ON mop.id = p.mode_of_proc_id
			LEFT JOIN
	  tbl_program_manager pm ON pm.id = p.program_manager_id
	    LEFT JOIN
	  tbl_project_status s ON s.id = p.status_id
	    LEFT JOIN
	  tbl_users_info o ON o.id = p.officer_id
			LEFT JOIN
		tbl_project_twg twg ON twg.project_id = p.id
			LEFT JOIN
		tbl_rank rnk ON rnk.id = twg.rank_id
			LEFT JOIN
		tbl_suffix sfx ON sfx.id = twg.suffix_id
			LEFT JOIN
		tbl_branch branch ON branch.id = twg.branch_id
			LEFT JOIN
		tbl_designation designation ON designation.id = twg.designation_id
	    LEFT JOIN
		tbl_project_supplier ps ON ps.project_id = p.id
			LEFT JOIN
		tbl_rank sup_rnk ON sup_rnk.id = ps.rank
			LEFT JOIN
		tbl_local lcl ON lcl.id = ps.local_id
			LEFT JOIN
		tbl_supplier_status ss ON ss.id = ps.status_id
			LEFT JOIN
	  tbl_users_info c ON c.id = p.created_by
	WHERE
	    p.deleted_flag = 0 {$is_admin} {$date_range_created} {$filter}
	GROUP BY p.id
SQL;

$projects = $base->get_list($qry);

if (count($projects) > 0) {
	header("Content-type: application/csv");
	header("Content-Disposition: attachment; filename=Project Report ".date('Y-m-d H:i:s').".csv");

	$fp =fopen('php://output', 'w');
	fputcsv($fp, array_keys($projects[0]));
	foreach ($projects as $project) {
		fputcsv($fp, $project);
	}
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, [ null, null, null, "Generated By:", $_SESSION['user']->first_name." ".$_SESSION['user']->middle_name." ".$_SESSION['user']->last_name, null, "Generated Date:", date('d-M-Y H:i:s'), null, "Noted By:"]);

	fclose($fp);
}
exit();
