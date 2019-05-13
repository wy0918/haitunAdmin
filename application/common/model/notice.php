<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/7
 * Time: 12:28
 */

namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class notice
{
    public function getDataList()
    {
        $notices=Db::table('admin_notice')->select();
        return $notices;
    }
    public function getById($id)
    {
        $notice=Db::table('admin_notice')->where($id)->find();
        return $notice;
    }
    public function search($title)
    {
        $user=Db::table('admin_notice')->where("title='$title'")->find();
        return $user;
    }
    public function add($data)
    {
        Db::table('admin_notice')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_notice')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_notice')->delete($id);
        return "删除成功";
    }

}