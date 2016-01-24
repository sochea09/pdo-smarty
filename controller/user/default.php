<?php
include_once(MODEL.'user.php');
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/23/16
 * Time: 8:14 PM
 */
if($_POST){
    $id = $_POST['id'];
    $user = new User();
    $status = $user->postDeleteUser($id);
}

$user  = new User();
$users = $user->getUser();
if(count($users) > 0){
    $smarty->assign('users', $users);
}

$smarty->display(VIEW.'default.tpl');