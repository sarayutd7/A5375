<? 
    $cut_task = explode('_',$_GET['task']);
    if($cut_task[0]=='print'){
        switch($_GET['task']){
        case 'print_hiv_rt' : 
                $lab = 'hiv_rt';
                $textLab = 'Hiv Repid Test';
                $sql_print = "select * from hiv where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;
        case 'print_hiv_eia' : 
                $lab = 'hiv_eia';
                $textLab = 'HIV EIA <sup>4th</sup> Generation';
                $sql_print = "select * from hiv_eia where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;      
        case 'print_hiv_rna' : 
                $lab = 'hiv_rna';
                $textLab = 'HIV-1 RNA PCR';
                $sql_print = "select * from hiv_rna where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_hiv_sero' : 
                $lab = 'hiv_sero';
                $textLab = 'HIV Serology';
                $sql_print = "select * from hiv_sero where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;
        case 'print_cd4' : 
                $lab = 'cd4';
                $textLab = 'Immunophenotyping';
                $sql_print = "select * from cd4 where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_urine' : 
                $lab = 'urine';
                $textLab = 'Urine';
                $sql_print = "select * from urine where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break; 
        case 'print_urinepregnancy' : 
                $lab = 'urinepregnancy';
                $textLab = 'Urine pregnancy';
                $sql_print = "select * from urinepregnancy where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break; 
        case 'print_ctng' : 
                $lab = 'ctng';
                $textLab = 'CT/NG';
                $sql_print = "select * from ctng where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_syphilis' : 
                $lab = 'syphilis';
                $textLab = 'Syphilis';
                $sql_print = "select * from syphilis where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_hepatitis' : 
                $lab = 'hepatitis';
                $textLab = 'Hepatitis Serology';
                $sql_print = "select * from hepatitis where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_hemato' : 
                db_connect();
                $lab = 'hemato';
                $textLab = 'Hemato Serology';
                $sql_print = "select * from hemato where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'print_chemis' : 
                $lab = 'chemis';
                $textLab = 'chemis Serology';
                $sql_print = "select * from chem where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        default : $sql_print = ""; break;
        }
        $result_current_data = get_a_line($sql_print);
    }elseif($cut_task[0] == 'get'){
       switch($_GET['lab']){
        case 'hiv_rt' : 
                $lab = 'hiv_rt';
                $textLab = 'Hiv Repid Test';
                $sql_print = "select * from hiv where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;
        case 'hiv_eia' : 
                $lab = 'hiv_rna';
                $textLab = 'HIV EIA <sup>4th</sup> Generation';
                $sql_print = "select * from hiv where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;
         
        case 'hiv_rna' : 
                $lab = 'hiv_rna';
                $textLab = 'HIV-1 RNA PCR';
                $sql_print = "select * from hiv_rna where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        
        case 'hiv_sero' : 
                $lab = 'hiv_sero';
                $textLab = 'HIV Serology';
                $sql_print = "select * from hiv_sero where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;
               
        case 'cd4' : 
                $lab = 'cd4';
                $textLab = 'Immunophenotyping';
                $sql_print = "select * from cd4 where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'urine' : 
                $lab = 'urine';
                $textLab = 'Urine';
                $sql_print = "select * from urine where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;  
        case 'urinepregnancy' : 
                $lab = 'urinepregnancy';
                $textLab = 'Urine pregnancy';
                $sql_print = "select * from urinepregnancy where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break; 
        case 'ctng' : 
                $lab = 'ctng';
                $textLab = 'CT/NG';
                $sql_print = "select * from ctng where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'syphilis' : 
                $lab = 'syphilis';
                $textLab = 'Syphilis';
                $sql_print = "select * from syphilis where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'hepatitis' : 
                $lab = 'hepatitis';
                $textLab = 'Hepatitis Serology';
                $sql_print = "select * from hepatitis where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'hemato' : 
                $lab = 'hemato';
                $textLab = 'Hemoto Serology';
                $sql_print = "select * from hemato where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        case 'chemis' : 
                $lab = 'chemis';
                $textLab = 'chemis Serology';
                $sql_print = "select * from chem where ptid = '".$_GET['pid']."' and id_record = '".$_GET['recid']."' "; break;   
        default : $textLab =''; $sql_print = ""; break; 
        } 
        $result_current_data = get_a_line($sql_print);
    }
