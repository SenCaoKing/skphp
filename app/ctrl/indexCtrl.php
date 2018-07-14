<?php
namespace app\ctrl;
include CORE.'/render.php';

class indexCtrl extends \core\render{
    public function index(){
        echo 'index ctrl';
    }

    public function data(){
        $db = new \core\db();
        $sql = 'select *from sk_user';
        $result = $db->query($sql);
        p($result);
        p($result->fetchAll());
    }

    public function render(){
        $this->assign('username','senking');
        $this->display('index/render.html');
    }

    public function render2(){
        $this->smarty->assign('username','senking');
        $this->smarty->display('index/render2.html');
    }

    public function conf(){
        // include CORE.'/conf.php';
        $value = \core\conf::get('ACTION','route_config');
        echo $value;
    }

}