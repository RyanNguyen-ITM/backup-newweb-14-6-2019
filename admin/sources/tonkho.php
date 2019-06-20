<?php

if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        $template = "inventory/tonkho_tpl";
        break;
    default:
        $template = "overview";
}

?>