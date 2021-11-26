<?
$result_current_data = get_a_line("select * from urine where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<? include('title_address_rihes.php');?>
<table width="100%" border="1">
    <tr>
        <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
            <center><strong>Urinalysis dipstick Report</strong></center>
        </td>
    </tr>
    <tr>
        <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong></td>
    </tr>
    <tr>
        <td width="50%">
            <table width="100%" class="tableShow">
                <? include('print_row_pid_visit.php'); ?>
                <? include('print_row_datetime_coll.php'); ?>
                <? include('print_row_datetime_assay.php'); ?>
                <? include('print_row_datetime_recei.php'); ?>
                <tr>
                    <td>
                        <small>Type of Specimen : EDTA Plasma</small>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="50%"><small>&nbsp;</small></td>
    </tr>

    <tr>
        <td valign="top">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Specific gravity</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['specific_gravity']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">1.003 - 1.030</div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">pH</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['ph']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">4.5 - 8.0</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Blood</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['blood']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">Negative</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Kotones</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['kotones']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">Not available</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Glucose</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['glucose']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">Nagative</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Protien</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['protein']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">0 - 1</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Nitrite</div>
                        <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                            <?=$result_current_data['nitrite']?>&nbsp;
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-5 text-left">Not available</div>
                    </div>
                </div>
            </div>

            <!--

-->
            <!--
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Appearance gravity</div>
            <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                <?=$result_current_data['appearance']?>&nbsp;
            </div>
        </div>
    </div>
</div>
-->

            <!--
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-5 col-sm-5 col-xs-5 text-right">Red Cell</div>
            <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                <?=$result_current_data['rbc_hpf']?>&nbsp;
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-5 text-left">0 - 5 / HPF</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-5 col-sm-5 col-xs-5 text-right">White Cell</div>
            <div class="col-lg-2 col-sm-2 col-xs-2 text-center" style="border-bottom: 1px dotted #ddd;">
                <?=$result_current_data['wbc_hpf']?>&nbsp;
            </div>
            <div class="col-lg-5 col-sm-5 col-xs-5 text-left">0 - 5 / HPF</div>
        </div>
    </div>
</div>
-->
             <br>
        </td>
    </tr>

    <tr>
        <td>&nbsp;</td>
    </tr>
</table>
<br>
<? //include("notis.php"); ?>
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