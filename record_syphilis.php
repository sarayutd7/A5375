<?
$result_current_data = get_a_line("select * from syphilis where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
switch($_GET['task']){
    case 'view_syphilis' : $panel_title = "View Syphilis"; break;
    case 'edit_syphilis' : $panel_title = "Edit Syphilis"; break;    
        default : $panel_title = ""; break;
}
?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title"><?=$panel_title?></h2>
            </header>
            <form action="save_syphilis.php" enctype="multipart/form-data" method="post">
            <div class="panel-body">
                <div class="col-lg-11 col-sm-12">
                    <? include('row_pid_visit.php'); ?>
                    <? include('row_datetime_coll.php'); ?>
                    <? include('row_datetime_recei.php'); ?>
                    <hr>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12">
                                <span>Syphilis Serology</span>
                                <input type="hidden" id="ptid"  name="ptid" value="<?=$result_current_data['ptid']?>">
                                <input type="hidden" id="id_record"  name="id_record" value="<?=$result_current_data['id_record']?>">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="radio-custom col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="syphilis_radio" name="syphilis_radio" value="rpr" <? if($result_current_data['rpr'] == 'rpr'){ echo "checked"; }?> >
                                        <label>RPR (Screening / Non-Treponemal test)</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="col-lg-11 col-sm-11 col-md-offset-1 form-inline">
                                            <div class="col-lg-5 col-sm-12 ">
                                                <div class="col-lg-5 col-sm-6">Date assayed :</div>
                                                <div class="col-lg-7 col-sm-6">
                                                    <div class="col-lg-12 input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rpr" name="date_assay_rpr" value="<?=show_date($result_current_data['daterpr'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rpr_radio" name="rpr_radio" value="N">
                                                    <label for="radioExample1" <? if($result_current_data['rpr_value'] == 'N'){ echo "checked"; }?>>Non-Reactive</label></div>

                                                <div class="radio-custom col-lg-2"><input type="radio" id="rpr_radio" name="rpr_radio" value="R" <? if($result_current_data['rpr_value'] == 'R'){ echo "checked"; }?>>
                                                    <label for="radioExample1">Reactive </label></div>

                                                <div class="col-lg-6 col-sm-3">
                                                    <div class="col-lg-5 col-sm-6">Titer :</div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <input class="form-control" type="text" id="rpr_titer" name="rpr_titer" value="<?=$result_current_data['titerrpr']?>"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--TPPA  -->

                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="radio-custom col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="syphilis_radio" name="syphilis_radio" value="tppa" <? if($result_current_data['tppa'] == 'tppa'){ echo "checked"; }?>>
                                        <label>TPPA (Confirmatory / Treponemal test)</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="col-lg-11 col-sm-11 col-md-offset-1 form-inline">
                                            <div class="col-lg-5 col-sm-12 ">
                                                <div class="col-lg-5 col-sm-6">Date assayed :</div>
                                                <div class="col-lg-7 col-sm-6">
                                                    <div class="col-lg-12 input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_tppa" name="date_assay_tppa" value="<?=show_date($result_current_data['datetppa'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="tppa_radio" name="tppa_radio" value="N" <? if($result_current_data['tppa_value'] == 'N'){ echo "checked"; }?>>
                                                    <label>Negative</label></div>

                                                <div class="radio-custom col-lg-2"><input type="radio" id="tppa_radio" name="tppa_radio" value="P" <? if($result_current_data['tppa_value'] == 'P'){ echo "checked"; }?>>
                                                    <label>Positive </label></div>

                                                <div class="col-lg-6 col-sm-3">
                                                    <div class="col-lg-5 col-sm-6">Titer :</div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <input class="form-control" type="text" id="tppa_titer" name="tppa_titer" value="<?=$result_current_data['titertppa']?>"></div>
                                                </div>

                                            </div>
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