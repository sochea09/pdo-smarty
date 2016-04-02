<?php
include_once(MODEL.'user.php');
include_once(MODEL.'role.php');
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/24/16
 * Time: 1:08 PM
 */

(isset($_GET['id'])) ? $id = $_GET['id'] : $id = '';
if($_POST){

    if($id){
        $data = array();
        $data['usr_id'] = $id;
        (isset($_POST['username']))? $data['usr_name'] = $_POST['username'] : '';
        (isset($_POST['password']))? $data['usr_password'] = $_POST['password'] : '';
        (isset($_POST['email']))? $data['usr_email'] = $_POST['email'] : '';
        (isset($_POST['roles']))? $data['rol_id'] = $_POST['roles'] : '';

        $user = new User();
        $stmt = $user->postUpdateUser($data);

        if($stmt)
            //header('location:/user/default.html');
            header('location:index.php?module=user&action=default');
        else
            redirectBack();

    }
}

if($id){
    $user = new User();
    $result = $user->findById($id);
    if($result)
        $smarty->assign('data', $result);
    else
        redirectBack();
}

$role = new Role();
$rol_list = $role->listRoles();
foreach($rol_list as $ro){
    $roles[$ro['rol_id']] = $ro['rol_desc'];
}
$smarty->assign('roles', $roles);

$smarty->display(VIEW.'edit.tpl');