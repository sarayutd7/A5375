<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <!--
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
-->

                <h2 class="panel-title">Search PID</h2>
            </header>
            <div class="panel-body text-center">
                <form action="#" method="get" enctype="multipart/form-data" class="form-inline">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i> PID
                        </span>
                        <input class="form-control" data-mask="9999-9999-9999-9999" data-mask-placeholder="*" type="text" id="pid" name="pid" style="text-transform:uppercase" required>
                        <input class="form-control" value="findPID" type="hidden" id="task" name="task" >
                    </div>

                    <div class="clearfix visible-xs mb-sm"></div>

                    <div class="form-group">
                        <div class="clo-sm-12 col-md-12 form-group text-center">
                            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
                            <button class="btn btn-danger" type="reset" onclick="location.replace('index.php')"><i class="glyphicon glyphicon-off"></i> Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>