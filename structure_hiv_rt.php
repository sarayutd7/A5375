<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table HIV Rapid Test</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="hiv" /></th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <?
        
        /*
         "hiv_status_date"=>array("date"=>"NULL"),
  "hiv_status_time"=>array("time"=>"NULL"),
        */
  $array_filde = array("ptid"=>array("varchar(12) "=>"Participant ID"),
  "visit_code"=>array("varchar(25) "=>"Visit Number"),
  
  "date_coll"=>array("date "=>"Date Urine Collected"),
  "time_coll"=>array("time "=>"Time Urine Collected"),
  "date_received"=>array("date"=>"NULL"),
  "time_received"=>array("time"=>"NULL"),
  
  "type_specimen"=>array("varchar(75)"=>"NULL"),
  
  "rapid"=>array("varchar(75)"=>"HIV Rapid Test: Result"),
  "rapid_date_assa"=>array("date"=>"HIV Rapid Test: Date Assayed"),
  "time_rt_assayed"=>array("time"=>"NULL"),
  "hiv_status"=>array("varchar(10)"=>"NULL"),
 
  
  "remark"=>array("text "=>"Remark"),
  "comment"=>array("text "=>"NULL"), 
  "who_record"=>array("varchar(20) "=>"Recorder"),
  "date_record"=>array("datetime"=>"Record Date"),
  "who_edit_record"=>array("varchar(20) "=>"Editor"),
  "date_edit_record"=>array("datetime"=>"Edit Date Time"));
        ?>
        <tbody>
            <? foreach($array_filde as $d=>$k){  
            foreach($k as $detail => $value){?>
            <tr style="cursor:pointer;">
                <td class="text-info text-center">
                    <input type="checkbox" name="cbox[]" id="<?=$d?>" value="<?=$d?>" <? if($d=='ptid' ){ ?> checked="checked"
                    <? } ?>/>
                </td>
                <td class="text-info"><?=$d?></td>
                <td class="text-info" style="cursor:pointer;"><?=$detail?></td>
                <td class="text-info small" style="cursor:pointer;"><?=$value?></td>
            </tr>
            <? } 
            }?>
        </tbody> 
    </table>
</div>