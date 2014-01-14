<?php 
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
include "../../config/class_paging.php";
include "../../config/kode_auto.php";

$module=$_GET['module'];
$act=$_GET['act'];


if($module=='jabatan' AND $act=='input' ){
if(session_start())
{
$gt=mysql_query("SELECT NomorId FROM user WHERE userid= '$_SESSION[namauser]' and level_user=1");
$row = mysql_fetch_array($gt);
$ff = $row[0]; 
}
	mysql_query("insert into jabatan set id_jab='$_POST[id]', n_jab='$_POST[nama]',NomorId='$ff'");
	header('location:../../media.php?module='.$module);
}

elseif($module=='jabatan' AND $act=='edit' ){
	mysql_query("update jabatan set n_jab='$_POST[nama]' where id_jab='$_POST[id]'");
	header('location:../../media.php?module='.$module);
}

elseif($module=='jabatan' AND $act=='hapus' ){
	mysql_query("delete from jabatan where id_jab='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}


?>
