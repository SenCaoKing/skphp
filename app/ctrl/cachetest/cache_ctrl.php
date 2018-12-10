<?php
namespace app\ctrl\cachetest;

class cache_ctrl extends \core\render{

    public function index(){
        $db = new \core\db();
        $sql = 'select * from articles';
        $result = $db->query($sql);
        $data = $result->fetchAll();

        if($_POST){
            $title = $_POST['title'];
            $content = $_POST['content'];

            p($content);
            exit;
        }



        $this->smarty->assign('basepath',$this->basepath);
        $this->smarty->assign('assets',$this->assets);
        $this->smarty->display('cachetest/cache/index.html');
    }
}