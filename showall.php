<?
function check_record($table,$id){
    $nr_record = num_record($table,"where ptid = '$id' ");
    return $nr_record;
}
?>
   <div class="col-lg-12 clo-sm-12">
    <section class="panel panel-featured panel-featured-success">
        <header class="panel-heading"> 
            <h2 class="panel-title">Show All Data.</h2>
            <p class="panel-subtitle">Protocal/Project Name : <?=strtoupper(webdetail('protocal'))?></p>
        </header>
        <div class="panel-body">
            
            <div class="row form-group">
                <div class="col-lg-12 col-sm-12 col-xs-12 table-responsive">
                    <div id='showAll'>
                <?
function last_action($id){
    //$result_last = get_a_line("select * from last_record where ptid = '$id' order by date_record desc");
    $result_last  = get_a_line("select date_record from hiv where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
//    $result_last = get_a_line("select date_record from hiv_con where ptid = '$id' order by date_record desc limit 1");
//    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from hiv_eia where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from hiv_rna where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from cd4 where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from chem where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from hemato where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from hiv_sero where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from syphilis where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from urine where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
    $result_last = get_a_line("select date_record from urinepregnancy where ptid = '$id' order by date_record desc limit 1");
    $lstaction[] = $result_last['date_record'];
     
    foreach( $lstaction as $key=>$val ){
          if(trim($val!='')){
            $arr_results[] = $val ;
          }
        }
     
    if(count($arr_results)>0){
       rsort($arr_results);
       return $arr_results[0];  
    }
}
$sql_source = "select * from patient order by date_create,patient_id asc";
            $result_source = get_rsltset($sql_source);
            $nr_record = count($result_source);
            if($nr_record>0){ ?>
                 
                    <table class="table table-bordered table-striped " id="datatable-default">
                        <thead>
                            <tr>
                                <th>PTID</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Age</th>
                                <th>Weight</th>
                                <th class="text-center">Create Date</th>
                                <th class="text-center">Last Action</th>
                                <th class="text-center">Get Lab</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? for($i=0;$i<$nr_record;$i++) { ?>
                            <tr>
                                <td><a href="index.php?pid=<?=$result_source[$i]['patient_id']?>&task=findPID" title="จัดการข้อมูล <?=$result_source[$i]['patient_id']?>">
                                    <?=$result_source[$i]['patient_id']?>
                                    </a>
                                </td>
                                <td>
                                    <?=$result_source[$i]['gender']?>
                                </td>
                                <td>
                                    <?=date('Y-m-d',strtotime($result_source[$i]['date_of_brith']))?>
                                </td>
                                <td>
                                    <?=$result_source[$i]['age']?>
                                </td>
                                <td>
                                    <?=$result_source[$i]['weight']?> Kg</td>
                                <td class="text-center">
                                    <?=date('Y-m-d',strtotime($result_source[$i]['date_create']))?>
                                </td>
                                <td class="text-center">
                                    <?=last_action($result_source[$i]['patient_id'])?>
                                </td>
                                <td class="text-center">
                                   <?
                $lab_record = check_record('hiv',$result_source[$i]['patient_id']) + check_record('hiv_eia',$result_source[$i]['patient_id']) +
                             check_record('hiv_rna',$result_source[$i]['patient_id']) + check_record('cd4',$result_source[$i]['patient_id']) +
                             check_record('chem',$result_source[$i]['patient_id']) + check_record('hemato',$result_source[$i]['patient_id']) +
                             check_record('syphilis',$result_source[$i]['patient_id']) + check_record('urine',$result_source[$i]['patient_id']) +
                             check_record('urinepregnancy',$result_source[$i]['patient_id']) + check_record('hepatitis',$result_source[$i]['patient_id']);
                ;
                $lab_record;
                //if($lab_record==0){ 
                                    ?>
                <a href="index.php?pid=<?=$result_source[$i]['patient_id']?>&task=edit_pid" class="btn btn-sm btn-primary"><i class="fa fa-wrench"></i> แก้ไขข้อมูล</a>
                                    <? //} ?>
                                    <button type="button" onclick="location.replace('index.php?pid=<?=$result_source[$i]['patient_id']?>&task=findPID')" class="btn btn-sm btn-info">
                                        <i class="fa fa-pencil"></i> จัดการข้อมูล </button>
                                        
                                    <button type="button" class="btn btn-sm btn-warning" onclick="trashrd('<?=$result_source[$i]['id_register']?>')"><i class="fa fa-trash-o"></i> ลบข้อมูล </button>
                                </td>
                            </tr>
                            <? } ?>
                        </tbody>
                    </table>
                    <p>M : Male, F : Female</p>
<? }else{ echo "<div class='text-center' > No Result.</div>"; } ?>
            </div>
                </div>
            </div>
 
        </div>
    </section>
</div>