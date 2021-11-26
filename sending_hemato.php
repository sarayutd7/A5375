<?
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php'); 
if($_SESSION['session_userid']!=''){ db_connect();
//**************************************************************
/*$sentto = "suwat@rihes.org,natapolk@yahoo.com,supindham@gmail.com,nuntisa@gmail.com,
titlenoi@gmail.com,quanhathai@rihes.org,wathee@rihes.org,pongpun@rihes.org,sobhon@rihes.org,radchanok@rihes.org,amornrat@rihes.org,
rattanaporn@rihes.org,kachaporn@rihes.org,pimsuda@rihes.org,tharida@rihes.org,wj.rihes@gmail.com,s_dokuta@yahoo.com,
wj.rihes@gmail.com,s_dokuta@yahoo.com,pui059@hotmail.com,chamai.rihes@gmail.com,psothanapaisan@gmail.com,jib259@hotmail.com,
rincome_siriluck@hotmail.com,sbutphet@gmail.com,kukkainitt@hotmail.com,sarayutd7@gmail.com,nujum@rihes-cmu.org,thanyarat@rihes.org,artita.ji@gmail.com,auddanai@gmail.com,clrihes@gmail.com";
*/
$sentto = "sarayutd7@gmail.com";
$text .= "<link rel=\"stylesheet\" href=\"http://dmu.rihes.cmu.ac.th/mtn035/lib/vendor/bootstrap/css/bootstrap.css\" />";
//----------------------------------------------------------------
//-------------------------- TITLE --------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
$title = $_POST['titlename'];
//----------------------------------------------------------------
//-------------------------- END TITLE --------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------                                    
$other = $_POST['other'];
$whoSending = $_POST['whosending']; 
$data_lab = $_POST['lab'];
$rowPTdetail = $_POST['row_pt_detail'];
$ptid = $_POST['ptid'];
$redid = $_POST['red'];
$nr_lab = count($data_lab);
//print_r($data_lab);
//----------------------------------------------------------------
//-------------------------- HEAD TITLE --------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
$text .= "<div style=\"text-align:center\"><h1> Clinical Laboratory</h1>
            <h3>Research Institute for Health Sciences, Mhiang Mai University, Thailand</h3>
            <h4> IMPAACT2014 Hematology Lab Result Report Form.            </h4></div >";
//----------------------------------------------------------------
//------------------------ END HEAD TITLE ------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------

//----------------------------------------------------------------
//------------------------ SHORT DETAIL --------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
$text .= "<div><h3>$rowPTdetail</h3></div>";
//----------------------------------------------------------------
//---------------------- END SHORT DETAIL ------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
                                    
//----------------------------------------------------------------
//------------------------- TEXT MAIL ----------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
$text .= "<div class=\"table-responsive\" style=\"text-align:center\"><table width=\"90%\" class=\"table table-striped\">";
$text .= "<thead>";
$text .= "<tr>";
$text .= "<th align=\"left\">Test name</th>";
$text .= "<th align=\"center\">Result</th>";
$text .= "<th align=\"center\">AE Severity Grade</th>";
$text .= "<th align=\"center\">Normal range</th>";
$text .= "</tr>";
$text .= "</thead>";
$text .= "<tbody>";
for($i=0;$i<$nr_lab;$i++){  $encode_txt = explode('|',$data_lab[$i]);
 $text .= "<tr>";
 $text .= "<td align=\"left\">".$encode_txt[0]."</td>"; 
 $text .= "<td align=\"center\">".$encode_txt[1]."</td>"; 
 $text .= "<td align=\"center\">".$encode_txt[2]."</td>"; 
 $text .= "<td align=\"center\">".$encode_txt[3]."</td>"; 
 $text .= "</tr>";
}
$text .= "</tbody>";
$text .= "</table></div>";
//----------------------------------------------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
//----------------------------------------------------------------
$text .= "<div><hr></div>";
$text .= "<div>Other Detail : $other</div>";
$text .= "<div>User Sending by : $whoSending</div>";                                
 
                                    sent_mail('hemato',$redid,$sentto,$title,$text,"index.php?pid=$ptid&task=findPID&tab=Hemato");
 
 } 
?>