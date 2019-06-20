<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "order/donhang_tpl";
        break;
    case 'add':
        $template = "order/create_tpl";
        break;
    case 'edit':
        $template = "order/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "order/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "order/donhang_tpl.php";
        break;
    default:
        $template = "overview";
}

#-------------------------------------------------

function save_item(){
    
}
?>