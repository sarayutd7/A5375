<?
//$result_version = get_a_line("select version_date from $protocal.version order by version_id desc limit 1 ");
$version = date('d M Y',strtotime('2019-09-25'));
//class="text-right"
?>
 
<span>CL report version 2.0 Date : <?=$version;?></span>
