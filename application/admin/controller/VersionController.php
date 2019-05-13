<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/6
 * Time: 16:45
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\version;

class VersionController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $versions = $version->getDataList();
        $data=json(0,'操作成功',$versions);
        return json($data);
    }
    public function  getVersion($id){
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $version = $version->getById($id);
        $data=json(0,'操作成功',$version);
        return json($data);
    }
    public function  getLendVersion(){
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $version = $version->getLendVersion();
        $data=json(0,'操作成功',$version);
        return json($data);
    }
    public function  searchVersion($name){
        header("Access-Control-Allow-Origin: *");
        //header('Content-type: application/json'); //json
        $version=new version();
        $version = $version->search($name);
        $data=json(0,'操作成功',$version);
        return json($data);
    }
    public function  addVersion(){
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $data = Request::instance()->post();
        $version=$version->add($data);
        $data=json(0,'操作成功',$version);
        return json($data);
    }
    public  function  updateVersion(){
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $data = Request::instance()->post();
        $id=$data['id'];
        $version=$version->updateById($data,$id);
        $data=json(0,'操作成功',$version);
        return json($data);
    }
    public function  deleteVersion($id){
        header("Access-Control-Allow-Origin: *");
        $version=new version();
        $version=$version->deleteById($id);
        $data=json(0,'操作成功',$version);
        return json($data);
    }
}