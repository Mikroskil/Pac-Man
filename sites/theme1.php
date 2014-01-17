<html>
  <head>  
<style>
table {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position: relative;
width:900px;
height:50px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 11px;
font-style: normal;
line-height: 15px;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input    {
width:400px;
display:block;
border: 0px solid #999;
height: 30px;
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
background-color:#ff9933;
}
input[type='text']
{
font-family: Verdana, Arial, Helvetica, sans-serif;
padding:inherit;
}

input[type='password']
{
padding:inherit;
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
a:link {
	color: #FF9933;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #CCCCCC;
}
a:active {
	text-decoration: none;
}
</style>
  <title>theme page for company's web</title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body bgcolor="#000000">
<?php
function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}
	// Connect to database server
	mysql_connect("Localhost", "root", "") or die (mysql_error ());
	// Select database
	mysql_select_db("acmp1") or die(mysql_error());
	// SQL query
	$gu=getUrl();
	$cgu=substr($gu,47);
	$gt=mysql_query("SELECT Daerah FROM user WHERE NamaPerusahaan='$cgu' and level_user=1");
$row = mysql_fetch_array($gt);
$ff = $row[0]; 
echo "

<table width='100%' border='1' align='center' cellspacing='0'>
	<tr>
    <td height='50' colspan='4' align='center' valign='middle'>PT.____________________________________________________</td>
    <td align='center'>Image</td>
  	</tr>

  <tr colspan='5' bgcolor='#000000' height='30'><span class='a'>
    <td width='20%' align='center' valign='middle' scope='col'><a href='../index.php'><b>Home</b></a></td>
    <td width='20%' align='center' valign='middle' scope='col'><b>Info</b></td>
    <td width='20%' align='center' valign='middle' scope='col'><b>Product</b></td>
	<td width='20%' align='center' valign='middle' scope='col'><b>News</b></td>
    <td width='20%' align='center' valign='middle' scope='col'><a href='../AP/pegawai/index.php'><b>Login SIP</b></a></td>
  </span></tr>
  
  <tr align='center' valign='middle'>
  	<td><p>&nbsp;</p></td>
    <td colspan='4'><p>&nbsp;</p>
        <p>Your company's description </p>
      <p>or</p>
      <p>History about your company's here <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
      <p>&nbsp;</p></td>
  </tr>
  <tr align='center' valign='middle'>
    <td colspan='5'><p>www.your company's name.com<br></p>
        <p>company's address here<br></p>
      <p>City, postalzip here - Indonesia<br></p></td>
  </tr>
</table>
";
?>
</body>
</html>
