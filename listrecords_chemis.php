<div class="col-lg-6 col-md-6 form-group ">Chemistry Record All </div>
<div class="col-lg-6 col-md-6 form-group text-right">
    <button class=" btn btn-sm btn-success" onclick="location.replace('index.php?task=create_chemis&pid=<?=$_GET['pid']?>')"><i class="fa fa-file"></i> Create</button>
    <button class=" btn btn-sm btn-info"><i class="fa fa-database"></i> Excel</button>
</div>
<hr>
<div>
    <table class="table table-bordered table-striped mb-none" id="datatable-chemis">
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
    $get_task = 'chemis';
    $sql_chem = "select * from chem where ptid = '".$_GET['pid']."' order by visit_code desc";
    $result_chem = get_rsltset($sql_chem);
    $nr_chem = count($result_chem); 
    for($i=0;$i<$nr_chem;$i++){ ?>
            <tr>
                <td>
                    <?=$result_chem[$i]['visit_code']?>
                </td>
                <td>
                    <?=$result_chem[$i]['date_coll']?>
                </td>
                <td>
                    <?=$result_chem[$i]['time_coll']?>
                </td>
                <td>
                    <?=$result_chem[$i]['date_record']?>
                </td>
                <td class="center">
                    <a href="index.php?task=edit_<?=$get_task?>&pid=<?=$result_chem[$i]['ptid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Edit Record"><i class="fa fa-edit"></i> </a>
                    <a href="index.php?task=delete_<?=$get_task?>&pid=<?=$result_chem[$i]['ptid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-danger" title="Delete Record"><i class="fa fa-trash-o"></i> </a>
                    <!-- fn mail -->
                    <?php /*
                            $geade_chem_array[$i] = array("creatinine_gr"=>"".text_replace($result_chem[$i]['creatinine_gr'])."",
                            "creatinine_clearance_gr"=>"".text_replace($result_chem[$i]['creatinine_clearance_gr'])."",
                            "bur_gr"=>"".text_replace($result_chem[$i]['bur_gr'])."",
                            "alkaline_phosphatase_gr"=>"".text_replace($result_chem[$i]['alkaline_phosphatase_gr'])."",
                            "albumin_gr"=>"".text_replace($result_chem[$i]['albumin_gr'])."",
                            "sodium_gr"=>"".text_replace($result_chem[$i]['sodium_gr'])."",
                            "potassium_gr"=>"".text_replace($result_chem[$i]['potassium_gr'])."",
                            "bicarbonate_gr"=>"".text_replace($result_chem[$i]['bicarbonate_gr'])."",
                            "phosphorus_gr"=>"".text_replace($result_chem[$i]['phosphorus_gr'])."",
                            "direct_bilirubin_gr"=>"".text_replace($result_chem[$i]['direct_bilirubin_gr'])."",
                            "ast_gr"=>"".text_replace($result_chem[$i]['ast_gr'])."",
                            "alt_gr"=>"".text_replace($result_chem[$i]['alt_gr'])."",
                            "billirubin_gr"=>"".text_replace($result_chem[$i]['billirubin_gr'])."",
                            "cpk_gr"=>"".text_replace($result_chem[$i]['cpk_gr'])."",
                            "glucose_gr"=>"".text_replace($result_chem[$i]['glucose_gr'])."",
                            "amylase_gr"=>"".text_replace($result_chem[$i]['amylase_gr'])."",
                            "lipase_gr"=>"".text_replace($result_chem[$i]['lipase_gr'])."",
                            "phosphate_gr"=>"".text_replace($result_chem[$i]['phosphate_gr'])."",
                            "cholesterol_gr"=>"".text_replace($result_chem[$i]['cholesterol_gr'])."",
                            "triglyceride_gr"=>"".text_replace($result_chem[$i]['triglyceride_gr'])."",
                            "hdl_gr"=>"".text_replace($result_chem[$i]['hdl_gr'])."",
                            "ldl_gr"=>"".text_replace($result_chem[$i]['ldl_gr'])."",
                            "calculated_ldl_gr"=>"".text_replace($result_chem[$i]['calculated_ldl_gr']).""
                            ); 
                     //print_r($geade_chem_array[$i]);
                    $mail_status =  mailAlert($geade_chem_array[$i],$result_chem[$i]['sentmail']);
                    if($mail_status>=1 && $result_chem[$i]['sentmail'] == '' ){ ?> 
                    <a href="index.php?task=sentmail_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Send Chemis Record"><i class="fa fa-paper-plane"></i></a>
                    <? }else if($mail_status>=1 && $result_chem[$i]['sentmail'] ==1 ){ ?> 
                    <a href="index.php?task=viewmail_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Chemis Record"><i class="fa fa-paper-plane-o"></i></a>
                    <? }else { echo ""; } */?>
                    <!-- end fn mail -->
                    <a href="index.php?task=print_<?=$get_task?>&pid=<?=$result_chem[$i]['ptid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-info" title="Print Record"><i class="fa fa-print"></i></a>
                    <a href="index.php?task=view_<?=$get_task?>&pid=<?=$result_chem[$i]['ptid']?>&recid=<?=$result_chem[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Record"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            <? } ?>
        </tbody>
    </table>
    <? //include('notice.php');?>
</div> 