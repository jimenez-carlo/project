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
if (isset($_GET["status"])) {
	$select .= ", s.name AS `Status`";
}
if (isset($_GET["epa"])) {
	$select .= ", IF(p.epa, 'Yes', 'No') AS EPA";
}
if (isset($_GET["emplementing_unit"])) {
	$select .= ", iu.name AS `Implementing Unit`";
}
if (isset($_GET["pabac"])) {
	$select .= ", pabac.name AS `PABAC`";
}
if (isset($_GET["pabac_nr"])) {
	$select .= ", p.pabac_nr AS `PABAC NR`";
}
if (isset($_GET["upr_nr"])) {
	$select .= ", p.upr_nr AS `UPR NR`";
}
if (isset($_GET["commodity"])) {
	$select .= ", cm.name AS `Comodity`";
}
if (isset($_GET["program_manager"])) {
	$select .= ", pm.name AS `Program Manager`";
}
if (isset($_GET["project_description"])) {
	$select .= ", p.project_description AS `Project Description`";
}
if (isset($_GET["quantity"])) {
	$select .= ", p.qty AS `Quantity`";
}
if (isset($_GET["unit"])) {
	$select .= ", unit.name AS `Unit`";
}
if (isset($_GET["abc"])) {
	$select .= ", p.abc AS `ABC`";
}
if (isset($_GET["contract_nr"])) {
	$select .= ", p.contract_nr AS `Contract NR`";
}
if (isset($_GET["contract_price"])) {
	$select .= ", p.contract_price AS `Contract Price`";
}
if (isset($_GET["residuals"])) {
	$select .= ", p.residuals AS `Residuals`";
}
if (isset($_GET["end_user"])) {
	$select .= ", p.end_user AS `End User`";
}
if (isset($_GET["mode_of_proc"])) {
	$select .= ", mop.name AS `Mode Of Proc`";
}
if (isset($_GET["preproc_conducted_date"])) {
	$select .= ", p.preproc_conducted_date AS `Preproc Conducted Date`";
}
if (isset($_GET["prebid_conducted_date"])) {
	$select .= ", p.prebid_conducted_date AS `Prebid Conducted Date`";
}
if (isset($_GET["sobe_conducted_date"])) {
	$select .= ", p.sobe_conducted_date AS `Sobe Conducted Date`";
}
if (isset($_GET["no_bidder"])) {
	$select .= ", IF(p.no_bidder, 'Yes', 'No') AS `No Bidder`";
}
if (isset($_GET["pq_conducted_date"])) {
	$select .= ", p.pq_conducted_date AS `PQ Conducted Date`";
}
if (isset($_GET["pqr_conducted_date"])) {
	$select .= ", p.pqr_conducted_date AS `PQR Conducted Date`";
}
if (isset($_GET["noa_conducted_date"])) {
	$select .= ", p.noa_conducted_date AS `NOA Conducted Date`";
}
if (isset($_GET["ors_conducted_date"])) {
	$select .= ", p.ors_conducted_date AS `ORS Conducted Date`";
}
if (isset($_GET["ntp_conducted_date"])) {
	$select .= ", p.ntp_conducted_date AS `NTO Conducted Date`";
}
if (isset($_GET["ntp_conforme_conducted_date"])) {
	$select .= ", p.ntp_conforme_conducted_date AS `NTP Conforme Conducted Date`";
}
if (isset($_GET["delivery_conducted_date"])) {
	$select .= ", p.delivery_conducted_date AS `Delivery Conducted Date`";
}
if (isset($_GET["ldd"])) {
	$select .= ", p.ldd AS `LDD`";
}
if (isset($_GET["inspected_conducted_date"])) {
	$select .= ", p.inspected_conducted_date AS `Inspected Conducted Date`";
}
if (isset($_GET["accepted_conducted_date"])) {
	$select .= ", p.accepted_conducted_date AS `Accepted Conducted Date`";
}
if (isset($_GET["dv"])) {
	$select .= ", p.dv AS `DV`";
}
if (isset($_GET["amount"])) {
	$select .= ", p.amount AS `Amount`";
}
if (isset($_GET["retention_percent"])) {
	$select .= ", p.retention_percent AS `Retention Percent`";
}
if (isset($_GET["retention_amount"])) {
	$select .= ", p.retention_amount AS `Retention Amount`";
}
if (isset($_GET["ld_amount"])) {
	$select .= ", p.ld_amount AS `LD Amount`";
}
if (isset($_GET["total"])) {
	$select .= ", p.total AS `Total`";
}
if (isset($_GET["twg"])) {
	$select .= ", GROUP_CONCAT(twg.serial_no ) AS `TWG`";
}
if (isset($_GET["created_by"])) {
	$select .= ", CONCAT(IFNULL(o.first_name, ''), ' ', IFNULL(o.middle_name, ''), ' ', IFNULL(o.last_name, '')) AS `Created By`";
}
if (isset($_GET["created_date"])) {
	$select .= ", p.created_date AS `Created Date`";
}
if (isset($_GET["updated_date"])) {
	$select .= ", p.updated_date AS `Updated Date`";
}

$date_range_created = "";
if (isset($_GET['date_created_from']) && isset($_GET['date_created_to'])) {
	$date_range_created .= "AND (p.created_date > '".$_GET['date_created_from']."' AND p.created_date < '".$_GET['date_created_to']."')";
}

$projects = $base->get_list("
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
	  tbl_users_info c ON c.id = p.created_by
	WHERE
	    p.deleted_flag = 0 {$is_admin} {$date_range_created}
	GROUP BY p.id
");

if (count($projects) > 0) {
	header("Content-type: application/csv");
	header("Content-Disposition: attachment; filename=Project Report ".date('Y-m-d H:i:s').".csv");

	$fp =fopen('php://output', 'w');
	fputcsv($fp, array_keys($projects[0]));
	foreach ($projects as $project) {
		fputcsv($fp, $project);
	}

	fclose($fp);
}
exit();
