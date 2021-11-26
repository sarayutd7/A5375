<?php set_time_limit(170);

ob_start();
session_start();



include('conn/config.php');
include('conn/function.inc.php'); 
db_connect();


$protocal = 'a5375';


if($_SESSION['session_userid']!=''){ db_connect(); }else{ echo PHPgourl('index.php'); }
$box_pid1 = $_POST['boxpid'][0]; 
$box_pid2 = $_POST['boxpid'][1]; 

$box_visit1 = $_POST['boxvisit'][0]; 
$box_visit2 = $_POST['boxvisit'][1]; 
	   
$box_record1 = $_POST['boxdaterecord'][0]; 
$box_record2 = $_POST['boxdaterecord'][1]; 

$ptid_all = $_POST['ptid_all'];
///////////////////////////////////////////////////////////////////
/////////////////////////// Check PTID ////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
if($ptid_all=='Y'){ $sql_ptid = ""; 
}else{ 
if($box_pid1==''){ echo PHPalert('Error PTID'); echo PHPback(); }
if($box_pid2==''){ echo PHPalert('Error PTID'); echo PHPback(); }
$sql_ptid = "(ptid between '$box_pid1' and '$box_pid2')";  
}  
///////////////////////////////////////////////////////////////////
/////////////////////////// Check PTID ////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////



$visit_all = $_POST['visit_all'];
///////////////////////////////////////////////////////////////////
/////////////////////////// Check VISIT ////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
if($visit_all=='Y'){ $sql_visit = ""; 
}else{ 
if($box_visit1==''){ echo PHPalert('Error Visit'); echo PHPback(); }
if($box_visit2==''){ echo PHPalert('Error Visit'); echo PHPback(); }
$sql_visit = "(visit_code between '$box_visit1' and '$box_visit2')";  }  
///////////////////////////////////////////////////////////////////
/////////////////////////// Check VISIT ////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////

if($sql_ptid !='' ){  $sql_ptid_commend = $sql_ptid." and "; }else{ $sql_ptid_commend = $sql_ptid;}
if($sql_visit !='' ){  $sql_visit_commend = $sql_visit." and "; }else{ $sql_visit_commend = $sql_visit;}



$tbname = $_REQUEST['tbname'];
$runtime = date('d')."".date('M')."".date('Y')."".date('HH')."".date('ii')."".date('ss');
$strExcelFileName="explode_$tbname"."_".$runtime.".xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: inline; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");/**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Explode to Excel Super Damo</title>
</head>

<body>
<? /**/

/*print_r($_POST['cbox']);*/
$arr_cbox = $_POST['cbox'];
for($i=0;$i<=count($arr_cbox);$i++){ $line = $line +1;
	 if($arr_cbox[$i]!=''){ $alert_f .= $arr_cbox[$i]; if($line<count($arr_cbox)){ $alert_f .=","; } }
}
function to_dateformat2($date){
	$date_var = explode('/',$date);
	$short_month_name = array('Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12');
	foreach($short_month_name as $d=>$k){
		if(strtoupper($date_var['1'])== strtoupper($d)){
			$var_month = $k;
		}
	}
	$dateformat = $date_var['2']."-".$date_var['1']."-".$date_var['0'];//$date_var['2']."-".$var_month."-".$date_var['0'];
	return $dateformat;
}
//---------------- date all 
if($_REQUEST['date_all']=='Y'){
    $sql_date_commend = "";
}else{
    $sql_date_commend = "(date_record between '".to_dateformat2($box_record1)."' and '".to_dateformat2($box_record2)."')";
}
//---------------- date all 

// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
    
    if($sql_ptid_commend!='' || $sql_visit_commend!= '' || $sql_date_commend!='' ){
        $sql_data = "select $alert_f from $tbname where $sql_ptid_commend  $sql_visit_commend $sql_date_commend ";
    }else{
        $sql_data = "select $alert_f from $tbname order by id_record asc";
    }
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
$result_data = get_rsltset($sql_data);
$nr_data = count($result_data);
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
// ------------------------------------------ comment sql --------------------------------------------------------------
    
//insert array reference range
$column_refernece = array("sodium","potassium","chloride","bicarbonate","bun","creatinine","total_bilirubin","ast","alt","albumin",
                                                    
                          "hemoglobin","hematocrit","platelets","wbc","neutrophils","absolute_neutrophil","lymphocyte","monocyte","eosinophils","basophils");
/*gender = every*/    
/*"creatinine", not have every*/
$listLab = array("sodium","potassium","chloride","bicarbonate","bun","albumin","total_bilirubin","indirect_bilirubin","direct_bilirubin",
                       "glucose","phosphorus","cholesterol","hdl","bicarbonate","platelets","neutrophils","absolute_neutrophil","lymphocyte","monocyte","eosinophils","basophils",
                       "absolute_neutrophil","absolute_basophil","absolute_monocyte","absolute_eosinophil","absolute_lymphocyte"); 
