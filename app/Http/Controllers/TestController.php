<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        /* $sms = app('easysms');
         try {
             $sms->send(18320029829, [
                 'template' => '76085',
                 'data' => [
                     9987,
                     10
                 ],
             ]);
         } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
             $message = $exception->getException('qcloud')->getMessage();
             dd($message);
         }*/
        //${month}月${day}日${hour}:${minu}在${where}
        $sms = app('easysms');
        try {
            $sms->send(18320029829, [
                'template' => 'SMS_134316025',
                'data' => [
                    'month' => 10,
                    'day' => 11,
                    'hour' => 12,
                    'minu' => 13,
                    'where' => 14,
                ],
            ]);
        } catch (\Overtrue\EasySms\Exceptions\NoGatewayAvailableException $exception) {
            $message = $exception->getException('aliyun')->getMessage();
            dd($message);
        }
    }
}