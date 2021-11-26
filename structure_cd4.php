<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Immunophenotyping</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="cd4" /></th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <?
  $array_filde = array("ptid"=>array("varchar(12) "=>"Participant ID"),
  "visit_code"=>array("varchar(25) "=>"Visit Number"),
  "date_coll"=>array("date"=>"Date Collected"),
  "time_coll"=>array("time"=>"Time Collected"),
  "date_assa"=>array("date"=>"Date Assayed"),
  "time_assa"=>array("time"=>"NULL"),
  "date_received"=>array("date"=>"NULL"),
  "time_received"=>array("time"=>"NULL"),
  "type_specimen"=>array("varchar(75)"=>"NULL"),
  "gender"=>array("varchar(25) "=>"NULL"),
  "age"=>array("varchar(25) "=>"NULL"),
  "age_month"=>array("int(2)"=>"NULL"), 
  "total_days_of_life"=>array("double"=>"NULL"),
  
  "lymphocytes"=>array("varchar(75)"=>"NULL"),
  "wbc"=>array("varchar(75)"=>"NULL"),
  "cd4_value"=>array("varchar(20)"=>"Percentage of CD4"),
  "cd4_value_gr"=>array("varchar(25)"=>"NULL"),
  "percent_cd4"=>array("varchar(25)"=>"NULL"),
  "percent_cd4_gr"=>array("varchar(25)"=>"NULL"),
  "cd8_value"=>array("varchar(20)"=>"Percentage of CD8"),
  "cd8_value_gr"=>array("varchar(25)"=>"NULL"),
  "percent_cd8"=>array("varchar(25)"=>"NULL"),
  "percent_cd8_gr"=>array("varchar(25)"=>"NULL"),
  
  
  "remark"=>array("text "=>"Remark"),
  "comment"=>array("text "=>"NULL"),
  "initial_date"=>array("date "=>"NULL"), 
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
    </table>
</div>