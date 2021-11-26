<?
$result_current_data = get_a_line("select * from ctng where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");

if($_GET['task']=='get_print'){
//------------ log
$insert_log = "insert into ctng_log set ptid = '".$_GET['pid']."',
                                        visit_code = '".$result_current_data['visit_code']."', task = 'print| id_record=".$result_current_data['id_record']."',
                                        who_record = '".$_SESSION['session_user']."',
                                        date_record = '".date('Y-m-d H:i:s')."' ";
insert_data($insert_log); 
//----------- log  
}

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
                <span><? if($result_current_data['urine_specimen']!=''){ ?>
            <i class="fa fa-check-square-o fa-lg"></i>
            <? }else{ ?>
            <i class="fa fa-square-o fa-lg"></i>
            <? } ?>Urine Specimen</span>
            </div> 
        </div>
    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">

            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['urine_neisseria']=='ng' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                Neisseria gonorrhoeae
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
                    <?=show_date($result_current_data['urine_neisseria_date'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_neisseria_value']=='P' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Positive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_neisseria_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Negative</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_neisseria_value']=='I' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Indeterminate</span>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['urine_neisseria']=='ct' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                Chlamydia trachomatis
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
                    <?=show_date($result_current_data['date_assay_urint_ct'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_chiamydia_value']=='P' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Positive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_chiamydia_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Negative</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['urine_chiamydia_value']=='I' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Indeterminate</span>
            </div>
        </div>
    </div>
</div>

<!--  Rectal Swab Specimen  -->
<div class="row">
    <div class="col-lg-12">
        <strong>
            <? if($result_current_data['rectal_swab_specimen']=='rectal_swab'){ ?>
            <i class="fa fa-check-square-o fa-lg"></i>
            <? }else{ ?>
            <i class="fa fa-square-o fa-lg"></i>
            <? } ?>Rectal Swab Specimen</strong>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">

            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['rectal_swab_neisseria']=='ng' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                Neisseria gonorrhoeae
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
                    <?=show_date($result_current_data['rectal_swab_neisseria_date'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_neisseria_value']=='P' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Positive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_neisseria_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Negative</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_neisseria_value']=='I' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Indeterminate</span>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;
                <? if($result_current_data['rectal_swab_neisseria']=='ct' ){ ?>
                <i class="fa fa-check-square-o fa-lg"></i>
                <? }else{ ?>
                <i class="fa fa-square-o fa-lg"></i>
                <? } ?>
                Chlamydia trachomatis
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
                    <?=show_date($result_current_data['rectal_swab_chiamydia_date'])?></span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_chiamydia_value']=='P' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Positive</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_chiamydia_value']=='N' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Negative</span>
            </div>
            <div class="col-lg-2 col-sm-2 col-xs-2">
                <span>
                    <? if($result_current_data['rectal_swab_chiamydia_value']=='I' ){ ?>
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <? }else{ ?>
                    <i class="fa fa-square-o fa-lg"></i>
                    <? } ?>
                    Indeterminate</span>
            </div>
        </div>
    </div>
</div>

<? include('print_row_remark.php'); ?>
<br>
<div class="row form-group"> 
        <div class="col-xs-12 col-lg-12" style="padding-left: 30px;">
          <table width='100%'>
<? include('print_row_resported.php'); ?>
<? include('print_row_reviewed.php'); ?>
<? include('print_row_approved.php'); ?>
          </table>
    </div> 
</div>
<? include('print_row_clinician_comment.php'); ?>