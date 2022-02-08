<?php
/**
 *
 * User: luoxingchang
 * Date: 2/8/2022
 * Email: <desireluo@outlook.com>
 **/

namespace App\Api;


use PhalApi\Api;

class Javi extends Api
{

    public function getRules()
    {
        return array(
            'index' => array(
                'username' => array('name' => 'username', 'default' => 'luoxingchang', 'desc' => '用户名'),
                'realname' => array('name' => 'realname', 'default' => '罗兴昌', 'desc' => '真实姓名'),
            ),
        );
    }

    /**
     * 默认接口服务
     * @desc 默认接口服务，当未指定接口服务时执行此接口服务
     * @return string title 标题
     * @return string content 内容
     * @return string version 版本，格式：X.X.X
     * @return int time 当前时间戳
     * @exception 400 非法请求，参数传递错误
     */
    public function index()
    {
        return array(
            'title' => 'Hello ' . $this->username,
            'realname' => $this->realname,
            'version' => PHALAPI_VERSION,
            'time' => $_SERVER['REQUEST_TIME'],
        );
    }

}