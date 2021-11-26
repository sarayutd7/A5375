<?
$sql_profile_user = "select * from user_db where id = '".$_GET['uid']."'";
$result_profile_user = get_a_line($sql_profile_user);
?>
   <div class="col-md-12 col-lg-12">
    <form id="form1" class="form-horizontal" data-toggle="validator" method="post" action="index.php?task=profile_data">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Profile</h2>
                <p class="panel-subtitle">บันทึกข้อมูลกรุณากดปุ่ม Save
                <input type="hidden" class="from-control" name="profileID" id="profileID" value="$result_userLogin['id']"/> 
                </p>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Title Name: </label>
                    <div class="col-sm-8">
                        <select id="titlename" name="titlename" class="form-control">
                            <?php 
                        $sql_titlename = "select * from titlename order by titlename_id asc";
                        $result_titlename = get_rsltset($sql_titlename);
                        $nr_titlename = count($result_titlename);
if($nr_titlename>0){?>
                            <option value="0" selected>
                                กรุณาเลือกข้อมูล
                            </option>
                            <? }
                        for($t=0;$t<$nr_titlename;$t++){ ?>
                            <? if($result_profile_user['titlename'] == $result_titlename[$t]['titlename_id']){ ?>
                            <option value="<?=$result_titlename[$t]['titlename_id']?>" selected>
                                <?=$result_titlename[$t]['titlename_short']?>
                            </option>
                            <? }else{ ?>
                            <option value="<?=$result_titlename[$t]['titlename_id']?>">
                                <?=$result_titlename[$t]['titlename_short']?>
                            </option>
                            <? } 
                                                       } ?>


                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">First Name: </label>
                    <div class="col-sm-8">
                        <input type="text" id="firstname" name="firstname" class="form-control" value="<?=$result_profile_user['fristname']?>">
                        <input type="hidden" id="uid" name="uid" class="form-control" value="<?=$_GET['uid']?>">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Last Name: </label>
                    <div class="col-sm-8">
                        <input type="text" id="lastname" name="lastname" class="form-control" value="<?=$result_profile_user['lastname']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Your Email: </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" name="email" class="form-control" value="<?=$result_profile_user['email']?>">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Current Password : </label>
                    <div class="col-sm-8">
                        <input type="password" id="currentpass" name="currentpass" class="form-control" value="<?=$result_profile_user['password']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">New Password : </label>
                    <div class="col-sm-8">
                        <input type="password" id="newpass" name="newpass" class="form-control">
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Confirm Password : </label>
                    <div class="col-sm-8">
                        <input type="password" id="confirmpass" name="confirmpass" class="form-control" data-match="#newpass" data-match-error="Whoops, these don't match">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 control-label">สถานะการใช้งาน : </label>
                    <div class="col-sm-8">
                        <input type="text" id="status" name="status" class="form-control" value="<?=position($result_profile_user['status'])?>" readonly>
                        <input type="hidden" id="statusID" name="statusID" class="form-control" value="<?=$result_profile_user['status']?>">
                    </div>
                </div>
            </div>
            <footer class="panel-footer">
                <button class="btn btn-primary" type="submit">Save </button>
                <button type="reset" class="btn btn-default">Reset</button>
            </footer>
        </section>
    </form>

</div>