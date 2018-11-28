<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 21:14
 */

namespace app\util;


class JsonMsg
{

    public $success;
    public $obj;
    public $msg;

    public function __construct($request)
    {
        $this->setSuccess(true);

        if ($request > 0) {
            $this->setSuccess(true);
            $this->setMsg('OK');

        } else {

            $this->setSuccess(false);
            $this->setMsg('ERROR');
        }
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getObj()
    {
        return $this->obj;
    }

    /**
     * @param mixed $obj
     */
    public function setObj($obj)
    {
        $this->obj = $obj;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

}