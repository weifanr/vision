<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 2015/7/10 11:04
 * description: 用户自定义异常系统异常
 */

namespace common\exception;

use yii\base\UserException;

class SystemException extends UserException
{
    protected $message = "系统异常";
    protected $code = 10000;

    public function getName()
    {
        return "SystemException";
    }
}