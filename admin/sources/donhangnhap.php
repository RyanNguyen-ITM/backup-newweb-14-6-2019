<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "draftorder/donhangnhap_tpl";
        break;
    case 'add':
        $template = "order/create_tpl";
        break;
    case 'edit':
        $template = "order/edit_tpl";
        break;
    default:
        $template = "overview";
}

#-------------------------------------------------

function save_item(){
    
}
?>