<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/5/5
 * Time: 22:40
 */


function objectToArray($e){
    $e=(array)$e;
    foreach($e as $k=>$v){
        if( gettype($v)=='resource' ) return;
        if( gettype($v)=='object' || gettype($v)=='array' )
            $e[$k]=(array)objectToArray($v);
    }
    return $e;
}