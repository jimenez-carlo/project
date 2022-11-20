<?php

$admin_route    = 'layout/admin/content';
$barangay_route = 'layout/barangay/content';
$resident_route = 'layout/resident/content';
$landing_route = 'layout/landing_page/content';

$routes = array(
  # Admin
  'admin/home' => 'layout/admin/dashboard.php',
  'admin/my_projects' => $admin_route . '/profile.php',
  'admin/project_updates' => $admin_route . '/project_updates.php',
  'admin/reports' => $admin_route . '/project_updates.php',

  'admin/user/list' => $admin_route . '/user/list.php',
  'admin/user/create' => $admin_route . '/user/create.php',
  'admin/user/edit' => $admin_route . '/user/edit.php',

  'admin/project/my_list' => $admin_route . '/project/my_list.php',
  'admin/project/list' => $admin_route . '/project/list.php',
  'admin/project/create' => $admin_route . '/project/create.php',
  'admin/project/edit' => $admin_route . '/project/edit.php',
  'test' => 'admin/not_found.php',



  #Landing Page
  'landing_page/about_us' => $landing_route . '/about_us.php',
  'landing_page/gallery' => $landing_route . '/gallery.php',
  'landing_page/announcements' => $landing_route . '/announcements.php',
  'landing_page/announcements/view' => $landing_route . '/view.php',
  'landing_page/register' => $landing_route . '/register.php',

  '/' => 'layout/not_found.php'
);
