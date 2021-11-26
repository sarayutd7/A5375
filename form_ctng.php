<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Create CT/NG</h2>
            </header>
            <form action="save_ctng.php" enctype="multipart/form-data" method="post">
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
                                        <input type="radio" id="ctng_speci" name="ctng_speci" value="urine">
                                        <label>Urine Specimen</label>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="urine_radio" name="urine_radio" value="ng">
                                        <label for="radioExample1">Neisseria gonorrhoeae</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_urint_ng" name="date_assay_urint_ng">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="P">
                                                    <label for="radioExample1">Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="N">
                                                    <label for="radioExample1">Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ng_radio" name="ng_radio" value="I">
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
                                        <input type="radio" id="urine_radio" name="urine_radio" value="ct">
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_urint_ct" name="date_assay_urint_ct">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="N">
                                                    <label>Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="P">
                                                    <label>Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="ct_radio" name="ct_radio" value="I">
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
                                        <input type="radio" id="ctng_speci" name="ctng_speci" value="rectal_swab">
                                        <label>Rectal Swab Specimen</label>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="rs_radio" name="rs_radio" value="ng">
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rs_ng" name="date_assay_rs_ng">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="P">
                                                    <label for="radioExample1">Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="N">
                                                    <label for="radioExample1">Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ng_radio" name="rectal_swab_ng_radio" value="I">
                                                    <label for="radioExample1">Indeterminate </label></div>

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
                                        <input type="radio" id="rs_radio" name="rs_radio" value="ct">
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rs_ct" name="date_assay_rs_ct">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="N">
                                                    <label>Positive</label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="P">
                                                    <label>Negative </label></div>

                                                <div class="radio-custom col-lg-4"><input type="radio" id="rectal_swab_ct_radio" name="rectal_swab_ct_radio" value="I">
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