<?
$result_version = get_a_line("select version_date from $protocal.version order by version_id desc limit 1 ");
$version = date('d M Y',strtotime($result_version['version_date']));
//class="text-right"
?>
 
<span>CL report version 1.0 Date : <?=$version;?></span>
