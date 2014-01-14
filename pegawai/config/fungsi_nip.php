<?php 
	function ambilNip($var){
		$ff=0;
if(session_start())
{
$gt=mysql_query("SELECT NomorId FROM user WHERE userid= '$_SESSION[namauser]' and level_user=1");
$row = mysql_fetch_array($gt);
$ff = $row[0]; 
}
	echo "<select name=$var>";
		$ambil=mysql_query("select * from user,pegawai where pegawai.nip=user.userid and pegawai.NomorId='$ff' and user.level_user=3");
		while($dt=mysql_fetch_array($ambil)){
		echo "<option value='$dt[nip]'>$dt[nip]</option>";			
		}
	echo "</select>";
	}
?>
