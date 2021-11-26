<?
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
db_connect();
//--------------------------------------
$username = $_POST['Username'];
$password = $_POST['Password'];
//--------------------------------------
	$pass = trim($password); // how to fix code base64_decode
	$hashpass = md5($pass);
	 
//--------------------------------------
$sql_user_login = "select  * from user_db where user = '".$username."' and verifly = '1'";
$result_user_login = get_a_line($sql_user_login);
 

//-----------------------
//echo $hashpass. "           ".$result_user_login['password']; exit();
//-----------------------

//$result_user_login['password'];
if($hashpass == $result_user_login['password']){
	//---------------------- Set Session Login
	$_SESSION['session_userid'] = session_id().date('Y-m-d').time();            //สร้าง session สำหรับเก็บค่า ID
	$_SESSION['session_user'] = $result_user_login['user'];      //สร้าง session สำหรับเก็บค่า Username
	$_SESSION['session_status'] = $result_user_login['status'];
	$_SESSION['session_password'] = $result_user_login['password']; 
	//---------------------- Set Session Login
	//-------------------------------------------------
	if(!empty($_SESSION['session_user']) && !empty($_SESSION['session_userid'])){
		$insert_log = "insert into login set log_username = '".$_SESSION['session_user']."',
											 log_logintime = '".date('Y-m-d H:i:s')."',
											 log_ip = '".$_SERVER['REMOTE_ADDR']."',
											 log_status = 'complete',
											 log_sessionid = '".$_SESSION['session_userid']."'";
		insert_data($insert_log);
	}
	//-------------------------------------------------
	//-------------------------------------------------
	   /*$update_data = "update user_db set loginstatus ='1', session_id = '".$_SESSION['session_id']."' where username = '".$_SESSION['session_user']."'";

	   update_data($update_data);*/

	echo PHPgourl('index.php');
	//-------------------------------------------------
}else{
	//-------------------------------------------------
	  $insert_log = "insert into login set log_username = '$username', log_logintime = '".date('Y-m-d H:i:s')."', log_ip = '".$_SERVER['REMOTE_ADDR']."', log_status = 'hacker', log_sessionid = '".$_SESSION['session_id']."'";
		insert_data($insert_log);

	//-------------------------------------------------
	session_destroy();
	echo PHPalert('Username Or Password ไม่ถูกต้อง');
	echo PHPgourl('index.php');
}
?>