<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2018/2/24
 * Time: 20:44
 */
namespace core\lib;
use core\lib\conf;

class model extends \Medoo\Medoo  //此处用继承父类pdo这样就可以使用里面现成的方法了
{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct($option);

    }
}