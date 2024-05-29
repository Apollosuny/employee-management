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


$routes['admin/contracts'] = 'contract/index';
$routes['admin/contracts/create'] = 'contract/create';
$routes['admin/contracts/edit'] = 'contract/edit';

// employee
$routes['dashboard'] = 'user/index';
$routes['dashboard/contracts'] = 'contract/employeeContract';
$routes['dashboard/contracts/show'] = 'contract/show';
$routes['dashboard/profile'] = 'profile/index';

$routes['dashboard/attendanceChecking'] = 'attendance/index';
$routes['dashboard/attendanceChecking/create'] = 'attendance/create';
?>