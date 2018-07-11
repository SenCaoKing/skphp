<?php
namespace core;
/**
 * 自动加载类库函数
 */

class autoload{
    public static function load($class_name){
        if(file_exists($class_name.'.php')){
            require_once $class_name.'.php';
            return true;
        }else{
            echo 'error: unable to load '.$class_name.'.php';
            return false;
        }
    }
}