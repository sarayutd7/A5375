<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="save_eia.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Create HIV Serology Report</h2>
                </header>
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
                                <div class="col-lg-12 col-sm-12 text-center">
                                    <span>Method : HIV EIA <sup>4th</sup> Generation (VIDAS<small><sup>&reg;</sup></small> HIV DUO Ultra, BioMerieux)</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-lg-3 col-sm-6 col-lg-offset-5 col-sm-offset-4">
                                    <select id="eia_status" name="eia_status" class="form-control">
                                        <option value=""></option>
                                        <option value="Negative">Negative</option>
                                        <option value="Positive">Positive</option>
                                    </select>
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
