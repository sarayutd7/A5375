<div class="form-group ">
    <div class="row">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Type of Specimen :</span>
        </div>
        <div class="col-lg-3 col-sm-4"> 
        <?
            switch($_GET['task']){ /**/
               case 'create_hiv_rt':  
                    case 'edit_hiv_rt': include("drowdown_specimen.php"); break;
                    
               case 'create_hiv_eia' :  
                    case 'edit_hiv_eia': include("drowdown_specimen.php"); /*$txt_specimen = "EDTA Blood";*/ break; //edit_hiv_eia
                    
               case 'create_hiv_rna' : 
                    case 'edit_hiv_rna': include("drowdown_specimen.php"); /*$txt_specimen = "EDTA Plasma";*/ break; //edit_hiv_rna
                    
               case 'create_hiv_con':
                    case 'edit_hiv_con': include("drowdown_specimen.php"); break;
                    
               case 'create_hiv_sero':
                    case 'edit_hiv_sero': include("drowdown_specimen.php"); break;
                    
               case 'create_syphilis' :  
                    case 'edit_syphilis': include("drowdown_specimen.php"); break;//edit_syphilis
                    
               case 'create_ctng' :  
                    case 'edit_ctng': $txt_specimen = "3 Type"; break;//edit_syphilis
                    
               case 'create_hepatitis' :  
                    case 'edit_hepatitis': include("drowdown_specimen.php"); break;//edit_syphilis
                    
               case 'create_cd4' :  
                    case 'edit_cd4': $txt_specimen = "EDTA Blood"; break;//edit_hiv_cd4
                    
               case 'create_urine' :  
                    case 'edit_urine': $txt_specimen = "Urine"; break; //edit_urine 
                    
               case 'create_urinepregnancy' :  
                    case 'edit_urinepregnancy': include("drowdown_specimen.php"); break; //edit_urine
                    
               case 'create_hemato' :  
                    case 'edit_hemato': $txt_specimen = "EDTA Blood"; break;//edit_syphilis
                    
               case 'create_chemis' :    
                    case 'edit_chemis': $txt_specimen = "Serum"; break; //edit_syphilis
               
                
               
                /* case '' : $txt = ""; break; */
                default : $txt_specimen = "Null"; break;
            } 
            if($txt_specimen!=''){
                echo "<span>$txt_specimen</span>";
            }
            ?>
        </div> 
    </div>
</div>