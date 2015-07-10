<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 2015/7/10 11:04
 * description: 用户自定义异常业务异常
 */

namespace common\exception;

use yii\base\UserException;

class BusinessException extends UserException
{
    protected $message = "业务异常";
    protected $code = 20000;

    public function getName()
    {
        return "BusinessException";
    }
} 