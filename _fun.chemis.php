<?
function getNormalRange($lab,$gender){
global $protocal;
    global $age_patient; 
switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}

if(!empty($age_patient)){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$age_patient." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 order by test_lavel asc";
}else{
    $sql_getlistLab = "select * from source_lab where test = '$lab' $sql_gender  and $protocal = 1 order by test_lavel asc";
}
    //echo $sql_getlistLab;
    $result_lab = get_a_line($sql_getlistLab);
    
    switch($lab){
        case 'HDL':  $normalrange = '> '.$result_lab['ULN']; break;
        case 'LDL':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Cholesterol':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Direct Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break;  
        case 'Total Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break;      //Total Bilirubin
        case 'Indirect Bilirubin': $normalrange ='Not available'; break;
        case 'Creatinine': $normalrange = number_format($result_lab['LLN'],1)." - ".number_format($result_lab['ULN'],1);  break;
        default : $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; break; 
       } 
    return $normalrange;
}

function getNumberNR($lab,$gender,$type){
  global $protocal;
  switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}
if(!empty($age_patient)){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$result_current_data['age']." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 ";
}else{
    $sql_getlistLab = "select * from source_lab where test = '$lab' $sql_gender and $protocal = 1 ";
}
    //echo $sql_getlistLab
    $result_lab = get_a_line($sql_getlistLab);
    switch($type){
        case 'LLN' : $number = $result_lab['LLN']; break;
        case 'ULN' : $number = $result_lab['ULN']; break;
        default : $number = ''; break; 
    } 
    return $number;  
}


function current_data($test,$recid){ 
   global $protocal;
   $result_current_data = get_a_line("select * from $protocal.chem where id_record = '$recid'");
     //if($result_current_data[$test]!='' and $result_current_data[$test]!= 0.00){ 
       $txt = $result_current_data[$test]; 
     //}else{ $txt = '';
       
     //}
   return $txt;
}

function currrent_data_view($test,$recid){
  global $protocal;
   $result_current_data = get_a_line("select * from $protocal.hemato where id_record = '$recid'");
     $txt = $result_current_data[$test];
   return $txt;   
}

function name_obj($item,$refill){
    $nameObj = strtolower(str_replace(' ','_',$item));
    return $nameObj.$refill;
}
function gender($x){
    switch($x){
        case 'F' : $txt = 'Female' ; break;
        case 'M' : $txt = 'Male' ; break;
            default : $txt = 'Every'; break;
    } 
    return $txt; 
}
?>