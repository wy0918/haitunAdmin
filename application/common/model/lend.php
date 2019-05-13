<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 10:56
 */

namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class lend extends Model
{
    public function getDataList()
    {
        $lends=Db::table('admin_lend')->where('flag',0)->select();
        return $lends;
    }
    public function getFinishDataList()
    {
        $lends=Db::table('admin_lend')->where('flag',1)->select();
        return $lends;
    }
    public function getAllDataList()
    {
        $lends=Db::table('admin_lend')->select();
        return $lends;
    }
    public function getById($id)
    {
        $lend=Db::table('admin_lend')->where($id)->find();
        return $lend;
    }
    public function add($data)
    {
        Db::table('admin_lend')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_lend')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_lend')->delete($id);
        return "删除成功";
    }
}