<?
$patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'");
$result_current_data = get_a_line("select * from hemato where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?><div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="update_hemato.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Edit Hematology</h2>
                </header>
                <div class="panel-body">
                    <div class="col-lg-12 col-sm-12">
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                        <!-- Gender & Ages --->
                        <div class="row form-group ">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3 col-xs-3 text-right">
                                    <span>Sex :</span>
                                </div>
                                <div class="col-lg-9 col-sm-9 col-xs-9 form-group">
                                    <select class="form-control" id="gender" name="gender" onchange="loadTable()" required>
                                        <option value="">Gender</option>
                                        <option value="M" <? if($result_current_data['gender']=='M') { echo "selected"; } ?> >Male</option>
                                        <option value="F" <? if($result_current_data['gender']=='F') { echo "selected"; } ?> >Female</option>
                                    </select> 
                                    &nbsp;&nbsp; 
                                    <span>
                                    <button type="button" class="btn btn-small" title="Calculate age" onclick="check_age($('#date_coll').val(),$('#time_coll').val());">
                                            <span class="fa fa-refresh"></span>
                                        </button> 
                                        <input type="hidden" id="id_record"  name="id_record" value="<?=$result_current_data['id_record']?>">
                                        Ages : 
                                        <div class="input-group col-md-2" id="boxyear">
                                            <input type="text" class="form-control" id="ages" name="ages" onchange="loadTable()" value="<?=$result_current_data['age']?>" required>
                                            <label class="input-group-addon">yr</label>
                                        </div> 
                                        </span>
<!--
                                        <span>Weight :
                                            <div class="input-group col-sm-2 col-xs-2">
                                                <input type="number" class="form-control" id="Weight" name="Weight" onchange="loadTable()" value="<?=$patient['weight']?>" step="0.01" required>
                                                <label class="input-group-addon">Kg</label>
                                            </div> </span>
-->
                                        
                                        <input type="hidden" id="visit_basline_set" name="visit_basline_set" value="<?=project('visit_baseline')?>">
                                        <input type="hidden" id="ptid" name="ptid" value="<?=$result_current_data['ptid']?>">
                                        <input type="hidden" id="id_record" name="id_record" value="<?=$result_current_data['id_record']?>">
                                </div>  
                            </div>
                        </div>
                        <!-- Gender & Ages End --->
                        <hr>
                        <div class="row form-group">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-sm-12 col-xs-12"></div>
                                <div class="col-lg-10 col-sm-12 col-xs-12">
                                    <div id="table_hematology"></div>
                                </div>
                                <div class="col-lg-1 col-sm-12 col-xs-12"></div>
                            </div>
                        </div>

                        <? //include('row_comment_default.php');?>
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
