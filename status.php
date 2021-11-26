<?
$sql_status = "select * from status order by status_id asc";
$result_status = get_rsltset($sql_status);
$nr_status = count($result_status);
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">

                    <a class="modal-with-form btn btn-sm btn-primary" href="#modalForm">Create</a>
                </div>
                <h2 class="panel-title">View Status All </h2>
            </header>
            <div class="panel-body text-center">
                <div class="col-md-12 col-lg-12">

                    <table class="table mb-none">
                        <thead>
                            <tr>
                                <th class="text-center">Status name</th>
                                <th class="text-center">Status Create</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? for($i=0;$i<$nr_status;$i++){ ?>
                            <tr>
                                <td><span>
                                        <?=$result_status[$i]['status_name']?></span></td>
                                <td><span>
                                        <?=$result_status[$i]['status_create_datetime']?></span></td>
                                <td class="actions-hover">
<a class="btn btn-sm btn-warning text-white" href="index.php?task=update_status&staid=<?=$result_status[$i]['status_id']?>"><i class="fa fa-wrench"></i> Edit</a>
<a class="btn btn-sm btn-danger text-white" href="index.php?task=delete_status&staid=<?=$result_status[$i]['status_id']?>"><i class="fa fa-trash-o"></i> Delect</a>
                                </td>
                            </tr>
                            <? } ?>
                        </tbody>
                    </table>


                    <!-- Modal Form -->
                    <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                        <section class="panel">
                            <form action="#" method="get" enctype="multipart/form-data" id="demo-form" class="form-horizontal mb-lg">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Create Status Form</h2>
                                </header>
                                <div class="panel-body">

                                    <div class="form-group mt-lg">
                                        <label class="clo-lg-3 col-sm-3 control-label">Status Name</label>
                                        <div class="clo-lg-9 col-sm-9">
                                            <input type="text" name="status_name" id="status_name" class="form-control" placeholder="Type Status Name..." required />
                                            <input type="hidden" name="task" id="task" value="record_status">
                                        </div>
                                    </div> <br />
                                </div>
                                <footer class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary modal-confirm" type="submit">Save</button>
                                            <button class="btn btn-default modal-dismiss" type="reset">Cancel</button>
                                        </div>
                                    </div>
                                </footer>
                            </form>
                        </section>

                    </div> 
                </div>
            </div>
        </section>
    </div>