<?php
/**
 * 配置类
 * User: admin
 * Date: 2018/2/25
 * Time: 13:28
 */
namespace core\lib;
class conf{
    static public $conf = array();
    //一般经常用到方法用静态方法
    static public function get($name,$file){
        /**
         * 1 判断配置文件是否存在
         * 2 判断配置是否存在
         * 3 缓存配置
         */
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path = IMOOC.'/core/config/'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                if(isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('找不到配置项'.$name);
                }
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }

    static public function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            $path = IMOOC.'/core/config/'.$file.'.php';
            if(is_file($path)){
                $conf = include $path;
                self::$conf[$file] = $conf;
                return $conf;
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
}