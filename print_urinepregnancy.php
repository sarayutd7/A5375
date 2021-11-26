<?
$result_current_data = get_a_line("select * from urinepregnancy where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
$patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'");
?>
<? include('title_address_rihes.php');?>
<table width="100%" border="1" cellspacing='0'>
    <tr>
        <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
            <center><strong>Urine Pregnancy Report</strong></center>
        </td>
    </tr>
    <tr>
        <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>
    </tr>
    <tr>
        <td width="50%">
            <table width="100%" cellspacing='0' cellpadding='5' style="font-size:12px;">
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
<br>

<table width='100%' cellspacing='0' cellpadding='10'>
    <tr>
        <td style="font-size:13px; font-weight: 600;">
            <strong>Method: Urine Pregnancy test; QUICKVUE<sup>&reg;</sup> One-Step hCG Combo test</strong>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>

    <tr>
        <td align="center">
            <p>Result : <strong><?=$result_current_data['quickvue']?></strong></p>
        </td>
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
<br>
<br>
<br>
<br> 
<table width="100%">
    <tr>
        <td align="left"><small>Reference Range*: Negative</small></td>
        <td align="left">&nbsp;</td>
    </tr>
    <tr style="font-size:12px;">
        <td align="left"><small>* RIHES Pregnancy Test reference range; Version 1.0 Date 17 Aug 2017</small></td>
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
