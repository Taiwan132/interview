<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'conect.php';
    if (!isset($_POST['id'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到id')));
    }
    
    $id = intval($_POST['id']);
    if (empty($id)) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到id')));
    }
    $sql = "SELECT `id` , `title` , `text` FROM  annoucement  WHERE id = $id";
    $result = mysqli_query($mysqli, $sql);
    $data = array();
    $row  = mysqli_fetch_row($result);
    
    echo json_encode(array('statue'=>0 ,  'title'=> $row[1] , 'content'=>$row[2] ));
