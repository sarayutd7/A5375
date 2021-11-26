<? $patient = get_a_line("select * from patient where patient_id = '".$_GET['pid']."'"); ?>
   <div class="row">
    <form action="index.php?task=update_pid" enctype="multipart/form-data" method="post">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <!--
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
-->

                    <h2 class="panel-title">Edit Detail PID</h2>
                </header>
                <div class="panel-body">
                    <form action="#" method="get" enctype="multipart/form-data" class="form-group">
                        <div class="row">
                            <div class="form-group">
                                <div class="clo-sm-12 col-md-6 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i> PID
                                        </span>
                                        <input class="form-control" type="text" id="pid" name="pid" value="<?=$patient['patient_id']?>" required>
                                        <input type="hidden" id="idredc" name="idredc" value="<?=$patient['id_register']?>">
                                    </div>
                                </div>

                                <div class="clo-sm-12 col-md-6 form-group">

                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="0" <? if($patient['gender']==''){ echo "selected"; } ?> >Gender</option>
                                        <option value="M" <? if($patient['gender']=='M'){ echo "selected"; } ?> >male</option>
                                        <option value="F" <? if($patient['gender']=='F'){ echo "selected"; } ?> >female</option>
                                    </select>
                                </div>
                                <? if(webdetail(dob_date) == 'yes'){ ?> 
                                <div class="clo-sm-12 col-md-6 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i> DOB Day
                                        </span>
                                        <input class="form-control" value="<?=date('d/m/Y',strtotime($patient['date_of_brith']))?>" data-plugin-datepicker type="text" name="dob2" id="dob2" onchange="check_age_regis(this.value,'00:01')" required>
                                    </div>
                                </div>
                                <? } ?>
                                <? if(webdetail(dob_time) == 'yes'){ ?> 
                                <div class="clo-sm-12 col-md-6 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i> DOB Time
                                        </span>
                                        <input class="form-control" type="text" data-plugin-masked-input="" data-input-mask="99:99" placeholder="__:__"  id="dob_time" name="dob_time" value="<?=date('H:i',strtotime($patient['time_of_brith']))?>" required>
                                    </div>
                                </div>
                                <? } ?>
                                
                                <div class="clo-sm-12 col-md-6 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i> Age
                                        </span>
                                        <input class="form-control" type="text" id="age" name="age" placeholder="00.0" step=0.01 value="<?=$patient['age']?>" required>
                                    </div>
                                </div> 

                                <? if(webdetail(weight) == 'yes'){ ?>
                                <div class="clo-sm-12 col-md-6 form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-dashboard"></i> Weight
                                        </span>
                                        <input class="form-control" type="number" id="weight" name="weight" placeholder="00.00" step=0.01 value="<?=$patient['weight']?>" required>
                                        <span class="input-group-addon"> Kg </span>
                                    </div>
                                </div>
                                <? } ?>

                                <div class="clo-sm-12 col-md-6 form-group">
                                    <input class="form-control" type="hidden" id="create_by" name="create_by" value="<?=$_SESSION['session_user']?>">
                                    <input class="form-control" type="hidden" id="ip" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>">
                                    <input class="form-control" type="hidden" id="date_create" name="date_create" value="<?=date('Y-m-d')?>">
                                    <input class="form-control" type="hidden" id="time_create" name="time_create" value="<?=date('H:i:s')?>">
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="clo-sm-12 col-md-12 form-group text-center">
                                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Update</button>
                                    <button class="btn btn-danger" type="reset" onclick="location.replace('index.php')"><i class="glyphicon glyphicon-off"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> 

            </section>
        </div>

    </form>
</div>