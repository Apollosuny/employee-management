<?php
// auth
$routes['default_controller'] = 'auth';
$routes['signup'] = 'auth/signup';

// admin
$routes['admin/adminpanel'] = 'admin/dashboard';
$routes['admin/users'] = 'admin/users';
$routes['admin/positions'] = 'admin/positions';
$routes['admin/contract-types'] = 'admin/contractTypes';
$routes['admin/departments'] = 'admin/departments';
$routes['admin/contracts'] = 'admin/contracts';

// employee
$routes['dashboard'] = 'user/index';
$routes['dashboard/contracts'] = 'user/contracts';
$routes['dashboard/profile'] = 'user/profile';
$routes['dashboard/attendanceChecking'] = 'user/attendanceChecking';
?>