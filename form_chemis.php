<? $patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'"); 
//--------------------------- baseline
function call_baseline($visit,$lab){
    $sql = "select * from chem where ptid = '".$_GET['pid']."' and visit_code = '$visit'";
    $baseline = get_a_line($sql); 
    return $baseline[$lab];
}

//--------------------------- data baseline end
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="save_chemis.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Create Chemistry</h2>
                </header>
                <div class="panel-body"> 
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                        <!-- Gender & Ages --->
                        <div class="row form-group">
                            <div class="form-inline">
                                <div class="col-lg-2 col-sm-2 col-xs-2 text-right">
                                    <span>Gender :</span>
                                </div>
                                <div class="col-lg-10 col-sm-10 col-xs-10 form-group">
                                    <div class="col-sm-1 col-xs-1">

                                        <select class="form-control" id="gender" name="gender" onchange="loadTable()" required>
                                            <option value="">Gender</option>
                                            <option value="M" <? if($patient['gender']=='M' ){ echo "Selected" ; }?> >Male</option>
                                            <option value="F" <? if($patient['gender']=='F' ){ echo "Selected" ; }?> >Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-11 col-xs-11">
                                    <button type="button" class="btn btn-small" title="Calculate age" onclick="check_age($('#date_coll').val(),$('#time_coll').val());">
                                            <span class="fa fa-refresh"></span>
                                        </button>
<!--                                        <input type="button" class="btn btn-small" value="cal Age" onclick="check_age($('#date_coll').val(),$('#time_coll').val());">-->
                                        Ages :
                                        <div class="input-group col-xs-2" id="boxyear">
                                            <input type="text" class="form-control" id="ages" name="ages" onchange="loadTable()" value="0" required>
                                            <label class="input-group-addon">yr</label>
                                        </div><input type="hidden" class="form-control" id="datofage" name="datofage" onchange="loadTable()">
<!--
                                        <span id="boxagelessyear">
                                            <div class="input-group col-xs-2">
                                                <input type="text" class="form-control" id="month" name="month" value="0" onchange="loadTable()">
                                                <label class="input-group-addon">m</label>
                                            </div>
                                            <div class="input-group col-xs-2">
                                                <input type="text" class="form-control" id="day" name="day" value="0" onchange="loadTable()">
                                                <label class="input-group-addon">d</label>
                                            </div>
                                            
                                        </span>-->
                                        <span>Weight :
                                            <div class="input-group col-sm-2 col-xs-2">
                                                <input type="number" class="form-control" id="Weight" name="Weight" onchange="loadTable()" value="<?=$patient['weight']?>" step="0.01" required>
                                                <label class="input-group-addon">Kg</label>
                                            </div> </span>

                                        <span class="pull-right">Fasting :
                                            <select class="form-control" id="Fasting" name="Fasting" onchange="loadTable()" required>
                                                <option value="0">select</option>
                                                <option value="Yes" selected>Yes</option>
                                                <option value="No">No</option>
                                                <option value="N/A">N/A</option>
                                            </select> </span>
                                        <input type="hidden" id="visit_basline_set" name="visit_basline_set" value="<?=project('visit_baseline')?>">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    <!-- Gender & Ages End --->
                    <hr>
                    <? if(call_baseline(project('visit_baseline'),'creatinine')!=''){ ?> 
                    <div class="row form-group" id="notification_box">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                [<strong>Baseline Visit : </strong> <?=webdetail('visit_baseline')?> ] =  
                                <strong>Creatinine Baseline : </strong>
                                <?=call_baseline(webdetail('visit_baseline'),'creatinine')?> 
<!--
                                ,
                                <strong>Cr.Cl Baseline : </strong>
                                <?=call_baseline(webdetail('visit_baseline'),'creatinine_clearance')?>
-->
                                
                                <input type="hidden" id="creatinine_basline" name="creatinine_basline" value="<?=call_baseline(project('visit_baseline'),'creatinine')?>">
<!--                                <input type="hidden" id="crcl_basline" name="crcl_basline" value="<?=call_baseline(project('visit_baseline'),'creatinine_clearance')?>">-->
                                
                            </div>
                        </div>
                    </div>
                    <? } ?>
                    <div class="row form-group">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="col-lg-1 col-sm-12 col-xs-12"></div>
                            <div class="col-lg-10 col-sm-12 col-xs-12">
                                <div id="table_chemistries"></div>
                            </div>
                            <div class="col-lg-1 col-sm-12 col-xs-12"></div>
                        </div>
                    </div>

                    <? //include('row_comment_default.php');?>
                    <hr>
                    <? include('row_remark.php'); ?>
                </div>
                <div class="col-lg-1 col-sm-12"></div>

                <? include('row_bt_control.php'); ?>
            </form>
        </section>
    </div>
</div>