<?php
namespace app\ctrl;
include CORE.'/render.php';
use QL\QueryList;
use think\mongo\Query;

class index_ctrl extends \core\render{
    public function index(){
        $html = <<<STR
<div id="one">
    <div class="two">
        <a href="http://querylist.cc">QueryList官网</a>
        <img src="http://querylist.com/1.jpg" alt="这是图片">
        <img src="http://querylist.com/2.jpg" alt="这是图片2">
    </div>
    <span>其它的<b>一些</b>文本</span>
</div>      
STR;
        $rules = array(
            //采集id为one这个元素里面的纯文本内容
            'text' => array('#one','text'),
            //采集class为two下面的超链接的链接
            'link' => array('.two>a','href'),
            //采集class为two下面的第二张图片的链接
            'img' => array('.two>img:eq(1)','src'),
            //采集span标签中的HTML内容
            'other' => array('span','html')
        );

        $data = QueryList::Query($html, $rules)->data;
        p($data);


        $this->display('index/index.html');
    }

    public function data(){
        $db = new \core\db();
        $sql = 'select * from sk_user';
        $result = $db->query($sql);
        dump($result);
        dump($result->fetchAll());
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

    public function log(){
        $log = new \core\log();
        $log->log('this is log','log_test');
        echo '成功写入日志';
    }

    public function medoo(){
        $medoo = new \core\medoo();
        // dump($medoo);

        /**
         * 增、删、改、插
         */
        // 查找
        $ret = $medoo->select('user','*',['username'=>'Sen']);
        dump($ret);

        // 插入
        $data = array(
            'username'=>'Sen01',
            'password'=>'Sen01'
        );
        $res = $medoo->insert('user',$data);
        dump($medoo->id());

        // 删除
        $ret = $medoo->delete('user',['username'=>'Sen02']);
        dump($ret->rowCount());

        // 修改
        $ret = $medoo->update('user',['username'=>'Sen02'],['username'=>'Sen01']);
        dump($ret->rowCount());
    }

    public function model(){
        $user = new \app\model\user();
        dump($user->list_all());
        dump($user->find_by_id(1));
        dump($user->find_by_condition(['username'=>'Sen']));
        dump($user->add(['username'=>'Sen03','password'=>'Sen02']));
        dump($user->edit(['username'=>'Sen02'],['username'=>'Sen01']));
        dump($user->del(['username'=>'Sen02']));
    }
}