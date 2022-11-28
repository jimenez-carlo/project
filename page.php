<?php
require_once('config/functions.php');
require_once('db/conn.php');
require_once('class/base.php');

if (!$_GET || !isset($_GET['page'])) {
  echo get_contents('../layout/not_found.php');
  die;
}

$page = $_GET['page'];
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$access = 1;
$pages = get_access($access);

$base = new Base($conn);
if (in_array($page, $pages)) {
  $data = array();
  $data['base_url'] = BASE_URL;
  switch ($page) {
    case 'admin/dashboard':
    case 'admin/home':
      $data['data'] = $dashboard->get_data();
      break;
    case 'admin/user/list':
      $data['list'] = $base->get_list("Select 
      concat(ui.last_name, ', ', ui.first_name,' ', LEFT(ui.middle_name, 1), '[#',ui.id,']') as user_full_name,
      concat(v.last_name, ', ', v.first_name,' ', LEFT(v.middle_name, 1), '[#',v.id,']') as verifier_full_name,
      concat(c.last_name, ', ', c.first_name,' ', LEFT(c.middle_name, 1), '[#',c.id,']') as creator_full_name,
      u.serial_no,u.id,a.name as `access`,b.name as `branch`,s.name as `status`,r.name as `rank`,cl.name as `classification`,u.created_date,u.updated_date,u.verified_flag
      from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_branch b on b.id = u.branch_id left join tbl_rank r on r.id = u.rank_id left join tbl_classification cl on cl.id = u.classification_id inner join tbl_users_status s on s.id = u.status_id
      left join tbl_users_info v on v.id = u.approved_by
      left join tbl_users_info c on c.id = u.created_by where u.deleted_flag = 0");
      break;
    case 'admin/user/create':
      $data['default'] = $base->set_default_data();
      break;
    case 'admin/user/edit':
      $data['default'] = $base->set_default_data();
      $data['default_data'] = $base->get_one("Select ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id where u.id = $id");
      break;

    case 'admin/project/create':
      $data['default'] = $base->set_default_data();
      $data['default_id'] = $base->get_one("SELECT if(max(b.id) is null, 1, max(b.id) + 1) as `res` from tbl_users b where  deleted_flag = 0 limit 1")->res;
      break;

    case 'admin/project/my_list':
      $data['list'] = $base->get_list("select concat(o.last_name, ', ', o.first_name,' ', LEFT(o.middle_name, 1), '[#',o.id,']') as officer_full_name, p.id,s.name as `status`,ui.name as `implementing_unit`,cm.name as`comodity`,pm.name as `program_manager`,p.created_date,p.updated_date from 
tbl_project p  inner join 
tbl_implementing_unit ui on ui.id = p.implementing_unit_id inner join 
tbl_comodity cm on cm.id = p.comodity_id inner join 
tbl_program_manager pm on pm.id = p.program_manager_id inner join 
tbl_project_status s on s.id = p.status_id left join 
tbl_users_info o on o.id = p.officer_id left join 
tbl_users_info c on c.id = p.created_by where p.deleted_flag = 0 and (p.created_by = $id OR  find_in_set('$id',personell_ids) <> 0)");
      break;
    case 'admin/project/list':
      $data['list'] = $base->get_list("select concat(o.last_name, ', ', o.first_name,' ', LEFT(o.middle_name, 1), '[#',o.id,']') as officer_full_name, p.id,s.name as `status`,ui.name as `implementing_unit`,cm.name as`comodity`,pm.name as `program_manager`,p.created_date,p.updated_date from 
tbl_project p  inner join 
tbl_implementing_unit ui on ui.id = p.implementing_unit_id inner join 
tbl_comodity cm on cm.id = p.comodity_id inner join 
tbl_program_manager pm on pm.id = p.program_manager_id inner join 
tbl_project_status s on s.id = p.status_id left join 
tbl_users_info o on o.id = p.officer_id left join 
tbl_users_info c on c.id = p.created_by where p.deleted_flag = 0");
      break;

    case 'admin/project/edit':
    case 'admin/project/view':
      $data['default'] = $base->set_default_data();
      $data['default_data'] = $base->get_one("Select p.* from tbl_project p where p.id = $id");
      $data['suppliers'] = $base->get_list("Select p.* from tbl_project_supplier p where p.project_id = $id");
      $data['twgs'] = $base->get_list("Select p.* from tbl_project_twg p where p.project_id = $id");
      $data['asas'] = $base->get_list("Select p.* from tbl_project_asa p where p.project_id = $id");
      $data['chronology'] = $base->get_list("Select p.*,concat(o.first_name, ' ', o.last_name) as full_name,s.name from tbl_project_history p inner join tbl_users_info o on o.id = p.created_by inner join tbl_project_status s on s.id = p.project_status_id where p.project_id = $id order by p.created_date desc");
      $get_next = $base->get_one("Select next_ids from tbl_project_status p where p.id = " . $data['default_data']->status_id);
      $array = array_map('intval', explode(',', $get_next->next_ids));
      $array = implode("','", $array);
      $data['new_status'] = $base->get_list("SELECT id,name FROM tbl_project_status WHERE id IN ('" . $array . "')");
      $data['bread_crumb'] = $base->breadcrumb($data['default_data']->status_id);
      break;

    case 'admin/profile':
      $tmp = $members->get_resident($id);
      $data['default_data'] = $members->set_default_data();
      $data['data'] = $tmp;
      break;
  }
  echo get_contents(page_url($page), $data);
  die;
} else {
  echo get_contents(page_url('denied'));
  die;
}
