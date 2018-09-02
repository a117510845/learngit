<?php
/**
 * Created by PhpStorm.
 * User: Tom  <xiaowen.zhou@guanaitong.com>
 * Date: 2018/7/28
 * Time: 20:18
 */
namespace app\model;

use core\lib\model;

class sModel extends model{

    protected $table = 'Sheet1';
    public function find(){
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    public function getOne($id){
        $ret = $this->get($this->table,'*',[
            'id' =>$id
        ]);
        return $ret;
    }

    public function change($id,$data){
        return $this->update($this->table,$data,[
            'id' =>$id
        ]);
    }

    public function delOne($id){
        return $this->delete($this->table,[
            'id' =>$id
        ]);
    }

}