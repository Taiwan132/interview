<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'conect.php';
    if (!isset($_POST['annoucement'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'請輸入公布內文')));
    }
    if (!isset($_POST['title'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'請輸入標題')));
    }
    if (  mb_strlen( $_POST['title'] ,'utf-8') >60 ) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'標題超過60個字串')));
    }
    $annoucement = htmlspecialchars($_POST['annoucement']);
    $title      = htmlspecialchars($_POST['title']);
    $sql ="INSERT INTO annoucement (text , title ) VALUES  ( '".$title."' , '".$annoucement."' ) ";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        exit(json_encode(array('statue'=>0 ,'msg'=>'成功')));
    } else {
        exit(json_encode(array('statue'=>0 ,'msg'=>'新增失敗')));
    }
    $mysqli -> close();
