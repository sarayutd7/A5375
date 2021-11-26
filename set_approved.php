<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
if($_SESSION['session_userid']!=''){ 
    db_connect();
    $get_data_current = get_a_line("select * from user_db where id = '".$_GET['uid']."' ");
    if($get_data_current['verifly']==1){
        $verifly = 0;
        $update_data = "update user_db set verifly = 0 where id = '".$_GET['uid']."' ";
    }else{
        $verifly = 1;
        $update_data =  "update user_db set verifly = 1 where id = '".$_GET['uid']."' ";
    }
    
    update_data($update_data);
    
    $insert_log = "insert into user_db_log set titlename = '".$get_data_current['titlename']."',
                                               fristname = '".$get_data_current['fristname']."',
                                               lastname = '".$get_data_current['lastname']."', 
                                               email = '".$get_data_current['email']."', 
                                               user = '".$get_data_current['user']."', 
                                               password = '".$get_data_current['password']."', 
                                               register_date = '".$get_data_current['register_date']."',
                                               last_update = '".date('Y-m-d H:i:s')."',
                                               status = '".$get_data_current['status']."',
                                               verifly = '$verifly',
                                               verifly_date = '".date('Y-m-d H:i:s')."',
                                               action = 'edit verifly',
                                               who = '".$_SESSION['session_user']."' ";
    insert_data($insert_log);
}else{
    echo PHPgourl('login.php');
}
?>