<html>
  <head>  
  <script type="text/javascript">
 //<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array(40) 
 countryLists["empty"] = ["Daerah"]; 
 countryLists["JawaBarat"] = ["Bandung", "BandungBarat", "Bekasi","Bogor","Ciamis","Cianjur","Cirebon","Garut","Indramayu","Karawang","Kuningan","Majalengka","Pangandaran","Purwakarta","Subang","Sukabumi","Sumedang","Tasikmalaya","Banjar","Cimahi","Depok"]; 
 countryLists["DKIJakarta"] = ["KepulauanSeribu","JakartaSelatan","JakartaTimur","JakartaPusat","JakartaBarat","JakartaUtara"]; 
 countryLists["SumateraUtara"] = ["Medan","Asahan", "BatuBara", "Dairi","DeliSerdang","H.Hasundutan","Karo","LabuhanBatu","LBatuSelatan","LBatuUtara","Langkat","Mandailing","Nias","NiasBarat","NiasSelatan","NiasUtara","PadangLawas","PLawasUtara","PakPakBarat","Samosir","S.Bedagai","Simalungun","TapanuliSelatan","TapanuliTengah","TapanuliUtara","TobaSamosir","Binjai","GunungSitoli","P.Sidempuan","P.Siantar","Sibolga","TanjungBalai","TebingTinggi"]; 
 countryLists["JawaTimur"]= ["Surabaya","Bangkalan","Banyuwangi","Kanigoro","Bojonegoro","Bondowoso","Gresok","Jember","Jombang","Kediri","Lamongan","Lumajang","Madiun","Magetan","Malang","Mojokerto","Nganjuk","Ngawi","Pacitan","Pamekasan","Pasuruan","Pronorogo","Probolinggo","Sampang","Sidoarjo","Situbondo","Sumenep","Trenggalek","Tuban","Tulungagung","Batu","Kediri","Madiun","Blitar","Malan","Mojokerto","Pasuruan"]; 
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("country"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
</script>
<style>
table {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:50px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:0px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
input:focus
{ 
background-color:#EEEEEE;
}
input[type='text']
{
font-family: Lucida Sans Unicode;
padding:10px;
}
select {
  padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
</style>
  <title>Registration </title>

  </head>

  <body>
  <body>
<form name="reg_form" id="reg_form" method="post" action="adm_cek.php">
  <table>
<th><td colspan="2"><h1>REGISTRATION</h1></td></th>
  <tr><td colspan="2"><?php echo isset($_GET["msg"])?$_GET["msg"]:"";?>
  </td></tr>

<tr><td colspan="2"><h3>Data Pemilik</h3></td></tr>
<tr><td>ID Admin</td><td><input type="text" name="idadm" id="idadm" /></td></tr>
<tr><td>Password Admin</td><td><input type="password" name="padm" id="padm" /></td></tr>
<tr><td>Nama Pengurus</td><td><input type="text" name="nama" id="nama" /></td></tr>
<tr><td>Alamat Rumah</td><td><input type="text" name="almt" id="almt" /></td></tr>
<tr><td>Nomor Telp/Hp</td><td><input type="text" name="notlp" id="notlp" /></td></tr>
<tr><td>Nomor KTP</td><td><input type="text" name="noktp" id="noktp" /></td></tr>
<tr><td colspan="2"><h3>Data Perusahaan</h3></td></tr>
<tr><td>Nama Perusahaan</td><td><input type="text" name="namap" id="namap" /></td></tr>
<tr><td>Alamat Perusahaan</td><td><input type="text" name="almtp" id="almtp" /></td></tr>
<tr><td></td><td>Provinsi 
  <label for="country"><select name="continent" id="continent" onchange="countryChange(this);">
    <option value="empty">Pilih Provinsi</option>
    <option value="JawaBarat">JawaBarat</option>
    <option value="DKIJakarta">DKIJakarta</option>
    <option value="SumateraUtara">SumateraUtara &nbsp;</option>
    <option value="JawaTimur">JawaTimur</option>
  </select></label>
  Daerah
  <select id="country" name="country">
    <option value="0">Pilih Daerah</option>
  </select></td></tr>
<tr><td>Email Perusahaan</td><td><input type="text" name="mail" id="mail" /></td></tr>
<tr><td>Jenis Perusahaan</td><td><input type="text" name="jns" id="jns" /></td></tr>
<tr><td>Status Perusahaan</td><td><label><select  id="sts" name="sts">
<option value="empty">-pilihan-</option>
<option value="Kantor Tunggal">Kantor Tunggal</option>
<option value="Kantor Pusat">Kantor Pusat</option>
<option value="Kantor Pembantu">Kantor Pembantu</option>
<option value="Perwakilan">Perwakilan</option>
<option value="Bukan Kantor">Bukan Kantor</option>
</select></label></td></tr>
<tr><td colspan='2'></td></tr>
<tr><td>Tahun Berdiri</td>
<td>Tahun <label><select name="year" id="year">
<option value="na">Tahun</option>
</select></label>
Bulan&nbsp;<label><select name="month" id="month" onChange="changeDate(this.options[selectedIndex].value);">
<option value="na">Bulan</option>
<option value="1">January</option>
<option value="2">Febuary</option>
<option value="3">Maret</option>
<option value="4">April</option>
<option value="5">Mei</option>
<option value="6">Juni</option>
<option value="7">Juli</option>
<option value="8">Augstus</option>
<option value="9">September</option>
<option value="10">Oktober</option>
<option value="11">November</option>
<option value="12">Desember</option>
</select></label>
Tanggal&nbsp<label><select name="day" id="day">
<option value="na">Tgl</option>
</select></label>
<script language="JavaScript" type="text/javascript">
function changeDate(i){
var e = document.getElementById('day');
while(e.length>0)
e.remove(e.length-1);
var z = document.getElementById('year');
var j=-1;
if(i=="na")
k=0;
else if(i==2){
if(z.value % 400 == 0 || (z.value % 100 != 0 && z.value % 4 == 0))
{k=29;}
else
{k=28;}}
else if(i==4||i==6||i==9||i==11)
k=30;
else
k=31;
while(j++<k){
var s=document.createElement('option');
var e=document.getElementById('day');
if(j==0){
s.text="Tgl";
s.value="na";
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
else{
s.text=j;
s.value=j;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}}}
y = 2015;
while (y-->1909){
var s = document.createElement('option');
var e = document.getElementById('year');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
</script></td></tr>
<?php 
for($i=1;$i<=12;$i++)
{ 
echo "<tr><td colspan='2'></td></tr>";
}
?>
<tr><td></td><td><input class="button" type="submit" name="btnsubmit" id="btnsubmit" /></td></tr>
  </table>
  </form>

  </body>

  </html>
