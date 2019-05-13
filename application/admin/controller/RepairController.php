<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 9:59
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\repair;

class RepairController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repairs = $repair->getDataList();
        $data=json(0,'操作成功',$repairs);
        return json($data);
    }
    public function allRepair()
    {
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repairs = $repair->getAllDataList();
        $data=json(0,'操作成功',$repairs);
        return json($data);
    }
    public function ImpRepair()
    {
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repairs = $repair->getImpDataList();
        $data=json(0,'操作成功',$repairs);
        return json($data);
    }
    public function finishRepair()
    {
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repairs = $repair->getFinishDataList();
        $data=json(0,'操作成功',$repairs);
        return json($data);
    }
    public function  getRepair($id){
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repair = $repair->getById($id);
        $data=json(0,'操作成功',$repair);
        return json($data);
    }
    public function  addRepair(){
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $data = Request::instance()->post();
        $repair=$repair->add($data);
        $data=json(0,'操作成功',$repair);
        return json($data);
    }
    public  function  updateRepair(){
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $data = Request::instance()->post();
        $id=$data['id'];
        $repair=$repair->updateById($data,$id);
        $data=json(0,'操作成功',$repair);
        return json($data);
    }
    public function  deleteRepair($id){
        header("Access-Control-Allow-Origin: *");
        $repair=new repair();
        $repair=$repair->deleteById($id);
        $data=json(0,'操作成功',$repair);
        return json($data);
    }
}