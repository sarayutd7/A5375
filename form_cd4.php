<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
           <form action="save_cd4.php" enctype="multipart/form-data" method="post">
            <header class="panel-heading">
                <h2 class="panel-title">Create Immunophenotyping</h2>
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
                            <div class="col-md-9 col-xs-12 col-md-offset-2">
                                <table width="100%" class="table table-responsive">
                               <thead>
                                   <tr>
                                    <th>&nbsp;</th>
                                    <th>Test Name</th>
                                    <th class="text-center">Results</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">Reference Range</th>
                                </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>% Lymphocytes</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>" name="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>"
                                           onchange="cal_ab_lymphocyte($('#wbc_counts').val(),$(this).val())">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">23 - 54</td>
                                   </tr>
<!--
                                   <tr>
                                       <td>2</td>
                                       <td>% NK cell</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','NK cell'))?>" name="<?=strtolower(str_replace(' ','_','NK cell'))?>">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">2 - 40</td>
                                   </tr>
                                   <tr>
                                       <td>3</td>
                                       <td>% B cell</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','B cell'))?>" name="<?=strtolower(str_replace(' ','_','B cell'))?>">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">7 - 27</td>
                                   </tr>
                                   <tr>
                                       <td>4</td>
                                       <td>% T cell (CD3)</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','T cell CD3'))?>" name="<?=strtolower(str_replace(' ','_','T cell CD3'))?>">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">50 - 81</td>
                                   </tr>
-->
                                   <tr>
                                       <td>2</td>
                                       <td>% T helper cells (CD4)</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','T cell CD4'))?>" name="<?=strtolower(str_replace(' ','_','T cell CD4'))?>"
                                           onchange="cal_ab_lymphocyte($('#wbc_counts').val(),$('#lymphocytes').val())">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">22 - 50</td>
                                   </tr>
                                   <tr>
                                       <td>3</td>
                                       <td>% T suppressor cells (CD8)</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','T cell CD8'))?>" name="<?=strtolower(str_replace(' ','_','T cell CD8'))?>"
                                           onchange="cal_ab_lymphocyte($('#wbc_counts').val(),$('#lymphocytes').val())">
                                       </td>
                                       <td class="text-center">%</td>
                                       <td class="text-center">18 - 44</td>
                                   </tr>
                                   <tr>
                                       <td>4</td>
                                       <td>WBC counts</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','WBC counts'))?>" name="<?=strtolower(str_replace(' ','_','WBC counts'))?>" onchange="cal_ab_lymphocyte($(this).val(),$('#lymphocytes').val())">
                                       </td>
                                       <td class="text-center">cells/mm<sup>3</sup></td>
                                       <td class="text-center">4,200 - 10,900</td>
                                   </tr>
<!--
                                   <tr>
                                       <td>7</td>
                                       <td>% CD4/CD8 Ratio</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','CD4 CD8 Ratio'))?>" name="<?=strtolower(str_replace(' ','_','CD4 CD8 Ratio'))?>">
                                       </td>
                                       <td class="text-center">cells/cu.mm</td>
                                       <td class="text-center">0.65 - 2.49</td>
                                   </tr>
                                   <tr>
                                       <td>8</td>
                                       <td>% Absolute Lymphocyted</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','Absolute Lymphocyted'))?>" name="<?=strtolower(str_replace(' ','_','Absolute Lymphocyted'))?>">
                                       </td>
                                       <td class="text-center">cells/cu.mm</td>
                                       <td class="text-center">1348 - 3595</td>
                                   </tr>
                                   <tr>
                                       <td>9</td>
                                       <td>% Absolute T cells</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','Absolute T cells'))?>" name="<?=strtolower(str_replace(' ','_','Absolute T cells'))?>">
                                       </td>
                                       <td class="text-center">cells/cu.mm</td>
                                       <td class="text-center">1500 - 3500</td>
                                   </tr>
-->
                                   <tr>
                                       <td>5</td>
                                       <td>Absolute T helper cells (CD4)</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','Absolute T helper cells'))?>" name="<?=strtolower(str_replace(' ','_','Absolute T helper cells'))?>">
                                       </td>
                                       <td class="text-center">cells/mm<sup>3</sup></td>
                                       <td class="text-center">410 - 1,034</td>
                                   </tr>
                                   <tr>
                                       <td>6</td>
                                       <td>Absolute T suppressor cells (CD8)</td>
                                       <td>
                                           <input type="number" class="form-control" step="0.01" id="<?=strtolower(str_replace(' ','_','Absolute T suppressor cells'))?>" name="<?=strtolower(str_replace(' ','_','Absolute T suppressor cells'))?>">
                                       </td>
                                       <td class="text-center">cells/mm<sup>3</sup></td>
                                       <td class="text-center">423 - 1,034</td>
                                   </tr>
                                   
                               </tbody>
                                
                            </table>
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