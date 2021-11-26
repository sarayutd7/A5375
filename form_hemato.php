<? $patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'"); ?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="save_hemato.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title">Create Hematology</h2>
                </header>
                <div class="panel-body">
                    <div class="col-lg-12 col-sm-12">
                        <? include('row_pid_visit.php'); ?>
                        <? include('row_datetime_coll.php'); ?>
                        <? include('row_datetime_recei.php'); ?>
                        <? include('row_datetime_assay.php'); ?>
                        <? include('row_typeofspecimen.php'); ?>
                        <!-- Gender & Ages --->
                        <div class="row form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3 col-xs-3 text-right">
                                    <span>Sex :</span>
                                </div>
                                <div class="col-lg-9 col-sm-9 col-xs-9 form-group">
                                    <select class="form-control" id="gender" name="gender" onchange="loadTable()" required>
                                        <option value="">Gender</option>
                                        <option value="M" <? if($patient['gender']=='M' ){ echo "Selected" ; }?> >Male</option>
                                        <option value="F" <? if($patient['gender']=='F' ){ echo "Selected" ; }?> >Female</option>
                                    </select>
                                    &nbsp;&nbsp; 
                                    <span>
                                    <button type="button" class="btn btn-small" title="Calculate age" onclick="check_age($('#date_coll').val(),$('#time_coll').val());">
                                            <span class="fa fa-refresh"></span>
                                        </button>
<!--                                       <input type="button" class="btn btn-small" value="cal Age" onclick="check_age($('#date_coll').val(),$('#time_coll').val());">-->
                                       Ages :
                                        <div class="input-group col-md-2" id="boxyear">
                                            <input type="text" class="form-control" id="ages" name="ages" onchange="loadTable()" value="0" required>
                                            <label class="input-group-addon">yr</label>
                                        </div>
<!--
                                        <span id="boxagelessyear"  >
                                        <div class="input-group col-md-1">
                                            <input type="text" class="form-control" id="month" name="month" value="0" onchange="loadTable()">
                                            <label class="input-group-addon">m</label>
                                        </div>
                                        <div class="input-group col-md-1">
                                            <input type="text" class="form-control" id="day" name="day" value="0" onchange="loadTable()">
                                            <label class="input-group-addon">d</label>
                                        </div>
                                        <input type="hidden" class="form-control" id="datofage" name="datofage" onchange="loadTable()"> 
                                        </span>
-->
                                        </span>
                                       
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
