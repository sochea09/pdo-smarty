<?php
include_once(MODEL.'user.php');
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/24/16
 * Time: 9:33 PM
 */

if($_POST){

    $error  = '';

    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $password = (isset($_POST['password'])) ? $_POST['password'] : '';

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = strip_tags(trim($password));

    if($email && $password){
        $user = new User();
        $status = $user->postLogin($email, $password);
        if($status)
            header('location:/user/default.html');
        else
            $error = 'Error on login process.';
    }else{
        $error = 'Invalid email or password.';
    }
    $smarty->assign('error', $error);
}

$smarty->display(VIEW.'login.tpl');