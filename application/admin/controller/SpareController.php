<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 0:51
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\spare;

class SpareController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $spare=new spare();
        $spares = $spare->getDataList();
        $data=json(0,'操作成功',$spares);
        return json($data);
    }
    public function  getSpare($id){
        header("Access-Control-Allow-Origin: *");
        $spare=new spare();
        $spare = $spare->getById($id);
        $data=json(0,'操作成功',$spare);
        return json($data);
    }
    public function  searchSpare($name){
        header("Access-Control-Allow-Origin: *");
        //header('Content-type: application/json'); //json
        $spare=new spare();
        $spare = $spare->search($name);
        $data=json(0,'操作成功',$spare);
        return json($data);
    }
    public function  addSpare(){
        header("Access-Control-Allow-Origin: *");
        $spare=new spare();
        $data = Request::instance()->post();
        $spare=$spare->add($data);
        $data=json(0,'操作成功',$spare);
        return json($data);
    }
    public  function  updateSpare(){
        header("Access-Control-Allow-Origin: *");
        $spare=new spare();
        $data = Request::instance()->post();
        $id=$data['id'];
        $spare=$spare->updateById($data,$id);
        $data=json(0,'操作成功',$spare);
        return json($data);
    }
    public function  deleteSpare($id){
        header("Access-Control-Allow-Origin: *");
        $spare=new spare();
        $spare=$spare->deleteById($id);
        $data=json(0,'操作成功',$spare);
        return json($data);
    }
}