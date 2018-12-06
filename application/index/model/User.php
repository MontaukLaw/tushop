<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/27
 * Time: 16:52
 */

namespace app\index\model;


use think\Model;
use think\Db;

class User extends Model
{

    protected $table = 'ty_users';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    public static function getAllUserWithPage($page)
    {
        $pageConfig = ['page' => $page];
        //return self::with('Level')->order('reg_time', 'desc')->paginate($pageConfig);//->select();
        //$result = self::with('Level')->order('reg_time', 'desc')->select();

        //OK, 你赢了, 麻痹, 这将是最后的答案, 一个是速度快, 查询数量少. 一个是简洁. 模板文件那边也可以直接引用, 唯一的问题就是...这他妈Model算干嘛的?
        $result = Db::table('ty_users')
            ->alias('users')
            ->join('ty_user_level level', 'users.level = level.level_id')
            ->order('reg_time', 'desc')
            ->paginate($pageConfig);
        //->select();

        foreach ($result as $res) {
            //$b = $res->getAttr('level');
            $a = 1;
        }

        //$result = self::with('Level')->order('reg_time', 'desc')->paginate($pageConfig);

        //$allLevel = Level::all();

        //foreach ($result as $res) {
        //$res['level_name'] = Level::getLevelNameByID($res['level'], $allLevel);

        //$res->setAttr('level_name', Level::getLevelNameByID($res['level'], $allLevel));
        //}

        return ($result);

    }

    public static function get1User()
    {
        return self::with('Level')->order('reg_time', 'desc')->find('89');
    }


    public function level()
    {
        //return $this->hasOne('Level');
        return $this->belongsTo('Level', 'level', 'level_id');
    }

    public static function getUserDetailByID($id)
    {
        return self::get($id);

    }

    public function add($data)
    {
        return Db::table('ty_users')->insert($data);
    }

    public function remove($id){
        return Db::delete();
    }

}