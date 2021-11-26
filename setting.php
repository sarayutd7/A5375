<?
$sql_data = "select * from detailproject order by id";
$result_data = get_rsltset($sql_data);
$nr_data = count($result_data);
?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel"> 
            <header class="panel-heading">
                <h2 class="panel-title">Setting System</h2>
            </header>
            <div class="panel-body">
                <div class="row form-group">
                     <div class="col-lg-12 col-xs-12">
                         <div class="col-lg-3 col-xs-3"><strong>Command</strong></div>
                         <div class="col-lg-3 col-xs-3"><strong>Command Short</strong></div>
                         <div class="col-lg-6 col-xs-6"><strong>Task</strong></div>
                     </div>
                 </div>
                 <? for($d=0;$d<$nr_data;$d++){ ?>
                 <div class="row form-group">
                     <div class="col-lg-12 col-xs-12">
                         <div class="col-lg-3 col-xs-3"><?=$result_data[$d]['command']?></div>
                         <div class="col-lg-3 col-xs-3"><?=$result_data[$d]['command_short']?></div>
                         <div class="col-lg-5 col-xs-5">
                         <input type="text" class="form-control" value="<?=$result_data[$d]['task']?>"  onchange="saveSetting(<?=number_format($result_data[$d]['id'])?>,this.value)"></div>
                         <div class="col-lg-1 col-xs-1">
                             <div id="box_<?=number_format($result_data[$d]['id'])?>"></div>
                         </div>
                     </div>
                 </div>
                 <? } ?>
            </div>  
        </section>
    </div>
</div>

<?
$sql_datalab = "select * from labmenu order by labID";
$result_datalab = get_rsltset($sql_datalab);
$nr_datalab = count($result_datalab);
?>
  <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel"> 
            <header class="panel-heading">
                <h2 class="panel-title">Setting Lab</h2>
            </header>
            <div class="panel-body">
                <div class="row form-group">
                     <div class="col-lg-12 col-xs-12">
                         <div class="col-lg-3 col-xs-3"><strong>Lab full name</strong></div>
                         <div class="col-lg-3 col-xs-3"><strong>Lab Short name</strong></div>
                         <div class="col-lg-3 col-xs-3"><strong>URLcode</strong></div>
                         <div class="col-lg-3 col-xs-3"><strong>Active</strong></div>
                     </div>
                 </div>
                 <? for($l=0;$l<$nr_datalab;$l++){ ?>
                 <div class="row form-group">
                     <div class="col-lg-12 col-xs-12">
                         <div class="col-lg-3 col-xs-3"><?=$result_datalab[$l]['labName']?></div>
                         <div class="col-lg-3 col-xs-3"><?=$result_datalab[$l]['labNshort']?></div>
                         <div class="col-lg-3 col-xs-3"><?=$result_datalab[$l]['laburlfile']?></div>
                         <div class="col-lg-3 col-xs-3">
                         <select id="setActive" class="form-control" onchange="saveLab(<?=$result_datalab[$l]['labID']?>,this.value)">
                             <option value="0" <? if($result_datalab[$l]['active'] == 0){ echo "selected"; } ?>>Non Active</option>
                             <option value="1" <? if($result_datalab[$l]['active'] == 1){ echo "selected"; } ?>>Active</option>
                         </select></div>
                     </div>
                 </div>
                 <? } ?>
            </div>  
        </section>
    </div>
</div>