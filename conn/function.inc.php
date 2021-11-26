<?

ini_get("session.gc_maxlifetime");
/* set the cache limiter to 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* set the cache expire to 30 minutes */
session_cache_expire(60);
$cache_expire = session_cache_expire();

/* start the session */
//session_start();

//echo "The cache limiter is now set to $cache_limiter<br />";
//echo "The cached session pages expire after $cache_expire minutes";


function db_connect(){



	global $dbHost;



	global $dbuser;



	global $dbpass;



	global $dbname;



	$conn = mysql_connect($dbHost,$dbuser,$dbpass);



	mysql_select_db($dbname);



	mysql_query("SET character_set_results=utf8");



	mysql_query("SET character_set_client=utf8");



	mysql_query("SET character_set_connection=utf8");



}



function db_connectIs($db){



	global $dbHost;



	global $dbuser;



	global $dbpass;



	$conn = mysql_connect($dbHost,$dbuser,$dbpass);



	mysql_select_db($db);



	mysql_query("SET character_set_results=utf8");



	mysql_query("SET character_set_client=utf8");



	mysql_query("SET character_set_connection=utf8");



}



function get_a_line($mysql)







{







if(!($result = mysql_query ("$mysql"))){$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");exit;}







$row = mysql_fetch_array ($result);







mysql_free_result ($result);







return $row;







}







//============== guery all ==============







function get_rsltset($mysql)







{







if (! ($result = mysql_query ("$mysql")))







{







$men = mysql_errno();







$mem = mysql_error();







echo ("<h4>$mysql  $men $mem</h4>");







exit;







}







else







{







while ( $row = mysql_fetch_array ($result) )







{







$rsltset[] = $row;







}







mysql_free_result($result);







return $rsltset;







}







}







//============== count data ==============







function rsltset_count($rs)







{







$i=0;







while($rs[$i][0])







{







$i++;







}







return $i;







}







//============== update data ==============







function update_data($mysql)







{







if (!mysql_query ("$mysql")){$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");return $men;exit;}







}







//============== insert data ==============







function insert_data($mysql)







{







if (!mysql_query ("$mysql"))







{







$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");return $men;exit;







}







}







//============== delete ==============







function delete($table,$condition)







{







$sql ="delete from $table $condition";







$re = mysql_query($sql);







return $result;







}















function deleteall($table)







{







$sql ="delete from $table";







$re = mysql_query($sql);







return $result;







}















//=============== select ==================







function select($table,$condition)







{







$sql = "select * from $table $condition";







$dbquery = mysql_query($sql);







$result= mysql_fetch_array($dbquery);







return $result;







}















//=============== Numrow ==================







function num_record($table,$condition)







{







$sql = "select * from $table $condition";







$dbquery = mysql_query($sql);







$num_rows = mysql_num_rows($dbquery);







return $num_rows;







}



function task($var){



	if($var==''){



		return "";



	}else{



		$task_tag .= "<li class='active'>";



        $task_tag .= "    <i class='fa fa-file'></i> $var";



        $task_tag .= "</li>";



		return $task_tag;



	}



}







function navi_tab($var){



	$navi_tab .= "<ol class='breadcrumb'>";



    $navi_tab .= "<li>";



    $navi_tab .= "<i class='fa fa-dashboard'></i>  <a href='index.php?task=main'>Dashboard</a>";



    $navi_tab .= "</li>";



	$navi_tab .= task($var);



	$navi_tab .= "</ol>";



	return $navi_tab;



}







/* ================== Java Function ================= */



function PHPalert($text)







  {







	echo '<script language="JavaScript">';







	echo "alert(\"".$text."\");";







	echo '</script>';







  }







 function PHPconfirm($text,$url)







  {







echo '<script language="JavaScript">';







echo "question = confirm(\"$text\"); if(question !=0){ top.location =\"$url\";}";







echo '</script>';







  }







function PHPgourl($text)







  {







	echo '<script language="JavaScript">';







	echo 'window.location="'.$text.'";';







	echo '</script>';







  }















  function PHPback()





  {







	echo '<script language="JavaScript">';







	echo 'history.back();';







	echo '</script>';







  }















 function PHPreload()







  {







	echo '<script language="JavaScript">';







	echo 'window.opener.location.reload();';







	echo '</script>';







  }















   function PHPJavaScript($text)







  {







	echo '<script language="JavaScript">';







	echo $text;







	echo '</script>';







  }



  function NummonthThaitoName($m){

	  $full_month_name_th = array('มกราคม'=>'01','กุมภาพันธ์'=>'02','มีนาคม'=>'03','เมษายน'=>'04','พฤษภาคม'=>'05','มิถุนายน'=>'06','กรกฎาคม'=>'07','สิงหาคม'=>'08','กันยายน'=>'09','ตุลาคม'=>'10','พฤศจิกายน'=>'11','ธันวาคม'=>'12');

	  foreach($full_month_name_th as $d=>$k){



		if($m==$k){

			$Number = $d;

		}

	}

	return $Number;

  }



  function monthThaitoNum($m){

	  $full_month_name_th = array('มกราคม'=>'01','กุมภาพันธ์'=>'02','มีนาคม'=>'03','เมษายน'=>'04','พฤษภาคม'=>'05','มิถุนายน'=>'06','กรกฎาคม'=>'07','สิงหาคม'=>'08','กันยายน'=>'09','ตุลาคม'=>'10','พฤศจิกายน'=>'11','ธันวาคม'=>'12');

	  foreach($full_month_name_th as $d=>$k){



		if($m==$d){

			$Number = $k;

		}

	}

	return $Number;

  }



  function monthEngtoNum($m){

	  $full_month_name_th = array('Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12');

	  foreach($full_month_name_th as $d=>$k){



		if($m==$d){

			$Number = $k;

		}

	}

	return $Number;

  }

	function listMont($m){

		$full_month_name_th = array('Jan'=>'1','Feb'=>'2','Mar'=>'3','Apr'=>'4','May'=>'5','Jun'=>'6','Jul'=>'7','Aug'=>'8','Sep'=>'9','Oct'=>'10','Nov'=>'11','Dec'=>'12');

		foreach($full_month_name_th as $d=>$k){



		if($m==$k){

			$Number = $d;

		}

	}

	return $Number;

	}

  function to_dateformat($date){



	$date_var = explode('/',$date);



	$short_month_name = array('Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12');



	foreach($short_month_name as $d=>$k){



		if(strtoupper($date_var['1'])==strtoupper($d)){



			$var_month = $k;



		}



	}



	$dateformat = $date_var['2']."-".$var_month."-".$date_var['0'];



	return $dateformat;



}







function dateFormat($var_date){



	if($var_date!='0000-00-00' and $var_date!=''){



	$date = date_create($var_date);



	return strtoupper(date_format($date,"d/M/y")); //16/Feb/1917



	}else if($var_date==''){ return "";



	}else{ return ""; }



}







function dateFormatY($var_date){



	if($var_date!='0000-00-00' and $var_date!=''){



	$date = date_create($var_date);



	return strtoupper(date_format($date,"d/M/Y")); //16/Feb/1917



	}else if($var_date==''){ return "";



	}else{ return ""; }



}



function timeFormat($var){



	echo substr($var,0,5);



}







function icon_status($obj,$val,$truevaul){



							 if($obj=='radio'){



								 if($val==$truevaul){



									 $icon = 'fa-check-circle-o fa-lg';



								 }else{



									 $icon = 'fa-circle-o fa-lg';



								 }



							 }else{



								if($val==$truevaul){



									 $icon = 'fa-check-square-o fa-lg';



								 }else{



									 $icon = 'fa-square-o fa-lg';



								 }



							 }



							 return $icon;



						}



function edit_bt($ptask,$limitd,$rd_id){



					if($limitd<=15){



						$bt = "<a class=\"btn-xs btn-small bootpopup\"  href=\"?pid=".$_GET['pid']."&task=edit".$ptask."&rd=".$rd_id."\">";



						$bt .="<i class=\"fa fa-edit\"></i> Edit</a>";



					}



					return $bt;



				}

function numberFormat($val,$d){

	$n = number_format($val,$d, '.', '');

	return $n;

}



function reference_status($s){

	switch($s){

		case "P" : $ref_s = "Positive"; break;

		case "N" : $ref_s = "Negative"; break;

		case "I" : $ref_s = "Indeterminate"; break;

		case "E" : $ref_s = "Equivocal"; break;

		default : $ref_s = ""; break;

	}

	return $ref_s ;

}

function reference_status_rt($s){

	switch($s){

		case "R" : $ref_s = "Reaction"; break;

		case "N" : $ref_s = "Non-Reactive"; break;

		default : $ref_s = ""; break;

	}

	return $ref_s ;

}

function reference_status_rp($s){

	switch($s){

		case "less than" : $ref_s = "Less than"; break;

		case "equal to" : $ref_s = "Equal to"; break;

		case "greater than" : $ref_s = "Greater than"; break;

		case "Undetectable" : $ref_s = "Undetectable"; break;

		default : $ref_s = ""; break;

	}

	return $ref_s ;

}

function random_word($n){

$Caracteres_up = strtoupper('ABCDEFGHIJKLMOPQRSTUVXWYZ');

$Caracteres_lo = strtolower('ABCDEFGHIJKLMOPQRSTUVXWYZ');

$number = '0123456789';

$text = $Caracteres_up.$Caracteres_lo.$number;

$QuantidadeCaracteres = strlen($text);

$QuantidadeCaracteres--;



$Hash=NULL;

    for($x=1;$x<=$n;$x++){

        $Posicao = rand(0,$QuantidadeCaracteres);

        $Hash .= substr($text,$Posicao,1);

    }

	return $Hash;

}

function random_filename($len)



{



srand((double)microtime()*10000000);



$chars = "ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnpqrstuvwxyz123456789";



$ret_str = "";



$num = strlen($chars);



	for($i = 0; $i < $len; $i++)



	{



	$ret_str.= $chars[rand()%$num];



	$ret_str.="";



	}



return $ret_str;



}







function random_id($len)



{



srand((double)microtime()*10000000);



$chars = "123456789";



$ret_str = "";



$num = strlen($chars);



	for($i = 0; $i < $len; $i++)



	{



	$ret_str.= $chars[rand()%$num];



	$ret_str.="";



	}



return $ret_str;



}







function checkfile($filename)



{



	if($filename == "application/pdf")	{    $exp=".pdf";	 }



	 else  if($filename == "application/msword")	{  $exp=".doc";  }



	 else  if($filename== "application/vnd.ms-excel")	{  $exp=".xls";   }



	 else  if($filename== "application/vnd.ms-powerpoint")	{  $exp=".ppt";   }



     else  if($filename== "application/vnd.visio")	{  $exp=".vsd";   }



	 else  if($filename== "image/png")	{  $exp=".png";   }



	else if($filename == "image/x-png")	{    $exp=".png";	 }



	else if($filename == "image/bmp")	{    $exp=".bmp";	 }



	else  if($filename== "image/pjpeg")	{  $exp=".jpg";   }



	else if($filename== "image/jpeg")	{  $exp=".jpg";   }



    	else  if($filename == "image/gif")	{  $exp=".gif";   }



	else if($filename == "video/mp4")	{  $exp=".mp4";   }



	else if($filename == "audio/mpeg3")	{  $exp=".mp3";   }



	else if($filename == "audio/mp3")	{  $exp=".mp3";   }



	else  if($filename == "application/x-shockwave-flash"){  $exp=".swf";   }



return $exp;



}



//-------------------------------------- Function One

function locallink($url){

	switch($url){

		case 'home' ; $hyperlink = "<a href=\"index.php\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>"; break;

		case 'booking' ; $hyperlink = "<a href=\"index.php?task=booking\" title=\"Go to Booking\" >Booking</a>"; break;

		case 'calendar' ; $hyperlink = "<a href=\"index.php?task=calendar\" title=\"Go to calendar\" >View Calendar</a>"; break;

		case 'equipment_all' ; $hyperlink = "<a href=\"index.php?task=equipment_all\" title=\"Go to Equipment Manager\" >Equipment Manager</a>"; break;

		case 'cau_all' ; $hyperlink = "<a href=\"index.php?task=cau_all\" title=\"Go to Condition After Use Manager\" >Condition After Use Manager</a>"; break;

		case 'location_all' ; $hyperlink = "<a href=\"index.php?task=location_all\" title=\"Go to Location Manager\" >Location Manager</a>"; break;

		case 'category_all' ; $hyperlink = "<a href=\"index.php?task=category_all\" title=\"Go to Category Manager\" >Category Manager</a>"; break;

		case 'status_all' ; $hyperlink = "<a href=\"index.php?task=status_all\" title=\"Go to Status Manager\" >Status Manager</a>"; break;

		case 'userall' ; $hyperlink = "<a href=\"index.php?task=userall\" title=\"Go to User Manager\" >User Manager</a>"; break;

		default : $hyperlink = "<a href=\"index.php\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>"; break;

	}

	return $hyperlink;

}



function latest_data($db,$date){

	switch($db){

		case 'user_db' : $fix_field = 'userinsertdate'; break;

		default : $fix_field = 'insertdate'; break;

	}

	$sql_db = "select DATEDIFF(NOW(), ".$fix_field.") as lastdata from $db WHERE userinsertdate = '".date('Y-m-d')."' ";

	$result_db = get_a_line($sql_db);

	$tag = "<span class=\"label label-important\">";

	$tag .= $result_db['lastdata'];

	$tag .= "</span>";

	return $tag;

}



function uid($v){

	$sql = "select userID from user_db where username = '".$v."'";

	$resul = get_a_line($sql);

	return $resul['userID'];

}





function category_name($id){

	$sql_category = "select categoryname from category where categoryid = '$id'";

	$result_category = get_a_line($sql_category);

	return $result_category['categoryname'];

}



function status_name($id){

	$sql_status = "select cauname from condition_after_use where cauid = '$id'";

	$result_status = get_a_line($sql_status);

	return $result_status['cauname'];

}



function statususer($id){

	$sql_status = "select status_name from status_db where status_level = '$id'";

	$result_status = get_a_line($sql_status);

	return $result_status['status_name'];

}



function listdeviceadmin($id){

	$sql = "select name, lastname from user_db where userID = '$id' and approve = '1'";

	$result = get_a_line($sql);

	$deviceadmin = $result['name']." ".$result['lastname'];

	if(trim($deviceadmin)!=''){ $deviceadmin = $deviceadmin; }else{ $deviceadmin = "?"; }//ยังไม่มีการระบุผู้ดูแลอุปกรณ์

	return $deviceadmin;

}





function positionTxt($var,$task){

	$sql = "select * from position where position_id = '$var' ";

	$result = get_a_line($sql);

	switch($task){

		case 'id' : $txt = $result['position_idposition_idposition_idposition_idposition_idposition_id'] ; break;

		case 'name' : $txt = $result['position_name'] ; break;

		default : $txt = ""; break;

	}

	return $txt;

}



function titlename($var,$task){

	$sql = "select * from titlename where titlename_id = '$var' ";

	$result = get_a_line($sql);

	switch($task){

		case 'id' : $txt = $result['position_id'] ; break;

		case 'textfull' : $txt = $result['titlename_full'] ; break;

		case 'textshort' : $txt = $result['titlename_short'] ; break;

		default : $txt = ""; break;

	}

	return $txt;

}



function userdetail($id,$ask){

	$sql = "select * from member where memberID = '$id' ";

	$result = get_a_line($sql);



	switch($ask){

		case 'userID' : $txt = $result['memberID'] ; break;

		case 'code': $txt = $result['memberCode']; break;

		case 'namefull' : $txt = $result['memberFirstname']. " ".$result['memberLastname'] ; break;

		case 'memberGenden' : $txt = $result['memberGenden'] ; break;

		case 'memberDateofBirth' : $txt = $result['memberDateofBirth'] ; break;

		case 'memberEmail' : $txt = $result['memberEmail'] ; break;

		case 'memberDateregister' : $txt = $result['memberDateregister'] ; break;

		case 'memberType' : $txt = $result['memberType'] ; break;

		case 'memberTimeStart' : $txt = $result['memberTimeStart'] ; break;

		case 'memberTimeStop' : $txt = $result['memberTimeStop'] ; break;

		default : $txt = ""; break;

	}

	return $txt;

}



function realUser($id){

	$sql = "select memberUsername from member where memberID = '$id' and memberConfirm = '1'";

	$result = get_a_line($sql);

	$deviceadmin = $result['username'];

	if(trim($deviceadmin)!=''){ $deviceadmin = $deviceadmin; }else{ $deviceadmin = "?"; }//ยังไม่มีการระบุผู้ดูแลอุปกรณ์

	return $deviceadmin;

}



function location($i){

	$sql = "select locationname from location where locationid = '".$i."'";

	$resul = get_a_line($sql);

	return $resul['locationname'];

}



//--------------------------------------





//--------------- for bookingconfirm.php print.php

 function Checker($source,$fix){

	 if($source==$fix){

		 $icon_check = 'icon-check';

	 }else{

		$icon_check = 'icon-check-empty';

	 }

	 return $icon_check;

 }





//--------------- for bookingconfirm.php print.php

function fixdate_formmat_patter($date){

    if($date !='' || $date !='0000-00-00'){

    $txt = date('Y-m-d',strtotime(str_replace('/','-',$date)));

        }else{

      $txt = '' ; 

    }

    return $txt;

}



function show_date($date){

    if($date!='0000-00-00' || $date ==''){

    $txt = ucfirst(date('d/M/Y',strtotime($date)));

        }else{ $txt = ''; }

    return $txt;

}

function show_test($item){

    switch($item){

    case 'print_hiv_rt' : $txt = 'HIV Rapid Test'; break;

    case 'print_hiv_eia' : $txt = 'HIV EIA<sup>4th</sup> Generation'; break;

    case 'print_hiv_rna' : $txt = 'HIV-1 RNA PCR'; break;

    

    case 'print_cd4' : $txt = 'Immunophenotyping'; break;

    case 'print_hemato' : $txt = 'Hematology Report'; break;

    case 'print_chemis' : $txt = 'Chemistries Report'; break;

    

    case 'print_urinepregnancy' : $txt = 'Urine Pregnancy Report'; break;

    

    case 'print_urine' : $txt = 'Urinalysis Report'; break;

    case 'print_syphilis' : $txt = 'Syphilis Report'; break;

    case 'print_ctng' : $txt = 'CT / NG PCR Report'; break;

    

    case 'print_hepatitis' : $txt = 'Hepatitis Serology Report'; break;

    

    default : $txt = ''; break;

            }

    return $txt;

}  



    function show_lab($item){

    switch($item){

    case 'hiv_rt' : $txt = 'HIV Rapid Test'; break;

    case 'hiv_eia' : $txt = 'HIV EIA<sup>4th</sup> Generation'; break;

    case 'hiv_rna' : $txt = 'HIV-1 RNA PCR'; break;

    

    case 'cd4' : $txt = 'Immunophenotyping'; break;

    case 'hemato' : $txt = 'Hematology Report'; break;

    case 'chemis' : $txt = 'Chemistries Report'; break;

    

    case 'urinepregnancy' : $txt = 'Urine Pregnancy Report'; break;

    

    case 'urina' : $txt = 'Urinalysis Report'; break;

    case 'syphilis' : $txt = 'Syphilis Report'; break;

    case 'ctng' : $txt = 'CT / NG PCR Report'; break;

    

    case 'hepatitis' : $txt = 'Hepatitis Serology Report'; break;

    

    default : $txt = ''; break;

            }

    return $txt;

}  



function setnumber($number){

  $greadNum =   number_format($number, 2, '.', '');

    return $greadNum;

}



function project($command){

    $sql = "select * from detailproject where command = '$command'";

    $result = get_a_line($sql);

    return $result['task'];

}
function text_replace($val){
	if($val=='OOR Lo'){ return str_replace('OOR Lo','0',$val);
	}else if($val=='OOR Hi'){ return str_replace('OOR Hi','0',$val);
	}else{ 
		$exp = explode(" ",$val);
		if($exp[0]!=''){ $exp_val = $exp[0]; }else{ $exp_val = '0'; }
	return $exp_val;
	}
}

function findGrade($a,$fix){
	foreach($a as $v => $z){
		if($fix>=2){
		   if($z==$fix){
            /* chemis lab list */
            //------------ grade 2 alert
			if($v=="alt_gr"){  
				return '1';
				}
			if($v=="ast_gr"){  
				return '1';
				}
            if($v=="creatinine_gr"){  
				return '1';
				}
            if($v=="billirubin_gr"){  
				return '1';
				}
            //------------ grade 2 alert  
            /* chemis lab list */
		    /*if($v=="platelets_gr"){  
				return '1';
				}*/
			 }
		   }
        
		   if($fix==3){
			   if($z==$fix){
                   /* chemis lab list */
                    if($v=="alt_gr"){
                    return '1';
                    }
                    if($v=="ast_gr"){
                    return '1';
                    }
                    if($v=="creatinine_gr"){
                    return '1';
                    }
                    if($v=="billirubin_gr"){
                    return '1';
                    }
                   
                   if($v=="alkaline_phosphatase_gr"){
                    return '1';
                    }
                   if($v=="albumin_gr"){
                    return '1';
                    }
                   if($v=="sodium_gr"){
                    return '1';
                    }
                   if($v=="bicarbonate_gr"){
                    return '1';
                    }
                   if($v=="lipase_gr"){
                    return '1';
                    }
                   if($v=="glucose_gr"){
                    return '1';
                    }
                   if($v=="cholesterol_gr"){
                    return '1';
                    }
                   if($v=="ldl_gr"){
                    return '1';
                    }
                   if($v=="triglyceride_gr"){
                    return '1';
                    }
                  /* chemis lab list */  
                  /* Hemato lab list */   
                  if($v=="hemoglobin_gr"){
                    return '1';
                    }
                   if($v=="absolute_neutrophils_gr"){
                    return '1';
                    }
                   if($v=="wbc_gr"){
                    return '1';
                    }
                   if($v=="platelets_gr"){
                    return '1';
                    }
                 /* Hemato lab list */ 
				}
               
		   }
		   if($fix>=4){
			  if($z==$fix){
                  /* chemis lab list */
                    if($v=="creatinine_gr"){
                    return '1';
                    }
				    if($v=="creatinine_clearance_gr"){
					return '1';
					}
				    if($v=="alt_gr"){
                    return '1';
                    }
                    if($v=="ast_gr"){
                    return '1';
                    }
                    
                    if($v=="billirubin_gr"){
                    return '1';
                    }
                   
                   if($v=="alkaline_phosphatase_gr"){
                    return '1';
                    }
                   if($v=="albumin_gr"){
                    return '1';
                    }
                   if($v=="sodium_gr"){
                    return '1';
                    }
                   if($v=="bicarbonate_gr"){
                    return '1';
                    }
                   if($v=="lipase_gr"){
                    return '1';
                    }
                   if($v=="glucose_gr"){
                    return '1';
                    }
                   if($v=="cholesterol_gr"){
                    return '1';
                    }
                   if($v=="ldl_gr"){
                    return '1';
                    }
                   if($v=="triglyceride_gr"){
                    return '1';
                    }
                  /* chemis lab list */ 
                  
                  /* Hemato lab list */   
                  if($v=="hemoglobin_gr"){
                    return '1';
                    }
                   if($v=="absolute_neutrophils_gr"){
                    return '1';
                    }
                   if($v=="wbc_gr"){
                    return '1';
                    }
                   if($v=="platelets_gr"){
                    return '1';
                    }
                 /* Hemato lab list */ 
				} 
		   }
		
	}
}

function class_warning($obj){
                                	if($obj>=3){
                                    	//return "class=\"bg-warning text-warning\"";
				return "";
                                    }else{
                                    	return "style=\"display: none;\"";
										//return "";
                                    }
                                }
//******************************** mail fn ****************************
//******************************** mail fn ****************************
//******************************** mail fn ****************************

function mailAlert($data,$mailstatus){
//    print_r($data);
    foreach($data as $v => $z){ 
        $c=0;$c++;
        if($c>0){
        //echo $v." : ".$z." $c <br>";
        //array_push($newArray, array('key' => 'value'));
            if($z>2){ $newArray2[$i][] .= array($v=>$z); }
        //---------------------------------------------------------
        /*if($z==2){ $newArrayGrad2[$i][] .= array($v=>$z); }
        if($z==3){ $newArrayGrad3[$i][] .= array($v=>$z); }
        echo " ";

        echo "-";
        echo count($newArrayGrad3[$i]);*/
        //---------------------------------------------------------
        }
    } 
    $alert_mail_aws = findGrade($data,2) + findGrade($data,3)+findGrade($data,4)+findGrade($data,5);
    //echo $alert_mail_aws;
    if($alert_mail_aws>=1){
        if($mailstatus!=1){
            //$mail = "show icon sendmail";
            $mail = 1;
        }else{
           //$mail = "send mail"; 
            $mail = 2;
        }
    }
    return $mail;
}
//**************************** send mail ********************************
function sent_mail($lab,$red,$sento,$MailSubject,$text,$urlcomback){ 
$MailTo = $sento;
$MailFrom = 'Clinical Laboratory IMPAACT2014' ;
$MailFrom2 = "";
$Headers .= "MIME-Version: 1.0\r\n" ;
$Headers .= "Content-Type: text/html; charset=utf-8\r\n" ;
//$Headers .= "From: ".$MailTo." <".$MailTo.">\r\n" ;
$Headers .= "From: IMPAACT2014 Lab Alert <impaact@hchiv.rihes.cmu.ac.th>\r\n" ;
$Headers .= "Reply-to: ".$MailFrom." <".$MailFrom.">\r\n" ;
$Headers .= "X-Priority: 3\r\n" ;
$Headers .= "X-Mailer: PHP mailer\r\n" ;
$MailMessage = $text;
$MailMessage; 
if(mail($MailTo, $MailSubject , $MailMessage, $Headers, $MailFrom2))
 {
  $update_sentmail = "update `".$lab."` set sentmail = '1' where id_record = '".$red."'";
   update_data($update_sentmail);
  echo PHPalert("Send Mail completed");
  echo PHPgourl("$urlcomback");
 }else{
  echo PHPalert("Send Mail False"); //???????????????????
 }
}

//----------------------- fix rename lab on No Criteria
function show_labname($text){
    $text_ucfirst = ucfirst($text);
    switch($text_ucfirst){
        //------------------
           case 'Cd4' :   $mark = ''; $textmasterLab = 'Absolute T helper cells (CD4)'; break;
           case 'Percent cd4' :   $mark = ''; $textmasterLab = '% T helper cell (CD4)'; break; //Percent cd4
           case 'Cd8' :   $mark = ''; $textmasterLab = 'Absolute T suppressor cells (CD8)'; break;
           case 'Percent cd8' :   $mark = ''; $textmasterLab = '% T suppressor cell (CD8)'; break; //Percent cd4
        //------------------
        /*
        case 'Hematocrit' :  
        case 'RBC' :  
        case 'MCV' : 
        case 'Eosinophils' :
        */
        case 'Absolute Eosinophil' :
            
        /* case 'Lymphocytes' : */
        case 'Absolute Lymphocytes' : 
            
        /* case 'Monocytes' : */
        case 'Absolute Monocyte' :
                
        /*case 'Neutrophils' :*/
        case 'Absolute Neutrophils' :
                
        /*case 'Basophils' :*/
        case 'Absolute Basophils' : $mark = ' Count'; $textmasterLab = $text_ucfirst; /* $mark = <sup>*</sup> */ break;    
        default : $mark = ''; $textmasterLab = $text_ucfirst; break;
    }
    $mixtext = $textmasterLab.$mark;
    return $mixtext;
}
//---------------
function show_premature($v){
    switch($v){
        case 'p': $txt = "Preterm"; break;
        case 't': $txt = "Term"; break;
            default : $txt = ""; break;
    }
    return $txt;
}

function NameLab($lab){
	switch($lab){
		case 'Chloride' : 
        case 'Iron' : 
        
        /*case 'HDL':    
        case 'Phosphorus':  
            $onair = $lab."*"; break;
        case 'Folate Serum' : $onair = "Folate (Serum)*"; break;
        case 'Folate RBC' :  $onair = "Folate (RBC)*"; break;*/
		default : $onair = $lab ;break;
	}

	return ucfirst($onair);
}

function remark_alert($val,$grade,$lln,$uln){ /*Flag*/ 
    if($val!=''){
    $val = number_format($val,4);
    $lln = number_format($lln,4);
    $uln = number_format($uln,4);
//    if($lln==0 && $uln==0){
//        $txt = '';
//    }else if($val=='' && (($lln!=0 || $lln==0) && ($uln!=0 || $uln==0) ) ){ 
//        $txt = '';
//    }else{ 
//        if($val<$lln){ $txt = 'Lo'; 
//        }else if(($val >= $lln) && ($val <= $uln)){ $txt = ''; 
//        }else if($val>$uln){ $txt = 'Hi';
//        }else{ $txt = ''; 
//        }
//    }
    switch($grade){
        case 'NG'   : 
            if($lln==0 && $uln==0){
                $txt = '';
            }else if($val=='' && (($lln!=0 || $lln==0) && ($uln!=0 || $uln==0) ) ){ 
                $txt = '';
            }else{ 
                if($val<$lln){ $txt = 'Lo'; 
                }else if(($val >= $lln) && ($val <= $uln)){ $txt = ''; 
                }else if($val>$uln){ $txt = 'Hi';
                }else{ $txt = ''; 
                }
            }
            /* Not Garde   Not Alert NG, Lo Hi*/ break;
//        case $grade>=1 or $grade<=4 : $txt = ''; /*Have Grade 1 - 4 Not Alert Lo Hi*/ break;
        case 'OOR Hi': $txt = 'Hi';  break;
        case 'OOR Lo': $txt = 'Lo';  break;
//        case $grade < 1 : 
//            if($lln==0 && $uln==0){
//                $txt = '';
//            }else if($val=='' && (($lln!=0 || $lln==0) && ($uln!=0 || $uln==0) ) ){ 
//                $txt = '';
//            }else{ 
//                if($val<$lln){ $txt = 'Lo'; 
//                }else if(($val >= $lln) && ($val <= $uln)){ $txt = ''; 
//                }else if($val>$uln){ $txt = 'Hi';
//                }else{ $txt = ''; 
//                }
//            } break;
        default : 
            if($lln==0 && $uln==0){
                $txt = '';
            }else if($val=='' && (($lln!=0 || $lln==0) && ($uln!=0 || $uln==0) ) ){ 
                $txt = '';
            }else{ 
                if($val<$lln){ $txt = 'Lo'; 
                }else if(($val >= $lln) && ($val <= $uln)){ $txt = ''; 
                }else if($val>$uln){ $txt = 'Hi';
                }else{ $txt = ''; 
                }
            }
            //$txt = $grade;
            break;
    } 
        
    }else{
        $txt = '';
    }
    return $txt;
}

function transitions_type($age){
    if($age<18){
      $txt = "Pediatric";
    }else{
      $txt = "Adult";  
    }
    return $txt;
}

function seletion_obj($itme,$v){
    $obj .= "<select class='form-control'  id='".$itme."' name='".$itme."'>";
    $obj .= "          <option value=''>&nbsp;</option>";
    if($v=='A'){ 
        $obj .= "           <option value='A' selected>Absent</option>";
    }else{
        $obj .= "           <option value='A'>Absent</option>";
    }
    if($v=='P'){
        $obj .= "          <option value='P' selected>Present</option>";
    }
    else{
        $obj .= "          <option value='P'>Present</option>";
    }
    
    $obj .= "</select>";
    return $obj;
}
function seletion_txt($itme,$v){
     
    if($v=='A'){ 
        $obj = "Absent";
    } 
    if($v=='P'){
        $obj = "Present";
    } 
    if($v==''){ 
        $obj = "";
    }
    return $obj;
}


function radio_check($itme,$v){
    if($itme==$v){
        $txt = "checked";
    }else{
        $txt ='';
    }
    return $txt;
}

function radio_check_txt($itme,$v){
    if($itme==$v){
        $txt = "<i class='fa fa-check-circle-o fa-lg'></i>";
    }else{
        $txt ="<i class='fa fa-circle-o fa-lg'></i>"; //'fa fa-circle-o fa-lg';
    }
    return $txt;
}


function replacement_grade($var){
    switch($var){
        case 'NG' : $txt = "<span style='font-size:10px;'>Not gradable</span>"; break;
        case 'Hi' :
        case 'Lo' :
        case 'OOR Hi': 
        case 'OOR Lo': $txt = '0'; break;
        default : $txt = $var; break;
    }
    return $txt;
}

/* ************************************************** */
/* ************************************************** */
/* ************************************************** */
/* ************************************************** */
/* ************************************************** */

function nowAgeReatime($dob,$doc,$toc){
    $dob = $dob." 00:01:00";
   //------------- date of brith on db  end 
   //------------- date time coll current 
    $datetime_coll = fixdate_formmat_patter($doc)." $toc";
   //------------- date time coll current end 
                                    
    $date_start = date('Y-m-d H:i:s', strtotime($dob));  
                                    
    $date_end =  date('Y-m-d H:i:s', strtotime($datetime_coll)); //$datetime_coll
                                    
    $dayofyear = 365; 
    $remain=intval(strtotime($date_end)-strtotime($date_start));
    $year=floor($remain/(86400*$dayofyear));
    $month=floor($remain%(86400*$dayofyear)/30/86400);
    //---------------
    $dayfoall = $remain/(86400*$dayofyear); //floor($remain/86400);
    //-----------------
    $wan=floor($remain/86400%30);
    $l_wan=$remain%86400;
    $hour=floor($l_wan/3600);
    $l_hour=$l_wan%3600;
    $minute=floor($l_hour/60);
    $second=$l_hour%60;
    return $year;
}

/* ************************************************** */
/* ************************************************** */
/* ************************************************** */
/* ************************************************** */
/* ************************************************** */


function getstep($unit){
    if($unit=='x10<sup>9</sup>/L'){
       $step = "step='0.001'";
    }else{
       $step = "step='0.01'"; 
    }
    
    
    //$step = '';
    return $step;
}
?>
