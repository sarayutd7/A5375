<?
include('conn/config.php');
include('conn/function.inc.php');
//header('Content-Type: text/html; charset=utf-8');
db_connectIs('ctgd'); 
$protocal = 'A5375';
if(!empty($_GET['age'])){
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by test_lavel_imp2014 asc";
}else{
    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and $protocal = 1   group by test order by test_lavel_imp2014 asc";
}
//echo $sql_getlistLab;
$result_getlistLab = get_rsltset($sql_getlistLab);
$nr_countListLab = count($result_getlistLab);

include("_fun.hemato.php");
?>

<table border="1" width="100%" cellspacing='0' cellpadding='2' style="font-size:12px;">
    <thead>
        <tr>
            <td valign="top" align="center" width='400'><strong>Test name</strong></td>
            <td valign="top" align="center" width='100'><strong>Result</strong></td>
            <td valign="top" align="center"><strong>Units</strong></td>
            <td valign="top" align="center" width='100'><strong>Reference Range *</strong></td>
            <td valign="top" align="center" width='90'><strong>Flag <br>**</strong></td>
            <td valign="top" align="center" width='130'><strong>Grading <br>***</strong></td>
            <td valign="top" align="center" style="font-size:10px;"><strong>Clinical Significant ***</strong><br>Y - Yes<br>N - No</td>
            <td valign="top" align="center" width='130'><strong>Relationship to <br>study<br>Medication</strong><small><br>R - Related<br>NR - Not Related<br>99 - Pre-Existing</small></td>
            <td valign="top" align="center" width='90'><strong>Drug related</strong></td>
        </tr>
    </thead>
    <tbody>
       <tr>
           <td colspan="9" bgcolor="#c0c0c0"><strong>Parameter</strong></td>
       </tr>
        <? for($row = 0;$row < 4 ; $row++){ $line = $line+1;
            if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($gender_patient)."'") > 1){
            //if($result_getlistLab[$row]['total']>1){ 
        ?>
        <tr>
            
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?> </td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],$gender_patient)?>
            </td>
            <!-- Remark td -->
            <td align="center"><?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'ULN'))?>
            </td>
            <!-- Remark td -->
            <td align="center"> <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? }elseif($result_getlistLab[$row]['total']<=1){ ?>
        <tr> 
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?></td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?>

            </td>
            <!-- Remark td -->
            <td align="center">
                <?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'ULN'))?>
            </td>
            <!-- Remark td -->
            <td align="center"> <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? } ?>
        <? } ?>
        <tr>
            <td colspan="9" bgcolor="#c0c0c0"><strong>% Differential WBC count</strong></td>
        </tr>
        <? for($row = 4;$row < 10 ; $row++){ $line = $line+1;
            if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($gender_patient)."'") > 1){
            //if($result_getlistLab[$row]['total']>1){ 
        ?>
        <tr>
            
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?> </td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],$gender_patient)?>
            </td>
            <!-- Remark td -->
            <td align="center"><?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'ULN'))?></td>
            <!-- Remark td -->
            <td align="center">
            <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? }elseif($result_getlistLab[$row]['total']<=1){ ?>
        <tr> 
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?>
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?></td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?>

            </td>
            <!-- Remark td -->
            <td align="center">
                
                <?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'ULN'))?>
            </td>
            <!-- Remark td -->
            <td align="center">
                <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])); ?> 
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? } ?>
        <? } ?>
        
        <tr>
           <td colspan="9" bgcolor="#c0c0c0"><strong>Absolute Differential WBC count</strong></td>
        </tr>
        <? for($row = 10;$row < 11 ; $row++){ $line = $line+1;
            if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($gender_patient)."'") > 1){
            //if($result_getlistLab[$row]['total']>1){ 
        ?>
        <tr>
            
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?> Count
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?> </td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],$gender_patient)?>
            </td>
            <!-- Remark td -->
            <td align="center"><?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],$gender_patient,$age_patient,'ULN'))?></td>
            <!-- Remark td -->
            <td align="center">
            <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid']))?> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? }elseif($result_getlistLab[$row]['total']<=1){ ?>
        <tr> 
            <td class="text-left">&nbsp;
                <?=ucfirst($result_getlistLab[$row]['test'])?> Count
            </td>
            <td align="center"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?></td>
            <td align="center">
                <?=$result_getlistLab[$row]['units']?></td>
            <td align="center">
                <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?>

            </td>
            <!-- Remark td -->
            <td align="center">
                
                <?=remark_alert(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid']),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'LLN'),getNumberNR_fn2($result_getlistLab[$row]['test'],'Every',$age_patient,'ULN'))?>
            </td>
            <!-- Remark td -->
            <td align="center">
                <?=replacement_grade(currrent_data_view(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])); ?> 
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <? } ?>
        <? } ?>
    </tbody>
</table> 