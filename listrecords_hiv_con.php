<div class="col-lg-6 col-md-6 form-group ">HIV Confirmatory Record All </div>
<div class="col-lg-6 col-md-6 form-group text-right">
    <button class=" btn btn-sm btn-success" onclick="location.replace('index.php?task=create_hiv_con&pid=<?=$_GET['pid']?>')"><i class="fa fa-file"></i> Create</button>
<!--    <button class=" btn btn-sm btn-info"><i class="fa fa-database"></i> Excel</button>-->
</div>
<hr>
<div>
    <table class="table table-bordered table-striped mb-none" id="datatable-details">
        <thead>
            <tr>
                <th>Visit Code</th>
                <th>Date Coll</th>
                <th>Time Coll</th>
                <th>Date & time Record</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?
    $get_task = 'hiv_con';
    $sql_hivcon = "select * from hiv_con where ptid = '".$_GET['pid']."' order by visit_code desc";
    $result_hivcon = get_rsltset($sql_hivcon);
    $nr_hivcon = count($result_hivcon); 
    for($i=0;$i<$nr_hivcon;$i++){ ?>
            <tr>
                <td>
                    <?=$result_hivcon[$i]['visit_code']?>
                </td>
                <td>
                    <?=$result_hivcon[$i]['date_coll']?>
                </td>
                <td>
                    <?=$result_hivcon[$i]['time_coll']?>
                </td>
                <td>
                    <?=$result_hivcon[$i]['date_record']?>
                </td>
                <td class="center">
                    <a href="index.php?task=edit_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hivcon[$i]['id_record']?>" class="btn btn-xs btn-warning" title="Edit Record"><i class="fa fa-edit"></i> </a>
                    <? if($result_userLogin['status']==4){ ?>
                    <a href="index.php?task=delete_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hivcon[$i]['id_record']?>" class="btn btn-xs btn-danger" title="Delete Record"><i class="fa fa-trash-o"></i> </a>
                    <? } ?>
                    
                    <a href="index.php?task=print_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hivcon[$i]['id_record']?>" class="btn btn-xs btn-info" title="Print Record"><i class="fa fa-print"></i></a>
                    
                    <a href="index.php?task=view_<?=$get_task?>&pid=<?=$_GET['pid']?>&recid=<?=$result_hivcon[$i]['id_record']?>" class="btn btn-xs btn-success" title="View Record"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            <? } ?>
        </tbody>
    </table>
</div>