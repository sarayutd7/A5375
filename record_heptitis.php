<?
$result_current_data = get_a_line("select * from hepatitis where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
switch($_GET['task']){
    case 'view_hepatitis' : $panel_title = "View Hepatitis Serology"; break;
    case 'edit_hepatitis' : $panel_title = "Edit Hepatitis Serology"; break;    
        default : $panel_title = ""; break;
}
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">
                    <?=$panel_title?>
                </h2>
            </header>
            <form action="update_hepatitis.php" enctype="multipart/form-data" method="post">
                <div class="panel-body">
                    <div class="col-lg-11 col-sm-12">
                        <? $_GET['x'] = '09090'; include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <hr>
                        <!-- Urine Specimen -->
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <label>Hepatitis B Serology</label>
                                    <input type="hidden" id="ptid" name="ptid" value="<?=$result_current_data['ptid']?>">
                                    <input type="hidden" id="id_record" name="id_record" value="<?=$result_current_data['id_record']?>">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="col-lg-1 col-sm-12"></div>
                                        <div class="checkbox-custom col-lg-11 col-sm-12">
                                            <input type="checkbox" id="hbsAg" name="hbsAg" value="Y" <? if($result_current_data['hbs_ag']!='' ){ echo "checked" ; } ?> >
                                            <label>HBs Ag</label>
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
                                                            <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbsAg" name="date_assa_hbsAg" value="<?=show_date($result_current_data['date_hbs_ag'])?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-7 col-sm-12 ">
                                                    <div class="radio-custom col-lg-4"><input type="radio" id="hbsAg_radio" name="hbsAg_radio" value="N" <? if($result_current_data['hbs_ag']=='N' ){ echo "checked" ; } ?>>
                                                        <label>Negative </label></div>
                                                    <div class="radio-custom col-lg-4"><input type="radio" id="hbsAg_radio" name="hbsAg_radio" value="P" <? if($result_current_data['hbs_ag']=='P' ){ echo "checked" ; } ?>>
                                                        <label>Positive</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- HBs Ab -->
                            <!--
                    <div class="row ">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12">
                                <div class="col-lg-1 col-sm-12"></div>
                                <div class="checkbox-custom col-lg-11 col-sm-12">
                                    <input type="checkbox" id="hbsAb_cb" name="hbsAb_cb" value="Y" <? if($result_current_data['hbs_ab']!=''){ echo "checked"; } ?>>
                                    <label>HBs Ab</label>
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbsAb" name="date_assa_hbsAb" value="<?=show_date($result_current_data['date_hbs_ab'])?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="N" <? if($result_current_data['hbs_ab']=='N'){ echo "checked"; } ?>>
                                                <label>Positive</label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="P" <? if($result_current_data['hbs_ab']=='P'){ echo "checked"; } ?>>
                                                <label>Negative </label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="E" <? if($result_current_data['hbs_ab']=='E'){ echo "checked"; } ?>>
                                                <label>Equivocal </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
-->

                            <!-- HBc Ab -->
                            <!--
                    <div class="row ">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12">
                                <div class="col-lg-1 col-sm-12"></div>
                                <div class="checkbox-custom col-lg-11 col-sm-12">
                                    <input type="checkbox" id="hbcAb_cb" name="hbcAb_cb" value="Y" <? if($result_current_data['hbc_ab']!=''){ echo "checked"; } ?>>
                                    <label>HBc Ab</label>
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbcAb" name="date_assa_hbcAb" value="<?=show_date($result_current_data['date_hbc_ab'])?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="N" <? if($result_current_data['hbc_ab']=='N'){ echo "checked"; } ?>>
                                                <label>Positive</label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="P" <? if($result_current_data['hbc_ab']=='P'){ echo "checked"; } ?>>
                                                <label>Negative </label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="E" <? if($result_current_data['hbc_ab']=='E'){ echo "checked"; } ?>>
                                                <label>Equivocal </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
-->

                        </div>


                        <!-- Hepatitis C Serology -->
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <label>Hepatitis C Serology</label>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="form-group">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="col-lg-1 col-sm-12"></div>
                                        <div class="checkbox-custom col-lg-11 col-sm-12">
                                            <input type="checkbox" id="antiHCV_cb" name="antiHCV_cb" value="Y" <? if($result_current_data['anti_hcv']!='' ){ echo "checked" ; } ?>>
                                            <label for="radioExample1">Anti-HCV</label>
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
                                                            <input type="text" data-plugin-datepicker="" class="form-control" id="date_ass_antiHCV_cb" name="date_ass_antiHCV_cb" value="<?=show_date($result_current_data['date_anti_hcv'])?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-7 col-sm-12 ">
                                                    <div class="radio-custom col-lg-4"><input type="radio" id="antiHCV_radio" name="antiHCV_radio" value="N" <? if($result_current_data['anti_hcv']=='N' ){ echo "checked" ; } ?>>
                                                        <label for="radioExample1">Negative </label></div>
                                                    <div class="radio-custom col-lg-4"><input type="radio" id="antiHCV_radio" name="antiHCV_radio" value="P" <? if($result_current_data['anti_hcv']=='P' ){ echo "checked" ; } ?>>
                                                        <label for="radioExample1">Positive</label></div>


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