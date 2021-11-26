<?
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd');
$protocal = $_GET['protocal'];
if(!empty($_GET['age'])){
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel asc";
}else{
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and $protocal = 1   group by test order by test_lavel asc";
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
    
    $result_lab = get_a_line($sql_getlistLab);
    $normalrange = $result_lab['LLN']." - ".$result_lab['ULN'];
    return $normalrange;
}

function getNumberNR($lab,$gender,$type){
  switch($gender){
    case 'M' : $sql_gender = "and gender = 'Male' "; break;
    case 'F' : $sql_gender = "and gender = 'Female' "; break;
    case 'Every' : $sql_gender = "and gender = 'Every'"; break;    
    default : $sql_gender = "and gender = 'Every'"; break;
}
if(!empty($_GET['age'])){
    $sql_getlistLab = "select * from source_lab where test = '$lab' and (".$_GET['age']." BETWEEN age_start and `age_stop`) $sql_gender ";
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


function current_data($test,$recid){ 
   global $protocal;
   $result_current_data = get_a_line("select * from $protocal.hemato where id_record = '$recid'");

   return $result_current_data[$test];
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

<table class="table" style="font-size:small;" width="100%">
    <thead>
        <tr class="bg-info">
            <th class="text-center"><?=$_GET['task']?>Test name</th>
            <th class="text-center">Result</th> 
            <th class="text-center">AE Severity Grade</th>
            <th class="text-center">Normal range</th> 
        </tr>
    </thead>
    <tbody>
        <? for($row = 0;$row < $nr_countListLab ; $row++){ 
            $txt = strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))."_gr";
    if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($_GET['gender'])."'") > 1){
//            if($result_getlistLab[$row]['total']>1){  
                 if(current_data($txt,$_GET['recid'])>=3){ //Lab = Creatinine,Creatinine Clearance 
        ?>
        <tr>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td class="text-center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td> 
            <td class="text-center">
                <?=current_data($txt,$_GET['recid'])?>
            </td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?></label>
            <input type="hidden" id="lab" name="lab[]" value="<?=ucfirst($result_getlistLab[$row]['test'])?>|<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>|<?=current_data($txt,$_GET['recid'])?>|<?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?>">
                    </td>
            
        </tr>
        <? }
            }elseif($result_getlistLab[$row]['total']<=1){ 
           if(current_data($txt,$_GET['recid'])>=2){  
        ?>
        <tr>
            <td>
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td class="text-center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td> 
            <td class="text-center"><?=current_data($txt,$_GET['recid'])?></td>
            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">
                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?></label>
            <input type="hidden" id="lab" name="lab[]" value="<?=ucfirst($result_getlistLab[$row]['test'])?>|<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>|<?=current_data($txt,$_GET['recid'])?>|<?=getNormalRange($result_getlistLab[$row]['test'],'Every')?>">
            </td>
            
        </tr>
        <? } 
            }  
        } ?>
    </tbody>
</table>
 