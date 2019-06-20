<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "product/sanpham_tpl";
        break;
    case 'add':
        $template = "product/create_tpl";
        break;
    case 'edit':
        $template = "product/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "product/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "product/sanpham_tpl";
        break;
    default:
        $template = "overview";
}


#---------------------------------------------------

function save_item(){

}

?>