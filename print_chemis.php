<?
$result_current_data = get_a_line("select * from chem where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");

if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into chem_log set ptid = '".$_GET['pid']."',
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
        <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
            <center><strong>Chemistry Report</strong></center>
        </td>
    </tr>
    <tr>
        <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>
    </tr>
    <tr>
        <td>
            <table width="100%" cellspacing='0' cellpadding='5'>
                <tr>
                    <td width="80%" valign="top">
                        <table width="100%" cellspacing='0' cellpadding='3' style="font-size:12px;">
                            <? include('print_row_pid_visit.php'); ?>
                            <? include('print_row_datetime_coll.php'); ?> 
                            <? include('print_row_datetime_recei.php'); ?>
                            <? include('print_row_datetime_assay.php'); ?>
                            <tr>
                                <td>
                                    Type of Specimen : <strong>Serum</strong>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td  valign="top">
                        <table width="100%" cellspacing='0' cellpadding='3' style="font-size:12px;">
                            <? include('print_row_fasting.php'); ?> 
                            <? include('print_row_age.php'); ?>
                            <? include('print_row_weight.php');?> 
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>  
</table>
<br>
<? include("static_table_chemistries.php"); ?>
<br>
<? include("notis_chemis.php"); ?>
<br>
<? include('print_row_remark.php'); ?>
<br>
<table width='100%' style="font-size:12px;" cellspacing='0' cellpadding='5'>
    <? include('print_row_resported.php'); ?>
    <? include('print_row_reviewed.php'); ?>
    <? include('print_row_approved.php'); ?>
</table>
<br>
<table width="100%" border="2">
    <tr>
        <td style="padding:5px;">
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

<table width="100%">
    <tr>
        <td align="right">
            <small><i><? include('version.php'); ?></i></small>
        </td>
    </tr>
</table>
