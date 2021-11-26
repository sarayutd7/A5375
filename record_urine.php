<?
$result_current_data = get_a_line("select * from urine where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
switch($_GET['task']){
    case 'view_urine' : $panel_title = "View Urine"; break;
    case 'edit_urine' : $panel_title = "Edit Urine"; break;    
        default : $panel_title = ""; break;
}
?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title"><?=$panel_title?></h2>
            </header>
            <form action="update_urine.php" enctype="multipart/form-data" method="post">
            <div class="panel-body">
                <div class="col-lg-11 col-sm-12">
                    <? include('row_pid_visit.php'); ?>
                    <? include('row_datetime_coll.php'); ?>
                    <? include('row_datetime_recei.php'); ?>
                    <? include('row_datetime_assay.php'); ?>
                    <hr>
                    <div class="row">
                       <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span> pH</span> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                <input type="text" class="form-control" id="ph_obj" name="ph_obj" value="<?=$result_current_data['ph']?>" style="width:100%">
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>4.5 - 8.0</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span> Specific gravity</span>
                                <input type="hidden" id="ptid"  name="ptid" value="<?=$result_current_data['ptid']?>">
                                <input type="hidden" id="id_record"  name="id_record" value="<?=$result_current_data['id_record']?>">
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                <input type="text" class="form-control" id="specific_gravity_obj" name="specific_gravity_obj" value="<?=$result_current_data['specific_gravity']?>" style="width:100%">
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>1.003 - 1.030</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>Red Cell</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <SELECT id="rbc_hpf_obj" NAME="rbc_hpf_obj" class="form-control" style="width:100%">
                                        <option value=''>...</option>
                                        <option value='None Seen' <? if($result_current_data['rbc_hpf']=="None Seen" ) print"selected";?>>None Seen</option>
                                        <option value='0 - 3' <? if($result_current_data['rbc_hpf']=="0 - 3" ) print"selected";?>>0 - 3</option>
                                        <option value='3 - 5' <? if($result_current_data['rbc_hpf']=="3 - 5" ) print"selected";?>>3 - 5</option>
                                        <option value='5 - 10' <? if($result_current_data['rbc_hpf']=="5 - 10" ) print"selected";?>>5 - 10</option>
                                        <option value='10 - 20' <? if($result_current_data['rbc_hpf']=="10 - 20" ) print"selected";?>>> 10 - 20</option>
                                        <option value='20 - 30' <? if($result_current_data['rbc_hpf']=="20 - 30" ) print"selected";?>>> 20 - 30</option>
                                        <option value='30 - 100' <? if($result_current_data['rbc_hpf']=="30 - 100" ) print"selected";?>>> 30 - 100</option>
                                        <option value='100 - Numerous' <? if($result_current_data['rbc_hpf']=="100 - Numerous" ) print"selected";?>>> 100 - Numerous</option>
                                    </SELECT>
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>0 - 5 / HPF</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>White Cell</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <SELECT id="wbc_hpf_obj" NAME="wbc_hpf_obj" class="form-control" style="width:100%">
                                        <option value='' <? if($result_current_data['wbc_hpf'] == ''){ echo "selected"; }?>>...</option>
                                        <option value='None Seen' <? if($result_current_data['wbc_hpf'] == 'None Seen'){ echo "selected"; }?>>None Seen</option>
                                        <option value='0 - 3' <? if($result_current_data['wbc_hpf'] == '0 - 3'){ echo "selected"; }?>>0 - 3</option>
                                        <option value='3 - 5' <? if($result_current_data['wbc_hpf'] == '3 - 5'){ echo "selected"; }?>>3 - 5</option>
                                        <option value='5 - 10' <? if($result_current_data['wbc_hpf'] == '5 - 10'){ echo "selected"; }?>>5 - 10</option>
                                        <option value='10 - 20' <? if($result_current_data['wbc_hpf'] == '10 - 20'){ echo "selected"; }?>>10 - 20</option>
                                        <option value='20 - 30' <? if($result_current_data['wbc_hpf'] == '20 - 30'){ echo "selected"; }?>>20 - 30</option>
                                        <option value='30 - 50' <? if($result_current_data['wbc_hpf'] == '30 - 50'){ echo "selected"; }?>>30 - 50</option>
                                        <option value='50 - 100' <? if($result_current_data['wbc_hpf'] == '50 - 100'){ echo "selected"; }?>>50 - 100</option>
                                        <option value='100 - 200' <? if($result_current_data['wbc_hpf'] == '100 - 200'){ echo "selected"; }?>>100 - 200</option>
                                        <option value='>200' <? if($result_current_data['wbc_hpf'] == '>200'){ echo "selected"; }?>>>200</option>
                                    </SELECT>
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>0 - 5 / HPF</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>Protein (Random)</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <select id="protein_obj" name="protein_obj" class="form-control" style="width:100%">
                                        <option value="" <? if($result_current_data['protein'] == ''){ echo "selected"; }?>>...</option>
                                        <option value="Negative" <? if($result_current_data['protein'] == 'Negative'){ echo "selected"; }?>>Negative</option>
                                        <option value="Trace" <? if($result_current_data['protein'] == 'Trace'){ echo "selected"; }?>>Trace</option>
                                        <option value="1+" <? if($result_current_data['protein'] == '1+'){ echo "selected"; }?>>1+</option>
                                        <option value="2+" <? if($result_current_data['protein'] == '2+'){ echo "selected"; }?>>2+</option>
                                        <option value="3+" <? if($result_current_data['protein'] == '3+'){ echo "selected"; }?>>3+</option>
                                        <option value="4+" <? if($result_current_data['protein'] == '4+'){ echo "selected"; }?>>4+</option>
                                        <option value="NA" <? if($result_current_data['protein'] == 'NA'){ echo "selected"; }?>>N/A</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>Negative</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>Blood (Heme)</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <select id="blood_obj" NAME="blood_obj" class="form-control" style="width:100%">
                                        <option value="" <? if($result_current_data['blood'] == ''){ echo "selected"; }?> >...</option>
                                        <option value="Negative" <? if($result_current_data['blood'] == 'Negative'){ echo "selected"; }?>>Negative</option>
                                        <option value="Trace" <? if($result_current_data['blood'] == 'Trace'){ echo "selected"; }?>>Trace</option>
                                        <option value="Small" <? if($result_current_data['blood'] == 'Small'){ echo "selected"; }?>>Small</option>
                                        <option value="Moderate" <? if($result_current_data['blood'] == 'Moderate'){ echo "selected"; }?>>Moderate</option>
                                        <option value="Large" <? if($result_current_data['blood'] == 'Large'){ echo "selected"; }?>>Large</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>Negative</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>Hyalime Cast</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <input type="text" class="form-control" id="cast_obj" name="cast_objcast_obj" value="<?=$result_current_data['cast']?>" style="width:100%">
                                    </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>0 - 1</span></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-inline">
                                <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                <div class="col-lg-2 col-sm-2"><span>Glucose (Radom)</span></div>
                                <div class="col-lg-3 col-sm-3">
                                    <select id="glucose_obj" name="glucose_obj" class="form-control" style="width:100%">
                                        <option value="" <? if($result_current_data['glucose'] == ''){ echo "selected"; }?>>...</option>
                                        <option value="Negative" <? if($result_current_data['glucose'] == 'Negative'){ echo "selected"; }?>>Negative</option>
                                        <option value="Trace" <? if($result_current_data['glucose'] == 'Trace'){ echo "selected"; }?>>Trace</option>
                                        <option value="1+" <? if($result_current_data['glucose'] == '1+'){ echo "selected"; }?>>1+</option>
                                        <option value="2+" <? if($result_current_data['glucose'] == '2+'){ echo "selected"; }?>>2+</option>
                                        <option value="3+" <? if($result_current_data['glucose'] == '3+'){ echo "selected"; }?>>3+</option>
                                        <option value="4+" <? if($result_current_data['glucose'] == '4+'){ echo "selected"; }?>>4+</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-3 text-left"><span>Nagative</span></div>
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