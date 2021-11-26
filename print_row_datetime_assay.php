<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print' || $task_check[0]== 'get'){
    $date = $result_current_data['rapid_date_assa'].$result_current_data['eia_date_assa'].$result_current_data['rna_date_assa'].$result_current_data['date_assayed'].$result_current_data['date_assa'];
    $time = $result_current_data['time_rt_assayed'].$result_current_data['eia_time_assa'].$result_current_data['rna_time_assa'].$result_current_data['time_assayed'].$result_current_data['time_assa'];
    
    //************************
    $date_assay = strtoupper(date('d/M/Y',strtotime($date)));
    $time_assay = date('H:i',strtotime($time)); 
}else{
    $date_assay = '';
    $time_assay = '';
}
?>
<tr>
    <td>Date Assayed (dd/MMM/yyyy) : <?=$date_assay?></td>
    <td>Time Assayed : <?=$time_assay?></td>
</tr>
