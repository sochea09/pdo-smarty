<?php
include_once(MODEL.'user.php');
include_once(MODEL.'role.php');
include_once(HELPER.'validation.php');

if($_POST){
    $data = array();
    (isset($_POST['username']))? $data['usr_name'] = $_POST['username'] : '';
    (isset($_POST['password']))? $data['usr_password'] = md5($_POST['password']) : '';
    (isset($_POST['email']))? $data['usr_email'] = $_POST['email'] : '';
    (isset($_POST['roles']))? $data['rol_id'] = $_POST['roles'] : '';
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $rules = array(
        'roles'     => 'required',
        'username'  => 'required',
        'password'  => 'required',
        'email'     => 'email|required'
    );

    $validation = new Validation();

    if($validation->validate($_POST, $rules) == TRUE){
        $user = new User();
        $stmt = $user->postUser($data);

        if($stmt){
            //header('location:/user/default.html');
            header('location:index.php?module=user&action=default');
        }else{
            echo 'Fail.';
        }
    }else{
        echo $validation->errors[0];
        $smarty->assign('data', $data);
    }
}

$role = new Role();
$rol_list = $role->listRoles();
foreach($rol_list as $ro){
    $roles[$ro['rol_id']] = $ro['rol_desc'];
}
$smarty->assign('roles', $roles);

$smarty->display(VIEW.'create.tpl');