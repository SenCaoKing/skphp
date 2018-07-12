<?php
function p($var){
    if(is_null($var)){
        var_dump($var);
    }elseif(is_bool($var)){
        var_dump($var);
    }else{
        echo '<p>'. print_r($var, true) .'</p>';
    }
}