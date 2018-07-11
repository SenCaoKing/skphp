<?php
namespace core;

class sk{
    public static $class_map = array();
    public static function run(){
        p('hello, world!');
        $route = new \core\route();
    }
}
