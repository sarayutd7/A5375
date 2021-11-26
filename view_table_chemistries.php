<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$protocal = $_GET['protocal'];
if(!empty($_GET['age'])){
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel_imp2014 asc";
}else{
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and $protocal = 1  group by test order by test_lavel_imp2014 asc";
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
if(!empty($_GET['age'])){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 order by test_lavel asc";
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
        case 'Total Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break;      //Total Bilirubin
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
if(!empty($_GET['age'])){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender and $protocal = 1 ";
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
   if($result_current_data[$test]!='' and $result_current_data[$test]!= 0.00){ $txt = $result_current_data[$test]; 
                                                                              }else{ $txt = '';
       
   }
   return $txt;
}
?>

<table class="table" style="font-size:small;">
    <thead>
        <tr>
            <td><?=$line?></td>
            <td class="text-center"><?=$_GET['task']?>Test name</td>
            <td class="text-center" width='100'>Value</td>
            <td class="text-center" width='150'>Units</td>
            <td class="text-center" width='250'>Normal range</td>
            <td class="text-center"><strong>AE</strong><br>Severity<br><small>(if applicable)**</small></td>
            <td class="text-center"><strong>CS</strong><br>Y - Yes<br>N - No</td>
            <td class="text-center"><strong>Relationship to study<br>Medication<br>R - Related<br>NR - Not Related<br>99 - Pre-Existing</strong></td>
        </tr>
    </thead>
    <tbody>
        <? for($row = 0;$row < $nr_countListLab ; $row++){ $line = $line+1;
            if($result_getlistLab[$row]['total']>1){  
        ?>
        <tr>
            <td><?=$line?></td>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td class="text-center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>
                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? }elseif($result_getlistLab[$row]['total']<=1){ ?>
        <tr>
            <td>&nbsp;</td>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td class="text-center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>
                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? } ?>
        <? } ?>
    </tbody>
</table>
<div>
   <label><small>*Refer to DAIDS Toxicity Grading Version 2.1, July 2017</small><br>
   <small>**OOR = Out Of Range, Hi = High, Lo = Low</small>
   </label> 
</div>
<? //count($getTolabAlert) ?>