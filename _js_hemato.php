   <? db_connect(); ?>
   <script type="application/javascript">
    <?
    if ($_GET['task'] == 'edit_hemato') { ?>
        var gender_c = "&gender=" + $('#gender').val();
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Hematology&age=" + $('#ages').val() + gender_c + pid; 
    <? } else if ($_GET['task'] == 'view_hemato' || $_GET['task'] == 'print_hemato' || $_GET['task'] =='get_print') { ?>
        var gender_c = "&gender=<?=$result_current_data['gender']?>";
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Hematology&age=<?=$result_current_data['age']?>" + gender_c + pid; 
                                         
    <? }else if ($_GET['task'] == 'sentmail_hemato' || $_GET['task'] == 'viewmail_hemato') { ?>  
        var gender_c = "&gender=<?=$result_current_data['gender']?>";
        var pid = "&pid=<?=$_GET['pid']?>&recid=<?=$_GET['recid']?>";
        var params = "protocal=<?=project('protocal')?>&labGlobal=Hematology&age=<?=$result_current_data['age']?>" + gender_c + pid;
    <? } else { ?>
        $('#ages').val(<?=$patient['age']?>); 
        var pid = '';
        var gender_c = '&gender=<?=$patient['gender']?>';
        var params = "protocal=<?=project('protocal')?>&labGlobal=Hematology&age=" + $('#ages').val() + gender_c + pid; 
        
    <? } ?>


    <?
    switch ($_GET['task']) {
        case 'view_hemato':
        case 'print_hemato':
        case 'get_print' :
            $URL = 'view_table_hematology.php';
            break;
        case 'sentmail_hemato' : 
        case 'viewmail_hemato' :
            $URL = 'lab_alert_table_hematology.php';
            break;
        default:
            $URL = 'table_hematology.php';
            break;
    } ?>
    $.ajax({
        url: '<?=$URL?>',
        type: 'GET',
        dataType: 'HTML',
        data: params,
        success: function(result) {
            $('#table_hematology').html(result);
        }
    });

    function loadTable() {
        var params = "protocal=<?=project('protocal')?>&labGlobal=Hematology&age=" + $('#ages').val() + "&gender=" + $('#gender').val() + pid;
        $.ajax({
            url: '<?=$URL?>',
            type: 'GET',
            dataType: 'HTML',
            data: params,
            success: function(result) {
                $('#table_hematology').html(result);
            }
        });
    }

    function check_value(lab, val, lln, uln) {
        var txt;
        var refN;
        var ShowTxt;

        //        var lln = $.isNumeric(lln);
        //        var uln = $.isNumeric(uln);
        //        var val = $.isNumeric(val);
        //alert("val : "+val+" lln : "+lln+" uln : "+uln); 
        if (val < lln) {
            txt = '0'; //OOR Lo
            refN = 5;

        } else if ((val >= lln) && (val <= uln)) {
            txt = '0';
            refN = 6;

        } else if (val > uln) {
            txt = '0'; //OOR Hi
            refN = 7;

        }
        switch (refN) {
            case 5:
                //Hemoglobin
//                switch(lab){
//                       case 'hemoglobin' : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '8'); break;
//                       default : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, ''); break; //OOR Lo 
//                       }
                //Platelets
                 
                
                    //------------------ return g=0 is g8 fix lab
                    switch(lab){
                            case 'hematocrit' :
                            case 'neutrophils' :  
                            case 'lymphocyte' :  
                            case 'monocyte' :  
                            case 'eosinophils' :  /*ShowTxt = '0'; break;  */
                            case 'basophils' :     
                            case 'atypical_lymphocyte' : ShowTxt = 'NG'; break;
                        default : cal_grade(lab, $('#gender').val(), $('#ages').val(), val, '0'); break;
                       }
                    //------------------ return g=0 is g8 
                break;
            case 6:
                 
                    //------------------ return g=0 is g8 fix lab
                    switch(lab){
                            case 'hematocrit' :
                            case 'neutrophils' :  
                            case 'lymphocyte' :  
                            case 'monocyte' :  
                            case 'eosinophils' :    
                            case 'basophils' : /**/   
                            case 'atypical_lymphocyte' : ShowTxt = 'NG'; break;
                        default : ShowTxt ='0'; break;
                       }
                    //------------------ return g=0 is g8 
                
                break;
            case 7:
                  
                    //------------------ return g=0 is g8 fix lab
                    switch(lab){
                            case 'hematocrit' :
                            case 'neutrophils' :  
                            case 'lymphocyte' :  
                            case 'monocyte' :  
                            case 'eosinophils' :    /* ShowTxt = '0'; break; */ 
                            case 'basophils' :     
                            case 'atypical_lymphocyte' : ShowTxt = 'NG'; break;
                        default : ShowTxt = txt; break;
                       }
                    //------------------ return g=0 is g8 
                break;
            default:
                
                ShowTxt = '0';
                break;
        }
        if(val.length==0){ ShowTxt = ''; }
        $('#' + lab + '_label').html(ShowTxt);
        $('#' + lab + '_grade').val(ShowTxt);

    }

    function cal_grade(lab, gender, ages, val, refN) {
        var params = "lab=" + lab + "&gender=" + gender + "&age=" + ages + "&val=" + val;
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