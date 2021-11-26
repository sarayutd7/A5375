
   <div class="row">
    <div class="form-group">
        <div class="col-xs-12 col-sm-12 col-lg-12 text-center">
            <h1> Clinical Laboratory</h1>
            <h3>Research Institute for Health Sciences, Chiang Mai University, Thailand</h3>
            <h4> <?=strtoupper(webdetail(protocal))?>
                <? if($_GET['task']!='get_print'){ echo show_test($_GET['task']); }else{ echo show_lab($_GET['lab']); }?>
                <? if($_GET['task']=='sentmail_chemis' || $_GET['task']=='sentmail_chemis'){ echo " Chemistries Lab Result Report Form."; } ?>
                <? if($_GET['task']=='sentmail_hemato' || $_GET['task']=='sentmail_hemato'){ echo " Hematology Lab Result Report Form."; } ?>
            </h4>
        </div>
    </div>
</div>
<? if($_GET['task']!= 'get_print'){ ?>
<hr>
<? } ?>