<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/23
 * Time: 19:03
 */
namespace core;
class imooc
{
    public static $classMap = array();
    public $assgin;
    static public function run(){
        \core\lib\log::init();
      $route = new \core\lib\route();
      $ctrlClass = $route->ctrl;
      $action    = $route->action;
      $ctrlfile    = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
      $cltrlClass  = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
      if(is_file($ctrlfile)){
          include $ctrlfile;
         $ctrl = new $cltrlClass();
          $ctrl->$action();
          \core\lib\log::log('ctrl:'.$ctrlClass.' and action:'.$action);
      }
    }
    static public function load($class){
      if(isset($classMap[$class])){
          return true;
      }else{
          $class = str_replace('\\','/',$class);
          $file  = IMOOC.'/'.$class.'.php';
          if(is_file($file)){
              include $file;
              self::$classMap[$class] = $class;
          }else{
              return false;
          }
      }
    }

    public function assgin($name,$value){
      $this->assgin[$name] = $value;
    }

    public function display($file){
      $file = APP.'/views/'.$file;
      if(is_file($file)){
          extract($this->assgin);
          include $file;
      }
    }
}