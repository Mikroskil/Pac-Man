 <?php
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
 
 
if(!empty($nama)&&!empty($almt)&&!empty($notel)&&!empty($ktp)&&!empty($namp)&&!empty($alp)&&!empty($jns)&&!empty($sts)){
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

///open connection

$link=mysql_connect('localhost','root','') or die(mysql_error());

mysql_select_db("acmp1",$link);

$query1="SELECT * FROM admin WHERE email='".mysql_escape_string($email)."'";
$result1=mysql_query($query1);
//count no of rows
$count1=mysql_num_rows($result1);

if($count1==1){
header("location:registration.php?msg=email already used");
}

else if (!preg_match($regex, $email)) {
header("location:registration.php?msg=Format Email Salah..");
}

else if(!preg_match('/^[0-9]+$/', $notel)) {
header("location:registration.php?msg=Nomor Telepon/Hp harus angka");
}
else if(!preg_match('/^[0-9]+$/', $ktp)) {
header("location:registration.php?msg=Nomor KTP harus angka");
}

else

{
$qry="INSERT INTO admin(nama,email,alamat,Provinsi,Daerah,NoTelepon,NoKTP,NamaPerusahaan,AlamatPerusahaan,JenisPerusahaan ,TahunBerdiri,Bulan,Tanggal,Status)VALUES('".mysql_escape_string($nama)."','".mysql_escape_string($email)."','".mysql_escape_string($almt)."','".mysql_escape_string($prov)."','".mysql_escape_string($drh)."','".mysql_escape_string($notel)."','".mysql_escape_string($ktp)."','".mysql_escape_string($namp)."','".mysql_escape_string($alp)."','".mysql_escape_string($jns)."','".mysql_escape_string($thn)."','".mysql_escape_string($bln)."','".mysql_escape_string($tgl)."','".mysql_escape_string($sts)."')";
mysql_query($qry);

echo "You are successfully registered.";

}

mysql_close($link);
}

  else

  {

  header("location:registration.php?msg=Ada form yang belum terisi, silahkan cek kembali...");

  }
  ?>
