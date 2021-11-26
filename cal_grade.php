<?php
ob_start();
session_start();
if($_SESSION['session_user']!=''){ 
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$lab = ucfirst($_GET['lab']); 
switch($lab){
    case 'Platelet' : 
    case 'Lipase' :   //Lipase
        $sql_gener = ""; break;
    case 'Hemoglobin': $sql_gener = "and gender = '".$_GET['gender']."'"; break;
    //case 'Alkaline_phosphatase' : $sql_gener = "and gender = '".$_GET['gender']."'"; break;
    //case 'Alt' : $sql_gener = "and gender = '".$_GET['gender']."'"; break;    //ALT
    //case 'Ast' : $sql_gener = "and gender = '".$_GET['gender']."'"; break; 
    case 'Glucose' : // $sql_gener = "and fasting = '".$_GET['fasting']."'"; break; //Glucose
    case 'Cholesterol' :
    case 'Ldl' : 
    case 'Triglycerides' :  $sql_gener = "and fasting = '".$_GET['fasting']."'"; break;     
    case 'Calcium' :  $sql_gener = "and gender = 'Every'"; break;       
        
       default : $sql_age = ""; break;
}
$sql = "select grade from rangegrade where labtname = '$lab' $sql_gener and  ( ".$_GET['age']." between agestrat and agestop ) and ( ".$_GET['val']." between nstrat and nstop )";
$result = get_a_line($sql);
if($result['grade']!=''){
    $grade = $result['grade'];
}else{
    $grade = 0;
}
 
echo $grade;
}
?>