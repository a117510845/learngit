<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/2/24
 * Time: 20:57
 */
namespace app\ctrl;

use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = 'Hello world';

        $this->assgin('data',$data);

        $this->display('index.html');

    }

    public function test()
    {
        $data = 'TEST';

        $this->assgin('data',$data);

        $this->display('test.html');
    }
}