<div class="col-lg-12 clo-sm-12">
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <!--
                <button type="button" class="btn btn-sm btn-primary"> Excel</button>
                <button type="button" class="btn btn-sm btn-primary"> Print</button>
-->
            </div>

            <h2 class="panel-title">Export Data To Excel </h2>
        </header>
        <div class="panel-body">
            <?
            switch($_GET['Lab']){
                case 'Hemato' :
                case 'Chemis' : $file_explode = 'explode_files_wite_rf.php'; break;
                default : $file_explode = 'explode_files.php'; break;
                    
            } 
            ?>
            <form action="<?=$file_explode?>" method="post" id="tableform" name="tableform">
                <div class="row form-group">
                    <div class="col-lg-12 col-sm-12 form-inline">
                       
                        <div class="col-lg-3 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-right">
                                <span>PID :</span>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pid1" name="boxpid[]" value="<?=$_GET['pid']?>" placeholder="PID">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" id="pid2" name="boxpid[]" value="<?=$_GET['pid']?>" placeholder="PID">

                                </div>

                            </div>
                            <div class="col-lg-2 col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="ptid_all" id="ptid_allptid_all" value="Y" onclick="disblock(this.checked,'pid1','pid2')"> All
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>

               <div class="row form-group">
                    <div class="col-lg-12 col-sm-12 form-inline">
                        <div class="col-lg-3 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-right">
                                <span>Visit :</span>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="input-group">
                                    <input type="text" step="00.1" class="form-control" id="visit1" name="boxvisit[]" value="<?=$_GET['pid']?>" placeholder="00.0">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" step="00.1" class="form-control" id="visit2" name="boxvisit[]" value="<?=$_GET['pid']?>" placeholder="00.0">
                                </div>

                            </div>
                            <div class="col-lg-2 col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="visit_all" id="visit_all" value="Y" onclick="disblock(this.checked,'visit1','visit2')"> All
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row form-group">
                    <div class="col-lg-12 col-sm-12 form-inline">
                       <div class="col-lg-3 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-right">
                                <span>Date Collected :</span>
                            </div>
                            <div class="col-lg-7 col-sm-7">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control" id="date_record1" name="boxdaterecord[]" data-plugin-datepicker="" data-plugin-options="{ &quot;multidate&quot;: true }" required>
                                    <span class="input-group-addon">Between</span>
                                    <input type="text" class="form-control" id="date_record2" name="boxdaterecord[]" data-plugin-datepicker="" data-plugin-options="{ &quot;multidate&quot;: true }" required>
                                </div>

                            </div>
                            <div class="col-lg-2 col-sm-2">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="date_all" id="date_all" value="Y" onclick="disblock(this.checked,'date_record1','date_record2')"> All
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">

                        </div>
                    </div>
                </div>

                <hr>

                <div class="row form-group">
                   <div class="col-lg-2 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-8 col-sm-12 col-xs-12">
                        <?
                        switch($_GET['Lab']){
                            case 'HIVRT' : include('structure_hiv_rt.php'); break;
                            case 'HIVEIA' : include('structure_hiv_eia.php'); break;
                            case 'HIVRNA' : include('structure_hiv_rna.php'); break;
                            case 'HIVSero':
                            case 'HIVCON' : include('structure_hiv_con.php'); break;
                            case 'CD4' : include('structure_cd4.php'); break;
                            case 'Hemato' : include('structure_hemato.php'); break;
                            case 'Chemis' : include('structure_chemistries.php'); break;
                            case 'Urina' : include('structure_urine.php'); break;
                            case 'Urinepregnancy' : include('structure_urinepregnancy.php'); break;
                            case 'Syphilis' : include('structure_syphilis.php'); break;
                            case 'CTNG' : include('structure_ctng.php'); break;
                            case 'Hepatit' : include('structure_hepatitis.php'); break;
                            //HIVEIA
                            default : include('blank.php'); break;
                        }
                        ?>
                    </div>
                    <div class="col-lg-2 col-sm-12 col-xs-12"></div>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <button type="submit" class="btn btn-small btn-primary">Export Now</button>
                        <button type="reset" class="btn btn-small btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>