<?php  if(!defined('_source')) die("Eror");

$act = isset($_REQUEST['act']) ? addslashes($_REQUEST['act']) : "";

switch($act)
{
    case 'login':
        if(!empty($_POST)) login();
        break;
    case 'logout':
        logout();
        break;
    case 'man':
        $template = "user/thongtintaikhoan_tpl";
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


#---------------------------------------------------

function save_item(){

}

function login(){
    global $condb, $login_name;
	
	$username = $_POST['username'];
    $password = $_POST['password'];
    
	$sql = "select * from `user` where `username`='".$username."'";
    $result = mysqli_query($condb, $sql);
	if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        if(($row['password'] == md5($password)) && ($row['role'] == 3)){
			$_SESSION[$login_name] = true;
			$_SESSION['isLoggedIn'] = true;
            $_SESSION['login']['username'] = $username;
            $_SESSION['last_login_timestamp'] = time();
            redirect("index.php");
        }
        //redirect("templates/user/success.php");
        else{
            $_SESSION['countlg'] = 1;
            redirect("templates/user/login_tpl.php");
        }
    }
    else{
        $_SESSION['countlg'] = 1;
        redirect("templates/user/login_tpl.php");
    }
}

function logout(){
	global $login_name;
    $_SESSION[$login_name] = false;
    $_SESSION['countlg'] = 0;
	redirect("templates/user/login_tpl.php");
}

?>