<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print'){
    $date_assayedondb = $result_current_data['rapid_date_assa'].$result_current_data['eia_date_assa'].$result_current_data['rna_date_assa'].$result_current_data['date_assayed'].$result_current_data['date_assa'];
    $time_assayedondb = $result_current_data['time_rt_assayed'].$result_current_data['eia_time_assa'].$result_current_data['rna_time_assa'].$result_current_data['time_assayed'].$result_current_data['time_assa'];
   // echo $result_current_data['date_assayed'];
    //************************
    if($date!='' || $date!='0000-00-00'){
        $date_assay = date('d/m/Y',strtotime($date_assayedondb));
        $time_assay = date('H:i',strtotime($time_assayedondb)); 
    }else{
        $date_assay = '';
        $time_assay = '';
    }
    
}else{
    $date_assay = date('d/M/Y'); //strtoupper()
    $time_assay = '';
}

?>
   <div class="form-group ">
    <div class="row">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Date Assayed (dd/MMM/yyyy) :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="text" data-plugin-datepicker="" class="form-control" id="date_assay" name="date_assay" value="<?=$date_assay?>" required>
            </div>
        </div>
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Time Assayed :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </span>
                <input type="text" data-plugin-masked-input="" data-input-mask="99:99" placeholder="__:__" class="form-control" class="form-control"
                id="time_assay" name="time_assay" value="<?=$time_assay?>" required>
            </div>
        </div>
    </div>
</div>