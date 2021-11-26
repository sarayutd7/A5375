<?php
$result_current_data = get_a_line("select * from hemato where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
?>
   <section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Form Send Mail Lab Hematology.
        </h2>
    </header>
    <div class="panel-body">
      <form action="sending_hemato.php" method="POST" enctype="multipart/form-data">
        
        <div class="row form-group">
            <div class="col-lg-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-11 col-sm-11 col-xs-12"><? include('title_form_print.php');?>
            </div>
        </div>
        
         <div class="row form-group">
            <div class="col-lg-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-11 col-sm-11 col-xs-12">
                <div class="col-lg-1 col-sm-1 col-xs-12">Title :</div>
                <div class="col-lg-11 col-sm-11 col-xs-12">
                    <input type="text" class="form-control" id="titlemail" name="titlename" value="Hematology Report Lab Alert <?=webdetail('protocal')?> [ PTID - <?=$result_current_data['ptid']?>] - [Visit - <?=$result_current_data['visit_code']?>] ">
                </div>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col-lg-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-11 col-sm-11 col-xs-12">
                <div class="col-lg-1 col-sm-1 col-xs-12">PID :</div>
                <div class="col-lg-11 col-sm-11 col-xs-12">  
                    <?=$result_current_data['ptid']?> 
                    <label><strong>Visit Code</strong></label>
                    <label><?=$result_current_data['visit_code']?></label>
                    
                    <label> <strong>Date Collect</strong> </label>
                    <label><?=date('d/m/Y', strtotime($result_current_data['date_coll']))?></label>
                    
                    <label> <strong>Time Collect</strong> </label>
                    <label><?=date('H:i', strtotime($result_current_data['time_coll']))?>
                    <input type="hidden" id="row_pt_detail" name="row_pt_detail" value="PID : <?=$result_current_data['ptid']?>      Visit : <?=$result_current_data['visit_code']?>      Date Collect : <?=date('d/m/Y', strtotime($result_current_data['date_coll']))?>      Time Collect : <?=date('H:i', strtotime($result_current_data['time_coll']))?>">
                    <input type="hidden" id="red" name="red" value="<?=$result_current_data['id_record']?>"> 
                    <input type="hidden" id="ptid" name="ptid" value="<?=$result_current_data['ptid']?>"> 
                    </label>
                    
                </div>
            </div>
        </div>
         
          <div class="row form-group">
            <div class="col-lg-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-11 col-sm-11 col-xs-12">
                <div class="col-lg-1 col-sm-1 col-xs-12">Detail :</div>
                <div class="col-lg-11 col-sm-11 col-xs-12"> 
                      <div class="row form-group"> 
                        <div class="col-xs-12 col-lg-12">
                            <div id="table_hematology"></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col-lg-1 col-sm-1 col-xs-12"></div>
            <div class="col-lg-11 col-sm-11 col-xs-12">
                <div class="col-lg-1 col-sm-1 col-xs-12">Other Detail :</div>
                <div class="col-lg-11 col-sm-11 col-xs-12">
                    <textarea type="text" class="form-control" id="other" name="other"></textarea>
                    <input type="hidden" class="form-control" id="whosending" name="whosending" value="<?=$result_userLogin['user']?>"> 
                </div>
            </div>
        </div> 
        
        <div class="row text-center">
            <? if($_GET['task'] == 'sentmail_hemato'){ ?>
            <button class="btn btn-primary" type="submit"> <i class="fa fa-paper-plane"></i> Send</button>
            <? } ?>
            <button class="btn btn-danger" type="reset" onclick="location.replace('index.php?pid=<?=$result_current_data['ptid']?>&task=findPID&tab=Hemato');"> <i class="fa fa-ban"></i> Cancel</button>
        </div>
        </form>
    </div>
</section>
<?  include('_footer_repeat_datetime.php'); include('_js_hemato.php');  ?>
<? if($_GET['task'] == 'viewmail_hemato'){ ?>
<script>
$("input[type=text]").prop("disabled", true);
$("textarea").prop("disabled", true);
</script>
<? } ?>