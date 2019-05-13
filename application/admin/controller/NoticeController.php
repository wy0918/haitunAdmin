<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/8
 * Time: 1:49
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\notice;

class NoticeController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $notice=new notice();
        $notices = $notice->getDataList();
        $data=json(0,'操作成功',$notices);
        return json($data);
    }
    public function  getNotice($id){
        header("Access-Control-Allow-Origin: *");
        $notice=new notice();
        $notice = $notice->getById($id);
        $data=json(0,'操作成功',$notice);
        return json($data);
    }
    public function  addNotice(){
        header("Access-Control-Allow-Origin: *");
        $notice=new notice();
        $data = Request::instance()->post();
        $notice=$notice->add($data);
        $data=json(0,'操作成功',$notice);
        return json($data);
    }
    public  function  updateNotice(){
        header("Access-Control-Allow-Origin: *");
        $notice=new notice();
        $data = Request::instance()->post();
        $id=$data['id'];
        $notice=$notice->updateById($data,$id);
        $data=json(0,'操作成功',$notice);
        return json($data);
    }
    public function  deleteNotice($id){
        header("Access-Control-Allow-Origin: *");
        $notice=new notice();
        $notice=$notice->deleteById($id);
        $data=json(0,'操作成功',$notice);
        return json($data);
    }
}