<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="save_rna.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Create HIV-1 RNA PCR</h2>
                </header>
                <div class="panel-body">
                    <div class="col-lg-11 col-sm-12">
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                        <hr>
                        <div class="row  ">
                            <div class="form-group">
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <span>Method : Abbott RealTime HIV-1</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-3 col-sm-3 col-xs-3 text-right">Result:</div>
                                <div class="col-lg-3 col-sm-1 col-xs-3">
                                    <div class="radio-custom">
                                        <input type="radio" id="rna" name="rna" value="LT">
                                        <label>Less than</label>
                                    </div>
                                    <div class="radio-custom">
                                        <input type="radio" id="rna" name="rna" value="ET">
                                        <label>Equal to</label>
                                    </div>
                                    <div class="radio-custom">
                                        <input type="radio" id="rna" name="rna" value="GT">
                                        <label>Greater than</label>
                                    </div>
                                    <div class="radio-custom">
                                        <input type="radio" id="rna" name="rna" value="U">
                                        <label>Undetectable</label>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-lg-5 col-sm-5 form-inline" id="value_rna" style="">
                                    <p style="margin-top:20px;">
                                        &nbsp;<input class="form-control" type="text" id="viral_copies" name="viral_copies" value=""> Copies/ ml </p>
                                    <p style="margin-top:20px; margin-left:-17px;"> or 
                                        &nbsp;<input class="form-control" type="text" id="log_copies" name="log_copies" value=""> Log copies/ml</p>
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
