<?php
include('conn/config.php');
include('conn/function.inc.php'); 
header('Content-Type: text/html; charset=utf-8');
db_connect();
$titlename = $_POST['titlename'];
$firstname = $_POST['fname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$passwordC = $_POST['pwd_confirm'];
$status = $_POST['status'];
//exit();
if(trim($password) == trim($passwordC)){ $endcry = md5(trim($password)); 

$user_list = "select * from user_db where user = '".$username."'";
$user_current = get_rsltset($user_list);
if($user_current >0){
    echo PHPalert('User นี้มีอยู่ในระบบแล้ว ไม่สามารถใช้งานชื่อ User นี้ได้');
    echo PHPback();
}else{
    $exp_text = explode('|',$_POST['position']);
    $insert_data = "insert into user_db set titlename = '$titlename',
                                              fristname = '$firstname',
                                              lastname = '$lastname',
                                              email = '$email',
                                              user = '$username',
                                              password = '".$endcry."',
                                              register_date = '".date('Y-m-d H;i:s')."',
                                              status = '".$status."',
                                              verifly = '0'";
    insert_data($insert_data);
    echo PHPalert('ระบบทำการบันทึกข้อมูลเรียบกรุณา รอการอนุมัติการใช้งาน');
    echo PHPgourl('http://dmu.rihes.cmu.ac.th/impaact2014/index.php'); 
}
                                    
                                    }else{ 
echo PHPalert('รหัสผ่านไม่ถูกต้องกรุณาเช็คข้อมุลอีกครั้ง');
    echo PHPback();
}
?>