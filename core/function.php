<?php
/**
 * 易读格式打印变量
 * @param $var 变量
 */
function p($var){
    if(is_null($var)){
        var_dump($var);
    }elseif(is_bool($var)){
        var_dump($var);
    }else{
        echo '<p>'. var_dump($var, true) .'</p>';
    }
}

/**
 * 将从模板文件中读取的内容中的关键字替换成变量中的内容
 * @param $row
 * @param string $headline
 * @param string $content
 */
function replace($row, $headline='', $content=''){
    // 替换参数中的关键字
    $row = str_replace("%headline%", $headline, $row);
    $row = str_replace("%content%", $content, $row);
    // 返回替换后的结果
    return $row;
}