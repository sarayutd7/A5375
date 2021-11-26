<?php
//ob_start();
//session_start();
//include('conn/config.php');
//include('conn/function.inc.php');
//header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$protocal = 'A5375';

$age_patient = $result_current_data['age'];
$gender_patient = $result_current_data['gender'];
//============================================
if(!empty($age_patient)){
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = 'Chemistries' and (".$age_patient." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel_imp2014 asc";
}else{
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = 'Chemistries' and $protocal = 1  group by test order by test_lavel_imp2014 asc";
}
//echo $sql_getlistLab;
$result_getlistLab = get_rsltset($sql_getlistLab);
$nr_countListLab = count($result_getlistLab);

function getNormalRange($lab,$gender){
global $protocal;
switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}

if(!empty($age_patient)){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$result_current_data['age']." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 order by test_lavel asc";
}else{
    $sql_getlistLab = "select * from source_lab where test = '$lab' $sql_gender  and $protocal = 1 order by test_lavel asc";
}
    //echo $sql_getlistLab;
    $result_lab = get_a_line($sql_getlistLab);
    
    switch($lab){
        //case 'HDL':  $normalrange = '> '.$result_lab['ULN']; break;
        case 'LDL':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Cholesterol':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Direct Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break; 
        case 'Total Bilirubin':  $normalrange = number_format($result_lab['LLN'],2)." - ".number_format($result_lab['ULN'],2); break;
        /* */     //Total Bilirubin
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
    switch($lab){
        case 'Total Bilirubin' :  $txt_number = number_format($number,2); break;
        default : $txt_number = $number; break;
    }
    return $txt_number;  
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

<table border="1" width="100%" cellspacing='0' cellpadding='3' style="font-size:12px;">
    <thead>
        <tr>
            <td valign="top" align="center" width='250'><strong>Test name</strong></td>
            <td valign="top" align="center" width='100'><strong>Result</strong></td>
            <td valign="top" align="center"><strong>Units</strong></td>
            <td valign="top" align="center" width='100'><strong>Reference Range *</strong></td>
            <td valign="top" align="center" width='100'><strong>Flag <br>**</strong></td>
            <td valign="top" align="center" width='130'><strong>Grading <br>***</strong></td>
            <td valign="top" align="center" style="font-size:10px;"><strong>Clinical Significant ****</strong><br>Y - Yes<br>N - No</td>
            <td valign="top" align="center" width='130'><strong>Relationship to <br>study<br>Medication</strong><small><br>R - Related<br>NR - Not Related<br>99 - Pre-Existing</small></td>
            <td valign="top" align="center" width='90'><strong>Drug related</strong></td>
        </tr>
    </thead>
    <tbody>
        <? $listLabChemis = array("Creatinine","Albumin","AST","ALT");
        for($row = 0;$row < $nr_countListLab ; $row++){ $line = $line+1;
          if(in_array($result_getlistLab[$row]['test'], $listLabChemis)){  
          //if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($gender_patient)."'") > 1){ 
            //if($result_getlistLab[$row]['total']>1){  
        ?>
        <tr>
            <td>&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td align="center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],$gender_patient)?></label>
                <input type="hidden" id="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],$gender_patient,'LLN')?>">
                <input type="hidden" id="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],$gender_patient,'ULN')?>">
            </td>
            <!-- Remark td -->
            <td align="center">
                <?=remark_alert(current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']),getNumberNR($result_getlistLab[$row]['test'],$gender_patient,'LLN'),getNumberNR($result_getlistLab[$row]['test'],$gender_patient,'ULN'))?>
            </td>
            <!-- Remark td -->

            <td align="center">
            <?=replacement_grade(current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?>    
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? //}elseif($result_getlistLab[$row]['total']<=1){
          }else{ 
        ?>
        <tr>
            <td>&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td align="center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?></label>
                <input type="hidden" id="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],'Every','LLN')?>">
                <input type="hidden" id="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],'Every','ULN')?>">
            </td>
            <!-- Remark td -->
            <td align="center">
                <?=remark_alert(current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']),getNumberNR($result_getlistLab[$row]['test'],'Every','LLN'),getNumberNR($result_getlistLab[$row]['test'],'Every','ULN'))?>
            </td>
            <!-- Remark td -->

            <td align="center">
                <?=replacement_grade(current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? } ?>
        <? } ?>
    </tbody>
</table>
