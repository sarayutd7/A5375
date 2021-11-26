<?
$task_check = explode('_',$_GET['task']);
if($task_check[0] == 'edit' || $task_check[0] == 'view' || $task_check[0] == 'print' || $task_check[0]== 'get'){
    $date = $result_current_data['date_coll'];
    $time = $result_current_data['time_coll'];
    
    //************************
    $date_coll = strtoupper(date('d/M/Y',strtotime($date)));
    $time_coll = date('H:i',strtotime($time)); 
}else{
    $date_coll = '';
    $time_coll = '';
}
?>

    <tr>
        <td>Date Collected (dd/MMM/yyyy) : <?=$date_coll?></td>
        <td>Time Collected : <?=$time_coll?></td>
    </tr> 