<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 9:56
 */

namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class repair extends Model
{
    public function getDataList()
    {
        $repairs=Db::table('admin_repair')->where('flag',0)->select();
        return $repairs;
    }
    public function getAllDataList()
    {
        $repairs=Db::table('admin_repair')->select();
        return $repairs;
    }
    public function getImpDataList()
    {
        $repairs=Db::table('admin_repair')->where('important',"true")->select();
        return $repairs;
    }
    public function getFinishDataList()
    {
        $repairs=Db::table('admin_repair')->where('flag',1)->select();
        return $repairs;
    }
    public function getById($id)
    {
        $repair=Db::table('admin_repair')->where($id)->find();
        return $repair;
    }
    public function add($data)
    {
        Db::table('admin_repair')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_repair')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_repair')->delete($id);
        return "删除成功";
    }
}