<?php
namespace app\ctrl;

class indexCtrl extends \core\render{
    public function index(){
        echo 'index ctrl';
    }

    public function render(){
        $this->assign('username','senking');
        $this->display('index/render.html');
    }

    public function data(){
        $db = new \core\common\db();
        $sql = 'select *from sk_user';
        $result = $db->query($sql);
        p($result);
        p($result->fetchAll());
    }
}