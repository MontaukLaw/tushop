<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/6
 * Time: 20:02
 */

namespace app\util;


class VueProductType
{
    public $name;
    public $url;
    public $hot;

    public function __construct($nameInput, $urlInput, $hotInput)
    {
        $this->name = $nameInput;
        $this->url = $urlInput;
        $this->hot = $hotInput;
    }
}