<?php

$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
/*
$sql = 'CREATE DATABASE acmp1';
if (mysql_query($sql, $conn)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
*/
mysql_select_db("acmp1");
mysql_query("CREATE TABLE admin(idAdm int AUTO_INCREMENT PRIMARY KEY,id int,nama varchar(45),email varchar(45),
alamat varchar(45),Provinsi varchar(20),Daerah varchar(45),NoTelepon varchar(15),NoKTP varchar(15),NamaPerusahaan varchar(45),AlamatPerusahaan varchar(45),JenisPerusahaan varchar(25),TahunBerdiri varchar(4),Bulan varchar(15),Tanggal varchar(2),Status varchar(45),FOREIGN KEY (id) REFERENCES users(id))");
mysql_close($conn);

?>
