<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 4/1/16
 * Time: 8:17 PM
 */
include_once(HELPER.'validation.php');
include_once(MODEL.'post.php');

if (is_ajax()) {
    $data = array();
    $return = array();
    (isset($_POST['title'])) ? $data['title'] = $_POST['title'] : '';
    (isset($_POST['description'])) ? $data['description'] = $_POST['description'] : '';
    $data['created_at'] = date('Y-m-d H:i:s');
    $data['updated_at'] = date('Y-m-d H:i:s');

    $rules = array(
        'title' => 'required',
        'description' => 'required'
    );

    $validation = new Validation();

    if ($validation->validate($_POST, $rules) == TRUE) {
        $post = new Post();
        $stmt = $post->postPost($data);

        if($stmt){
            //header('location:/user/default.html');
            $return = array(
                "status"    => "true"
            );
        }else{
            $return = array(
                "status"    => "false",
                "error"     => $stmt
            );
        }
    } else {
        $return = array(
            "status"    => "false",
            "error"     => $validation->errors[0]
        );
    }
    echo json_encode($return);
}else{
    $smarty->display(VIEW.'create.tpl');
}