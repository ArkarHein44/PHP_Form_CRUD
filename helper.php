<?php

function view($filename, $datas = null){

    if($datas){
        extract($datas);
    }
    
    require_once __DIR__."/views/".$filename;

}





?>