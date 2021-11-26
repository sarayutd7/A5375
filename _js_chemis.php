 
   <script type="application/javascript">
    <? if ($_GET['task'] == 'edit_chemis') { ?>
        var gender_c = "&gender=" + $('#gender').val();
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&age=" + $('#ages').val() + gender_c + pid; 
    <? } else if ($_GET['task'] == 'view_chemis' || $_GET['task'] == 'print_chemis' || $_GET['task'] =='get_print') { ?>
        var gender_c = "&gender=<?=$result_current_data['gender']?>";
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&age=<?=$result_current_data['age']?>" + gender_c + pid;
       
    <? }else if ($_GET['task'] == 'sentmail_chemis' || $_GET['task'] == 'viewmail_chemis') { ?>  
        var gender_c = "&gender=<?=$result_current_data['gender']?>";
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&age=<?=$result_current_data['age']?>" + gender_c + pid;
    <? } else { ?>
        $('#ages').val(<?=$patient['age']?>); 
        var pid = '';
        var gender_c = '&gender=<?=$patient['gender']?>';
        var datofage = $('#datofage').val();
       if(datofage<=365 && $('#ages').val() > 0 ){
              var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&type=day&age=" + datofage + gender_c + pid; 
          }else{
              var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&age=" + $('#ages').val() + gender_c + pid; 
          }
          
    <? } ?>
     var visit_basline = $('#visit_basline_set').val(); //'02.0';
     var curren_creatinine_basline = $('#creatinine_basline').val(); 
     if(visit_basline!=0){
            $('#notification_box').show();
        }else{
            $('#notification_box').hide();
        }
    <?
    switch ($_GET['task']) {
        case 'view_chemis':
        case 'print_chemis':
        case 'get_print' : 
            $URL = 'view_table_chemistries.php';
            break;
        case 'sentmail_chemis' : 
        case 'viewmail_chemis' :
            $URL = 'lab_alert_table_chemistries.php';
            break;
        default:
            $URL = 'table_chemistries.php';
            break;
    } ?>
       
    $.ajax({
        url: '<?=$URL?>',
        type: 'GET',
        dataType: 'HTML',
        data: params,
        success: function(result) {
            $('#table_chemistries').html(result);
        }
    });

    function loadTable() {
        var datofage = $('#datofage').val();
       if(datofage<=365 && $('#ages').val() <= 1 ){
          var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&type=day&age=" + datofage + "&gender=" + $('#gender').val() + pid; 
       }else{
          var params = "protocal=<?=project('protocal')?>&labGlobal=Chemistries&premature=<?=$patient['premature']?>&age=" + $('#ages').val() + "&gender=" + $('#gender').val() + pid; 
       }
        //alert(params);
        $.ajax({
            url: '<?=$URL?>',
            type: 'GET',
            dataType: 'HTML',
            data: params,
            success: function(result) {
                $('#table_chemistries').html(result);
            }
        });
    }

    function check_value(lab, val, lln, uln) {
        var txt;
        var refN;
        var ShowTxt;
        if($('#datofage').val() == ''){ alert("กรุณากรอกข้อมูล Date & time Collected ด้วยครับ");  }
        //        var lln = $.isNumeric(lln);
        //        var uln = $.isNumeric(uln);
        //        var val = $.isNumeric(val);
        // alert("val : "+val+" lln : "+lln+" uln : "+uln); 
        if (val < lln) {
            txt = '0';
            refN = 5;

        } else if ((val >= lln) && (val <= uln)) {
             
            switch(lab){
              case 'total_bilirubin' : 
                    if(val == 1.5){
                        txt = '0';
                        refN = 7;
                       }else{
                        txt = '0';
                        refN = 6; 
                       }
                    break;
              default: 
                    txt = '0';
                    refN = 6; break;
                   }
            

        } else if (val > uln) {
            txt = '0';
            refN = 7;

        }
        switch (refN) {
            case 5: // Low 
                //Hemoglobin
                //Platelets
                
                switch(lab){
                     case 'creatinine' :  
                        //cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); 
                        ShowTxt = creatinine(val,lab,$('#visit_code').val(),'0');
                        //----------Creatinine Clearance Now
                        crcl_val(val,$('#gender').val(),$('#visit_code').val(),'0'); //Val,Gender,Visit
                        //----------Creatinine Clearance Now
                        break;
                case 'phosphate' : 
                        var age = $('#datofage').val();
                        var LLN = $('#phosphate_LLN').val();
                        if(age == '' ){ alert("กรุณากรอกข้อมูล Date & time Collected ด้วยครับ"); }else{ 
                            if(age>14){ //alert(LLN);
                                if(val >= 2 && val < LLN){ stage = 1; ShowTxt = stage; 
                                   }else{
                                     cal_grade('phosphate', 'Every', $('#datofage').val(), val, '0');  
                                   }
                               }else if(age>= 1 && age <=14){
                                   cal_grade('phosphate', 'Every', $('#datofage').val(), val, '0');  
                               }else{
                                   cal_grade('phosphate', 'Every', $('#datofage').val(), val, '0');  
                               }
                            }
                         break;
                case 'calcium' : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); break;
                case 'glucose' : 
                        if($('#Fasting').val()==0 || $('#Fasting').val()==''){
                               cal_grade(lab, '0', $('#ages').val(), val, '0'); break;
                           }else{
                               cal_grade(lab, $('#Fasting').val(), $('#ages').val(), val, '0'); break;
                           }
                case 'folate_rbc' : cal_grade(lab, 'Every', $('#datofage').val(), val, '0'); break;
                case 'hdl' : ShowTxt = '0'; break;
                case 'indirect_bilirubin' :  
                case 'bun' :
                case 'chloride' : ShowTxt = 'NG'; break;  
                default : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); break;
                }
                
                break;
            case 6: //Normal
             //ShowTxt = "";
             switch(lab){
               case 'creatinine' :  //cal_grade(lab, $('#gender').val(), $('#ages').val(), val, ''); 
                        ShowTxt = creatinine(val,lab,$('#visit_code').val(),'0');
                        //----------Creatinine Clearance Now
                        crcl_val(val,$('#gender').val(),$('#visit_code').val(),'0'); //Val,Gender,Visit
                        //----------Creatinine Clearance Now
                        break;
               case 'sodium' : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); break;
               case 'cholesterol' :
               case 'total_cholesterol': 
               case 'ldl' :
               case 'triglycerides' :
                    if($('#Fasting').val() != '' || $('#Fasting').val() != '0'){ /*== 'Yes'*/
                            cal_grade(lab, $('#Fasting').val(), $('#ages').val(), val, '0');
                    }else{
                        alert("Please Select Fasting");
                        $('#Fasting').focus();
                    }
                    break;
               case 'calcium' : cal_grade(lab, $('#gender').val(), $('#datofage').val(), val, '0'); break;
               case 'folate_rbc' : if(lln==0){
                                      cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0');  
                                      }else{
                                          cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); 
                                      }
               break;  
               case 'indirect_bilirubin' :
               case 'bun' :
               case 'chloride' : ShowTxt = 'NG'; break;   
               case 'direct_bilirubin': 
                     if(val==$('#direct_bilirubin_ULN').val()){
                         ShowTxt = '0';
                     }else{
                         ShowTxt = ''; 
                     }
               break;  
               
               case 'glucose' : cal_grade(lab, $('#Fasting').val(), $('#ages').val(), val, '0'); break;
               
               case 'hdl' :  ShowTxt = '0'; break;
                     
               default : ShowTxt = "0";  break;
                   } 
                
                break;
            case 7: // Hight 
                //ShowTxt = txt;
                //alert(lab);
                 
                switch(lab){
                    //----------------------------
                    case 'creatinine' :  //cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); 
                        //-----------------------------------
                        ShowTxt = creatinine(val,lab,$('#visit_code').val(),'0'); //val,obj,visit
                        //----------Creatinine Clearance Now 
                        crcl_val(val,$('#gender').val(),$('#visit_code').val(),'0'); //Val,Gender,Visit
                        //----------Creatinine Clearance Now
                        break;
                        
                    //----------------------------    
                    case 'alkaline_phosphatase' :   ShowTxt = Alk_pp(val,$('#alkaline_phosphatase_ULN').val(),'0'); break;
                    case 'alt' : ShowTxt = alt(val,$('#alt_ULN').val(),'0'); break;
                    case 'ast' : ShowTxt = ast(val,$('#ast_ULN').val(),'0'); break;
                    case 'total_bilirubin': ShowTxt = TB($('#datofage').val(),val,$('#total_bilirubin_ULN').val(),'0'); break;
                    case 'ck': ShowTxt = ck(val,$('#ck_ULN').val(),'0'); break;
                    case 'amylase' : ShowTxt = amylase(val,$('#amylase_ULN').val(),'0'); break; 
                    case 'lipase' : ShowTxt = lipase(val,$('#lipase_ULN').val(),'0'); break;
                    
                    //---------------------------------------------------------------------------------    
                    case 'glucose' : 
                        if($('#Fasting').val()==0 || $('#Fasting').val()==''){
                               cal_grade(lab, '0', $('#ages').val(), val, '0'); break;
                           }else{
                               cal_grade(lab, $('#Fasting').val(), $('#ages').val(), val, '0'); break;
                           }
                        
                    case 'cholesterol' : 
                    case 'total_cholesterol':    
                    case 'ldl' :
                    case 'triglycerides' :
                        if($('#Fasting').val() != '' || $('#Fasting').val() != '0'){ /*== 'Yes'*/
                            cal_grade(lab, $('#Fasting').val(), $('#ages').val(), val, '0'); break;
                        }else{
                         alert("Please Select Fasting");
                         $('#Fasting').focus();
                        } break;
                    case 'calcium' : cal_grade(lab, $('#gender').val(), $('#datofage').val(), val, '0'); break;
                    case 'calcium_lonized' : ShowTxt = calcium_lnz(val,$('#calcium_lonized_ULN').val(),'0'); break;
                    case 'folate_rbc' : //cal_grade(lab, $('#Fasting').val(), $('#datofage').val(), val, ''); break;  
                        if(lln==0 && uln==160){
                            cal_grade(lab, $('#Fasting').val(), $('#datofage').val(), val, '');
                           }else{
                               cal_grade(lab, $('#Fasting').val(), $('#datofage').val(), val, '0');
                           }
                        break; 
                    case 'hdl' : 
                    case 'bun' :
                    case 'indirect_bilirubin' :  ShowTxt = 'NG'; break;  
                    default : 
                        cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); 
                        //ShowTxt = txt; 
                        break;
                       } 
                
                break;
            default:
                ShowTxt = '';
                break;
        }
