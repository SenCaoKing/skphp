<?php
namespace app\ctrl;

class indexCtrl{
    public function index(){
        echo 'index ctrl';
    }

    public function data(){
        $db = new \core\common\db();
        $sql = 'select *from sk_user';
        $result = $db->query($sql);
        p($result);
        p($result->fetchAll());
    }
}