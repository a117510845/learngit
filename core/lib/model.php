<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2018/2/24
 * Time: 20:44
 */
namespace core\lib;
class model extends \PDO  //此处用继承父类pdo这样就可以使用里面现成的方法了
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd   = 111111;
        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $e){
            print_r($e->getMessage());
        }

    }
}