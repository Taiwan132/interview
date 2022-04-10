<?php
 header("Content-Type:text/html; charset=utf-8");
 require 'conect.php';
 if (!isset($_POST['id'])) {
     exit(json_encode(array('statue'=>-1 ,'msg'=>'id 找不到')));
 }
$id = htmlspecialchars($_POST['id']);
$sql ="DELETE FROM annoucement WHERE id = $id";
$result = mysqli_query($mysqli, $sql);
if ($result) {
    exit(json_encode(array('statue'=>0 ,'msg'=>'ok')));
} else {
    exit(json_encode(array('statue'=>-1 ,'msg'=>'fail')));
}
