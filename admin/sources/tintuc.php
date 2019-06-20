<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "news/tintuc_tpl";
        break;
    case 'add':
        $template = "news/create_tpl";
        break;
    case 'edit':
        $template = "news/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "news/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "news/tintuc_tpl";
        break;
    default:
        $template = "overview";
}

#-------------------------------------------------

function save_item(){
    
}
?>