<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/23
 * Time: 19:38
 */
namespace core\lib;
use core\lib\conf;
class route
{
    public $ctrl;
    public $action;

    public function __construct()
    {

            /**
             *  步骤如下
             *  1.隐藏index.php为了美观 因为我们真正访问到的网站是xxx.com/index.php/index/index
             *  2.获取url 参数部分
             *  3.返回对应控制器和方法
             */
        if (isset($_GET['ctrl'],$_GET['action'])) {
            //http://www.frame.com/index.php?ctrl=index&action=test

            $this->ctrl = $_GET['ctrl'];
            $action     = $_GET['action'];
            if (isset($action)) {
                $this->action = $action;
            } else {
                $this->action = conf::get('ACTION', 'route');
            }
        } else {
            $this->ctrl = conf::get('CTRL', 'route');
            $this->action = conf::get('ACTION', 'route');
        }
    }
}