<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/27
 * Time: 19:40
 */

namespace app\index\model;


use think\Model;

class Level extends Model
{
    protected $table = 'ty_user_level';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    public $levelName, $levelDiscount;

    public function user()
    {
        return $this->hasMany('User');
    }

    public static function getLevelNameByID($levelID, $allLevel)
    {
        $levelName = '';

        foreach ($allLevel as $level) {

            if ($levelID == ($level->getAttr('level_id'))) {
                $levelName = $level->getAttr('level_name');
            };
            //print_r($level);
        }
        return $levelName;

    }

    public static function getLevelAttr()
    {
        $allLevel = self::all();

        return self::all();

    }
}