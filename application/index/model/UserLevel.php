<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/27
 * Time: 19:40
 */

namespace app\index\model;


use think\Model;

class UserLevel extends Model
{
    protected $table = 'ty_user_level';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    public function user()
    {
        return $this->belongsTo('User');
    }
}