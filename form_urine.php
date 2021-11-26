<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Create Urinalysis dipstick</h2>
            </header>
            <form action="save_urine.php" enctype="multipart/form-data" method="post">
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
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span> Specific gravity</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <input type="text" class="form-control" id="specific_gravity_obj" name="specific_gravity_obj" style="width:100%">
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>1.003 - 1.030</span></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>pH</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <input type="text" class="form-control" id="ph_obj" name="ph_obj" style="width:100%">
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>4.5-8.0</span></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Blood</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <select id="blood_obj" NAME="blood_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Trace">Trace</option>
                                            <option value="Small">Small</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="Large">Large</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>Negative</span></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span> Ketones</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <select id="ketones_obj" NAME="ketones_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Trace">Trace</option>
                                            <option value="Small">Small</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="Large">Large</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>Not available</span></div>
                                </div>
                            </div>
                            
                            <!--
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span> Color</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <SELECT id="color_obj" NAME="color_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Amber">Amber</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Colourless">Colourless</option>
                                            <option value="Dark Yellow">Dark Yellow</option>
                                            <option value="Red">Red</option>
                                            <option value="Straw">Straw</option>
                                            <option value="Yellow">Yellow</option>
                                        </SELECT>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>1.003 - 1.030</span></div>
                                </div>
                            </div>
-->

                            <!--
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Appearance</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <SELECT id="appearance_obj" NAME="appearance_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Clear">Clear</option>
                                            <option value="Cloudy">Cloudy</option>
                                            <option value="Hazy">Hazy</option>
                                            <option value="Turbid">Turbid</option>
                                        </SELECT>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>1.003 - 1.030</span></div>
                                </div>
                            </div>
-->


                            <!--
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Red Cell</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <SELECT id="rbc_hpf_obj" NAME="rbc_hpf_obj" class="form-control" style="width:100%">
                                            <option value=''>...</option>
                                            <option value='None Seen' <? if($result[RBC_HPF]=="None Seen" ) print"selected";?>>None Seen</option>
                                            <option value='0 - 3' <? if($result[RBC_HPF]=="0 - 3" ) print"selected";?>>0 - 3</option>
                                            <option value='3 - 5' <? if($result[RBC_HPF]=="3 - 5" ) print"selected";?>>3 - 5</option>
                                            <option value='5 - 10' <? if($result[RBC_HPF]=="5 - 10" ) print"selected";?>>5 - 10</option>
                                            <option value='10 - 20' <? if($result[RBC_HPF]=="10 - 20" ) print"selected";?>>> 10 - 20</option>
                                            <option value='20 - 30' <? if($result[RBC_HPF]=="20 - 30" ) print"selected";?>>> 20 - 30</option>
                                            <option value='30 - 100' <? if($result[RBC_HPF]=="30 - 100" ) print"selected";?>>> 30 - 100</option>
                                            <option value='100 - Numerous' <? if($result[RBC_HPF]=="100 - Numerous" ) print"selected";?>>> 100 - Numerous</option>
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
                                            <option value=''>...</option>
                                            <option value='None Seen'>None Seen</option>
                                            <option value='0 - 3'>0 - 3</option>
                                            <option value='3 - 5'>3 - 5</option>
                                            <option value='5 - 10'>5 - 10</option>
                                            <option value='10 - 20'>10 - 20</option>
                                            <option value='20 - 30'>20 - 30</option>
                                            <option value='30 - 50'>30 - 50</option>
                                            <option value='50 - 100'>50 - 100</option>
                                            <option value='100 - 200'>100 - 200</option>
                                            <option value='>200'>>200</option>
                                        </SELECT>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>0 - 5 / HPF</span></div>
                                </div>
                            </div>
-->


                            <!--
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Hyalime Cast</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <input type="text" class="form-control" id="cast_obj" name="cast_objcast_obj" style="width:100%">
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>0 - 1</span></div>
                                </div>
                            </div>
-->
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Glucose</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <select id="glucose_obj" name="glucose_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Trace">Trace</option>
                                            <option value="1+">1+</option>
                                            <option value="2+">2+</option>
                                            <option value="3+">3+</option>
                                            <option value="4+">4+</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>Negative</span></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span>Protein</span></div>
                                    <div class="col-lg-3 col-sm-3">
                                        <select id="protein_obj" name="protein_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Trace">Trace</option>
                                            <option value="1+">1+</option>
                                            <option value="2+">2+</option>
                                            <option value="3+">3+</option>
                                            <option value="4+">4+</option>
                                            <option value="NA">N/A</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>Negative</span></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-inline">
                                    <div class="col-lg-3 col-sm-3">&nbsp;</div>
                                    <div class="col-lg-2 col-sm-2"><span> Nitrite</span></div>
                                    <div class="col-lg-3 col-sm-3"> 
                                        <select id="nitrite_obj" NAME="nitrite_obj" class="form-control" style="width:100%">
                                            <option value="">...</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option> 
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 text-left"><span>Not available</span></div>
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
