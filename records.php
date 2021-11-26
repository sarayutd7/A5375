<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel panel-featured panel-featured-success">
            <header class="panel-heading">
                <!--
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
-->

                <h2 class="panel-title">PID :
                    <?=$_GET['pid']?>
                    <?
    //echo $_SERVER['REQUEST_URI'];
function active_tab($tab,$gettab,$atttask){
if($tab == $gettab){
switch($atttask){
case 'class' : $txt = "class='active'"; break;
case 'text' : $txt = "active"; break;
default : $txt = ""; break;
}
}
    return $txt;
}
 $lab = get_rsltset("select * from labmenu where active = 1 order by lablevel asc");
 $nr_lab = count($lab);
                    
 switch($result_userLogin['status']){
     case 1: 
     case 2: $nr_lab = 1; break;
     
     case 3:
     case 4: $nr_lab = count($lab); break;
    
    default : $nr_lab = 1; break;
 }
 ?>
                </h2>
                <p class="panel-subtitle">Protocal/Project Name : <?=strtoupper(webdetail('protocal'))?></p>
            </header>
            <div class="panel-body table-responsive  text-center">
                <div class="col-md-12 col-lg-12">
                    <div class="tabs tabs-vertical tabs-left tabs-success">
                        <ul class="nav nav-tabs col-sm-2 col-xs-3 text-left">
                            <? for($ml=0;$ml<$nr_lab;$ml++){  ?>
                            <li <?
                                if(($_GET['tab']=='' && $_GET['tab']=='HIVRapid') && $lab[$ml]['labNshort'] == 'HIVRapid'){ echo "class='active'";
                                }else{ echo active_tab($lab[$ml]['labNshort'],$_GET['tab'],'class'); }
                                    ?>>
                                <a href="#<?=$lab[$ml]['labNshort']?>" data-toggle="tab"><i class="fa fa-star"></i><?=$lab[$ml]['labName']?></a>
                            </li>
                            <? } ?>
                        </ul>
                        <div class="tab-content text-left">
                           <? for($ml=0;$ml<$nr_lab;$ml++){  ?>
                            <div id="<?=$lab[$ml]['labNshort']?>" class="tab-pane <? if($ml==0){ echo "active"; }?><?
                                if($_GET['tab']=='' && $lab[$ml]['labNshort'] == 'HIVRapid'){ echo "active";
                                }else{ echo active_tab($lab[$ml]['labNshort'],$_GET['tab'],'text'); }
                                    ?>">
                                <!-- active -->
                                <? include('listrecords_'.$lab[$ml]['laburlfile'].'.php'); ?>
                            </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>