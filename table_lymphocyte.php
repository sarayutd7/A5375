<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$protocal = $_GET['labGlobal'];
if(!empty($_GET['age'])){
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel asc";
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
    $sql_getlistLab = "select * from source_lab where (test = '$lab' and $protocal = 1) and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender  order by test_lavel asc";
}else{
    $sql_getlistLab = "select * from source_lab where (test = '$lab' and $protocal = 1) $sql_gender  order by test_lavel asc";
}
    
    $result_lab = get_a_line($sql_getlistLab);
    $normalrange = $result_lab['LLN']." - ".$result_lab['ULN'];
    return $normalrange; //;
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
    $sql_getlistLab = "select * from source_lab where (test = '$lab' and $protocal = 1) and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender ";
}else{
    $sql_getlistLab = "select * from source_lab where (test = '$lab' and $protocal = 1) $sql_gender ";
}
    
    $result_lab = get_a_line($sql_getlistLab);
    switch($type){
        case 'LLN' : $number = $result_lab['LLN']; break;
        case 'ULN' : $number = $result_lab['ULN']; break;
        default : $number = '0'; break; 
    } 
    if($number == ''){
        $number = 0; 
    }
    return $number;  
}


function current_data($test,$recid){ 
   global $protocal;
   $result_current_data = get_a_line("select * from $protocal.cd4 where id_record = '$recid'");
   switch($test){
        case 'cd4' : $fdata = "cd4_value"; break;
        case 'cd8' : $fdata = "cd8_value"; break;
        default : $fdata = $test; break;
    }
   return $result_current_data[$fdata];
}
 
?>

<table class="table" style="font-size:small;">
    <thead>
        <tr>
            <th class="text-center"><?=$_GET['task']?>Test name</th>
            <th class="text-center" width='100'>Value</th>
            <th class="text-center" width='150'>Units</th>
            <th class="text-center" width='250'>Normal range</th>
            <th class="text-center" width='100'>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <? for($row = 0;$row < $nr_countListLab ; $row++){ 
            if($result_getlistLab[$row]['total']>1){ 
        ?>
        <tr>
            <td>
                <?=show_labname($result_getlistLab[$row]['test'])?>
            </td>
            <td>
            <input name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" type="number" step="0.01" class="form-control input-sm text-center" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" onchange="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'ULN')?>)" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>" /></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>
                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/></td>
        </tr>
        <? }elseif($result_getlistLab[$row]['total']<=1){ ?>
        <tr>
            <td><?//$result_getlistLab[$row]['total']?>
                <? //ucfirst($result_getlistLab[$row]['test'])?>
                <?=show_labname($result_getlistLab[$row]['test'])?>
            </td>
            <td><input name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" type="number" step="0.01" class="form-control input-sm text-center" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" onchange="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','ULN')?>)" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>"/></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">
                    <?=$result_getlistLab[$row]['units']?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?></label></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>
                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>"/></td>
        </tr>
        <? } ?>
        <? } ?>
    </tbody>
</table>