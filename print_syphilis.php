<?
$result_current_data = get_a_line("select * from syphilis where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<? include('print_row_pid_visit.php'); ?>
<? include('print_row_datetime_coll.php'); ?>
<? include('print_row_datetime_recei.php'); ?>
<? include('print_row_datetime_assay.php'); ?>
<? if($_GET['task']!= 'get_print'){ ?>
<hr>
<? } ?>
<div class="row form-group"> 
    <div class=" form-inline">
        <div class="col-xs-12 col-lg-12">
            <div class="col-lg-6 col-sm-6 col-xs-6 text-left">
                <strong>Syphilis Serology</strong>
            </div> 
        </div>
    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">

            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['rpr']=='rpr' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                RPR (Screening / Non-Treponemal test)
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group form-inline">

            <div class="col-lg-3 col-sm-3 col-xs-3 text-right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Date assayed :</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <?=show_date($result_current_data['daterpr'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rpr_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Non-Reactive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rpr_value']=='R' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Reactive</span>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-3">
                <span>Titer :
                    <?=$result_current_data['titerrpr']?></span>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['rpr']=='tppa' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                TPPA (Confirmatory / Treponemal test)
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group form-inline">
            <div class="col-lg-3 col-sm-3 col-xs-3 text-right">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date assayed :</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <?=show_date($result_current_data['datetppa'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['tppa_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Non-Reactive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['tppa_value']=='R' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Reactive</span>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-3">
                <span>Titer :
                    <?=$result_current_data['titertppa']?></span>
            </div>
        </div>
    </div>
</div>

<? include('print_row_remark.php'); ?>
<br>
<? include('print_row_resported.php'); ?>
<? include('print_row_reviewed.php'); ?>
<? include('print_row_supervisor.php'); ?>
<? //include('print_row_ohtertestname.php'); ?>

<? //include('print_row_remark_default.php'); ?>

<? //include('print_row_resported.php'); ?>
<? //include('print_row_reviewed.php'); ?>
<? //include('print_row_supervisor.php'); ?>
<? include('print_row_clinician_comment.php'); ?>