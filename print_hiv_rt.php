<?
$sql_print = "select * from hiv where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' ";
$result_current_data = get_a_line($sql_print);
$patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'");


if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into hiv_log set ptid = '".$_GET['pid']."',
                                        visit_code = '".$result_current_data['visit_code']."', task = 'print| id_record=".$result_current_data['id_record']."',
                                        who_record = '".$_SESSION['session_user']."',
                                        date_record = '".date('Y-m-d H:i:s')."' ";
insert_data($insert_log); 
//----------- log  
}

?>
<? if(!empty($_GET['labpiman'])==1){ include('title_address_piman.php'); }else{ include('title_address_rihes.php'); } ?>
<table width="100%" border="1" cellspacing='0'>
    <tr>
        <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
            <center><strong>HIV Rapid Test Report</strong></center>
        </td>
    </tr>
    <tr>
        <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>
    </tr>
    <tr>
        <td width="50%">
            <table width="100%" cellspacing='0' cellpadding="5" style="font-size:12px;">
                <tr>
                    <td>PID : <strong style="font-size:13px;"><?=$result_current_data['ptid']?></strong></td>
                    <td>Visit : <strong><?=$result_current_data['visit_code']?></strong></td>
                </tr>
                <? include('print_row_datetime_coll.php'); ?>
                <? include('print_row_datetime_recei.php'); ?>
                <? include('print_row_datetime_assay.php'); ?>
                <tr>
                    <td>
                        Type of Specimen : <strong><?=$result_current_data['type_specimen']?></strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr> 
</table>
   <table width="100%" cellspacing='0' cellpadding="10">
    <tr>
        <td style="font-size:13px; font-weight: 600;">
        <strong>Method&nbsp;: &nbsp;OraQuick ADVANCE<sup>&reg;</sup> Rapid HIV-1/2 Ab Test, OraSure</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="font-sizt:16px;">
            <center>Result :&nbsp;&nbsp;<strong><?=$result_current_data['rapid']?></strong> </center>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
    </tr>
</table>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="100%">
    <tr>
        <td align="left"><small>Reference Range*: Non-Reactive</small></td>
        <td align="left"></td>
    </tr>
    <tr style="font-size:12px;">
        <td align="left"><small>* RIHES Serology Test reference range; Version 3.0 Date 15 Jan 2018</small></td>
        <td align="left"></td>
    </tr>
</table>
<br>
<? include('print_row_remark.php'); ?>
<br>
<table width='100%' style="border-spacing: 2px;    border-collapse: separate;">
    <? include('print_row_resported.php'); ?>
    <? include('print_row_reviewed.php'); ?>
    <? include('print_row_approved.php'); ?>
</table>
<br>
<? include('print_row_physician_comment.php'); ?>
