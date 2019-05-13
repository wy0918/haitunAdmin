<?php

function json($code,$msg="",$data=array()){
    $result=array(
        'code'=>$code,
        'msg'=>$msg,
        'data'=>$data
    );
    //输出json
    echo json_encode($result);
    exit;
}