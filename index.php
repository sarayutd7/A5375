<?

ob_start();

session_start();

include('conn/config.php');

include('conn/function.inc.php'); 
// $_SESSION['session_userid'];
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

//echo $nr_userLogins;

//echo $result_userLogin['status'];                                   

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

<? if($nr_userLogins>0){ ?> 

<!doctype html>

<html class="fixed sidebar-left-collapsed">



<head>

    <!-- Basic -->

    <meta charset="UTF-8">



    <title><?=webdetail(title)?></title>

    <meta name="keywords" content="<?=webdetail(keywords)?>" />

    <meta name="description" content="<?=webdetail(description)?>">

    <meta name="author" content="<?=webdetail(title)?>">

    <meta name="rootbot" content="<?=webdetail(rootbot)?>" />

    <link rel="shortcut icon" href="images/icon.ico" />

    <?php 

           switch($_GET['task']){ 

               case 'showall' : include('_head_table.php'); break;

//               case 'findPID' : include('_head_repeat_table.php'); break;

               case 'viewuser' : include('_head_repeat_switches.php'); break;

                   case 'viewstatus' : include('_head_repeat_modal.php'); break;

                   case 'findPID' :

                   case 'create_hiv_rt' : 

                   case 'create_hiv_eia' : 

                   case 'create_hiv_rna' : 

                   case 'create_hiv_sero' :

                   case 'create_cd4' : 

                   case 'create_urine' : 

                   case 'create_urinepregnancy' :

                   case 'create_syphilis' : 

                   case 'create_ctng' : 

                   case 'create_hepatitis' : 

                   case 'create_hemato' : 

                   case 'create_chemis' : 

                   include('_head_repeat_datetime.php'); break;

                   

               default : include('_head_default.php'); break;

           }  

                                    



    ?>

</head>



<body>

    <section class="body">



        <!-- start: header -->

        <?php include('top_bar.php');?>

        <!-- end: header -->



        <div class="inner-wrapper">

            <!-- start: sidebar -->

            <?php include('left_menu.php'); ?>

            <!-- end: sidebar -->



            <section role="main" class="content-body">

                <?php include('breadcrumb.php'); ?>



                <?php

                          switch ($_GET['task']) {

                              case 'findPID' : include('findpid.php'); break;

                              case 'regis': include('main_regis.php'); break;

                                case 'regis_data' : include('regispid.php'); break;

                              case 'edit_pid' : include('edit_patient.php'); break;

                                case 'update_pid' : include('update_patient.php'); break;

                                  

                              case 'record' : include('records.php'); break;

                                  

                              case 'setprofile' : include('profile.php'); break;

                                  case 'editprofileuser' : include('profile_user.php'); break;

                              case 'profile_data': include('profile_save.php'); break;

                              

                              case 'setting': include('setting.php'); break;

                                  

                            // ---------------- show all for status Lab Up -----------

                              case 'showall' : include('showall.php'); break;

                                  

                            // ---------------- case Lab -----------

                              case 'create_hiv_rt':include('form_hiv_rt.php');break; //blank.php

                              case 'create_hiv_eia' : include('form_hiv_eia.php'); break;

                              case 'create_hiv_rna' : include('form_hiv_rna.php'); break;   

                              case 'create_syphilis' : include('form_syphilis.php'); break;

                              case 'create_ctng' : include('form_ctng.php'); break;

                              case 'create_hepatitis' : include('form_hepatitis.php'); break;

                              case 'create_cd4' : include('form_cd4.php'); break;

                              case 'create_urine' : include('form_urine.php'); break;

                              case 'create_urinepregnancy' : include('form_urinepregnancy.php'); break;  

                              case 'create_hemato' : include('form_hemato.php'); break; 

                              case 'create_chemis' : include('form_chemis.php'); break; 

                              

                              case 'create_hiv_sero' : include('form_hiv_sero.php'); break;

                                  

                                  //----------------- edit page

                                    case 'edit_hiv_rt': include('form_edit_hiv_rt.php'); break;

                                    case 'edit_hiv_eia': include('form_edit_hiv_eia.php'); break; //edit_hiv_eia

                                    case 'edit_hiv_rna': include('form_edit_hiv_rna.php'); break; //edit_hiv_rna

                                    case 'edit_cd4': include('form_edit_cd4.php'); break;//edit_hiv_cd4

                                    case 'edit_urine': include('form_edit_urine.php'); break; //edit_urine

                                    case 'edit_urinepregnancy': include('form_edit_urinepregnancy.php'); break; //edit_urine

                                    case 'edit_syphilis': include('form_edit_syphilis.php'); break;//edit_syphilis

                                    case 'edit_hepatitis': include('form_edit_heptitis.php'); break;//edit_syphilis

                                    case 'edit_ctng': include('form_edit_ctng.php'); break;//edit_syphilis

                                  

                                    case 'edit_hemato': include('form_edit_hemoto.php'); break;//edit_syphilis

                                    case 'edit_chemis': include('form_edit_chemis.php'); break;//edit_syphilis

                                    

                                    case 'edit_hiv_sero' : include('form_edit_hiv_sero.php'); break;

                                  //----------------- edit page case end

                                  //----------------- view & print page

                                    case 'view_hiv_rt': include('record_hiv_rt.php'); break;

                                    case 'view_hiv_eia': include('record_hiv_eia.php'); break; //edit_hiv_eia

                                    case 'view_hiv_rna': include('record_hiv_rna.php'); break; //edit_hiv_rna

                                    case 'view_cd4': include('record_cd4.php'); break;//edit_hiv_cd4

                                    case 'view_urine': include('record_urine.php'); break; //edit_urine

                                    case 'view_urinepregnancy' : include('record_urinepregnancy.php'); break; //edit_urine

                                    case 'view_syphilis': include('record_syphilis.php'); break;//edit_syphilis

                                    case 'view_hepatitis': include('record_heptitis.php'); break;//edit_syphilis

                                    case 'view_ctng': include('record_ctng.php'); break;//edit_syphilis

                                    case 'view_hemato': include('record_hemoto.php'); break;//edit_syphilis

                                    case 'view_chemis': include('record_chemis.php'); break;//edit_syphilis 

                                    

                                    case 'view_hiv_sero' : include('record_hiv_sero.php'); break;

                                  //----------------- view & print record case end

                                  //----------------- delete page

                                    case 'delete_hiv_rt': 

                                    case 'delete_hiv_eia': 

                                    case 'delete_hiv_rna': 

                                        case 'delete_hiv_sero' :

                                    case 'delete_cd4': 

                                    case 'delete_urine': 

                                      case 'delete_urinepregnancy' :

                                    case 'delete_syphilis': 

                                    case 'delete_hepatitis': 

                                    case 'delete_ctng': 

                                    case 'delete_hemato': 

                                    case 'delete_chemis': include('delete_record.php'); break;//edit_syphilis

                                  //----------------- delete page case end

                                  //------------------ preview Print 

                                    

                                    case 'print_hiv_rt'  :

                                    case 'print_hiv_eia' : 

                                    case 'print_hiv_rna' : 

                                    case 'print_hiv_sero' :

                                    case 'print_cd4' : 

                                    case 'print_urine' : 

                                    case 'print_urinepregnancy' : 

                                    case 'print_ctng' : 

                                    case 'print_hemato' : 

                                    case 'print_chemis' : 

                                    case 'print_syphilis' : 

                                    case 'print_hepatitis' : 

                                  include('preview_record.php'); break;

                                  //------------------ preview Print End

                                  //------------------------- get print 

                              case 'get_print' :include('print.php'); break;

                                  //------------------------- get print end

                              case 'sentmail_chemis' : 

                              case 'viewmail_chemis' : include('sentmail_chemis.php'); break;

                                  

                              case 'sentmail_hemato' : 

                              case 'viewmail_hemato' : include('sentmail_hemato.php'); break;    

                            //----------------- Export  ------------

                              case 'export':

                                  switch($_GET['q']){

                                      case 'excel' : include('export.php'); break;

                                    

                                      default: include('Error404.php'); break;

                                  }

                                  

                                  break;

                            //----------------- Control  ------------ 

                              case 'viewuser': include('user.php'); break;

                              case 'viewstatus': include('status.php'); break;  

                              case 'create_status': include('status_form.php'); break;

                              case 'record_status' : include('status_save.php'); break;

                              case 'update_status' : include('edit_status.php'); break;

                              case 'editdata_status' :include('status_update.php'); break; 

                              case 'delete_status' : include('status_delete.php'); break; 

                                  

                            default: include('main.php'); break;

                          } ?>







                <!-- end: page -->

            </section>

        </div>





    </section>

    <?php //include('right_menu.php');?>

    <?php 

           switch($_GET['task']){ 

               case 'showall' : include('_footer_table.php'); break;

//               case 'findPID' : include('_footer_repeat_table.php'); break;

               case 'viewuser' : include('_footer_repeat_switches.php'); break;

                   

               case 'viewstatus' : include('_footer_repeat_modal.php'); break;

               case 'findPID' : case 'edit_pid' : include('_footer_repeat_datetime.php'); break;

                case 'create_hiv_rt' :

                case 'create_hiv_eia' :

                case 'create_hiv_rna' :

                case 'create_hiv_sero' :

                case 'create_cd4' : 

                case 'edit_cd4' : 

                case 'view_cd4' : 

                case 'print_cd4' :

                   include('_footer_repeat_datetime.php'); include('_js_cd4.php'); break;

                case 'create_urine' :

                case 'create_urinepregnancy' :  

                case 'create_syphilis' :

                case 'create_ctng' :

                case 'create_hepatitis' : include('_footer_repeat_datetime.php'); break;

                case 'create_hemato' :

                   case 'edit_hemato' : 

                    case 'view_hemato' : 

                    case 'print_hemato' :

                   include('_footer_repeat_datetime.php'); include('_js_hemato.php'); break; 

                   

                case 'create_chemis' :

                   case 'edit_chemis' : 

                    case 'view_chemis' : 

                    case 'print_chemis' : include('_footer_repeat_datetime.php'); include('_js_chemis.php'); break; 

               case 'export' : include('_footer_default.php'); include('_js_con.php'); break;

               

               default : include('_footer_default.php'); break;

           }                     

    ?>

    <script>

    <?  if ($_GET['task'] == 'export') { ?>

        var page = 'source_data.php';

        var param = "Lab=<?=$_GET['Lab']?>&q=<?=$_GET['q']?>";

        $.ajax({

            url: page,

            type: 'GET',

            dataType: 'HTML',

            data: param,

            success: function(data) {

                $('#showBox').empty();

                $('#showBox').append(data);

            }

        });



        <? } else if($_GET['task'] == 'setting') {  ?> 

        function saveLab(id,val){ 

            var page = 'savesettinglab.php';

            var param = "Lab="+ id +"&v="+val;

            //alert(param);

            $.ajax({

                url: page,

                type: 'GET',

                dataType: 'HTML',

                data: param,

                success: function(data) { 

                    

                }

            });  

        }

        

        function saveSetting(id,val){

          var page = 'savesetting.php';

            var param = "item="+ id +"&v="+val;

            // alert(param);

            $.ajax({

                url: page,

                type: 'GET',

                dataType: 'HTML',

                data: param,

                success: function(data) { 

                     $('#box_'+id).html("<i class='fa fa-check text-success'></i> Save Complete.");  

                    

                }

            });   

        } 

      

        <? }?>



		var timeOutMin = "50"; //หน่วยเป็นนาที
		var timeOut = (timeOutMin==null)?30:timeOutMin;
		var timeBefore5 = timeOut-5;
		var timeAA = new Date();
		var timeB = new Date(timeAA.getTime() + timeOut * 60000);

		function countDown() 
		{  
			    timeA = new Date();
		    	var timeDifference = timeB-timeA;
		    	if(timeDifference>=0)
		    	{
		        	timeDifference=timeDifference/1000;
		        	timeDifference=Math.floor(timeDifference);
		        	var wan=Math.floor(timeDifference/86400);
			        var l_wan=timeDifference%86400;
			        var hour=Math.floor(l_wan/3600);
			        var l_hour=l_wan%3600;
		        	var minute=Math.floor(l_hour/60);
			        var second=l_hour%60;
		        
				     if(minute == 0 || minute < 0)
			        {
					     alert('ระบบขาดการเชื่อมต่อเกิน '+timeOutMin+' นาที กรุณา login ใหม่อีกครั้ง');
					     top.location.href = 'http://dmu.rihes.cmu.ac.th/smartlab/logout.php';	
		         	}
				}
				else
				{
					clearInterval(iCountDown);
					alert('ระบบขาดการเชื่อมต่อเกิน '+timeOutMin+' นาที กรุณา login ใหม่อีกครั้ง');
					top.location.href = 'http://dmu.rihes.cmu.ac.th/smartlab/logout.php';		
				}
		}

		var iCountDown = setInterval("countDown()", 10000);   //ทุกๆ 10 วินาที วิ่งเช็ค session timeout 1 ครั้ง
</script>
 

</body>



</html>

<? 
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//---------------------------------- Log ----------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
$inser_log = "insert into `log` set user_login = '".$_SESSION['session_user']."' ,  task_url = '".$_SERVER['REQUEST_URI']."',  date_time ='".date('Y-m-d H:i:s')."', ip = '".$_SERVER['REMOTE_ADDR']."'";
insert_data($inser_log);
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//---------------------------------- Log ----------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
                         } else { 

    unset ($_SESSION['session_userid']);

	unset ($_SESSION['session_user']);

	unset ($_SESSION['session_status']); include('login.php'); }  } ?>

<? /* ?>

check User 

<? */ ?> 