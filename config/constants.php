<?php

date_default_timezone_set('Asia/Manila');

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'pms_db');

define('SYSTEM_NAME', 'Project Management System');
define('SYSTEM_NAME_SHORT', 'PMS');
define('MAIN_SKIN', 'skin-green');
define('SPINNER', '<i class="fa fa-spinner fa-pulse fa-fw"></i>');
define('COPYRIGHT_YEAR', 2022);
define('VERSION_NO', 0.1);

define('ROUTES', $routes);
define('BASE_URL', 'http://localhost/project/');
define('ADMIN_ACCESS', array_keys($routes));
define('API_CODE', ''); //
define('API_PASSWORD', ''); //
