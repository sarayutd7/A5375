<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Hematology</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="hemato" /></th>
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
  "date_assayed"=>array("date"=>"Date Assayed"),
  "time_assayed"=>array("time"=>"NULL"),
  "date_received"=>array("date"=>"NULL"),
  "time_received"=>array("time"=>"NULL"),
  "gender"=>array("varchar(25) "=>"NULL"),
  "age"=>array("varchar(25) "=>"NULL"),
  "age_month"=>array("int(2)"=>"NULL"), 
  "total_days_of_life"=>array("double"=>"NULL"),
                       
  "wbc"=>array("varchar(30) "=>"WBC (x10^3/mm^3)"),
  "wbc_gr"=>array("varchar(15) "=>"Grade of WBC"),
                       
  "hemoglobin"=>array("varchar(30) "=>"Hemoglobin (g/dL)"),
  "hemoglobin_gr"=>array("varchar(15) "=>"Grade of Hemoglobin"),
  
  "hematocrit"=>array("varchar(30) "=>"Hematocrit (%)"),
  "hematocrit_gr"=>array("varchar(15) "=>"Grade of Hematocrit"),
   
  "platelets"=>array("varchar(30) "=>"Platelets (x10^3/mm^3)"),
  "platelets_gr"=>array("varchar(15) "=>"Grade of Platelets"),
  
   
  "neutrophils"=>array("varchar(30) "=>"Neutrophils (%)"),
  "neutrophils_gr"=>array("varchar(15) "=>"Grade of Neutrophil"),
                       
   
  "lymphocyte"=>array("varchar(30) "=>"Lymphocytes (%)"),
  "lymphocyte_gr"=>array("varchar(15) "=>"Grade of Lymphocytes"),
  
  "monocyte"=>array("varchar(30) "=>"Monocytes (%)"),
  "monocyte_gr"=>array("varchar(15) "=>"Grade of Monocytes"),
   
  "eosinophils"=>array("varchar(30) "=>"Eosinophils (%)"),
  "eosinophils_gr"=>array("varchar(15) "=>"Grade of Eosinophils"),
   
  "basophils"=>array("varchar(30) "=>"Basophils (%)"),
  "basophils_gr"=>array("varchar(15) "=>"Grade of Basophils"),
  
  "absolute_neutrophil"=>array("varchar(15) "=>"NULL"),
  "absolute_neutrophil_gr"=>array("varchar(15) "=>"NULL"),
                       
  "atypical_lymphocyte"=>array("varchar(30) "=>"Atypical Lymphocytes (%)"),
  "atypical_lymphocyte_gr"=>array("varchar(15) "=>"Grade of Atypical Lymphocytes"),
   
                       
  "remark"=>array("text "=>"Remark"),
  "comment"=>array("text "=>"NULL"),
  "initial_date"=>array("date "=>"NULL"),
  "sentmail"=>array("int(1)"=>"NULL"),
  "sentmail_datetime"=>array("datetime"=>"NULL"),
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