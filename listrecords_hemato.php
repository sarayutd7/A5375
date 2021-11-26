<div class="col-lg-6 col-md-6 form-group ">Hematology Record All </div>
<div class="col-lg-6 col-md-6 form-group text-right">
    <button class=" btn btn-sm btn-success" onclick="location.replace('index.php?task=create_hemato&pid=<?=$_GET['pid']?>')"><i class="fa fa-file"></i> Create</button>
    <button class=" btn btn-sm btn-info"><i class="fa fa-database"></i> Excel</button>
</div>
<hr>
<div>
    <table class="table table-bordered table-striped mb-none" id="datatable-hemato">
        <thead>
            <tr>
                <th>Visit Code</th>
                <th>Date Coll</th>
                <th>Time Coll</th>
                <th>Date Record</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?
    $get_task = 'hemato';
    $sql_hemato = "select * from hemato where ptid = '".$_GET['pid']."' order by visit_code desc";
    $result_hemato = get_rsltset($sql_hemato);
    $nr_hemato = count($result_hemato); 
    for($i=0;$i<$nr_hemato;$i++){ ?>
            <tr>
                <td>
                    <?=$result_hemato[$i]['visit_code']?>
                </td>
                <td>
                    <?=$result_hemato[$i]['date_coll']?>
                </td>
                <td>
                    <?=$result_hemato[$i]['time_coll']?>
                </td>
                <td>
                    <?=$result_hemato[$i]['date_record']?>
                </td>
                <td class="center">
                    <a href="index.php?task=edit_<?=$get_task?>&pid=<?=$result_hemato[$i]['ptid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Edit Record"><i class="fa fa-edit"></i> </a>
                    <a href="index.php?task=delete_<?=$get_task?>&pid=<?=$result_hemato[$i]['ptid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-danger" title="Delete Record"><i class="fa fa-trash-o"></i> </a>
                    <!-- fn mail -->
                    <?php /*
                            $geade_hemato_array[$i] = array("hemoglobin_gr"=>"".text_replace($result_hemato[$i]['hemoglobin_gr'])."",
                            "hematocrit_gr"=>"".text_replace($result_hemato[$i]['hematocrit_gr'])."",
                            "mcv_gr"=>"".text_replace($result_hemato[$i]['mcv_gr'])."",
                            "platelets_gr"=>"".text_replace($result_hemato[$i]['platelets_gr'])."",
                            "wbc_gr"=>"".text_replace($result_hemato[$i]['wbc_gr'])."",
                            "neutrophils_gr"=>"".text_replace($result_hemato[$i]['neutrophils_gr'])."",
                            "absolute_neutrophils_gr"=>"".text_replace($result_hemato[$i]['absolute_neutrophils_gr'])."",
                            "lymphocytes_gr"=>"".text_replace($result_hemato[$i]['lymphocytes_gr'])."",
                            "absolute_lymphocytes_gr"=>"".text_replace($result_hemato[$i]['absolute_lymphocytes_gr'])."",
                            "monocytes_gr"=>"".text_replace($result_hemato[$i]['monocytes_gr'])."",
                            "absolute_monocytes_gr"=>"".text_replace($result_hemato[$i]['absolute_monocytes_gr'])."",
                            "eosinophils_gr"=>"".text_replace($result_hemato[$i]['eosinophils_gr'])."",
                            "absolute_eosinophils_gr"=>"".text_replace($result_hemato[$i]['absolute_eosinophils_gr'])."",
                            "basophils_gr"=>"".text_replace($result_hemato[$i]['basophils_gr'])."",
                            "absolute_basophils_gr"=>"".text_replace($result_hemato[$i]['absolute_basophils_gr'])."",
                            "atypical_lymphocytes_gr"=>"".text_replace($result_hemato[$i]['atypical_lymphocytes_gr'])."",
                            "absolute_atypical_lymphocytes_gr"=>"".text_replace($result_hemato[$i]['absolute_atypical_lymphocytes_gr']).""  
                            ); 
                    //print_r($geade_hemato_array[$i]);
                    $mail_status =  mailAlert($geade_hemato_array[$i],$result_hemato[$i]['sentmail']);
                    if($mail_status>=1 && $result_hemato[$i]['sentmail'] == '' ){ ?> 
                    <a href="index.php?task=sentmail_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Send Chemis Record"><i class="fa fa-paper-plane"></i></a>
                    <? }else if($mail_status>=1 && $result_hemato[$i]['sentmail'] ==1 ){ ?> 
                    <a href="index.php?task=viewmail_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Chemis Record"><i class="fa fa-paper-plane-o"></i></a>
                    <? }else { echo ""; } */?>
                    <!-- end fn mail -->
                    <a href="index.php?task=print_<?=$get_task?>&pid=<?=$result_hemato[$i]['ptid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-info" title="Print Record"><i class="fa fa-print"></i></a>
                    <a href="index.php?task=view_<?=$get_task?>&pid=<?=$result_hemato[$i]['ptid']?>&recid=<?=$result_hemato[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Record"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            <? } ?>
        </tbody>
    </table>
</div>
