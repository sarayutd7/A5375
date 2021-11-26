<?
$result_status = get_a_line("select * from status where status_id = '".$_GET['staid']."' ");
?>
   <div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Status Form. </h2>
            </header>
            <form action="index.php?task=updatestatus" method="GET" enctype="multipart/form-data" id="demo-form" class="form-horizontal mb-lg">
                <div class="panel-body text-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group mt-lg">
                            <label class="clo-lg-3 col-sm-3 control-label">Status Name</label>
                            <div class="clo-lg-9 col-sm-9">
                                <input type="text" name="status_name" id="status_name" class="form-control" value="<?=$result_status['status_name']?>" required/>
                                <input type="hidden" name="staid" id="staid" value="<?=$result_status['status_id']?>">
                                <input type="hidden" name="task" id="task" value="editdata_status">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary modal-confirm" type="submit">Save</button>
                                <button class="btn btn-default modal-dismiss" type="reset" onclick="window.history.back();">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>