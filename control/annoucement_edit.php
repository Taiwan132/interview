<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'conect.php';
    if (!isset($_POST['content'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'請輸入布告')));
    }
    if (!isset($_POST['title'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'請輸入標題')));
    }
    if (mb_strlen($_POST['title'], 'utf-8') >60) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'標題超過60個字串')));
    }
    if (!isset($_POST['id'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'id 不存在')));
    }
    $id = intval($_POST['id']);
    if (empty($id)) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'id 不存在')));
    }
    $content = htmlspecialchars($_POST['content']);
    $title      = htmlspecialchars($_POST['title']);
    $sql ="UPDATE  annoucement SET title = '$title' , `text`='$content' WHERE id = $id ";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        exit(json_encode(array('statue'=>0 ,'msg'=>'成功')));
    } else {
        exit(json_encode(array('statue'=>0 ,'msg'=>'新增失敗')));
    }
    $mysqli -> close();
