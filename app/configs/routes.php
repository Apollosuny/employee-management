<?php
// auth
$routes['default_controller'] = 'auth';

// admin
$routes['admin/adminpanel'] = 'admin/dashboard';

$routes['admin/users'] = 'employee/index';
$routes['admin/users/register'] = 'employee/register';

$routes['admin/positions'] = 'position/positions';
$routes['admin/positions/create'] = 'position/createPosition';
$routes['admin/positions/edit'] = 'position/editPosition';

$routes['admin/contract-types'] = 'contractType/contractTypes';
$routes['admin/contract-types/create'] = 'contractType/createContractType';
$routes['admin/contract-types/edit'] = 'contractType/editContractType';

$routes['admin/departments'] = 'department/departments';
$routes['admin/departments/create'] = 'department/createDepartment';
$routes['admin/departments/edit'] = 'department/editDepartment';


$routes['admin/contracts'] = 'admin/contracts';

// employee
$routes['dashboard'] = 'user/index';
$routes['dashboard/contracts'] = 'user/contracts';
$routes['dashboard/profile'] = 'user/profile';
$routes['dashboard/attendanceChecking'] = 'user/attendanceChecking';
?>