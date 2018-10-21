<?

define('APP_REAL_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));

// include(APP_REAL_PATH."includes/log4php/Logger.php");
// Logger::configure(APP_REAL_PATH.'includes/log4php.config.xml');
date_default_timezone_set("Asia/Taipei");
require_once("includes/config.php");
// require_once("includes/MySQLClass.php");
require_once("includes/MySmarty.php");
// require_once("includes/lib_common.php");

function exception_handler($ex) {
	if(ini_get('display_errors') == 1){
		throw $ex;
	}else{
		header("HTTP/1.1 500 Internal Service Error");
		readfile("error_page/500.html");
		exit;
	}
}
set_exception_handler('exception_handler');


$smarty = new MySmarty();
//$db = new MySQLClass();
session_start();

// if (!isset($_SESSION["is_login"])){	
// 	$_SESSION["is_login"] = 0;
// 	$_SESSION["account"] = '';
// }

// if($_SESSION["is_login"]<=0 || empty($_SESSION["is_login"])){
// 	$_SESSION["is_login"]=-3;
// 	if($is_login_page != true) header("location:login.php");
// }

?>