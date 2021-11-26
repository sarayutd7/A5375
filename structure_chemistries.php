<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Chemistries</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="chem" /></th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        
        <?/*"ga"=>array("varchar(15)"=>"Gestational age"),
                              "weight"=>array("varchar(20)"=>"Weight"),
                              
                              
                              "creatinine_clearance"=>array("varchar(30)"=>"Creatinine Clearance(μmol/L)"),
                              "creatinine_clearance_gr"=>array("varchar(15)"=>"Grade of Creatinine Clearance"),
                              
                              "alkaline_phosphatase"=>array("varchar(30)"=>"Alkaline phosphatase (IU/L)"),
                              "alkaline_phosphatase_gr"=>array("varchar(15)"=>"Grade of Alkaline phosphatase"),
                              
                              
                              
                              "phosphorus"=>array("varchar(30"=>"Null"),
                              "phosphorus_gr"=>array("varchar(15"=>"Null"),
                              "direct_bilirubin"=>array("varchar(30"=>"Null"),
                              "direct_bilirubin_gr"=>array("varchar(15"=>"Null"),
                              
                              
                              "cpk"=>array("varchar(30)"=>"CPK (CK) (IU/L)"),
                              "cpk_gr"=>array("varchar(15)"=>"Grade of CPK (CK)"),
                              "glucose"=>array("varchar(30)"=>"Glucose (mg/dL)"),
                              "glucose_gr"=>array("varchar(15)"=>"Grade of Glucose"),
                              "amylase"=>array("varchar(30)"=>"Amylase"),
                              "amylase_gr"=>array("varchar(15)"=>"Grade of Amylase"),
                              "lipase"=>array("varchar(30)"=>"Lipase (IU/L)"),
                              "lipase_gr"=>array("varchar(15)"=>"Grade of Lipase"),
                              "phosphate"=>array("varchar(15)"=>"Phosphate (mg/dL)"),
                              "phosphate_gr"=>array("varchar(15)"=>"Grade of Phosphate"),
                              "calcium"=>array("varchar(30)"=>"Calcium (mg/dL)"),
                              "calcium_gr"=>array("varchar(15)"=>"Grade of Calcium"),
                              "cholesterol"=>array("varchar(30)"=>"Total cholesteral (mg/dL)"),
                              "cholesterol_gr"=>array("varchar(15)"=>"Grade of Total cholesteral"),
                              "triglyceride"=>array("varchar(30)"=>"Triglycerides (mg/dL)"),
                              "triglyceride_gr"=>array("varchar(15)"=>"Grade of Triglycerides"),
                              "hdl"=>array("varchar(30)"=>"HDL (mg/dL)"),
                              "hdl_gr"=>array("varchar(15)"=>"Grade of HDL"),
                              "ldl"=>array("varchar(30)"=>"Calculated LDL (mg/dL)"),
                              "ldl_gr"=>array("varchar(15)"=>"Grade of Calculated LDL"),
                              "total_bilirubin_preterm"=>array("varchar(30)"=>"Null"),
                              "total_bilirubin_preterm_gr"=>array("varchar(15)"=>"Null"),
                              "total_bilirubin"=>array("varchar(30)"=>"Null"),
                              "total_bilirubin_gr"=>array("varchar(15)"=>"Null"),
                              "indirect_bilirubin"=>array("varchar(30)"=>"Null"),
                              "indirect_bilirubin_gr"=>array("varchar(15)"=>"Null"),
                              "calcium_lonized"=>array("varchar(30)"=>"Null"),
                              "calcium_lonized_gr"=>array("varchar(15)"=>"Null"),
                              
                              "folate_serum"=>array("varchar(30)"=>"Null"),
                              "folate_serum_gr"=>array("varchar(15)"=>"Null"),
                              "folate_rbc"=>array("varchar(30)"=>"Null"),
                              "folate_rbc_gr"=>array("varchar(15)"=>"Null"),
                              "hemoglobin_a1c"=>array("varchar(30)"=>"Null"),
                              "hemoglobin_a1c_gr"=>array("varchar(15)"=>"Null"),
                              "iron"=>array("varchar(30)"=>"Null"),
                              "iron_gr"=>array("varchar(15)"=>"Null"),
                              "lactate_venous"=>array("varchar(30)"=>"Null"),
                              "lactate_venous_gr"=>array("varchar(15"=>"Null"),
                              "triglycerides"=>array("varchar(30)"=>"Null"),
                              "triglycerides_gr"=>array("varchar(15)"=>"Null"),*/    
        $array_filde = array( "ptid"=>array("varchar(12)"=>"Participant ID"),
                              
                              "visit_code"=>array("varchar(25)"=>"Visit Number"),
                              "date_coll"=>array("date"=>"Date Collected"),
                              "time_coll"=>array("time"=>"Time Collected"),
                              "date_assayed"=>array("date"=>"Date Assayed"),
                              "time_assayed"=>array("time"=>"Null"),
                              "date_received"=>array("date"=>"Null"),
                              "time_received"=>array("time"=>"Null"),
                              "fasting"=>array("varchar(10)"=>"Fasting Blood?"),
                              "dateofbrith"=>array("date"=>"Date of Birth"),
                              "age"=>array("varchar(10)"=>"Age"),
                              "age_month"=>array("int(2)"=>"Null"), 
                              "total_days_of_life"=>array("double"=>"Null"),
                              "gender"=>array("varchar(5"=>"Gender of Participant"),
                             
                              "sodium"=>array("varchar(30"=>"Null"),
                              "sodium_gr"=>array("varchar(15"=>"Null"),
                              "potassium"=>array("varchar(30"=>"Null"),
                              "potassium_gr"=>array("varchar(15"=>"Null"),
                                    
                              "chloride"=>array("varchar(30)"=>"Null"),
                              "chloride_gr"=>array("varchar(15)"=>"Null"),
                                    
                              "bicarbonate"=>array("varchar(30"=>"Null"),
                              "bicarbonate_gr"=>array("varchar(15"=>"Null"),
                                    
                              "bun"=>array("varchar(30)"=>"BUN (mg/dL)"),
                              "bun_gr"=>array("varchar(15)"=>"Grade of BUN"),
                                    
                              "creatinine"=>array("varchar(30)"=>"Creatinine(mg/dL)"),
                              "creatinine_gr"=>array("varchar(15)"=>"Grade of Creatinine"),
                                    
                              "albumin"=>array("varchar(30"=>"Null"),
                              "albumin_gr"=>array("varchar(15"=>"Null"),
                              
                              "total_bilirubin"=>array("varchar(30)"=>"Total Billirubin (mg/dL)"),
                              "total_bilirubin_gr"=>array("varchar(15)"=>"Grade of Total Billirubin"),
                                    
                              "ast"=>array("varchar(30)"=>"AST (SGOT) (IU/L)"),
                              "ast_gr"=>array("varchar(15)"=>"Grade of AST(SGOT)"),
                              "alt"=>array("varchar(30)"=>"ALT (SGPT) (IU/L)"),
                              "alt_gr"=>array("varchar(15)"=>"Grade of ALT (SGPT)"),
                                    
                              
                              "remark"=>array("text"=>"Remark"),
                              "comment"=>array("text"=>"comment"),
                              "sentmail"=>array("int(1)"=>"Null"),
                              "sentmail_datetime"=>array("datetime"=>"Null"),
                              "initial_date"=>array("date"=>"Null"),
                              "who_record"=>array("varchar(20)"=>"Recorder"),
                              "date_record"=>array("datetime"=>"Record"),
                              "who_edit_record"=>array("varchar(20)"=>"Editor"),
                              "date_edit_record"=>array("datetime"=>"date_edit_record")); ?>
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