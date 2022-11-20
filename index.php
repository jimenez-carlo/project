<?php
require('config/functions.php');
require('db/conn.php');
require('class/base.php');
require('class/user.php');
// require('class/dashboard.php');

if (isset($_SESSION['is_logged_in'])) {
  $userObj = new User($conn);
  $user = $userObj->get_user($_SESSION['user']->id);
  switch ($_SESSION['user']->access_id) {

    case 1: // SYSTEM ADMIN
    case 2: // OFFICER
    case 3: // ENLISTED PERSONNEL
      include('layout/admin/header.php');
      include('layout/admin/body.php');
      include('layout/admin/footer.php');
      break;
  }
} else {
  // Landing page here
  include('layout/landing_page/header.php');
  include('layout/landing_page/body.php');
  include('layout/landing_page/footer.php');
}
