<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Create Syphilis</h2>
            </header>
            <form action="save_syphilis.php" enctype="multipart/form-data" method="post">
            <div class="panel-body">
                <div class="col-lg-11 col-sm-12">
                    <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                    <hr>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12">
                                <span>Syphilis Serology</span>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="radio-custom col-lg-1 col-sm-12"></div>
                                    <div class="radio-custom col-lg-11 col-sm-12">
                                        <input type="radio" id="syphilis_radio" name="syphilis_radio" value="rpr">
                                        <label for="radioExample1">RPR (Screening / Non-Treponemal test)</label>
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_rpr" name="date_assay_rpr">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="rpr_radio" name="rpr_radio" value="N">
                                                    <label for="radioExample1">Non-Reactive</label></div>

                                                <div class="radio-custom col-lg-2"><input type="radio" id="rpr_radio" name="rpr_radio" value="R">
                                                    <label for="radioExample1">Reactive </label></div>

                                                <div class="col-lg-6 col-sm-3">
                                                    <div class="col-lg-5 col-sm-6">Titer :</div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <input class="form-control" type="text" id="rpr_titer" name="rpr_titer"></div>
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
                                        <input type="radio" id="syphilis_radio" name="syphilis_radio" value="tppa">
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
                                                        <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay_tppa" name="date_assay_tppa">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-sm-12 ">
                                                <div class="radio-custom col-lg-4"><input type="radio" id="tppa_radio" name="tppa_radio" value="N">
                                                    <label>Negative</label></div>

                                                <div class="radio-custom col-lg-2"><input type="radio" id="tppa_radio" name="tppa_radio" value="P">
                                                    <label>Positive </label></div>

                                                <div class="col-lg-6 col-sm-3">
                                                    <div class="col-lg-5 col-sm-6">Titer :</div>
                                                    <div class="col-lg-7 col-sm-6">
                                                        <input class="form-control" type="text" id="tppa_titer" name="tppa_titer"></div>
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