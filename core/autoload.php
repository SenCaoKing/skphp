<?php
namespace core;
/**
 * 自动加载类库函数
 */

class autoload{
    public static function load($class_name){
        $os = strtoupper(substr(PHP_OS,0,3))==='WIN'?'windows':'linux';
        if($os == 'linux'){
            $class_name = str_replace('\\','/',$class_name);
        }
        if(file_exists($class_name.'.php')){
            require_once $class_name.'.php';
            return true;
        }
    }
}