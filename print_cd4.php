<?
$result_current_data = get_a_line("select * from cd4 where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");


if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into cd4_log set ptid = '".$_GET['pid']."',
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
            <center><strong> Immunophenotyping Report</strong></center>
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
                        Type of Specimen : <strong>EDTA Blood</strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br>
<table width="100%" border="0" cellspacing=0 cellpadding='5'>
    <tr>
        <td>
            <strong>&nbsp;Immunophenotyping result (Determine by machine & Use dual platform)</strong>
        </td>
    </tr>

    <tr>
        <td valign="top" align="center">
            <table width="90%" border="1" cellspacing='0' cellpadding='5' style="font-size:13px;">
                <tr> 
                    <th align="center"><u>Test Name</u></th>
                    <th align="center"><u>Results</u></th>
                    <th align="center"><u>Unit</u></th>
                    <th align="center"><u>Reference Range</u></th>
                </tr>
                <tr>
                    <td>% Lymphocytes</td>
                    <td align="center" >
                        <?=$result_current_data['lymphocytes']?>
                    </td>
                    <td align="center">%</td>
                    <td align="center">23 - 54</td>
                </tr>

                <tr>
                    <td>% T helper cells (CD4)</td>
                    <td align="center" >
                        <?=$result_current_data['cd4_value']?>
                    </td>
                    <td align="center">%</td>
                    <td align="center">22 - 50</td>
                </tr>
                <tr>
                    <td>% T suppressor cells (CD8)</td>
                    <td align="center" >
                        <?=$result_current_data['cd8_value']?>
                    </td>
                    <td align="center">%</td>
                    <td align="center">18 - 44</td>
                </tr>
                <tr>
                    <td>WBC counts</td>
                    <td align="center" >
                        <?=number_format($result_current_data['wbc'])?>
                    </td>
                    <td align="center">cells/mm<sup>3</sup></td>
                    <td align="center">4,200 - 10,900</td>
                </tr>

            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><strong>Absolute Cell Count (By Manual Calculation)</strong></td>
    </tr>
    <tr>
        <td valign="top" align="center">
            <table width="90%" border="1" cellspacing='0' cellpadding='5' style="font-size:13px;">
                <tr> 
                    <th align="center"><u>Test Name</u></th>
                    <th align="center"><u>Results</u></th>
                    <th align="center"><u>Unit</u></th>
                    <th align="center"><u>Reference Range</u></th>
                </tr>
                <tr>
                    <td >Absolute T helper cells (CD4)</td>
                    <td align="center" >
                        <?=number_format($result_current_data['percent_cd4'])?>
                    </td>
                    <td align="center">cells/mm<sup>3</sup></td>
                    <td align="center">410 - 1,034</td>
                </tr>
                <tr>
                    <td>Absolute T suppressor cells (CD8)</td>
                    <td align="center" >
                        <?=number_format($result_current_data['percent_cd8'])?>
                    </td>
                    <td align="center">cells/mm<sup>3</sup></td>
                    <td align="center">423 - 1,034</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br> 
<table width="100%" border="0" celspacing='0' cellpadding=0 style="font-size:13px;">
    <tr>
        <td>* RIHES Adult reference range; Version 9.0 Date 08 Jan 2018</td>
        <td>&nbsp;</td>
    </tr>
</table>

<br>
<? include('print_row_remark.php'); ?>
<br>
<table width='100%' cellspacing='0' cellpadding='5' style="font-size:12px;">
    <? include('print_row_resported.php'); ?>
    <? include('print_row_reviewed.php'); ?>
    <? include('print_row_approved.php'); ?>
</table>
<br>
<? include('print_row_physician_comment.php'); ?>
