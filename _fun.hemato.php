<?
function getNormalRange($lab,$gender){
global $protocal;
switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}
if(!empty($_GET['age'])){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 order by test_lavel_imp2014 asc";
}else{
    $sql_getlistLab = "select * from source_lab where test = '$lab' $sql_gender  and $protocal = 1 order by test_lavel_imp2014 asc";
}
    
    $result_lab = get_a_line($sql_getlistLab);
    
    if($result_lab['LLN']=='' and $result_lab['ULN']==''){
        $normalrange = '';
    }else{
        $normalrange = $result_lab['LLN']." - ".$result_lab['ULN'];
    }
    $result_lab = get_a_line($sql_getlistLab);
    switch($lab){
        /*case 'Basophils': $txt = 'Not available'; break;*/
        case 'Atypical Lymphocyte': $txt = 'Not available'; break;
        case 'Absolute Neutrophil' : 
            $txt = $result_lab['LLN']." - ".$result_lab['ULN'];
            //$txt = number_format($result_lab['LLN'],1)." - ".number_format($result_lab['ULN'],1);
            break;
        default : $txt = $result_lab['LLN']." - ".$result_lab['ULN']; break;
    }
    return $txt; //;
}

function getNumberNR($lab,$gender,$type){
  switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
} 
if(!empty($_GET['age'])){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$result_current_data['age']." BETWEEN age_start and `age_stop`) $sql_gender ";
}else{
    $sql_getlistLab = "select * from source_lab where test = '$lab' $sql_gender ";
}
    
    $result_lab = get_a_line($sql_getlistLab);
    switch($type){
        case 'LLN' : $number = $result_lab['LLN']; break;
        case 'ULN' : $number = $result_lab['ULN']; break;
        default : $number = ''; break; 
    } 
    return $number;  
}

function getNumberNR_fn2($lab,$gender,$age,$type){
    global $protocal;
    switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}
if(!empty($age)){
    $sql_getlistLab2 = "select * from source_lab where test = '$lab' and (".$age." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1";
}else{
    $sql_getlistLab2 = "select * from source_lab where test = '$lab' $sql_gender and $protocal = 1";
}
    
    $result_lab2 = get_a_line($sql_getlistLab2);
    switch($type){
        case 'LLN' : $number = $result_lab2['LLN']; break;
        case 'ULN' : $number = $result_lab2['ULN']; break;
        default : $number = ''; break; 
    } 
    return $number;
    
}

function current_data($test,$recid){ 
   global $protocal;
   $result_current_data = get_a_line("select * from $protocal.hemato where id_record = '$recid'");
   if($result_current_data[$test]!=''){ 
       switch($test){
           case 'platelets' : $txt = number_format($result_current_data[$test],1) ; break;
           default : $txt = $result_current_data[$test];  break;
       }
     }else{ $txt = '';
       
   }
   return $txt;
}

function currrent_data_view($test,$recid){
  global $protocal;
   $result_current_data = get_a_line("select * from $protocal.hemato where id_record = '$recid'");
     $txt = $result_current_data[$test];
   return $txt;   
}
function gender($x){
    switch($x){
        case 'F' : $txt = 'Female' ; break;
        case 'M' : $txt = 'Male' ; break;
            default : $txt = 'Every'; break;
    } 
    return $txt; 
}

function name_obj($item,$refill){
    $nameObj = strtolower(str_replace(' ','_',$item));
    return $nameObj.$refill;
}
?>