?>
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="print.php?task=get_print&lab=<?=$lab?>&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>" class="fa fa-print text-small text-succeess" target="_blank" title="Print"></a>
            <a href="#" onclick="window.history.back();" class="fa fa-times"></a>
        </div>
        <h2 class="panel-title">View
            <?=ucfirst($textLab)?>
        </h2>
        <p class="panel-subtitle">Protocal/Project Name : <?=strtoupper(webdetail('protocal'))?></p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <?
    switch($_GET['task']){
        case 'print_hiv_rt' : include('print_hiv_rt.php'); break;
        case 'print_hiv_eia' : include('print_hiv_eia.php'); break;
        case 'print_hiv_rna' : include('print_hiv_rna.php'); break;
            case 'print_hiv_sero' : include('print_hiv_sero.php'); break;
        case 'print_cd4' : include('print_cd4.php'); break;
        case 'print_urine' : include('print_urine.php'); break;
            case 'print_urinepregnancy' : include('print_urinepregnancy.php'); break;
        case 'print_ctng' : include('print_ctng.php'); break;
        case 'print_syphilis' : include('print_syphilis.php'); break;
        case 'print_hepatitis' : include('print_hepatitis.php'); break;
        case 'print_hemato' : include('print_hemato.php'); break;
        case 'print_chemis' : include('print_chemis.php'); break;
        default : include('blank.php'); break; 
    }
    ?>
            </div>
        </div>
    </div>
    <?
$task_page = explode('_',$_GET['task']);

switch($task_page[0]){
    case 'create' : 
        switch($_GET['task']){
               case 'create_hiv_rt': $file = 'HIVRapid'; break; //blank.php
               case 'create_hiv_eia' : $file = 'HIVEIA'; break;
               case 'create_hiv_rna' : $file = 'HIVRNA';  break;   
               case 'create_syphilis' : $file = 'Syphil';  break;
               case 'create_ctng' : $file = 'CTNG';  break;
               case 'create_hepatitis' : $file = 'Hepatit';  break;
               case 'create_cd4' : $file = 'CD4';  break;
               case 'create_urine' : $file = 'Urine';  break;
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
               case 'edit_syphilis' : $file = 'Syphil';  break;
               case 'edit_ctng' : $file = 'CTNG';  break;
               case 'edit_hepatitis' : $file = 'Hepatit';  break;
               case 'edit_cd4' : $file = 'CD4';  break;
               case 'edit_urine' : $file = 'Urine';  break;
               case 'edit_hemato' : $file = 'Hemato';  break;
               case 'edit_chemis' : $file = 'Chemis';  break;
               default : $file = ''; break; 
        }
        break;
     case 'print' : 
        switch($_GET['task']){
               case 'print_hiv_rt': $file = 'HIVRapid'; break; //blank.php
               case 'print_hiv_eia' : $file = 'HIVEIA'; break;
               case 'print_hiv_rna' : $file = 'HIVRNA';  break;
                case 'print_hiv_sero' : $file = 'HIVSero'; break;
               case 'print_syphilis' : $file = 'Syphil';  break;
               case 'print_ctng' : $file = 'CTNG';  break;
               case 'print_hepatitis' : $file = 'Hepatit';  break;
               case 'print_cd4' : $file = 'CD4';  break;
               case 'print_urine' : $file = 'Urine';  break;
               case 'print_urinepregnancy' : $file = 'Urinepregnancy'; break;
               case 'print_hemato' : $file = 'Hemato';  break;
               case 'print_chemis' : $file = 'Chemis';  break;
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
       <? db_connect();
      switch($_GET['task']){
           case 'print_hiv_rt' : $sql_lastpr = "select date_record from hiv_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hiv_eia': $sql_lastpr = "select date_record from hiv_eia_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hiv_rna': $sql_lastpr = "select date_record from hiv_rna_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hiv_con': $sql_lastpr = "select date_record from hiv_con_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hiv_sero' : $sql_lastpr = "select date_record from hiv_sero_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'";  break;    
        
           case 'print_cd4': $sql_lastpr = "select date_record from cd4_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_urine': $sql_lastpr = "select date_record from urine_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_urinepregnancy': $sql_lastpr = "select date_record from urinepregnancy_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_syphilis': $sql_lastpr = "select date_record from syphilis_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hepatitis': $sql_lastpr = "select date_record from hepatitis_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_ctng': $sql_lastpr = "select date_record from ctng_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_hemato': $sql_lastpr = "select date_record from hemato_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;
           case 'print_chemis': $sql_lastpr = "select date_record from chem_log where task = 'print| id_record=".$_GET['recid']."' and ptid = '".$_GET['pid']."'"; break;

           default : $sql_lastpr = ""; break;
           }
        //echo $sql_lastpr;
        $result = get_a_line($sql_lastpr);
        if($result['date_record']!=''){
      ?>
       <div class="row">
           <div class="small col-lg-12 form-group text-left">Last Print : <?=$result['date_record']?>.</div>
       </div>
       <? } ?>
        <div class="row">
            <div class="col-lg-12 form-group text-center">
                <a href="print.php?task=get_print&lab=<?=$lab?>&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>" class="btn btn-sm btn-primary" target="_blank">Print</a>
                <a href="index.php?pid=<?=$_GET['pid']?>&task=findPID<?=$part?>" class="btn btn-sm btn-dark">Back</a>
            </div>
        </div>
    </footer>

</section>
