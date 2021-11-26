<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print'){
    $date = $result_current_data['date_received'];
    $time = $result_current_data['time_received'];
    
    //************************
    $date_recei = date('d/m/Y',strtotime($date));
    $time_recei = date('H:i',strtotime($time)); 
}else{
    $date_recei = date('d/M/Y'); //strtoupper()
    $time_recei = '';
}

?>
   <div class="form-group ">
    <div class="row">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Date Received (dd/MMM/yyyy) :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="text" data-plugin-datepicker="" class="form-control" id="date_recei" name="date_recei" 
                value="<?=$date_recei?>" required>
            </div>
        </div>
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Time Received :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </span>
                <input type="text" data-plugin-masked-input="" data-input-mask="99:99" placeholder="__:__" 
                value="<?=$time_recei?>" class="form-control" class="form-control" id="time_recei" name="time_recei" required>
            </div>
        </div>
    </div>
</div>
