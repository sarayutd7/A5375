<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print'){
    $date = $result_current_data['date_coll'];
    $time = $result_current_data['time_coll'];
    
    //************************
    
    $date_coll = date('d/m/Y',strtotime($date));
    $time_coll = date('H:i',strtotime($time)); 
}else{
    $date_coll = date('d/M/Y'); //strtoupper()
    $time_coll = '';
}

?>
   <div class="form-group ">
    <div class="row">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Date Collected (dd/MMM/yyyy) :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="text" data-plugin-datepicker="" class="form-control" id="date_coll" name="date_coll" 
                <? if($date_coll!='') { ?> value="<?=$date_coll?>" <? } ?>required>
            </div>
        </div>
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Time Collected :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </span>
                <input type="text" data-plugin-masked-input="" data-input-mask="99:99" placeholder="__:__" class="form-control" class="form-control" id="time_coll" name="time_coll" value="<?=$time_coll?>" 
                <?php
                if($_GET['task'] == 'create_cd4' || $_GET['task'] == 'edit_cd4' ||
                   $_GET['task'] == 'create_hemato' || $_GET['task'] == 'edit_hemato' ||
                   $_GET['task'] == 'create_chemis' || $_GET['task'] == 'edit_chemis'
                  ){ ?> onchange="check_age($('#date_coll').val(),this.value)"  <? }  ?> required>
            </div>
        </div>
    </div>
</div>
