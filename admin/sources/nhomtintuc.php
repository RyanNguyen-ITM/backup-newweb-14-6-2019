<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "newsgroup/nhomtintuc_tpl";
        break;
    case 'add':
        $template = "newsgroup/create_tpl";
        break;
    case 'edit':
        $template = "newsgroup/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "newsgroup/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "newsgroup/nhomtintuc_tpl";
        break;
    default:
        $template = "overview";
}

#-------------------------------------------------

function save_item(){
    
}
?>