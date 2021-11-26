<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$protocal = $_GET['protocal'];
if(!empty($_GET['age'])){
    /*if($_GET['age']==0){ 
            $sql_getlistLab = "select *, count(id) as total from source_lab where (lab = '".$_GET['labGlobal']."' and typeage = 'day') and (".$_GET['age']." BETWEEN age_start and `age_stop`) and impaact2014 = 1  group by test order by test_lavel asc";  
    }else{ */
            $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."'  and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel asc";  
    /*}*/
    //$sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and impaact2014 = 1  group by test order by test_lavel asc";
}else{
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and $protocal = 1  group by test order by test_lavel asc";
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
        //case 'AST' : $normalrange = $sql_getlistLab; break;
        case 'LDL':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Cholesterol':  $normalrange = '< '.$result_lab['ULN']; break;
        case 'Direct Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break;  
        /*case 'Total Bilirubin':  $normalrange = '< '.$result_lab['ULN']; break;*/      //Total Bilirubin
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

   return $result_current_data[$test];
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
//echo gender($_GET['gender']);
//echo "<br>";
//echo num_record("source_lab","where test = 'Albumin' and gender = '".gender($_GET['gender'])."'");
//echo "where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($_GET['gender'])."'";

//for($row = 0;$row < $nr_countListLab ; $row++){
//   echo $result_getlistLab[$row]['test'].","; 
//}


?> 
<table class="table" style="font-size:small;">
    <thead>
        <tr>
            <th class="text-center"><?=$_GET['task']?>Test name</th>
            <th class="text-center" width='100'>Value</th>
            <th class="text-center" width='150'>Units</th>
            <th class="text-center" width='250'>Reference Range</th>
            <th class="text-center" width='100'>Grade</th>
        </tr>
    </thead>
    <tbody>
        <?  $listLabChemis = array("Creatinine","Albumin","AST","ALT");
                
            /*
            "Sodium","Potassium","Bicarbonate","Total Bilirubin","Indirect Bilirubin","Direct Bilirubin","Glucose","Phosphorus","Cholesterol","HDL"
            */
            for($row = 0;$row < $nr_countListLab ; $row++){ 
            //if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($_GET['gender'])."'") >= 1){  
            if(in_array($result_getlistLab[$row]['test'], $listLabChemis)){ 
    //if($result_getlistLab[$row]['total']>1){ 
        ?>
        <tr>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>  
            </td>
            <td>
                <input name="<?=name_obj($result_getlistLab[$row]['test'],'')?>" 
                       type="number" step="0.01"
                       class="form-control input-sm text-center" 
                       id="<?=name_obj($result_getlistLab[$row]['test'],'')?>" 
                       onkeyup="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'ULN')?>)" 
                       value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>" /></td>
            <td class="text-center">
                <label id="<?=name_obj($result_getlistLab[$row]['test'],'_units')?>">
                    <?=$result_getlistLab[$row]['units']?></label>
            </td>
            <td class="text-center">
                 <label id="<?=name_obj($result_getlistLab[$row]['test'],'_nr')?>">
                    <?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?>
                    <input type="hidden" 
                           id="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" 
                           name="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'LLN')?>">
                    <input type="hidden" 
                           id="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" 
                           name="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'ULN')?>">
                </label>
                </td>
            <td class="text-center">
                   <label id="<?=name_obj($result_getlistLab[$row]['test'],'_label')?>">
                    <?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>
                    </label>
                <input  type="hidden" 
                        id="<?=name_obj($result_getlistLab[$row]['test'],'_grade')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_grade')?>" class="form-control text-center" 
                        value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/>
                        </td>
        </tr>
        <? }else{ 
            //}elseif($result_getlistLab[$row]['total']<1){ ?>
        <tr>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td>
                <input name="<?=name_obj($result_getlistLab[$row]['test'],'')?>" 
                       type="number" step="0.01"
                       class="form-control input-sm text-center" 
                       id="<?=name_obj($result_getlistLab[$row]['test'],'')?>" 
                       onkeyup="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','ULN')?>)" 
                       value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>" /></td>
            <td class="text-center">
                <label id="<?=name_obj($result_getlistLab[$row]['test'],'_units')?>">
                    <?=$result_getlistLab[$row]['units']?></label>
            </td>
            <td class="text-center"> 
                <label id="<?=name_obj($result_getlistLab[$row]['test'],'_nr')?>">
                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?>
                    <input type="hidden" 
                           id="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" 
                           name="<?=name_obj($result_getlistLab[$row]['test'],'_LLN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],'Every','LLN')?>">
                    <input type="hidden" 
                           id="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" 
                           name="<?=name_obj($result_getlistLab[$row]['test'],'_ULN')?>" value="<?=getNumberNR($result_getlistLab[$row]['test'],'Every','ULN')?>">
                </label>
            </td>
            <td class="text-center">
                   <label id="<?=name_obj($result_getlistLab[$row]['test'],'_label')?>">
                    <?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>
                    </label>
                <input  type="hidden" 
                        id="<?=name_obj($result_getlistLab[$row]['test'],'_grade')?>" name="<?=name_obj($result_getlistLab[$row]['test'],'_grade')?>" class="form-control text-center" 
                        value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/>
                        </td>
        </tr>
        <? } ?>
        <? } ?>
    </tbody>
</table>