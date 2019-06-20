
<?php
#-------- Xử lý session ---------------------------#
@$login_name = 'login_name';
session_cache_expire(1);
session_start();

#--------Tạo các đường dẫn mặc định----------------#
define("_templates", "./templates/");
define("_source", "./sources/");
define("_public", "./public/");

require_once _public . "config.php";
require_once _public . "database.php";
require_once _public . "function.php";

$com = isset($_REQUEST['com']) ? addslashes($_REQUEST['com']) : "";
$act = isset($_REQUEST['act']) ? addslashes ($_REQUEST['act']) : "";

$db = new database($config['database']);
$condb = $db->conn;

switch($com)
{
    case 'test':
        $source = "test";
        break;
    case 'user':
        $source = "user";
        break;
    case 'sanpham':
        $source = "sanpham";
        break;
    case 'danhmucsanpham':
        $source = "danhmucsanpham";
        break;
    case 'tonkho':
        $source = "tonkho";
        break;
    case 'nhomtintuc':
        $source = "nhomtintuc";
        break;
    case 'tintuc':
        $source = "tintuc";
        break;
    case 'donhang':
        $source = "donhang";
        break;
    default:
        $source = "";
        $template = "overview";
}

if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name] == false) && $act != 'login')
   redirect("templates/user/login_tpl.php");

if($source != "") include_once _source . $source . ".php";

if(isset($_SESSION[$login_name]) && $_SESSION[$login_name] == true)
{
    // Menu dọc
    require_once _templates . "vertical_menu.php";
    // Header
    require_once _templates . "header.php";

    #---------------------------------------------------------------#
    // Content

    require_once _templates . $template . ".php";


    #---------------------------------------------------------------#
    // Footer
    require_once _templates . "footer.php";
}

?>

<?php
if(isset($_SESSION[$login_name]) && $_SESSION[$login_name] == true){
    if((time() - $_SESSION['last_login_timestamp']) >= 3600){ //reset sau 1h
        session_id(session_create_id('myprefix-'));
        session_start();
        session_destroy();
        redirect("templates/user/login_tpl.php");
    }
    else{
        //$_SESSION['last_login_timestamp'] = time();
    }
}
else{
    redirect("templates/user/login_tpl.php");
}
?>