<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 11:04
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\lend;

class LendController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $lends = $lend->getDataList();
        $data=json(0,'操作成功',$lends);
        return json($data);
    }
    public function allLend()
    {
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $lends = $lend->getAllDataList();
        $data=json(0,'操作成功',$lends);
        return json($data);
    }
    public function finishLend()
    {
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $lends = $lend->getFinishDataList();
        $data=json(0,'操作成功',$lends);
        return json($data);
    }
    public function  getLend($id){
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $lend = $lend->getById($id);
        $data=json(0,'操作成功',$lend);
        return json($data);
    }
    public function  addLend(){
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $data = Request::instance()->post();
        $lend=$lend->add($data);
        $data=json(0,'操作成功',$lend);
        return json($data);
    }
    public  function  updateLend(){
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $data = Request::instance()->post();
        $id=$data['id'];
        $lend=$lend->updateById($data,$id);
        $data=json(0,'操作成功',$lend);
        return json($data);
    }
    public function  deleteLend($id){
        header("Access-Control-Allow-Origin: *");
        $lend=new lend();
        $lend=$lend->deleteById($id);
        $data=json(0,'操作成功',$lend);
        return json($data);
    }
}