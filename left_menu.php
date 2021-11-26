<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="index.php">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?task=showall"> 
                            <i class="fa fa-database" aria-hidden="true"></i>
                            <span>All Data</span>
                        </a>
                    </li>
                    <? if($result_userLogin['status'] > 2) { ?> 
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                            <span>Export to Excel</span>
                        </a>
                        <ul class="nav nav-children">
                           <? 
                            $lab = get_rsltset("select * from labmenu where active = 1 order by lablevel asc");
                            $nr_lab = count($lab );
                            for($ml=0;$ml<$nr_lab;$ml++){ 
                           ?>
                            <li>
                                <a href="index.php?task=export&q=excel&Lab=<?=$lab[$ml]['labNshort']?>">
                                    <?=$lab[$ml]['labName']?>
                                </a>
                            </li> 
                            <? } ?> 
                        </ul>
                    </li>
                    
                    <? } ?>
                    <? if($result_userLogin['status'] == 4) { ?>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-align-left" aria-hidden="true"></i>
                            <span>Control</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="index.php?task=viewuser"> <i class="fa fa-user"></i> User Manager</a>
                            </li>
                            <li > 
                                <a href="index.php?task=viewstatus"><i class="fa fa-cogs"></i> Status Manager</a>
                            </li>
                            <li > 
                                <a href="index.php?task=setting"><i class="fa fa-cogs"></i> ตั้งค่าระบบ</a>
                            </li>
                        </ul>
                    </li>
                    <? } ?>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <span>Log Out </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</aside>
