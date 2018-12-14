<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/13
 * Time: 23:01
 */

namespace app\util;


class TableDemoData
{

    public $isActive;
    public $age;
    public $first_name;
    public $last_name;

    public function __construct($isActive, $age, $first_name, $last_name)
    {
        $this->isActive = $isActive;
        $this->age = $age;
        $this->first_name = $first_name;
        $this->last_name = $last_name;

    }

}