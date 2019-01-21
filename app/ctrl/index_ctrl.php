<?php
namespace app\ctrl;
include CORE.'/render.php';
use QL\QueryList;
use GuzzleHttp\Client;

class index_ctrl extends \core\render{
    public function index(){
        // 实例化一个Http请求
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://phphub.org']);

        $jar = new \GuzzleHttp\Cookie\CookieJar();

        // 发送一个Http请求
        $response = $client->request('GET', '/categories/6', [
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'X-Foo'      => ['Bar', 'Baz']
            ],
            'from-params' => [
                'foo' => 'bar',
                'baz' => ['hi', 'there!']
            ],
            // 'cookies' => $jar,
            'timeout' => 3.14,
            // 'proxy'   => 'tcp://localhost:9650',
            // 'cert'    => ['/path/server.pem', 'password'],
        ]);

        $body = $response->getBody();

        // 获取到页面源码
        $html = (string)$body;

        // 采集规则
        $rules = array(
            // 文章标题
            'title'  => ['.media-heading a', 'text'],
            // 文章链接
            'link'   => ['.media-heading a', 'href'],
            // 文章作者名
            'author' => ['.img-thumbnail', 'alt']
        );
        // 列表选择器
        $rang = '.topic-list>li';
        // 采集
        $data = QueryList::Query($html, $rules, $rang)->data;
        // 查看采集结果
        var_dump($data);

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