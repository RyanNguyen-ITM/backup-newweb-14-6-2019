<?php if(!defined("_public")) die("Error");

# Điều hướng đường dẫn
function redirect($url=''){
	echo '<script language="javascript">window.location = "'.$url.'" </script>';
	exit();
}



?>