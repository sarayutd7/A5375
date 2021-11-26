<div class="col-lg-6 col-md-6 form-group ">HIV Serology Record All</div>
<div class="col-lg-6 col-md-6 form-group text-right">
    <button class=" btn btn-sm btn-success" onclick="location.replace('index.php?task=create_hiv_sero&pid=<?=$_GET['pid']?>')"><i class="fa fa-file"></i> Create</button>
    <button class=" btn btn-sm btn-info"><i class="fa fa-database"></i> Excel</button>
</div>
<hr>


<div>
    <table class="table table-bordered table-striped mb-none" id="datatable-hiveia">
        <thead>
            <tr>
                <th>Visit Code</th>
                <th>Date Coll</th>
                <th>Time Coll</th>
                <th>Date&time Record</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?
    $get_task = 'hiv_sero';
    $sql_eia = "select * from hiv_sero where ptid = '".$_GET['pid']."' order by visit_code desc";
    $result_sero = get_rsltset($sql_eia);
    $nr_eia = count($result_sero); 
    for($i=0;$i<$nr_eia;$i++){ ?>
            <tr>
                <td>
                    <?=$result_sero[$i]['visit_code']?>
                </td>
                <td>
                    <?=$result_sero[$i]['date_coll']?>
                </td>
                <td>
                    <?=$result_sero[$i]['time_coll']?>
                </td>
                <td>
                    <?=$result_sero[$i]['date_record']?>
                </td>
                <td class="center">
                    <a href="index.php?task=edit_<?=$get_task?>&pid=<?=$result_sero[$i]['ptid']?>&recid=<?=$result_sero[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Edit Record"><i class="fa fa-edit"></i> </a>
                    <? if($result_userLogin['status']==4){ ?>
                    <a href="index.php?task=delete_<?=$get_task?>&pid=<?=$result_sero[$i]['ptid']?>&recid=<?=$result_sero[$i]['id_record']?>" class="btn btn-xs btn-danger" title="Delete Record"><i class="fa fa-trash-o"></i> </a>
                    <? } ?>
                    <a href="index.php?task=print_<?=$get_task?>&pid=<?=$result_sero[$i]['ptid']?>&recid=<?=$result_sero[$i]['id_record']?>" class="btn btn-xs btn-info" title="Print Record"><i class="fa fa-print"></i></a>
                    
                    <a href="index.php?task=view_<?=$get_task?>&pid=<?=$result_sero[$i]['ptid']?>&recid=<?=$result_sero[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Record"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            <? } ?>
        </tbody>
    </table>
</div>