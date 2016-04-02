<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 4/2/16
 * Time: 10:34 AM
 */

include_once(MODEL.'post.php');

(isset($_GET['id'])) ? $id = $_GET['id'] : $id = '';
$return = array();

if(is_ajax()){

    if($_POST['id']){
        $data = array();
        $data['id'] = $_POST['id'];
        (isset($_POST['title']))? $data['title'] = $_POST['title'] : '';
        (isset($_POST['description']))? $data['description'] = $_POST['description'] : '';

        $data['updated_at'] = date('Y-m-d H:i:s');

        $post = new Post();
        $stmt = $post->postUpdatePost($data);

        if($stmt)
            $return = array(
              "status"  => "true"
            );
        else
            $return = array(
              "status"  => "false",
              "error"   => "Problem update post."
            );

    }
    echo json_encode($return);
}else {
    if ($id) {
        $post = new Post();
        $result = $post->findById($id);
        if ($result)
            $smarty->assign('data', $result);
        else
            redirectBack();
    }

    $smarty->display(VIEW . 'edit.tpl');
}