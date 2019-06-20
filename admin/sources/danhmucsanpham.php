<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "productgroup/danhmucsanpham_tpl";
        break;
    case 'add':
        $template = "productgroup/create_tpl";
        break;
    case 'edit':
        $template = "productgroup/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "productgroup/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "productgroup/danhmucsanpham_tpl";
        break;
    default:
        $template = "overview";
}


#---------------------------------------------------------------
function save_item(){
    
}

?>