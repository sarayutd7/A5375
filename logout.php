<?
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
db_connect();

if(!empty($_SESSION['session_user']) && !empty($_SESSION['session_userid'])){
		$update_sql = "update login set log_logouttime = '".date('Y-m-d H:i:s')."',
										log_iplogout = '".$_SERVER['REMOTE_ADDR']."',
										log_status = 'logout complete'
                                 where log_username = '".$_SESSION['session_user']."' and log_sessionid = '".$_SESSION['session_userid']."'";
		update_data($update_sql);
	}
    unset ($_SESSION['session_userid']);
	unset ($_SESSION['session_user']);
	unset ($_SESSION['session_status']);
	session_destroy();
echo PHPgourl('index.php'); 
?>