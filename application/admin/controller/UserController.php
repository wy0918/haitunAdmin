<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/4/5
 * Time: 17:55
 */

namespace app\admin\controller;
use think\Request;
use app\common\model\user;

class UserController
{
    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        $user=new user();
        $users = $user->getDataList();
        $data=json(0,'操作成功',$users);
        return json($data);
    }
    public function  getUser($id){
        header("Access-Control-Allow-Origin: *");
        $user=new user();
        $user = $user->getById($id);
        $data=json(0,'操作成功',$user);
        return json($data);
    }
    public function  searchUser($name){
        header("Access-Control-Allow-Origin: *");
        header('Content-type: application/json'); //json
        $user=new user();
        $user = $user->search($name);
        $data=json(0,'操作成功',$user);
        return json($data);
    }
    public function  addUser(){
        header("Access-Control-Allow-Origin: *");
        $user=new user();
        $data = Request::instance()->post();
        $user=$user->add($data);
        $data=json(0,'操作成功',$user);
        return json($data);
    }
    public  function  updateUser(){
        header("Access-Control-Allow-Origin: *");
        $user=new user();
        $data = Request::instance()->post();
        $id=$data['id'];
        $user=$user->updateById($data,$id);
        $data=json(0,'操作成功',$user);
        return json($data);
    }
    public function  deleteUser($id){
        header("Access-Control-Allow-Origin: *");
        $user=new user();
        $user=$user->deleteById($id);
        $data=json(0,'操作成功',$user);
        return json($data);
    }
}