<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print' || $task_check[0]== 'get'){
    $date = $result_current_data['date_received'];
    $time = $result_current_data['time_received'];
    
    //************************
    $date_recei = strtoupper(date('d/M/Y',strtotime($date)));
    $time_recei = date('H:i',strtotime($time)); 
}else{
    $date_recei = '';
    $time_recei = '';
}
?>

    <tr>
        <td>Date Received (dd/MMM/yyyy) : <?=$date_recei?></td>
        <td>Time Received : <?=$time_recei?></td>
    </tr> 