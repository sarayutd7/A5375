<?

$result_current_data = get_a_line("select * from hemato where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");

if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into hemato_log set ptid = '".$_GET['pid']."',
                                        visit_code = '".$result_current_data['visit_code']."', task = 'print| id_record=".$result_current_data['id_record']."',
                                        who_record = '".$_SESSION['session_user']."',
                                        date_record = '".date('Y-m-d H:i:s')."' ";
insert_data($insert_log); 
//----------- log  
}

?>

<? include('title_address_rihes.php');?>

<table width="100%" border="1" cellspacing='0'>

    <tr>

        <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0"><center><strong>Hematology Report</strong></center></td>

    </tr>

    <tr>

        <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>

    </tr>

    <tr>

      <td width="50%">

        <table width="100%" cellspacing='0' cellpadding='5' style="font-size:12px;">

         <? include('print_row_pid_visit.php'); ?>

         <? include('print_row_datetime_coll.php'); ?>

                <? include('print_row_datetime_recei.php'); ?>

                <? include('print_row_datetime_assay.php'); ?>

         <tr>

             <td>

                 Type of Specimen : <strong>EDTA Blood</strong>

             </td>

         </tr>

         </table>

      </td>  

    </tr>

    <tr>

        <td width="50%">

            <table width="100%" border="0" cellspacing='0' cellpadding='5'>

                <tr>

                    <td>

                        <small>Sex : <strong><? if($result_current_data['gender']=='M') { echo "Male"; } ?>

                <? if($result_current_data['gender']=='F') { echo "Female"; } ?></strong> 

            &nbsp;&nbsp;&nbsp;&nbsp;

                   Age : <? if($result_current_data['age']!='') { ?> <span><strong><?=$result_current_data['age']?></strong> yr</span><? } ?></small>

                    </td>

                </tr>

            </table>

        </td>

    </tr>

</table>

<br>

<? 
switch($result_current_data['date_coll']){
                    case  $result_current_data['date_coll']<='2019-09-24' : include("static_table_hematology.php"); break;
                    case  $result_current_data['date_coll']>='2019-09-25' : include("static_table_hematology_v2.php"); break;
                    default : include("static_table_hematology.php"); break;
                }
 ?> 

<? include("notis_hemato.php"); ?>

<br>

<? include('print_row_remark.php'); ?>

<br>

<table width='100%' cellspacing='0' cellpadding='2' style="font-size:12px;">

    <? include('print_row_resported.php'); ?>

    <? include('print_row_reviewed.php'); ?>

    <? include('print_row_approved.php'); ?>

    

    

</table>

<br>

<table width="100%" border="1" cellspacing='0' cellpadding='2' style="font-size:12px;">

    <tr>

        <td>

            <table width="100%">

                <tr>

                    <td colspan="3">

                        <div>Clinician Use ONLY</div>

                    </td>

                </tr>

                <tr>

                    <td colspan="3">&nbsp;</td>

                </tr> 

                <tr>

                    <td width="25%">

                        <div><small>Clinician Initial/Date : </small></div>

                    </td>

                    <td width="25%" style="border-bottom:solid #CCC 1px;">&nbsp;</td>

                    <td width="50%">&nbsp;</td>

                </tr>

                <tr>

                    <td colspan="3" hight=5px;></td>

                </tr>

            </table>

        </td>

    </tr>

</table>



<table width="100%" cellspacing='0' cellpadding='0' style="font-size:10px;">

    <tr>

        <td align="right">

            <small><i>
                <?
                switch($result_current_data['date_coll']){
                    case  $result_current_data['date_coll']<='2019-09-24' : include('version.php'); break;
                    case  $result_current_data['date_coll']>='2019-09-25' : include('version_for_hemato.php'); break;
                    default : include('version.php'); break;
                }
                ?>
                    <? //include('version.php'); ?></i></small>

        </td>

    </tr>

</table>