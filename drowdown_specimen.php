<select id="dd_specimen" name="dd_specimen" class="form-control" required>
   <option value="Null" <? if($result_current_data['type_specimen']=='Null' || $result_current_data['type_specimen'] ==''){ echo "selected" ; }?>>กรุณาเลือกข้อมูล</option>
   <option value="EDTA Plasma" <?=fix_select($_GET['task'],'EDTA Plasma')?> <? if($result_current_data['type_specimen']=='EDTA Plasma' ){ echo "selected" ; }?>>EDTA Plasma</option>
   <option value="EDTA Blood" <?=fix_select($_GET['task'],'EDTA Blood')?> <? if($result_current_data['type_specimen']=='EDTA Blood' ){ echo "selected" ; }?>>EDTA Blood</option>
   <option value="Serum" <?=fix_select($_GET['task'],'Serum')?> <? if($result_current_data['type_specimen']=='Serum' ){ echo "selected" ; }?>>Serum</option>
   <option value="EDTA Plasma/Serum" <?=fix_select($_GET['task'],'EDTA Plasma/Serum')?> <? if($result_current_data['type_specimen']=='EDTA Plasma/Serum' ){ echo "selected" ; }?>>EDTA Plasma/Serum</option>
   <option value="Random urine" <?=fix_select($_GET['task'],'Random urine')?> <? if($result_current_data['type_specimen']=='Random urine' ){ echo "selected" ; }?>>Random urine</option>
</select>


<?
function fix_select($task, $obj_val){
   switch($task){
       case 'create_hiv_rt' :   
           if($obj_val=='EDTA Blood'){
               $fix = 'selected'; 
           } break;
           
       case 'create_hiv_rna':  
           if($obj_val=='EDTA Plasma'){
               $fix = 'selected'; 
           } break;
       case 'create_hepatitis': 
       case 'create_hiv_eia':  
           if($obj_val=='EDTA Plasma/Serum'){
               $fix = 'selected'; 
           } break;
       case 'create_urinepregnancy':  
           if($obj_val=='Random urine'){
               $fix = 'selected'; 
           } break;
           
       case 'create_hiv_con': 
       case 'create_hiv_sero' :
           if($obj_val=='EDTA Plasma'){
               $fix = 'selected'; 
           } break;
       default : $fix = ''; 
   } 
    return $fix;
}
 
?>