<?
$result_current_data = get_a_line("select * from hemato where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">View Hematology</h2>
            </header>
            <div class="panel-body">
                <div class="col-lg-12 col-sm-12">
                    <? include('title_address_rihes.php');?>
                    <table width="100%" border="1" cellspacing='0'>
                        <tr>
                            <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
                                <center><strong>Hematology Report</strong></center>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <table width="100%" cellspacing='0' cellpadding='5' style="font-size:12px;">
                                    <? include('print_row_pid_visit.php'); ?>
                                    <? include('print_row_datetime_coll.php'); ?>
                                    <? include('print_row_datetime_assay.php'); ?>
                                    <? include('print_row_datetime_recei.php'); ?>
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
                                            <small>Gender : <strong>
                                                    <? if($result_current_data['gender']=='M') { echo "Male"; } ?>
                                                    <? if($result_current_data['gender']=='F') { echo "Female"; } ?></strong>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                Age :
                                                <? if($result_current_data['age']!='') { ?> <span><strong><?=$result_current_data['age']?></strong> yr</span>
                                                <? } ?></small>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <? include("static_table_hematology.php"); ?>
                </div>
            </div>
            <? include('row_bt_control.php'); ?>
        </section>
    </div>
</div>
