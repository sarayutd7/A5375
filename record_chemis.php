<?
$result_current_data = get_a_line("select * from chem where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">View Chemistry </h2>
            </header>
            <div class="panel-body">
                <div class="col-lg-12 col-sm-12">
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
                                        <td valign="top">
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
                </div>
            </div>
            <? include('row_bt_control.php'); ?>
        </section>
    </div>
</div>
