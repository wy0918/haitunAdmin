<?php
/**
 * Created by PhpStorm.
 * User: wangying
 * Date: 2019/5/6
 * Time: 16:42
 */

namespace app\common\model;
use think\Model;    //  导入think\Model类
use think\Db;

class version extends Model
{
    public function getDataList()
    {
        $versions=Db::table('admin_version')->select();
        return $versions;
    }
    public function getById($id)
    {
        $version=Db::table('admin_version')->where("id='$id'")->find();
        return $version;
    }
    public function getLendVersion()
    {
        $version=Db::table('admin_version')->where("state","已借出")->select();
        return $version;
    }
    public function search($name)
    {
        $version=Db::table('admin_version')->where("name='$name'")->find();
        return $version;
    }
    public function add($data)
    {
        Db::table('admin_version')->insert($data);  //向 user 表中添加一条记录
        return "添加成功";
    }
    public  function updateById($data,$id)
    {
        Db::table('admin_version')->where('id', $id)->update($data);
        return "修改成功";
    }
    public function  deleteById($id)
    {
        Db::table('admin_version')->delete($id);
        return "删除成功";
    }
}