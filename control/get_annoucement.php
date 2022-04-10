<?php
    header("Content-Type:text/html; charset=utf-8");
    require 'conect.php';
    if (!isset($_POST['page'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到頁數')));
    }
    if (!isset($_POST['length'])) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到顯示的筆數')));
    }
    $page = intval($_POST['page']);
    $length = intval($_POST['length']);
    if (empty($page)) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到頁數')));
    }
    if (empty($length)) {
        exit(json_encode(array('statue'=>-1 ,'msg'=>'找不到顯示的筆數')));
    }
    $sql_length = $length;
    $sql_page   = ($page -1) *$length ;
    function get_count($mysqli)
    {
        $sql = 'SELECT count(1) FROM annoucement WHERE 1';
        $result = mysqli_query($mysqli, $sql);
        $row  = mysqli_fetch_row($result);
        return $row[0];
    }
    function get_data($mysqli, $sql_page, $sql_length)
    {
        $sql = "SELECT `id` , `title` , `text` FROM  annoucement  WHERE 1 LIMIT $sql_page, $sql_length";
        $result = mysqli_query($mysqli, $sql);
        $data = array();
        while ($row  = mysqli_fetch_row($result)) {
            if (mb_strlen(htmlspecialchars_decode($row[2]), 'utf-8') > 20) {
                $data[] =array(
                    'id'=>$row[0],
                    'title'=>$row[1],
                    'content'=> substr($row[2], 0, 20).'...',
                 );
            } else {
                $data[] =array(
                    'id'=>$row[0],
                    'title'=>$row[1],
                    'content'=> $row[2],
                 );
            }
        }
        return $data;
    }
    echo json_encode(array('statue'=>0 ,  'data'=> get_data($mysqli, $sql_page, $sql_length) , 'count'=>get_count($mysqli)));
