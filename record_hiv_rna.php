<?
$result_current_data = get_a_line("select * from hiv_rna where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."'");
switch($_GET['task']){
    case 'view_hiv_rna' : $panel_title = "View HIV-1 RNA PCR"; break;
    case 'edit_hiv_rna' : $panel_title = "Edit HIV-1 RNA PCR"; break;    
        default : $panel_title = ""; break;
}
?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <section class="panel">
            <form action="save_rna.php" enctype="multipart/form-data" method="post">
                <header class="panel-heading">
                    <h2 class="panel-title"><?=$panel_title?></h2>
                </header>
                <div class="panel-body">
                    <div class="col-lg-11 col-sm-12">
                        <? include('title_address_rihes.php');?>
                        <table width="100%" border="1" cellspacing="0">
                            <tr>
                                <td style="padding:5px; font-size:16px;" bgcolor="#c0c0c0">
                                    <center><strong>HIV-1 RNA PCR Report</strong></center>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:5px; font-size:16px;"><strong><?=strtoupper(project('protocal'))?></strong>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <table width="100%" cellspacing="0" cellpadding="5" style="font-size:12px;">
                                        <? include('print_row_pid_visit.php'); ?>
                                        <? include('print_row_datetime_coll.php'); ?>
                                        <? include('print_row_datetime_recei.php'); ?>
                                        <? include('print_row_datetime_assay.php'); ?>
                                        <tr>
                                            <td>
                                                Type of Specimen : <strong><?=$result_current_data['type_specimen']?></strong>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%" cellspacing="0" cellpadding="10">
                            <tr>
                                <td><strong>Method : Abbott RealTime HIV-1</strong></td>
                            </tr>

                            <tr>
                                <td valign="top">
                                    <table width="75%" cellspacing="0" cellpadding="10" style="margin-left:20%">
                                        <tr>
                                            <td align="left">
                                                <i class="fa fa-check-circle-o fa-lg"></i>


                                                <label>
                                                    <? 
                          switch($result_current_data['rna']){
                              case "LT" : $txt =  "Less than"; break;
                              case "ET" : $txt =  "Equal to"; break;
                              case "GT" : $txt =  "Greater than"; break;
                              case "U" : $txt =  "Undetectable"; break;
                              default : $txt =  ""; break;
                          }    
                        echo $txt;
                        ?>
                                                </label>

                                            </td>
                                            <td rowspan="4" valign="top">
                                                <div class="col-lg-4 col-sm-4 col-xs-4" style="border:solid #999 1px; margin-top:10px; padding:30px;">
                                                    <table width="100%" cellspacing='0' cellpadding="10">
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td style="border-bottom: 1px solid #000;" align="center">
                                                                <strong><?=number_format($result_current_data['viral_copies'])?></strong>
                                                            </td>
                                                            <td>Copies/ml</td>
                                                        </tr>
                                                        <tr>
                                                            <td>or</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td style="border-bottom: 1px solid #000;" align="center">
                                                                <strong>
                                                                    <? if($result_current_data['log_copies']>0){ echo number_format($result_current_data['log_copies'],2,'.',''); }?></strong>
                                                            </td>
                                                            <td>Log copies/ml</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                        <hr>

                        <? include('row_remark.php'); ?>
                    </div>
                    <div class="col-lg-1 col-sm-12"></div>
                </div>

                <? include('row_bt_control.php'); ?>
            </form>
        </section>
    </div>
</div>
