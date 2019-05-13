<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 0:57
 */

namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class spare extends  Model
{
    public function getDataList()
    {
        $spares=Db::table('admin_spare')->select();
        return $spares;
    }
    public function getById($id)
    {
        $spare=Db::table('admin_spare')->where($id)->find();
        return $spare;
    }
    public function search($name)
    {
        $spare = Db::table('admin_spare')->where("name='$name'")->find();
        return $spare;
    }
    public function add($data)
    {
        Db::table('admin_spare')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_spare')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_spare')->delete($id);
        return "删除成功";
    }

}