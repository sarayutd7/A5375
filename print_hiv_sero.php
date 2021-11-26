<?
$result_current_data = get_a_line("select * from hiv_sero where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");


if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into hiv_sero_log set ptid = '".$_GET['pid']."',
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
            <center><strong>HIV Confirmatory Test Report</strong></center>
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
<table width="100%" cellspacing='0' cellpadding='5'>
    <tr>
        <td>
            <strong><span>Method : Geenius<sup><label>TM</label></sup> HIV-1/2 Confirmatory Assay (Bio-Rad)</span></strong>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="center">
            <table width="70%" border="1" cellspacing='0' cellpadding='5' style="font-size:13px;">
                <tr>
                    <td colspan="6" align="center"><strong><label>HIV-1/HIV-2 Specific Band</label></strong></td>
                </tr>
                <tr>
                    <td align="center"><strong><label><span>gp36</span></label></strong></td>
                    <td align="center"><strong><label><span>gp140</span></label></strong></td>
                    <td align="center"><strong><label><span>p31</span></label></strong></td>
                    <td align="center"><strong><label><span>gp160</span></label></strong></td>
                    <td align="center"><strong><label><span>p24</span></label></strong></td>
                    <td align="center"><strong><label><span>gp41</span></label></strong></td>
                </tr>
                <tr>
                    <td align="center"><?=seletion_txt('gp36',$result_current_data['gp36'])?>
                    </td>
                    <td align="center">
                        <label><?=seletion_txt('gp140',$result_current_data['gp140'])?></label>
                    </td>
                    <td align="center">
                        <label><?=seletion_txt('p31',$result_current_data['p31'])?></label>
                    </td>
                    <td align="center">
                        <label><?=seletion_txt('gp160',$result_current_data['gp160'])?></label>
                    </td>
                    <td align="center">
                        <label><?=seletion_txt('p24',$result_current_data['p24'])?></label>
                    </td>
                    <td align="center">
                        <label><?=seletion_txt('gp41',$result_current_data['gp41'])?></label>
                    </td>
                </tr>
            </table>
        </td>
    </tr> 
    <tr>
        <td align="center" cellspacing='3' cellpadding='5'><br>
            <table  style="font-size:14px;">
               <tr>
                    
                   <td colspan="2" align="left">&nbsp;&nbsp;</td>
                   <td>&nbsp;</td>
               </tr>
                <tr>
                    <td width="22%" align="left">&nbsp;Result :</td>
                    <td width="20%" align="right">HIV-1 :</td>
                    <td width="58%"><label><strong><?=$result_current_data['hiv1']?></strong></label></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">HIV-2 :</td>
                    <td><label><strong><?=$result_current_data['hiv2']?></strong></label></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">Assay Interpretation :</td>
                    <td><label><strong><?=$result_current_data['interpretation']?></strong></label></td>
                </tr>
            </table>
        </td>
    </tr>
</table> 
<br>
<br>
<br> 
<table width="100%">
    <tr>
        <td align="left"><small>Reference Range*: Negative</small></td>
        <td align="left"><label>&nbsp;</label></td>
    </tr>
    <tr style="font-size:12px;">
        <td align="left"><small>* RIHES Serology Test reference range; Version 3.0 Date 15 Jan 2018</small></td>
        <td align="left"><label>&nbsp;</label></td>
    </tr>
</table>
<br>
<? include('print_row_remark.php'); ?>
<br>
<table width='100%'>
    <? include('print_row_resported.php'); ?>
    <? include('print_row_reviewed.php'); ?>
    <? include('print_row_approved.php'); ?>
</table>
<br>
<? include('print_row_physician_comment.php'); ?>