if(val.length==0){ ShowTxt = ''; }
        $('#' + lab + '_label').html(ShowTxt);
        $('#' + lab + '_grade').val(ShowTxt);

    }

    function cal_grade(lab, gender, ages, val, refN) {
        var params;
        switch(lab){
            case 'glucose' : params = "lab=" + lab + "&fasting=" + gender + "&age=" + ages + "&val=" + val; break; 
            case 'cholesterol' : 
            case 'ldl' :
            case 'triglycerides' : params = "lab=" + lab + "&fasting=" + gender + "&age=" + ages + "&val=" + val; break; 
            default : params = "lab=" + lab + "&gender=" + gender + "&age=" + ages + "&val=" + val; break; 
               }
        
        //alert(params);
        $.ajax({
            url: 'cal_grade.php',
            type: 'GET',
            dataType: 'HTML',
            data: params,
            success: function(result) {
                if (result > 0) { if(val.length==0){ result = ''; }
                    $('#' + lab.toLowerCase() + '_label').html(result);
                    $('#' + lab.toLowerCase() + '_grade').val(result);
                } else { if(val.length==0){ refN = ''; }
                    $('#' + lab.toLowerCase() + '_label').html(refN);
                    $('#' + lab.toLowerCase() + '_grade').val(refN);
                }
                //                $('#'+lab.toLowerCase()+'_label').html(result);
                //                $('#'+lab.toLowerCase()+'_grade').html(result);

            }
        });
    }
    /*------------------------------- */
    <? $task_check = explode('_', $_GET['task']);
    if ($task_check[0] == 'view') { ?>
        $(document).ready(function() {
                $(".form-control").prop("disabled", true);
                $("input[type=text]").prop("disabled", true);
                $("input[type=radio]").prop("disabled", true);
                $("input[type=checkbox]").prop("disabled", true);
            }) <?
    } ?>
    //################################ Control Number ##############################
    //################################ Control Number ##############################
    //################################ Control Number ##############################
       function roundDemical(n, pos){
	       var p = Math.pow(10,pos);
	   return Math.round(n*p)/p;
	}
    //################################ Control Number ##############################
    //################################ Control Number ##############################
    //################################ Control Number ##############################
    
    //------------------------------ function Creatinie grad
    //------------------------------------------------------------
    //------------------------------------------------------------  
    //------------------------------------------------------------  
    //------------------------------------------------------------  
    //------------------------------ function Creatinie grad  
    function creatinine(val,lab,visit,text){
        var stage;
        //-------------------------
        //-------------------------
        //-------------------------
        var visit_basline = $('#visit_basline_set').val();
        //alert(visit_basline);
        if(visit_basline>0){ 
        //---------------------------- if baseline have set
            if(parseFloat(visit) > parseFloat(visit_basline)){
               // stage = creatinine_baseline(val, curren_creatinine_basline,'0'); 
                var gard_range1 = creatinine_pure(val,$('#creatinine_ULN').val()); 
                var gard_range2 = creatinine_baseline(val, curren_creatinine_basline,'0'); 
                //alert(val+ " "+ $('#creatinine_ULN').val());
                if(gard_range1 > gard_range2){
                    stage = gard_range1;
                   }else{
                    stage = gard_range2;   
                   }
             }else if(parseFloat(visit) <= parseFloat(visit_basline)){
                stage = creatinine_pure(val,$('#creatinine_ULN').val()); 
                    }else{
                        stage = creatinine_pure(val,$('#creatinine_ULN').val());
                    }  
         //---------------------------- if baseline have set end
           }else{ 
              stage = creatinine_pure(val,$('#creatinine_ULN').val());
           }
        //---------------------------- if baseline not have set
        //-------------------------
        //-------------------------
        //-------------------------
        
        if(stage==0){ var showtext = text; }else{ var showtext = stage; }
        return showtext;
        /*$('#'+ lab +'_grade').val(showtext); 
        $('#'+ lab +'_label').text(showtext);*/
        
    }
    //------------------------------ function Creatinie grad End.
    //------------------------------------------------------------  
    //------------------------------------------------------------  
    //------------------------------------------------------------  
    //------------------------------------------------------------  
    function calrangegrad(q,v){
		var cr = q * v ;//* 1.18
        //alert(q + " = " +cr);
		return roundDemical(cr,3);
	} 
    function creatinine_pure(val, ULN){
      var stage;  
        if(( val >= calrangegrad(1.1,ULN)) && ( val <= calrangegrad(1.3,ULN) )){ stage = 1; //1.1*uln | 1.3*uln
           }else if(( val > calrangegrad(1.3,ULN)) && ( val <= calrangegrad(1.8,ULN)  )){  stage = 2; //1.3*uln | 1.8*uln
            }else if(( val > calrangegrad(1.8,ULN)) && ( val < calrangegrad(3.5,ULN)  )){  stage = 3;  //1.8*uln | 3.5*uln
              }else if(val >= calrangegrad(3.5,ULN)){ stage = 4; }
       else{ stage = 0; }
    return stage;
    }
     
    function creatinine_baseline(val,crBaseline,text){
      var ULn = $('#creatinine_ULN').val();
      if( (val >= calrangegrad(crBaseline,1.3) ) && ( val <= calrangegrad(crBaseline,1.49)) ){
          stage = 2;
        } else if( (val >= calrangegrad(crBaseline,1.5) ) && ( val <= calrangegrad(crBaseline,1.99)) ){
            stage = 3;      
                  }else if(val >= calrangegrad(crBaseline,2.0)){
            stage = 4;
        }else{
           // alert(calrangegrad(1.1, ULn));
           stage = 0;
        }
         
        return stage;
    } 
       
       
    //------------------------------------------------------------  
    //------------------------------------------------------------    
       
    //******************************************* Function Creatinine Clearance
    //****************************************************************************
    //******************************************* Cal Creatinine Clearance [M : F] 
    //****************************************************************************
    //****************************************************************************
       function crcl_val(val,g,visit,text){  
           var stage;
           var x;
           var age =  $('#ages').val();  //$('#datofage').val();
           var weight = $('#Weight').val();  
           //alert();
           switch(g){
               case 'M' : //alert("age: "+ parseFloat(age).toFixed(0) + " w : "+ weight +" v: "+val);
                   x = ( ( (140 - age)* weight)/(val*72)); break;
               case 'F' : x = ( ( (140 - age)* weight * 0.85)/(val*72)); break;
               default : x = ( ( (140 - age)* weight)/(val*72)); break; 
                  } 
           
		var ask = roundDemical(x,2);
		 
		$('#creatinine_clearance').val(ask.toFixed(2));
        
        if(parseFloat(visit) > parseFloat(visit_basline)){ // visit more then fix visit basline 
               var crcl_grade_1 = crcl_grade(x.toFixed(2));  
               var crcl_grade_2 = crcl_baseline(ask,$('#crcl_basline').val());  
            //alert(crcl_grade_1 + " "+ crcl_grade_2);
                if(crcl_grade_1>crcl_grade_2){
                    stage = crcl_grade_1;
                   }else{
                    stage = crcl_grade_2;
                   }
           }else if(parseFloat(visit) <= parseFloat(visit_basline)){
               stage = crcl_grade(x.toFixed(2));   
           }else{
               stage = crcl_grade(x.toFixed(2));   
           }
		//alert('crcl g : '+stage);
        //************************************************************************
        //************************************************************************
        //************************************************************************
        //************************************************************************
           $('#creatinine_clearance_grade').val(stage); 
           $('#creatinine_clearance_label').text(stage);
       //************************************************************************
       //************************************************************************
       //************************************************************************
       //************************************************************************
	}
    //****************************************************************************
    //****************** Cal Creatinine Clearance [M : F]  End *******************
    //****************************************************************************
    //****************************************************************************
    //****************************************************************************
    //******************* Greade Creatinine Clearance Part 1 ********************* 
    //****************************************************************************
    //****************************************************************************
       function crcl_grade(val){  //Creatinine Clearance
		/*https://www.mdcalc.com/creatinine-clearance-cockcroft-gault-equation#next-steps*/
        //   alert(val);
        var score = parseFloat(val);
//        if(score>=90){ var stage = ''; //Ref:https://www.mdcalc.com/creatinine-clearance-cockcroft-gault-equation#next-steps
//            }else if(score >60 && score <= 89){ var stage  = 2;
//               }else if(score >30 && score <= 59){ var stage  = 3;
//                  }else if(score >=15 && score <= 29){ var stage  = 4;
////                     }else if(score < 15){ var stage  = 5;  
//                       }else{
//                        var stage  = '';  //Error
//                       }
           //// edit 12 02 2019
           if(score<=90){
                if(score >60 && score <= 89){ var stage  = 2;
                    }else if(score >30 && score <= 59){ var stage  = 3;
                        }else if(score <=30){ var stage  = 4; 
                            }else{
                                var stage  = ''; 
                            }
           }else{
                 var stage  = ''; 
           }
		 return stage;
	}
       
        function crcl_baseline(current,baseline){
            var percent_crcl = ((baseline - current) * 100)/baseline;
            //alert(percent_crcl);
            var stage ;
            if(roundDemical(percent_crcl,4) >= 50.00){ //return 4
                stage = 4;
            }else{ // < 50.00
                if((roundDemical(percent_crcl,4) >= 10.00 ) && (roundDemical(percent_crcl,4) <= 30.00 )){ // return 2
                   stage = 2;
                   }else if( (roundDemical(percent_crcl,4) >= 30.00 ) && (roundDemical(percent_crcl,4) <= 50.00 )){ // return 3
                    stage = 3;         
                   }else{
                     stage = 0; //0 = undefined
                   }
            }
            return stage;
        }
    //*************** Greade Creatinine Clearance Part 1 End ********************* 
    //****************************************************************************
    //****************************************************************************
    //****************** Function Creatinine Clearance 1.1 ***********************
    
    //--------------------- Alkaline_phosphatase 
    function Alk_pp(val,ULN,txt){
        var stage ;
        if(val >= calrangegrad(1.25,ULN) && val < calrangegrad(2.5,ULN) ){ stage = 1; }
         else if(val >= calrangegrad(2.5,ULN) && val < calrangegrad(5,ULN) ){ stage = 2; }
         else if(val >= calrangegrad(5,ULN) && val < calrangegrad(10,ULN) ){ stage = 3; }
         else if(val >= calrangegrad(10,ULN)){ stage = 4; }
        else{
            if(val>=ULN && val < calrangegrad(1.25,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }
    //--------------------- Alkaline_phosphatase 
    //--------------------- ALT 
    function alt(val,ULN,txt){
        var stage ;
        if(val >= calrangegrad(1.25,ULN) && val < calrangegrad(2.5,ULN) ){ stage = 1; }
         else if(val >= calrangegrad(2.5,ULN) && val < calrangegrad(5,ULN) ){ stage = 2; }
         else if(val >= calrangegrad(5,ULN) && val < calrangegrad(10,ULN) ){ stage = 3; }
         else if(val >= calrangegrad(10,ULN)){ stage = 4; }
         else{
            if(val>=ULN && val < calrangegrad(1.25,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }
    //--------------------- ALT    
    //--------------------- AST 
    function ast(val,ULN,txt){
        var stage ;
        if(val >= calrangegrad(1.25,ULN) && val < calrangegrad(2.5,ULN) ){ stage = 1; }
         else if(val >= calrangegrad(2.5,ULN) && val < calrangegrad(5,ULN) ){ stage = 2; }
         else if(val >= calrangegrad(5,ULN) && val < calrangegrad(10,ULN) ){ stage = 3; }
         else if(val >= calrangegrad(10,ULN)){ stage = 4; }
        else{
            if(val>=ULN && val < calrangegrad(1.25,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }
    //--------------------- AST   
    //--------------------- Total Billirubin -----------------
    function TB(age,val,ULN,txt){
        var stage ;
        var age_diff = 0.0766598220396988;
        //alert("age"+age+" val "+val+" ULN "+ULN+" txt "+txt); 
        if(parseFloat(age) > parseFloat(age_diff) ){
            if(val >= calrangegrad(1.1,ULN) && val < calrangegrad(1.6,ULN) ){ stage=1; } 
            else if(val>= calrangegrad(1.6,ULN) && val < calrangegrad(2.6,ULN) ){ stage=2; } 
            else if(val>= calrangegrad(2.6,ULN) && val < calrangegrad(5.0,ULN) ){ stage=3; } 
            else if(val>= calrangegrad(5.0,ULN)){ stage = 4; }
            else{
                if(val>=ULN && val < calrangegrad(1.1,ULN) ){ stage=txt; }else{ stage=ULN ; } 
            } 
        }else{
           if(val >= ULN && val <= 1){ stage=1; } 
           else if(val > 1 && val <= 1.5 ){ stage=2; } 
           else if(val > 1.5 && val <= 2){ stage=3; } 
           else if(val > 2){ stage = 4; }
           else{
              stage='Error2' ; 
           }
        }
        
        return stage;
    }
    //--------------------- Total Billirubin------------------
    //--------------------- CK 
    function ck(val,ULN,txt){
        var stage ;
        if(val >= calrangegrad(3,ULN) && val < calrangegrad(6,ULN) ){ stage = 1; }
         else if(val >= calrangegrad(6,ULN) && val < calrangegrad(10,ULN) ){ stage = 2; }
         else if(val >= calrangegrad(10,ULN) && val < calrangegrad(20,ULN) ){ stage = 3; }
         else if(val >= calrangegrad(20,ULN)){ stage = 4; }
        else{
            if(val>=ULN && val < calrangegrad(3,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }
    //--------------------- CK 
    //--------------------- amylase
    function amylase(val,ULN,txt){
        var stage ;
        if(val >= calrangegrad(1.1,ULN) && val < calrangegrad(1.5,ULN) ){ stage = 1; }
         else if(val >= calrangegrad(1.5,ULN) && val < calrangegrad(3.0,ULN) ){ stage = 2; }
         else if(val >= calrangegrad(3.0,ULN) && val < calrangegrad(5.0,ULN) ){ stage = 3; }
         else if(val >= calrangegrad(5.0,ULN)){ stage = 4; }
        else{
            if(val>=ULN && val < calrangegrad(3,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }   
    //--------------------- amylase  
    //--------------------- lipase
    function lipase(val,ULN,txt){
        var stage ;
        //alert(calrangegrad(1.1,ULN));
        if(parseFloat(val) >= calrangegrad(1.1,ULN) && parseFloat(val) < calrangegrad(1.5,ULN) ){ stage = 1; }
         else if(parseFloat(val) >= calrangegrad(1.5,ULN) && parseFloat(val) < calrangegrad(3.0,ULN) ){ stage = 2; }
         else if(parseFloat(val) >= calrangegrad(3.0,ULN) && parseFloat(val) < calrangegrad(5.0,ULN) ){ stage = 3; }
         else if(parseFloat(val) >= calrangegrad(5.0,ULN)){ stage = 4; }
        else{
            if(parseFloat(val)>=ULN && val < calrangegrad(3,ULN) ){
                stage = txt;
               }else{
                  stage = 'Error'; 
               } 
        }
        return stage;
    }   
    //--------------------- lipase
       
    //--------------------- calcium_lnz
       
       function calcium_lnz(val,ULN,txt){
           //alert(txt);
           var stage ;
           if( (parseFloat(val) > parseFloat(ULN)) && (parseFloat(val)<6.0) ){ stage = 1;
               }else if( (parseFloat(val) >= 6.0) && (parseFloat(val)<6.4) ){ stage = 2;
               }else if( (parseFloat(val) >= 6.4) && (parseFloat(val)<7.2) ){ stage = 3; 
               }else if( parseFloat(val) >= 7.2 ){ stage = 4; 
               }else{
                   stage = txt;
               }
            
           return stage;
       }
       
    //--------------------------- calcium_lnz
       
        function check_age(d,t){ 
        var page = 'cal_age.php'; 
        var param = "pid=<?=$patient['patient_id']?>&date_coll="+ d +"&time_coll="+t;
        //alert(param);    
        $.ajax({
            url: page,
            type: 'GET',
            dataType: 'json',
            data: param,
            success: function(response) {  
                if(response.year!=0){ 
                    $('#boxyear').show(); 
                    $('#ages').val(response.year);  
                    $('#month').val('');
                    $('#day').val('');
                    $('#boxagelessyear').hide();
                    $('#datofage').val(response.dayfoall);
                                    }else{ 
                 $('#boxagelessyear').show();      
                 $('#boxyear').hide(); $('#ages').val(response.year); 
                 $('#month').val(response.month);
                 $('#day').val(response.day);
                 $('#datofage').val(response.dayfoall);
                                 }
               loadTable();
            }
        });/**/
            loadTable();
         }  
</script>