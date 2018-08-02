<?php
namespace app\ctrl\pagetest;

class page_ctrl extends \core\render{

    public function index(){
        $allNum = $this->allData();

        $pageSize = 3;
        $pageNum = empty($_GET['pageNum']) ? 1 : $_GET['pageNum'];

        $endPage = ceil($allNum/$pageSize);
        $result = $this->pages($pageNum, $pageSize);

        $this->smarty->assign('result', $result);
        $this->smarty->assign('pageNum', $pageNum);
        $this->smarty->assign('endPage', $endPage);
        $this->smarty->display('pagetest/page/index.html');
    }

    // 显示总页数的函数
    public function allData(){
        $db = new \core\db();
        $sql = 'select * from articles';
        $result = $db->query($sql);
        $data = $result->fetchAll();
        return count($data);

    }

    // 分页函数
    public function pages($pageNum, $pageSize){
        // 查询数据并分页
        $db = new \core\db();
        $sql = "select * from articles limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
        $data = $db->query($sql);

        $result = $data->fetchAll();
        return $result;
    }
}