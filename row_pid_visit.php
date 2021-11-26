   <? include('title_form.php');?>
   <div class="form-group ">
    <div class="row">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>PID :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <input type="text" class="form-control" id="pid_show" name="pid_show" style="text-transform:uppercase" value="<?=strtoupper($_GET['pid'])?>" disabled>
            <input type="hidden" class="form-control" id="pid" name="pid" value="<?=$_GET['pid']?>">
        </div>
        <div class="col-lg-3 col-sm-2 text-right">
            <span>Visit Code : </span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <input type="text" class="form-control" id="visit_code" name="visit_code" placeholder="00.0" value="<?=$result_current_data['visit_code']?>" required>
        </div>
    </div>
</div>
