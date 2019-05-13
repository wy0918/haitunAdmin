<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/4/5
 * Time: 17:52
 */
namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class user extends Model
{
    protected $name = 'admin_user';
    public function getDataList()
    {
        $users=Db::table('admin_user')->select();
        return $users;
    }
    public function getById($id)
    {
        $user=Db::table('admin_user')->where($id)->find();
        return $user;
    }
    public function search($name)
    {
        $user=Db::table('admin_user')->where("username='$name'")->find();
        return $user;
    }
    public function add($data)
    {
        Db::table('admin_user')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_user')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_user')->delete($id);
        return "删除成功";
    }

}