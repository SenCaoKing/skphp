<?php
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

define('SKPHP',realpath('./')); // 获取项目所在根目录
define('CORE',SKPHP.'/core'); // 核心文件所在目录
define('APP',SKPHP.'./app'); // 应用文件目录
define('LIB',SKPHP.'/lib'); // 第三方库所在目录

define('DEBUG',true); // 是否开启调试

if(DEBUG){
    ini_set('display_errors', 'On');
}else{
    ini_set('display_errors', 'Off');
}

include CORE.'/common/function.php';
// p(SKPHP);
// include CORE.'/sk.php';
// \core\sk::run();

// 将函数注册到SPL __autoload函数队列中
//spl_autoload_register(function ($class_name) {
//    require_once $class_name . '.php';
//});

include CORE.'/autoload.php';
spl_autoload_register('\core\autoload::load');
$route = new \core\route();

$ctrl = $route->ctrl;
$action = $route->action;
$params = $route->params;
$ctrl_file = APP.'/ctrl/'.$ctrl.'Ctrl.php';
$ctrl_class = '\\app\\ctrl\\'.$ctrl.'Ctrl';
if(is_file($ctrl_file)){
    include $ctrl_file;
    $ctrl_obj = new $ctrl_class;
    $ctrl_obj->$action();
}else{
    throw new \Exception('找不到控制器'.$ctrl_file);
}