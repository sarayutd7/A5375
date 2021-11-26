<?
$task_page = explode('_',$_GET['task']);

switch($task_page[0]){
    case 'create' : 
        switch($_GET['task']){
               case 'create_hiv_rt': $file = 'HIVRapid'; break; //blank.php
               case 'create_hiv_eia' : $file = 'HIVEIA'; break;
               case 'create_hiv_rna' : $file = 'HIVRNA';  break;   
               case 'create_syphilis' : $file = 'Syphilis';  break;
               case 'create_ctng' : $file = 'CTNG';  break;
               case 'create_hepatitis' : $file = 'Hepatit';  break;
               case 'create_cd4' : $file = 'CD4';  break;
               case 'create_urine' : $file = 'Urine';  break;
                case 'create_urinepregnancy' : $file = 'Urinepregnancy';  break; //view_urinepregnancy
               case 'create_hemato' : $file = 'Hemato';  break;
               case 'create_chemis' : $file = 'Chemis';  break;
               default : $file = ''; break; 
        }
        break;
    case 'edit' : 
        switch($_GET['task']){
               case 'edit_hiv_rt': $file = 'HIVRapid'; break; //blank.php
               case 'edit_hiv_eia' : $file = 'HIVEIA'; break;
               case 'edit_hiv_rna' : $file = 'HIVRNA';  break;   
               case 'edit_syphilis' : $file = 'Syphilis';  break;
               case 'edit_ctng' : $file = 'CTNG';  break;
               case 'edit_hepatitis' : $file = 'Hepatit';  break;
               case 'edit_cd4' : $file = 'CD4';  break;
               case 'edit_urine' : $file = 'Urine';  break;
                case 'edit_urinepregnancy' : $file = 'Urinepregnancy';  break; //view_urinepregnancy
               case 'view_hemato' : $file = 'Hemato';  break;
               case 'edit_chemis' : $file = 'Chemis';  break;
               default : $file = ''; break; 
        }
        break;
     case 'view' : 
        switch($_GET['task']){
               case 'view_hiv_rt': $file = 'HIVRapid'; break; //blank.php
               case 'view_hiv_eia' : $file = 'HIVEIA'; break;
               case 'view_hiv_rna' : $file = 'HIVRNA';  break;   
               case 'view_syphilis' : $file = 'Syphilis';  break;
               case 'view_ctng' : $file = 'CTNG';  break;
               case 'view_hepatitis' : $file = 'Hepatit';  break;
               case 'view_cd4' : $file = 'CD4';  break;
               case 'view_urine' : $file = 'Urine';  break;
               case 'view_urinepregnancy' : $file = 'Urinepregnancy';  break; //view_urinepregnancy
               case 'view_hemato' : $file = 'Hemato';  break;
               case 'view_chemis' : $file = 'Chemis';  break;
               default : $file = ''; break; 
        }
        break;
    default : $file = ''; break;
}
if($file){
            $part = '&tab='.$file;
        }else{
            $part = '';
        }
?>
<footer class="panel-footer text-center">
   <? if($task_page[0]!='view'){ ?> 
    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
    <button class="btn btn-danger" type="reset" onclick="location.replace('index.php?pid=<?=$_GET['pid']?>&task=findPID<?=$part?>');"><i class="glyphicon glyphicon-off"></i> Reset</button>
    <? }else{?> 
    <button class="btn btn-info" type="reset" onclick="location.replace('index.php?pid=<?=$_GET['pid']?>&task=findPID<?=$part?>&tab=<?=$file?>');"><i class="glyphicon glyphicon-step-backward"></i> Back </button>
    <? } ?>
</footer>
