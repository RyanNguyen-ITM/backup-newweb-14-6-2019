<?php

$host = "localhost";
$user = "admin";
$password = "19Hoanghuy98";
$database = "fashionwebshop";

$conn = mysqli_connect($host, $user, $password, $database);



if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : "";

switch($act)
{
    case 'man':
        if(!empty($_POST)) login();
        $template = "test/test_tpl";
        break;
    case 'add':
        $template = "user/create_tpl";
        break;
    case 'edit':
        $template = "user/edit_tpl";
        break;
    case 'save':
        save_item();
        $template = "user/create_tpl";
        break;
    case 'saveandback':
        save_item();
    case 'back':
        $template = "user/sanpham_tpl";
        break;
    default:
        $template = "overview";
}

$username = $_POST['username'];
$password = $_POST['password'];

if($conn){
    echo "Thành công <br/>";
    $sql = "select * from user where username='". $username ."' and password = '". $password ."'";
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
		print_r($row);
	}
}
#---------------------------------------------------

function save_item(){

}

function login(){
    global $conn, $login_name;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select * from user where username='".$username."'";
    $result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        if(($row['password'] == md5($password)) && ($row['role'] == 3)){
			$_SESSION[$login_name] = true;
			$_SESSION['isLoggedIn'] = true;
            $_SESSION['login']['username'] = $username;
            $_SESSION['login']['password'] = $password;
        }
	}
}

?>