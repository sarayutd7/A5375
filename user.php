<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Record User All</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-condensed mb-none">
                    <thead>
                        <tr>
                            <th>Tile Name</th>
                            <th>Frist Name</th>
                            <th>Last Name</th>
                            <th>User</th>
                            <th>Register Date&Time</th>
                            <th>Status</th>
                            <th class="text-center">Approve</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?
                    $sql_user = "select * from user_db order by id asc";
                    $result_user = get_rsltset($sql_user);
                    $nr_user = count($result_user);
                    ?>
                    <tbody>
                        <? for($i=0;$i<$nr_user;$i++){ ?>
                        <tr>
                            <td>
                                <?=title_name($result_user[$i]['titlename'])?>
                            </td>
                            <td>
                                <?=$result_user[$i]['fristname']?>
                            </td>
                            <td>
                                <?=$result_user[$i]['lastname']?>
                            </td>
                            <td>
                                <?=$result_user[$i]['user']?>
                            </td>
                            <td>
                                <?=$result_user[$i]['register_date']?>
                            </td>
                            <td>
                                <?=position($result_user[$i]['status'])?>
                            </td>
                            <td class="text-center">
                               <? if($_SESSION['session_status'] > $result_user[$i]['status']){ ?> 
                                <div class="switch switch-sm switch-primary" onclick="approved(<?=$result_user[$i]['id']?>)">
                                    <input type="checkbox" name="switch" data-plugin-ios-switch <? if($result_user[$i]['verifly']==1) { ?>checked="checked"
                                    <? } ?> />
                                </div>
                                <? } ?>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info" onclick="location.replace('index.php?task=editprofileuser&uid=<?=$result_user[$i]['id']?>');">
                                    <i class="fa fa-pencil"></i> จัดการข้อมูล </button>
                            </td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<? function title_name($id){
    $result_titlename = get_a_line("select * from titlename where titlename_id = '$id'");
    return $result_titlename['titlename_short'];
    
}
        ?>
