<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php'); 
if($_SESSION['session_userid']!=''){ db_connect();

$sql_userLogin = "select * from user_db where user = '".$_SESSION['session_user']."'";

$result_userLogin = get_a_line($sql_userLogin);

//--------------------------------------------------
                                    
$result_userLogins = get_rsltset($sql_userLogin);
$nr_userLogins = count($result_userLogins);

//--------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------- 
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user -------------------------------------------------------------
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user -------------------------------------------------------------                                     
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user ------------------------------------------------------------- 
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------------------- 
//echo $result_userLogin['verifly'];
//if($nr_userLogin==''){ include('login.php');  }                                
if($result_userLogin['verifly']==0){ 
    echo PHPalert("คุณไม่มีสิทธ์เข้าถึงระบบ A5375 กรุณาแจ้งผู้ดูแลระบบ"); 
    $inser_log = "insert into `log` set user_login = '".$_SESSION['session_user']."', 
                                        date_time ='".date('Y-m-d H:i:s')."', 
                                        task_url = '".$_SERVER['REQUEST_URI']." | verifly = 0', ip = '".$_SERVER['REMOTE_ADDR']."'";
    insert_data($inser_log);
    echo PHPJavaScript("window.close();"); }
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user -------------------------------------------------------------
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user -------------------------------------------------------------                                     
//-------------------------------------------- ป้องกันการ เข้ามาด้วยไม่มี ข้อมูล user ------------------------------------------------------------- 
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------  
$sql_userLogin = "select * from user_db where user = '".$_SESSION['session_user']."'";
$result_userLogin = get_a_line($sql_userLogin);
function position($id){
    switch($id){
        case '1' : $txt = "Adminstration"; break;
        case '2' : $txt = "User"; break;
        case '3' : $txt = "inspector"; break;
        case '4' : $txt = "Supper Adminstration"; break;   
            default : $txt = "NULL"; break;
    }
    return $txt; 
}
function webdetail($c){
    $sql = "select * from detailproject where command = '$c' or command_short = '$c'";
    $result = get_a_line($sql);
    return $result[task];
}
?>
<html>

<head>
    <title>PRINT A5375 Report</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <? /* ?>
    <!-- Web Fonts  -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="lib/vendor/bootstrap/css/bootstrap.css" />

    <!-- Invoice Print Style 
    <link rel="stylesheet" href="lib/stylesheets/invoice-print.css" />-->
    <? */ ?>
    <link rel="stylesheet" href="lib/vendor/font-awesome/css/font-awesome.css" />
     
    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
        }

        .showLab td {
            border-collapse: collapse;
            border: 1px solid black;
        }

        .tableShow td {
            padding: 10px;
        }
@media print {
        @page {
            size: 11in 5.5in;
            margin-top: 0.5cm;
            margin-left: 1.5cm;
            margin-bottom: 0cm;
            size: portrait;
            /*tried portrait also. no effect.*/

        }
    }
    </style>
</head>

<body>
    <div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-xs-1"></div>
            <div class="col-lg-11 col-sm-11 col-xs-11">
                <div>
                    <?
                    switch($_GET['lab']){
                        case 'hiv_rt' :  
                            include('print_hiv_rt.php');  break;
                        case 'hiv_eia': 
                            include('print_hiv_eia.php');  break;
                        case 'hiv_rna': 
                            include('print_hiv_rna.php');  break;
                        case 'hiv_sero': 
                            include('print_hiv_sero.php');  break;
                        case 'cd4': 
                            include('print_cd4.php');  break;
                        case 'urine': 
                            include('print_urine.php');  break;
                        case 'urinepregnancy': 
                            include('print_urinepregnancy.php');  break;
                        case 'syphilis': 
                            include('print_syphilis.php');  break;
                        case 'hepatitis': 
                            include('print_hepatitis.php');  break;
                        case 'ctng': 
                            include('print_ctng.php');  break;
                        case 'hemato': 
                            include('print_hemato.php');  break;
                        case 'chemis': 
                            include('print_chemis.php');  break;
                            
                       default : include('blank.php'); break; 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<? if($_GET['lab'] == 'cd4'){ include('_footer_repeat_datetime.php'); include('_js_cd4.php');  } ?>
<? if($_GET['lab'] == 'hemato'){ include('_footer_repeat_datetime.php'); /*include('_js_hemato.php');*/  } ?>
<? if($_GET['lab'] == 'chemis'){ include('_footer_repeat_datetime.php'); /*include('_js_chemis.php');*/  } ?>
<script> 
    window.print();
</script>
</body>

</html>

<?php } else { include('login.php'); } ?>