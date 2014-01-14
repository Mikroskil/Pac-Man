<?php
  $id=isset($_POST["idadm"])?$_POST["idadm"]:"";
  $ps=isset($_POST["padm"])?$_POST["padm"]:"";
  $nama=isset($_POST["nama"])?$_POST["nama"]:"";
  $almt=isset($_POST["almt"])?$_POST["almt"]:"";
  $notel=isset($_POST["notlp"])?$_POST["notlp"]:"";
  $ktp=isset($_POST["noktp"])?$_POST["noktp"]:"";
  $namp=isset($_POST["namap"])?$_POST["namap"]:"";
  $alp=isset($_POST["almtp"])?$_POST["almtp"]:"";
  $jns=isset($_POST["jns"])?$_POST["jns"]:"";
  $thn=isset($_POST["year"])?$_POST["year"]:"";
  $bln=isset($_POST["month"])?$_POST["month"]:"";
  $tgl=isset($_POST["day"])?$_POST["day"]:"";
  $sts=isset($_POST["sts"])?$_POST["sts"]:"";
 $email=isset($_POST["mail"])?$_POST["mail"]:"";
 $prov=isset($_POST["continent"])?$_POST["continent"]:"";
 $drh=isset($_POST["country"])?$_POST["country"]:"";
 $pg=isset($_POST["pg"])?$_POST["pg"]:"";
if(!empty($id)&&!empty($ps)&&!empty($nama)&&!empty($almt)&&!empty($notel)&&!empty($ktp)&&!empty($namp)&&!empty($alp)&&!empty($jns)&&!empty($sts)){
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

$link=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("acmp1",$link);

$query="SELECT * FROM user WHERE userid='".mysql_escape_string($id)."'";
$result=mysql_query($query);
//count no of rows
$count=mysql_num_rows($result);
//count no of rows
if($count==1){
header("location:adm.php?msg=ID sudah terpakai");
}
else if (!preg_match($regex, $email)) {
header("location:adm.php?msg=Format Email Salah..");
}
else if(!preg_match('/^[0-9]+$/', $notel)) {
header("location:adm.php?msg=Nomor Telepon/Hp harus angka");
}
else if(!preg_match('/^[0-9]+$/', $ktp)) {
header("location:adm.php?msg=Nomor KTP harus angka");
}
else
{
$max = mysql_result(mysql_query("SELECT MAX(NomorId) FROM User"), 0);
$max=$max+1;
$qry="INSERT INTO user(userid,passid,level_user,NomorId,Theme,nama,email,alamat,Provinsi,Daerah,NoTelepon,NoKTP,NamaPerusahaan,AlamatPerusahaan,JenisPerusahaan ,TahunBerdiri,Bulan,Tanggal,Status)VALUES('".mysql_escape_string($id)."'
,'".mysql_escape_string($ps)."','1','$max','".mysql_escape_string($pg)."','".mysql_escape_string($nama)."','".mysql_escape_string($email)."','".mysql_escape_string($almt)."','".mysql_escape_string($prov)."','".mysql_escape_string($drh)."','".mysql_escape_string($notel)."','".mysql_escape_string($ktp)."','".mysql_escape_string($namp)."','".mysql_escape_string($alp)."','".mysql_escape_string($jns)."','".mysql_escape_string($thn)."','".mysql_escape_string($bln)."','".mysql_escape_string($tgl)."','".mysql_escape_string($sts)."')";
if(mysql_query($qry))
echo "You are successfully registered.";
else
echo "fail";

$qr="INSERT INTO s155_items(id,title)VALUES('$max','".mysql_escape_string($namp)."')";
if(mysql_query($qr))
echo "You are successfully registered.";
else
echo "fail";
}
mysql_close($link);
}
  else
  {
  header("location:adm.php?msg=Ada form yang belum terisi, silahkan cek kembali...");
  }
 ?>
