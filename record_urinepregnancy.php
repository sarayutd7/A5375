<?
$result_current_data = get_a_line("select * from urinepregnancy where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">View Urine Pregnancy </h2>
            </header>

            <div class="panel-body">
                <div class="col-lg-11 col-sm-12">
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
                    <? include('row_remark.php'); ?>
                </div>
            </div>
            <? include('row_bt_control.php'); ?>
        </section>
    </div>
</div>
