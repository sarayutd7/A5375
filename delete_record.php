<?
switch($_GET['task']){
case 'delete_hiv_rt': 
        delete("hiv","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=HIVRapid"; 
        break;
case 'delete_hiv_eia': 
        delete("hiv_eia","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=HIVEIA"; 
        break;
case 'delete_hiv_rna': 
        delete("hiv_rna","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=HIVRNA"; 
        break;
case 'delete_cd4': 
        delete("cd4","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=CD4"; 
        break;
case 'delete_urine': 
        delete("urine","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Urine"; 
        break;
case 'delete_syphilis': 
        delete("syphilis","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Syphil"; 
        break;
case 'delete_hepatitis': 
        delete("hepatitis","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Hepatit"; 
        break;
case 'delete_ctng': delete("",""); 
        delete("ctng","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=CTNG"; 
        break;
case 'delete_hemato': 
        db_connect();
        
        delete("hemato","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Hemato"; 
        break;
case 'delete_chemis': 
        delete("chem","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Chemis"; 
        break;
        default : $active = ''; 
        $url = "?pid=".$_GET['pid']."&task=findPID"; 
        break;
        
case 'delete_urinepregnancy': 
        db_connect();
        
        delete("urinepregnancy","where id_record = '".$_GET['recid']."' and ptid = '".$_GET['pid']."' "); 
        $url = "?pid=".$_GET['pid']."&task=findPID&tab=Urinepregnancy"; 
        break;
} 
echo PHPalert("ลบข้อมูลเรียบร้อย");
echo PHPgourl("$url");
?>