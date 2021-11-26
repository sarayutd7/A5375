<?
$result_current_data = get_a_line("select * from cd4 where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
switch($_GET['task']){
    case 'view_cd4' : $panel_title = "View Immunophenotyping"; break;
    case 'edit_cd4' : $panel_title = "Edit Immunophenotyping"; break;    
        default : $panel_title = ""; break;
}
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="update_cd4.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title"><?=$panel_title?></h2>
                </header>
                <div class="panel-body">
                    <div class="col-lg-11 col-sm-12">
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
                        <hr>

                        <? include('row_remark.php'); ?>
                    </div>
                    <div class="col-lg-1 col-sm-12"></div>
                </div>
                <? include('row_bt_control.php'); ?>
            </form>
        </section>
    </div>
</div>
