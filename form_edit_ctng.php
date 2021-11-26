<?
$result_current_data = get_a_line("select * from ctng where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit CT/NG</h2>
            </header>
            <form action="update_ctng.php" enctype="multipart/form-data" method="post">
            <div class="panel-body">
                <div class="col-lg-11 col-sm-12">
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                    <hr>
                    <!-- Urine Specimen -->
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12"> 
                                <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="ctng_speci" name="ctng_speci" value="urine" <? if($result_current_data['urine_specimen']!=''){ echo "checked"; }?>>
                                        <label>Urine Specimen</label>
                                        <input type="hidden" id="ptid"  name="ptid" value="<?=$result_current_data['ptid']?>">
                                        <input type="hidden" id="id_record"  name="id_record" value="<?=$result_current_data['id_record']?>">
                                    </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="urine_radio" name="urine_radio" value="ng" <? if($result_current_data['urine_neisseria']=='ng'){ echo "checked"; }?>>
                                        <label>Neisseria gonorrhoeae</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_urint_ng" name="date_assay_urint_ng" value="<?=show_date($result_current_data['urine_neisseria_date'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="P" <? if($result_current_data['urine_neisseria_value']=='P'){ echo "checked"; }?>>
                                                    <label for="radioExample1">Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="N" <? if($result_current_data['urine_neisseria_value']=='N'){ echo "checked"; }?>>
                                                    <label for="radioExample1">Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="I" <? if($result_current_data['urine_neisseria_value']=='I'){ echo "checked"; }?>>
                                                    <label for="radioExample1">Indeterminate </label></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--Chlamydia trachomatis  -->

                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="radio-custom col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="urine_radio" name="urine_radio" value="ct" <? if($result_current_data['urine_chiamydia']=='ct'){ echo "checked"; }?>>
                                        <label>Chlamydia trachomatis</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_urint_ct" name="date_assay_urint_ct" value="<?=show_date($result_current_data['urine_chiamydia_date'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="N" <? if($result_current_data['urine_chiamydia_value']=='N'){ echo "checked"; }?>>
                                                    <label>Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="P" <? if($result_current_data['urine_chiamydia_value']=='P'){ echo "checked"; }?>>
                                                    <label>Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="I" <? if($result_current_data['urine_chiamydia_value']=='I'){ echo "checked"; }?>>
                                                    <label>Indeterminate </label></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    
                    <!-- Rectal Swab Specimen -->
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12"> 
                                <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="ctng_speci" name="ctng_speci" value="rectal_swab" <? if($result_current_data['rectal_swab_specimen']=='rectal_swab'){ echo "checked"; }?>>
                                        <label>Rectal Swab Specimen</label>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="rs_radio" name="rs_radio" value="ng"
                                        <? if($result_current_data['rectal_swab_neisseria']=='ng'){ echo "checked"; }?> >
                                        <label >Neisseria gonorrhoeae</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rs_ng" name="date_assay_rs_ng" value="<?=show_date($result_current_data['rectal_swab_neisseria_date'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="P" <? if($result_current_data['rectal_swab_neisseria_value']=='P'){ echo "checked"; }?>>
                                                    <label >Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="N" <? if($result_current_data['rectal_swab_neisseria_value']=='N'){ echo "checked"; }?>>
                                                    <label >Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="I" <? if($result_current_data['rectal_swab_neisseria_value']=='I'){ echo "checked"; }?>>
                                                    <label >Indeterminate </label></div>

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
                                        <input type="radio" id="rs_radio" name="rs_radio" value="ct" <? if($result_current_data['rectal_swab_neisseria']=='ct'){ echo "checked"; }?> >
                                        <label>Chlamydia trachomatis</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rs_ct" name="date_assay_rs_ct" value="<?=show_date($result_current_data['rectal_swab_chiamydia_date'])?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="N" <? if($result_current_data['rectal_swab_chiamydia_value']=='N'){ echo "checked"; }?>>
                                                    <label>Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="P" <? if($result_current_data['rectal_swab_chiamydia_value']=='P'){ echo "checked"; }?>>
                                                    <label>Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="I" <? if($result_current_data['rectal_swab_chiamydia_value']=='I'){ echo "checked"; }?>>
                                                    <label>Indeterminate </label></div>

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