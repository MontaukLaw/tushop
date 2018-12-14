<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/12/6
 * Time: 19:52
 */

namespace app\index\controller;

use app\util\VueProductType;
use app\util\VueProduct;
use app\util\TableDemoData;
use think\Controller;

class VueApiController extends Controller
{

    public function getProductList()
    {
        $resultArr = array(
            "vegetable" => array(
                "title" => '蔬菜',
                "list" => array(
                    new VueProductType("叶菜类", "vegeWithLeaf", false),
                    new VueProductType('瓜果类', 'melon', true),
                    new VueProductType('十字花科', 'cruciferae', false)
                )
            ),

            "fruit" => array(
                "title" => '水果',
                "list" => array(
                    new VueProductType("亚热带水果", "asiahot", false),
                    new VueProductType('热带水果', 'tokyohot', false),
                    new VueProductType('温带水果', 'beijinghot', true)
                ),
            )
        );
        return json($resultArr);
    }

    public function getProductInfo()
    {
        $pid = input('product_id');
        switch ($pid) {
            case "1":
                $resultArr = new VueProduct($pid, "这是一个独一无二的产品", 100);
                break;
            case "2":
                $resultArr = new VueProduct($pid, "这是一个烂大街的产品", 200);
                break;
            default:
                $resultArr = new VueProduct($pid, "请输入信息", 0);
        }

        return json($resultArr);
    }

    public function getTableDemoData()
    {
        $resultArr = array(new TableDemoData(true, 40, 'Dickerson', 'McDonald'),
            new TableDemoData(false, 21, 'Larsen', 'Shaw'),
            new TableDemoData(false, 89, 'Geneva', 'Wilson'),
            new TableDemoData(true, 38, 'Jami', 'Carney'),
        );
        return json($resultArr);
    }
}