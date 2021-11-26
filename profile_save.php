<?
if($_POST['currentpass'] == $result_userLogin['password']){
    
    if(trim($_POST['newpass'])!=''){
        if(trim($_POST['newpass']) == trim($_POST['confirmpass'])){
            $password = md5(trim($_POST['confirmpass']));
            $action = 'Complete';
        }else{
            $password = $result_userLogin['password'];
            $action = 'Error';
            
        }
    }else{
        $password = $result_userLogin['password'];
        $action = 'Complete';
    }
}
$update_data = "update user_db set titlename = '".$_POST['titlename']."',
                                   fristname = '".$_POST['firstname']."',
                                   lastname = '".$_POST['lastname']."',
                                   email = '".$_POST['email']."', 
                                   password = '$password', 
                                   status = '".$_POST['statusID']."',
                                   last_update = '".date('Y-m-d H:i:s')."'
                where id = '".$_POST['uid']."' "; 
if($action=='Complete'){
    update_data($update_data);
    echo PHPalert("ระบบบันทึกข้อมูลเรียบร้อย");
}elseif($action=='Error'){
    echo PHPalert("ระบบไม่สามารถบันทึกการแก้ไขรหัสผ่านใหม่ของท่านได้");
}else{
    echo PHPalert("ระบบไม่สามารถบันทึกการแก้ไขรหัสผ่านใหม่ของท่านได้");
}
//------------------- get current data
$current_data = get_a_line("select * from user_db where id = '".$_POST['uid']."' ");
//-------------------- log 
$insert_log = "insert into user_db_log set titlename = '".$current_data['titlename']."',
                                               fristname = '".$current_data['fristname']."',
                                               lastname = '".$current_data['lastname']."', 
                                               email = '".$current_data['email']."', 
                                               user = '".$current_data['user']."', 
                                               password = '".$password."', 
                                               register_date = '".$current_data['register_date']."',
                                               last_update = '".date('Y-m-d H:i:s')."',
                                               status = '".$current_data['status']."',
                                               verifly = '".$current_data['verifly']."',
                                               verifly_date = '".$current_data['verifly_date']."',
                                               action = 'edit profile',
                                               who = '".$_SESSION['session_user']."' ";
    insert_data($insert_log);
//-------------------- log end
//echo PHPgourl('index.php');
echo PHPback();
?>