/*gender = every*/
function getNormalRange($lab,$gender,$age){
global $protocal;
switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}
if(!empty($age)){
    $sql_getlistLab = "select * from ctgd.source_lab where test = '".str_replace("_"," ",$lab)."' and (".$age." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 order by test_lavel asc";
}else{
    $sql_getlistLab = "select * from ctgd.source_lab where test = '".str_replace("_"," ",$lab)."' $sql_gender and $protocal = 1 order by test_lavel asc";
}
    //echo $sql_getlistLab;
    $result_lab = get_a_line($sql_getlistLab);
    
    switch($lab){
         /* Lab CBC */
         case 'basophil': 
         case 'absolute_monocyte':
         case 'absolute_eosinophil':
            if($result_lab['LLN']=='' || $result_lab['LLN'] == 0){
                $normalrange = $result_lab['ULN']; 
            }else{
                $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 
            }
         break;
         case 'absolute_lymphocyte':
              if($result_lab['LLN']==0 && $result_lab['ULN']==0){
                   $normalrange = 'Not available'; 
                }else{
                   $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 
                } 
         break;
        /* call to Albumin */
        case 'albumin': 
            $sql_getlistLab = "select * from ctgd.source_lab where test = 'albumin' and (".$age." BETWEEN age_start and `age_stop`) and gender = 'Every'  order by test_lavel asc";
            $result_lab = get_a_line($sql_getlistLab);
            $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 
            break;
        /* end Albumin */
        case 'chloride': 
        case 'bun':     
            $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 
            break;
        /*case 'basophils':  $normalrange ='Not available'; break; *//* A5375 have Reference Range */
        case 'absolute_basophil': 
            if($result_lab['LLN']==0 && $result_lab['ULN']==0){ 
                $normalrange ='Not available'; 
            }else{
                $normalrange = $result_lab['LLN']." - ".$result_lab['ULN'];
            }
            break;
        /* End CBC */
        /* Lab Chemis */ 
        case 'glucose' :
        case 'triglycerides' : 
            if($age>=18){
                    $normalrange = "Not available"; 
                }else{
                    $normalrange = $result_lab['LLN'].' - '.$result_lab['ULN']; 
                } 
            break;
        case 'hdl':  /*$normalrange = '> '.$result_lab['ULN'];*/ 
            if($result_lab['LLN']!=0 && $result_lab['ULN']!=0){
                if($age>=18){
                    $normalrange = "Not available"; 
                }else{
                    $normalrange = $result_lab['LLN'].' - '.$result_lab['ULN']; 
                } 
            }else{
              $normalrange = '> '.$result_lab['ULN'];   
            }
            break;
        case 'ldl':  
            if($age>=18){
                $normalrange = "Not available"; 
            }else{
                $normalrange = '< '.$result_lab['ULN']; /*$result_lab['ULN'];*/
            }
            break;
        case 'cholesterol':  
            if($result_lab['LLN']!=0 && $result_lab['ULN']!=0){
                if($age>=18){
                    $normalrange = "Not available"; 
                }else{
                    $normalrange = $result_lab['LLN'].' - '.$result_lab['ULN']; 
                } 
            }else{
              $normalrange = '< '.$result_lab['ULN'];   
            }
             break;
        case 'direct_bilirubin':  
            if($age>=18){
              $normalrange = number_format($result_lab['LLN'],2).' - '.number_format($result_lab['ULN'],2); 
            }else{
              $normalrange = '< '.$result_lab['ULN'];   
            }
            
            break;   
        case 'total_bilirubin':  
            if($result_lab['LLN']!=0 && $result_lab['ULN']!=0){
              $normalrange = number_format($result_lab['LLN'],2)." - ".number_format($result_lab['ULN'],2);  
            }else{
              $normalrange = '< '.$result_lab['ULN'];  
            }
             break; 
        case 'indirect_bilirubin': 
            if($age>=18){
                $normalrange = number_format($result_lab['LLN'],2)." - ".number_format($result_lab['ULN'],2);  
            }else{
                $normalrange ='Not available';
            }
           break;
        case 'Creatinine Clearance' :
        case 'eGFR' :
            $normalrange ='Not available'; break; 
        case 'Folate RBC' : 
            if($result_lab['LLN'] =='' || $result_lab['LLN'] ==0){ $normalrange = '> '.$result_lab['ULN']; 
            }else{
                $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 
            }
            break;
        /* End Chemis */    
        default : $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; break; 
       } 
    return "'".$normalrange; //$normalrange;  
    //return $sql_getlistLab;
}
?>
<table width="100%" border="1" cellspacing="5" cellpadding="5">
 <? /*?> td head name column<? */ ?>
  <tr>
    <? for($titleH=0;$titleH<=count($arr_cbox);$titleH++) { 
    if($arr_cbox[$titleH]!=''){ ?>
    <td><?=$arr_cbox[$titleH]?></td> 
    <? if(in_array($arr_cbox[$titleH],$column_refernece)){ ?>
    <td><?=$arr_cbox[$titleH]?>_ref</td> 
    <? } ?>
    <? } 
    } ?>
  </tr>
  <? /*?> td head name column<? */ ?>
  
  <? for($r=0;$r<$nr_data;$r++){ ?>
  <tr>
    <? for($titleH=0;$titleH<=count($arr_cbox);$titleH++) {  if($arr_cbox[$titleH]!=''){ ?>
    <td><?=$result_data[$r][$titleH]?></td>
    
    <? if(in_array($arr_cbox[$titleH],$column_refernece)){ ?>
    <? if(in_array($arr_cbox[$titleH],$listLab)){ //gender = every?> 
        <td><?=getNormalRange($arr_cbox[$titleH],'Every',$result_data[$r]['age'])?></td> 
    <? }else{?>
        <td><?=getNormalRange($arr_cbox[$titleH],$result_data[$r][gender],$result_data[$r]['age'])?></td> 
    <? } ?> 
    <? } ?> 
	<?   }
	} ?>
  </tr>
  <? }?>
</table>

</body>
</html>