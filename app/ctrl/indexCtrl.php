<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/24
 * Time: 20:57
 */
namespace app\ctrl;

class indexCtrl extends \core\imooc
{
    public function index(){
        header("Content-Type: text/html; charset=UTF-8");
        //调用模型类连接数据库
        $model = new \core\lib\model();
        $sql   = " SELECT * FROM ecs_attribute limit 10 ";
        $ret   = $model->query($sql);
        print_r($ret->fetchAll());die;
/*        $temp = \core\lib\conf::get('CTRL','route');
        $temp = \core\lib\conf::get('ACTION','route');
        $data = 'view is ok';
        $title = 'title is ok';
        $this->assgin('data',$data);
        $this->assgin('title',$title);
        $this->display('index.html');*/

    }
}