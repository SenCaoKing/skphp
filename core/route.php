<?php
namespace core;
/**
 * 路由控制
 */
class route{
    public $ctrl;
    public $action;
    public function __construct(){
        // echo 'route is ready!';

        /**
         *
         * 1、隐藏index.php
         * 2、获取URL中的控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI']; // /index/index
            $patharr = explode('/', trim($path, '/')); // Array ( [0] => index [1] => index )

            p($patharr);

            if(isset($patharr[0])){
                if($patharr[0] != 'index.php'){
                    // 省略了 index.php
                    $this->ctrl = $patharr[0];

                    if(isset($patharr[1])){
                        $this->action = $patharr[1];
                    }else{
                        $this->action = 'index';
                    }
                }else{
                    // 没省略 index.php
                    if(isset($patharr[1])){
                        $this->ctrl = $patharr[1];
                    }
                    if(isset($patharr[2])){
                        $this->action = $patharr[2];
                    }else{
                        $this->action = 'index';
                    }
                }
            }else{
                $this->ctrl = 'index';
                $this->action = 'index';
            }

        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}
