<div class="row">
<div class="col-lg-12 col-sm-12">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Create Hepatitis Serology</h2>
        </header>
        <form action="save_hepatitis.php" enctype="multipart/form-data" method="post">
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
                            <label>Hepatitis B Serology</label>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12">
                                <div class="col-lg-1 col-sm-12"></div>
                                <div class="checkbox-custom col-lg-11 col-sm-12">
                                    <input type="checkbox" id="hbsAg" name="hbsAg" value="Y">
                                    <label for="radioExample1">HBs Ag</label>
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbsAg" name="date_assa_hbsAg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                           <div class="radio-custom col-lg-4"><input type="radio" id="hbsAg_radio" name="hbsAg_radio" value="N">
                                                <label for="radioExample1">Negative </label></div>
                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAg_radio" name="hbsAg_radio" value="P">
                                                <label for="radioExample1">Positive</label></div> 
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
                                    <input type="checkbox" id="hbsAb_cb" name="hbsAb_cb" value="Y">
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbsAb" name="date_assa_hbsAb">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="N">
                                                <label>Positive</label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="P">
                                                <label>Negative </label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbsAb_radio" name="hbsAb_radio" value="E">
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
                                    <input type="checkbox" id="hbcAb_cb" name="hbcAb_cb" value="Y">
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_assa_hbcAb" name="date_assa_hbcAb">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="N">
                                                <label>Positive</label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="P">
                                                <label>Negative </label></div>

                                            <div class="radio-custom col-lg-4"><input type="radio" id="hbcAb_radio" name="hbcAb_radio" value="E">
                                                <label>Equivocal </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
-->


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
                                    <input type="checkbox" id="antiHCV_cb" name="antiHCV_cb" value="Y">
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
                                                    <input type="text" data-plugin-datepicker="" class="form-control" id="date_ass_antiHCV_cb" name="date_ass_antiHCV_cb">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-sm-12 ">
                                           <div class="radio-custom col-lg-4"><input type="radio" id="antiHCV_radio" name="antiHCV_radio" value="N">
                                                <label for="radioExample1">Negative </label></div>
                                            <div class="radio-custom col-lg-4"><input type="radio" id="antiHCV_radio" name="antiHCV_radio" value="P">
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