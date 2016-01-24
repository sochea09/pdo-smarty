<?php
include_once(MODEL.'user.php');
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

        $user = new User();
        $stmt = $user->postUpdateUser($data);

        if($stmt)
            header('location:/user/default.html');
        else
            redirectBack();

    }
}

if($id){
    $user = new User();
    $result = $user->findById($id);
    if($result)
        $smarty->assign('user', $result);
    else
        redirectBack();
}


$smarty->display(VIEW.'edit.tpl');