<?php
require('config/functions.php');
require('db/conn.php');
require('class/base.php');
require('class/login.php');
require('class/user.php');
require('class/project.php');
require('class/maintenance.php');


$base = new Base($conn);
$user = new User($conn);
$project = new Project($conn);
$maintenance = new Maintenance($conn);
$result = $base->response_error();

if (!$_POST || !isset($_POST['form'])) {
  echo json_encode($result);
  die;
}

$form = $_POST['form'];

$login = new Login($conn);

switch ($form) {
  case 'login':
    $result = $login->index();
    break;
  case 'user_update':
    $result = $user->update();
    break;
  case 'user_create':
    $result = $user->create();
    break;

  case 'project_create':
    $result = $project->create();
    break;
  case 'project_update':
    $result = $project->update();
    break;

  case 'dropdown_create':
    $result = $maintenance->upsert_dropdown();
    break;
  case 'dropdown_update':
    $result = $maintenance->update();
    break;
  case 'dropdown_delete':
    $result = $maintenance->delete();
    break;
}
echo json_encode($result);
die;
