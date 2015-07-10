<?php
/**
 * author     : forecho <caizhenghai@gmail.com>
 * createTime : 2015/7/10 14:07
 * description:
 */

namespace common\components;


use Yii;
use yii\web\Response;
use yii\web\HttpException;

class ErrorHandler extends \yii\web\ErrorHandler
{
    /**
     * @inheritdoc
     */
    protected function renderException($exception)
    {
        if (Yii::$app->has('response')) {
            $response = Yii::$app->getResponse();
        } else {
            $response = new Response();
        }
        if ($exception instanceof HttpException) {
            $response->setStatusCode($exception->statusCode);
        } else {
            $response->setStatusCode(500);
        }
        $response->data = [
            'error' => [
                'code' => $response->statusCode,
                'message' => $response->statusText,
            ]
        ];
        $response->format = Response::FORMAT_JSON;
        $response->send();
    }
}