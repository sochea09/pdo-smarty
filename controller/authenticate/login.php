<?php
include_once(MODEL.'user.php');
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/24/16
 * Time: 9:33 PM
 */

if($_POST){

    require_once (HELPER.'validation.php');

    $rules = array(
      'email' => 'email|required',
      'password' => 'required'
    );

    $validation = new Validation();

    if($validation->validate($_POST, $rules) == TRUE){
        $user = new User();
        $status = $user->postLogin($_POST['email'], $_POST['password']);
        if($status)
            header('location:/user/default.html');
        else
            $error = 'Error on login process.';
    }
    else{
        echo '<ul>';
        foreach($validation->errors as $error){
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
    }

}

$smarty->display(VIEW.'login.tpl');