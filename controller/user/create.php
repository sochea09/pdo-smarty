<?php
include_once(MODEL.'user.php');

if($_POST){

    $data = array();
    $data['usr_id'] = 'null';
    (isset($_POST['username']))? $data['usr_name'] = $_POST['username'] : '';
    (isset($_POST['password']))? $data['usr_password'] = $_POST['password'] : '';
    (isset($_POST['email']))? $data['usr_email'] = $_POST['email'] : '';

    $user = new User();
    $stmt = $user->postUser($data);
    if($stmt){
        header('location:/user/default.html');
    }else{
        echo 'Fail.';
    }

}

$smarty->display(VIEW.'create.tpl');