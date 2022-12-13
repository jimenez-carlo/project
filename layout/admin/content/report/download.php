<?php 

require('../../../../config/functions.php');
require('../../../../db/conn.php');
require('../../../../class/base.php');

$base = new Base($conn);

$select = "";

if (isset($_GET["col_reference"])) {
	$select .= ", p.id AS `REF #`";
}
if (isset($_GET["col_epa"])) {
	$select .= ", IF(p.epa, 'Yes', 'No') AS EPA";
}
if (isset($_GET["col_implementing_unit"])) {
	$select .= ", iu.name AS `IMPLEMENTING UNIT`";
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
if (isset($_GET["col_upr_date"])) {
	$select .= ", DATE_FORMAT(p.upr_date, '%d-%b-%Y') AS `UPR DATE`";
}
if (isset($_GET["col_commodity"])) {
	$select .= ", cm.name AS `COMODITY`";
}
if (isset($_GET["col_program_manager"])) {
	$select .= ", pm.name AS `PROGRAM MANAGER`";
}
if (isset($_GET["col_asa_nr"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(asa.asa_nr,'')) AS `ASA NR`";
}
if (isset($_GET["col_asa_date"])) {
	$select .= ", GROUP_CONCAT(DISTINCT DATE_FORMAT(asa.asa_date, '%d-%b-%Y')) AS `DATE OF ASA`";
}
if (isset($_GET["col_asa_object_code"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(asa.object_code,'')) AS `ASA OBJECT CODE`";
}
if (isset($_GET["col_asa_amount"])) {
	$select .= ", GROUP_CONCAT(DISTINCT FORMAT(IFNULL(asa.asa_amount,0), 2)) AS `ASA AMOUNT`";
}
if (isset($_GET["col_asa_expense_class"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(expns_clss.name,'')) AS `EXPENSE CLASS`";
}
if (isset($_GET["col_contract_nr"])) {
	$select .= ", p.contract_nr AS `CONTRACT NR`";
}
if (isset($_GET["col_project_description"])) {
	$select .= ", p.project_description AS `PROJECT DESCRIPTION`";
}
if (isset($_GET["col_quantity"])) {
	$select .= ", p.qty AS `QUANTITY`";
}
if (isset($_GET["col_unit"])) {
	$select .= ", unit.name AS `UNIT`";
}
if (isset($_GET["col_abc"])) {
	$select .= ", p.abc AS `ABC`";
}
if (isset($_GET["col_contract_price"])) {
	$select .= ", p.contract_price AS `CONTRACT PRICE`";
}
if (isset($_GET["col_residuals"])) {
	$select .= ", p.residuals AS `RESIDUALS`";
}
if (isset($_GET["col_end_user"])) { 
	$select .= ", GROUP_CONCAT(DISTINCT eu.name) AS `END USER`";
}
if (isset($_GET["col_mode_of_proc"])) {
	$select .= ", mop.name AS `MODE OF PROCUREMENT`";
}
if (isset($_GET["col_preproc_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.preproc_conducted_date, '%d-%b-%Y') AS `PRE-PROC`";
}
if (isset($_GET["col_prebid_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.prebid_conducted_date, '%d-%b-%Y') AS `PRE-BID`";
}
if (isset($_GET["col_sobe_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.sobe_conducted_date, '%d-%b-%Y') AS `SOBE`";
}
if (isset($_GET["col_pq_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.pq_conducted_date, '%d-%b-%Y') AS `PQ`";
}
if (isset($_GET["pqr_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.pqr_conducted_date, '%d-%b-%Y') AS `PQR`";
}
if (isset($_GET["col_noa_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.noa_conducted_date, '%d-%b-%Y') AS `NOA`";
}
if (isset($_GET["col_ors_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ors_conducted_date, '%d-%b-%Y') AS `ORS`";
}
if (isset($_GET["col_ntp_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ntp_conducted_date, '%d-%b-%Y') AS `NTP`";
}
if (isset($_GET["col_ntp_conforme_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.ntp_conforme_conducted_date, '%d-%b-%Y') AS `NTP CONFORME`";
}
if (isset($_GET["col_delivery_period"])) {
	$select .= ", p.delivery_period AS `DELIVERY PERIOD`";
}
if (isset($_GET["col_ldd"])) {
	$select .= ", DATE_FORMAT(p.ldd, '%d-%b-%Y') AS `LDD`";
}
if (isset($_GET["col_delivery_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.delivery_conducted_date, '%d-%b-%Y') AS `DELIVERY`";
}
if (isset($_GET["col_inspected_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.inspected_conducted_date, '%d-%b-%Y') AS `INSPECTED`";
}
if (isset($_GET["col_accepted_conducted_date"])) {
	$select .= ", DATE_FORMAT(p.accepted_conducted_date, '%d-%b-%Y') AS `ACCEPTED`";
}
if (isset($_GET["col_dv"])) {
	$select .= ", CASE WHEN p.dv = 1 THEN 'DV' WHEN p.dv = 0 THEN 'CHECK' ELSE '' END AS `DV/CHECK`";
}
if (isset($_GET["col_dv_amount"])) {
	$select .= ", p.amount AS `DV AMOUNT`";
}
if (isset($_GET["col_dv_date"])) {
	$select .= ", DATE_FORMAT(p.accepted_date_1, '%d-%b-%Y') AS `DV/CHECK DATE`";
}
if (isset($_GET["col_retention_amount"])) {
	$select .= ", FORMAT(IFNULL(p.retention_amount,0), 2) AS `RETENTION AMOUNT`";
}
if (isset($_GET["col_retention_date"])) {
	$select .= ", DATE_FORMAT(p.accepted_date_2, '%d-%b-%Y') AS `RETENTION DATE`";
}
if (isset($_GET["col_ld_amount"])) {
	$select .= ", FORMAT(IFNULL(p.ld_amount,0), 2) AS `LD AMOUNT`";
}
if (isset($_GET["col_total"])) {
	$select .= ", FORMAT(IFNULL(p.total,0), 2) AS `TOTAL`";
}
if (isset($_GET["col_supplier"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(ps.supplier, '') ORDER BY ps.project_id SEPARATOR '\n') AS `SUPPLIER`";
}
if (isset($_GET["col_bid_price"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(FORMAT(ps.price, 2), '') ORDER BY ps.project_id SEPARATOR '\n') AS `BID PRICE`";
}
if (isset($_GET["col_lc_local"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(lcl.name, '')  SEPARATOR '\n') AS `FOREIGN/LOCAL`";
}

//if (isset($_GET["col_supplier"])) {
//	$select .= ", ps.supplier AS `SUPPLIER`";
//}
//if (isset($_GET["col_bid_price"])) {
//	$select .= ", FORMAT(IFNULL(ps.price,0), 2) AS `BID PRICE`";
//}
//if (isset($_GET["col_lc_local"])) {
//	$select .= ", lcl.name AS `FOREIGN/LOCAL`";
//}

if (isset($_GET["col_twg"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(rnk.name,''), IF(rnk.name IS NOT NULL, ', ', ''), IFNULL(twg.last_name,''), IF(twg.last_name IS NOT NULL, ', ', ''), IFNULL(twg.first_name,''), ' ', IFNULL(twg.middle_name, ''), ' ', IFNULL(IF(twg.suffix_id != 1, sfx.name, NULL), ''), IF(twg.suffix_id != 1, ', ', ''), IFNULL(branch.name, ''), IF(branch.name IS NOT NULL, ', ', ''), IFNULL(designation.name, ''), IF(designation.name IS NOT NULL, ', ', ''), IFNULL(twg.serial_no, '') ORDER BY twg.id SEPARATOR '\n') AS `TWG`";
}
if (isset($_GET["col_authority"])) {
	$select .= ", GROUP_CONCAT(DISTINCT IFNULL(twg.authority,'N/A') ORDER BY twg.id SEPARATOR '\n') AS `AUTHORITY`";
}
if (isset($_GET["col_status"])) {
	$select .= ", s.name AS `STATUS`";
}
if (isset($_GET["col_gaa"])) {
	$select .= ", p.gaa AS `GAA`";
}

$where = [];

if (isset($_GET['project_status'])) {
	$status_ids = implode(",", $_GET['project_status']);
	$where[] = "p.status_id IN($status_ids)";
}

if (isset($_GET['epa'])) {
	$epa_ids = implode(",", $_GET['epa']);
	$where[] = "p.epa IN($epa_ids)";
}

if (isset($_GET['implementing_unit'])) {
	$implementing_unit_ids = implode(",", $_GET['implementing_unit']);
	$where[] = "p.implementing_unit_id IN($implementing_unit_ids)";
}

if (isset($_GET['program_manager'])) {
	$program_manager_ids = implode(",", $_GET['program_manager']);
	$where[] = "p.program_manager_id IN($program_manager_ids)";
}

if (isset($_GET['pabac'])) {
	$pabac_ids = implode(",", $_GET['pabac']);
	$where[] = "p.pabac_id IN($pabac_ids)";
}

if (isset($_GET['end_user'])) {
	$where_end_user = [];
	foreach ($_GET['end_user'] as $key => $value) {
		$where_end_user[] = "FIND_IN_SET($value, 'p.end_user')";
	}
	$where[] = "(".implode(" OR ", $where_end_user).")";
}

if (isset($_GET['commodity'])) {
	$commodity_ids = implode(",", $_GET['commodity']);
	$where[] = "p.comodity_id IN($commodity_ids)";
}

if (isset($_GET['mode_of_proc'])) {
	$mode_of_proc_ids = implode(",", $_GET['mode_of_proc']);
	$where[] = "p.mode_of_proc_id IN($mode_of_proc_ids)";
}

$filter = "";
if (count($where) > 0) {
	$filter .= "AND (".implode(" AND ", $where).")";
}

$is_admin = "";
if ($_SESSION['user']->access_id == "2") {
	$is_admin	= " AND find_in_set({$_SESSION['user']->id}, p.personell_ids) ";
}

$select = substr($select, 2); 

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
		tbl_end_user eu ON find_in_set(eu.id, p.end_user)
			LEFT JOIN 
		tbl_unit unit ON unit.id = p.unit_id
			LEFT JOIN
		tbl_comodity cm ON cm.id = p.comodity_id
			LEFT JOIN
		tbl_mode_of_proc mop ON mop.id = p.mode_of_proc_id
			LEFT JOIN
		tbl_program_manager pm ON pm.id = p.program_manager_id
			LEFT JOIN
		tbl_project_asa asa ON asa.project_id = p.id
			LEFT JOIN
		tbl_expense_class expns_clss ON expns_clss.id = asa.expense_class_id
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
		(
      SELECT ps.project_id, ps.price, ps.supplier, ps.local_id, ps.rank, ps.status_id
			FROM tbl_project_supplier ps
      WHERE ps.status_id = '17'
    ) AS ps ON ps.project_id = p.id
			LEFT JOIN
		tbl_rank sup_rnk ON sup_rnk.id = ps.rank
			LEFT JOIN
		tbl_local lcl ON lcl.id = ps.local_id
			LEFT JOIN
		tbl_users_info c ON c.id = p.created_by
	WHERE
			p.deleted_flag = 0 {$is_admin} {$filter}
	GROUP BY p.id
SQL;

$projects = $base->get_list($qry);

$columns = [];
if ($_GET['type'] == "download") {
	header("Content-type: application/csv");
	header("Content-Disposition: attachment; filename=Project Report ".date('Y-m-d H:i:s').".csv");

	$fp = fopen('php://output', 'w');
	fputcsv($fp, $columns);
	if (count($projects) > 0) {
		$columns = array_keys($projects[0]);
			foreach ($projects as $project) {
				fputcsv($fp, $project);
			}
	}
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, []);
	fputcsv($fp, [ null, null, null, "Generated By:", $_SESSION['user']->first_name." ".$_SESSION['user']->middle_name." ".$_SESSION['user']->last_name, null, "Generated Date:", date('d-M-Y H:i:s'), null, "Noted By:"]);

	fclose($fp);
	exit();
}
?>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php if($_GET['type'] == "pdf"): ?>
	<?php if (count($projects) > 0): ?>
		<?php $columns = array_keys($projects[0]); ?>
		<table id="d-table" class="table table-bordered table-sm">
			<thead>
				<tr>
					<?php foreach($columns AS $column): ?>
						<th scope="col"><?= $column ?></th>
					<?php endforeach; ?>
				</tr>
			</thead>
			<tbody>
					<?php foreach($projects AS $project): ?>
						<tr>
							<?php foreach($project AS $key => $data): ?>
								<td <?= ($key == "id") ? 'scope="row"' : '' ?> >
									<?php if (in_array($key,["TWG", "Supplier"])): ?>
										<?php $twg_and_supplier = explode("\n", $data); ?>
										<?php if(count($twg_and_supplier) > 0): ?>
											<ul style="list-style-type: none; padding-left: 0;">
												<?php foreach($twg_and_supplier AS $x): ?>
												<li><?= $x ?></li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									<?php else: ?> 
										<?= $data ?>
									<?php endif; ?>
								</td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>
<br>
<br>
<br>
<br>
<br>
<div class="row">
	<div class="col-sm-2 offset-sm-2">
		Generated By: <?= $_SESSION['user']->first_name." ".$_SESSION['user']->middle_name." ".$_SESSION['user']->last_name ?>
	</div>
	<div class="col-sm-2">
		Generated Date: <?= date('d-M-Y H:i:s') ?>
	</div>
	<div class="col-sm-3">
		Noted By: _________________________
	</div>
</div>
<br>
<br>
<br>
<script>
	window.print()
</script>
<?php endif; ?>
