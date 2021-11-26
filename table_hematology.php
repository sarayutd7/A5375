<?php

ob_start();

session_start();

include('conn/config.php');

include('conn/function.inc.php');

header('Content-Type: text/html; charset=utf-8');

db_connectIs('ctgd');

$protocal = $_GET['protocal'];

if(!empty($_GET['age'])){

    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and (".$_GET['age']." BETWEEN age_start and `age_stop`) and $protocal = 1  group by test order by tlavel_a5375 asc";

}else{

    $sql_getlistLab = "select *, count(id) as total from source_lab where lab = '".$_GET['labGlobal']."' and $protocal = 1  group by test order by tlavel_a5375 asc";

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

    $sql_getlistLab = "select * from source_lab where (test = '$lab' and $protocal = 1) $sql_gender  order by test_lavel asc";

}

    

    $result_lab = get_a_line($sql_getlistLab);

    $normalrange = $result_lab['LLN']." - ".$result_lab['ULN'];

    

    switch($lab){

       /*case 'Basophils': */ 

       case 'Absolute Monocyte':

       case 'Absolute Eosinophils':

       case 'Absolute Basophils':

       case 'Atypical Lymphocyte': $normalrange ='Not available'; break;

       case 'Absolute Lymphocyte' : 

            if($result_lab['LLN']==0 && $result_lab['ULN']==0){

               $normalrange = 'Not available'; 

            }else{

               $normalrange = $result_lab['LLN']." - ".$result_lab['ULN']; 

            }

            break;

      default : $normalrange = $normalrange; break;

    }

    

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

        default : $number = ''; break; 

    } 

    

    switch($lab){

       /*case 'Basophils': */   

       case 'Atypical Lymphocyte':

       case 'Absolute Monocyte':

       case 'Absolute Eosinophils':

       case 'Absolute Basophils':

       case 'Atypical Lymphocyte':  $txt ='0';  break;   

       default : $txt = $number; break;  

    }

    

    return $txt;  

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

<? /*

echo gender($_GET['gender']);for($rL = 0;$rL < $nr_countListLab ; $rL++){ 

   echo $result_getlistLab[$rL]['test'];

    echo "<br>";

}

*/

    ?>

<table class="table" style="font-size:small;">

    <thead>

        <tr>

            <th width="30%" class="text-center"><?=$_GET['task']?>Test name</th>

            <th class="text-center" width='100'>Value</th>

            <th class="text-center" width='150'>Units</th>

            <th class="text-center" width='250'>Reference Range</th>

            <th class="text-center" width='100'>Grade</th>

        </tr>

    </thead>

    <tbody>

        <? for($row = 0;$row < $nr_countListLab ; $row++){ 

    if(num_record("source_lab","where test = '".$result_getlistLab[$row]['test']."' and gender = '".gender($_GET['gender'])."'") > 0){

            //if($result_getlistLab[$row]['total']>1){ 

        ?>

        <tr>

            <td>

                <?=ucfirst($result_getlistLab[$row]['test'])?>

                

            </td>

            <td>

                <input name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" type="number" 

                       <?=getstep($result_getlistLab[$row]['units'])?>

                       class="form-control input-sm text-center" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" onkeyup="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],$_GET['gender'],'ULN')?>)" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>" /></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">

                    <?=$result_getlistLab[$row]['units']?></label></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">

                    <?=getNormalRange($result_getlistLab[$row]['test'],$_GET['gender'])?></label></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>

                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>" /></td>

        </tr>

        <? }elseif($result_getlistLab[$row]['total']<=1){ ?> 

        <tr>

            <td>

                <?=ucfirst(show_labname($result_getlistLab[$row]['test']))?>

            </td>

            <td>

            <input name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" type="number" 

            <?

        if($result_getlistLab[$row]['test']=='Platelets'){ echo "step='0.1'"; }else{

            echo getstep($result_getlistLab[$row]['units']);

        }

        ?> class="form-control input-sm text-center" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>" onkeyup="check_value('<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>',this.value,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','LLN')?>,<?=getNumberNR($result_getlistLab[$row]['test'],'Every','ULN')?>)" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test'])),$_GET['recid'])?>" /></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_units">

                    <?=$result_getlistLab[$row]['units']?></label></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_nr">

                    <?=getNormalRange($result_getlistLab[$row]['test'],'Every')?></label></td>

            <td class="text-center"><label id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_label"><?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?></label>

                <input type="hidden" id="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" name="<?=strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_',$result_getlistLab[$row]['test']."_gr")),$_GET['recid'])?>" /></td>

        </tr> 

        <? } ?> 

        <? } ?>  

        

    </tbody>

</table>