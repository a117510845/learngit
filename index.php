<?php
/**
 *入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 *
 */

define('IMOOC',realpath('./')); //当前框架所在的目录
define('CORE',IMOOC.'/core');   //框架核心文件所在的目录
define('APP',IMOOC.'/app');     //项目文件所处的目录
define('MODULE','app');

define('DEBUG',true);           //开启调试模式

include "vendor/autoload.php";
if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTittle = '框架出错了';
    $option  = new \Whoops\Handler\PrettyPageHandler;
    $option->setPageTitle($errorTittle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

dump($_SERVER);die;

include CORE.'/imooc.php';
spl_autoload_register('\core\imooc::load');
\core\imooc::run();

?>
