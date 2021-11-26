<?
$sql_findpid = "select * from patient where patient_id = '".$_GET['pid']."'";
$result_findpid = get_a_line($sql_findpid);
$results_findpid = get_rsltset($sql_findpid);
$nr_findpid = count($results_findpid);
if($nr_findpid==0){ include('main_regis.php'); 
                  } else if($nr_findpid>0) { include('records.php');  
       }else{ include('main.php'); }
?>