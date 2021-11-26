   <div class="row">
       <div class="col-lg-12 col-sm-12">
           <section class="panel">
               <form action="save_sero.php" enctype="multipart/form-data" method="post">
                   <header class="panel-heading">
                       <h2 class="panel-title">Create HIV Confirmatory Report</h2>
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
                                   <div class="col-lg-6 col-sm-12 col-xs-12 text-center">
                                       <span> Method: Geenius <sup>TH</sup> HIV 1/2 Confirmatory Assay (BIO-Rad)</span>
                                   </div>
                                   <div class="col-lg-6 col-sm-12  text-center"></div>

                               </div>
                               <div class="form-group">
                                   <div class="col-lg-8 col-sm-12 col-xs-12 col-lg-offset-3">
                                       <table class="table table-responsive" border="1">
                                           <thead>
                                               <tr>
                                                   <th colspan="6" class="text-center">HIV-1/HIV-2 Specific Band</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td class="text-center"><span>gp36</span></td>
                                                   <td class="text-center"><span>gp140</span></td>
                                                   <td class="text-center"><span>p31</span></td>
                                                   <td class="text-center"><span>gp160</span></td>
                                                   <td class="text-center"><span>p24</span></td>
                                                   <td class="text-center"><span>gp41</span></td>
                                               </tr>
                                               <tr>
                                                   <td class="text-center"><?=seletion_obj('gp36','')?>
                                                   </td>
                                                   <td class="text-center">
                                                       <?=seletion_obj('gp140','')?>
                                                   </td>
                                                   <td class="text-center">
                                                       <?=seletion_obj('p31','')?>
                                                   </td>
                                                   <td class="text-center">
                                                       <?=seletion_obj('gp160','')?>
                                                   </td>
                                                   <td class="text-center">
                                                       <?=seletion_obj('p24','')?>
                                                   </td>
                                                   <td class="text-center">
                                                       <?=seletion_obj('gp41','')?>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-lg-2 col-sm-12 col-lg-offset-2">
                                           <span>HIV-1 :</span>
                                       </div>
                                       <div class="col-lg-3 col-sm-3">
                                           <select id="hiv_1" name="hiv_1" class="form-control">
                                               <option value="..." <? if($result_current_data['hiv1']=='...' ){ ?>selected
                                                   <? } ?> >...</option>
                                               <option value="Negative" <? if($result_current_data['hiv1']=='Negative' ){ ?>selected
                                                   <? } ?> >Negative</option>
                                               <option value="Positive" <? if($result_current_data['hiv1']=='Positive' ){ ?>selected
                                                   <? } ?> >Positive</option>
                                               <option value="Indeterminate" <? if($result_current_data['hiv1']=='Indeterminate' ){ ?>selected
                                                   <? } ?> >Indeterminate</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-lg-2 col-sm-12 col-lg-offset-2">
                                           <span>HIV-2 :</span>
                                       </div>
                                       <div class="col-lg-3 col-sm-3">
                                           <select id="hiv_2" name="hiv_2" class="form-control">
                                               <option value="..." <? if($result_current_data['hiv2']=='...' ){ ?>selected
                                                   <? } ?> >...</option>
                                               <option value="Negative" <? if($result_current_data['hiv2']=='Negative' ){ ?>selected
                                                   <? } ?> >Negative</option>
                                               <option value="Positive" <? if($result_current_data['hiv2']=='Positive' ){ ?>selected
                                                   <? } ?> >Positive</option>
                                               <option value="Indeterminate" <? if($result_current_data['hiv2']=='Indeterminate' ){ ?>selected
                                                   <? } ?> >Indeterminate</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-lg-2 col-sm-12 col-lg-offset-2">
                                           <span>Assay Interpretation :</span>
                                       </div>
                                       <div class="col-lg-3 col-sm-3">
                                           <select id="assay_obj" name="assay_obj" class="form-control">
                                               <option value="..." <? if($result_current_data['interpretation']=='...' ){ ?>selected
                                                   <? } ?> >...</option>
                                               <option value="HIV NEGATIVE" <? if($result_current_data['interpretation']=='HIV NEGATIVE' ){ ?>selected
                                                   <? } ?> >HIV NEGATIVE</option>
                                               <option value="HIV-1 INDETERMINATE" <? if($result_current_data['interpretation']=='HIV-1 INDETERMINATE' ){ ?>selected
                                                   <? } ?> >HIV-1 INDETERMINATE</option>
                                               <option value="HIV-2 INDETERMINATE" <? if($result_current_data['interpretation']=='HIV-2 INDETERMINATE' ){ ?>selected
                                                   <? } ?> >HIV-2 INDETERMINATE</option>
                                               <option value="HIV INDETERMINATE" <? if($result_current_data['interpretation']=='HIV INDETERMINATE' ){ ?>selected
                                                   <? } ?> >HIV INDETERMINATE</option>
                                               <option value="HIV-1 POSITIVE" <? if($result_current_data['interpretation']=='HIV-1 POSITIVE' ){ ?>selected
                                                   <? } ?> >HIV-1 POSITIVE</option>
                                               <option value="HIV-2 POSITIVE" <? if($result_current_data['interpretation']=='HIV-2 POSITIVE' ){ ?>selected
                                                   <? } ?> >HIV-2 POSITIVE</option>
                                               <option value="HIV-2 POSITIVE with" <? if($result_current_data['interpretation']=='HIV-2 POSITIVE with' ){ ?>selected
                                                   <? } ?> >HIV-2 POSITIVE (with HIV-1 cross-reactivity)</option>
                                               <option value="HIV POSITIVE UNTYPABLE" <? if($result_current_data['interpretation']=='HIV POSITIVE UNTYPABLE' ){ ?>selected
                                                   <? } ?> >HIV POSITIVE UNTYPABLE</option>
                                           </select>
                                       </div>
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