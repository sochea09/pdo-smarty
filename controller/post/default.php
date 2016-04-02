<?php

include_once(MODEL.'post.php');

$post = new Post();
if($_POST){
    $id = $_POST['id'];
    $status = $post->postDeletePost($id);
}

$posts = $post->getPost();
if(count($posts) > 0){
    $smarty->assign('posts', $posts);
}

$smarty->display(VIEW.'default.tpl');