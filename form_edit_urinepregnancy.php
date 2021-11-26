<?
$result_current_data = get_a_line("select * from urinepregnancy where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Urine Pregnancy Report </h2>
            </header>
            <form action="update_urinepregnancy.php" enctype="multipart/form-data" method="post">
                <div class="panel-body">
                    <div class="col-lg-11 col-sm-12">
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                        <hr>

                        <div class="row form-group">

                            <div class="col-lg-12 col-sm-12">
                                <div class="col-lg-1 col-sm-12"></div>
                                <div class="col-lg-11 col-sm-12">
                                    <label><strong>Method: Urine Pregnancy test; QUICKVUE<sup>®</sup> One-Step hCG Combo test</strong></label>
                                    <input type="hidden" id="ptid" name="ptid" value="<?=$result_current_data['ptid']?>">
                                    <input type="hidden" id="id_record" name="id_record" value="<?=$result_current_data['id_record']?>">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="col-lg-11 col-sm-11 col-md-offset-1 form-inline">
                                            <div class="col-lg-5 col-sm-12 ">
                                                <!--
                                                <div class="col-lg-5 col-sm-6">Date assayed :</div>
                                                <div class="col-lg-7 col-sm-6">
                                                    <div class="col-lg-12 input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_ass_quickvue" name="date_ass_quickvue" value="<?=show_date($result_current_data['quickvue_date_assa'])?>">
                                                    </div>
                                                </div>
-->
                                            </div>

                                            <div class="col-lg-1 col-sm-2 ">
                                                Result :
                                            </div>
                                            <div class="col-lg-4 col-sm-2 ">
                                                <select id="quickvue_vaule" name="quickvue_vaule" class="form-control">
                                                    <option value=""></option>
                                                    <option value="Negative" <? if($result_current_data['quickvue']=='Negative' ){ echo "selected" ; } ?>>Negative</option>
                                                    <option value="Positive" <? if($result_current_data['quickvue']=='Positive' ){ echo "selected" ; } ?>>Positive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
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
