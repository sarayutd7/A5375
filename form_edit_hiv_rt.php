<?
$result_current_data = get_a_line("select * from hiv where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="update_rt.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Edit HIV Rapid Test </h2>
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
                                    <span> Method: OraQuick ADVANCE Rapid HIV-1/2 Ab Test, OraSure</span>
                                    <input type="hidden" id="ptid" name="ptid" value="<?=$result_current_data['ptid']?>">
                                    <input type="hidden" id="id_record" name="id_record" value="<?=$result_current_data['id_record']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5 col-sm-12"></div>
                                <div class="col-lg-4 col-sm-12">
                                    <select class="form-control" id="hiv_repid_cb" name="hiv_repid_cb">
                                        <option value=""></option>
                                        <option value="Non-Reactive" <? if($result_current_data['rapid']=='Non-Reactive' ){ echo "selected" ; } ?>>Non-Reactive</option>
                                        <option value="Reactive" <? if($result_current_data['rapid']=='Reactive' ){ echo "selected" ; } ?>>Reactive</option>
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
