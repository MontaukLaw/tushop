<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/6
 * Time: 20:02
 */

namespace app\util;


class VueProduct
{
    public $productId;
    public $productInfo;
    public $productPrice;

    public function __construct($productId, $productInfo, $productPrice)
    {
        $this->productId = $productId;
        $this->productInfo = $productInfo;
        $this->productPrice = $productPrice;
    }
}