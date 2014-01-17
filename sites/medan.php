<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>allcompany_portal</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
<style type="text/css">
<!--
.a{
	text-decoration:blink;
	color: #0000FF;
}

body {
	background-color: #000000;
}
body,td,th {
	color: #FFFFFF;
}
.home1 {
	text-align:center;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:9px;
	text-transform:none;
	color:#999999;
}

.home2 {
	text-align:right;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:9px;
	text-transform:none;
	color: #FFFFFF;
}

.style5 {
	text-align:center;
	text-shadow:#FFFFFF;
	text-decoration:blink;
	font-size:48pt;
	font:"Times New Roman", Times, serif;
	text-transform:uppercase;
	color: #0000FF;
}

.style6 {
	text-align:center;
	text-shadow:#FFFFFF;
	text-decoration:blink;
	font-size:16pt;
	font:"Times New Roman", Times, serif;
	text-transform:uppercase;
	color: #0000FF;
}


.style7 {color: #FFFF00}
.style8 {color: #FF9933}
a:link {
	color: #FF9933;
	text-decoration: none;
}
a:hover {
	color: #FFFFFF;
	text-decoration: none;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.menulogin {
}

-->
</style>
<link href=" " rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('file:///D|/JUN'S FOLDER/SEMESTER V/PKTI/LF/TSearch Rollover.jpg','../image/TSearch Rollover.jpg')">
<table width="1320" border="0" align="center">
  <tr>
    <td width="281">
	<table width="100%" height="100%" border="0" cellspacing="0">
        <tr>
          <td height="30" colspan="3" align="center" valign="bottom">
				<table width="100%" border="0" align="left">
    	        <tr>
                <td width="2%" height="24" align="left">PT.</td>
		   		<form action="medansrc.php" method="get" >
		  		<td width="23%" align="left"><label><input name="query" id="text" type="text" size="50" maxlength="50" /></label></td></form>
				<td width="21%" align="center" valign="middle"><a href="../index.php" class="home1 style8">Home</a></td>
				<td width="21%" align="center" valign="middle"><a href="bandung.php" class="home1 style8">Jawa Barat</a></td>
				<td width="21%" align="center" valign="middle"><a href="surabaya.php" class="home1 style8">Jawa Timur</a></td>
				<td width="21%" align="center" valign="middle"><a href="jakarta.php" class="home1 style8">DKI Jakarta</a></td>
        		</tr>
        <tr>
          <td height="100" colspan="7" align="center" valign="bottom"><div align="justify"><img src="../image/medan5.jpg" width="1320" height="150" /></div></td>
        </tr>
        <tr>
          <td height="350" colspan="7" align="center" valign="top"><div class="listper">
            
			<table width="100%" height="81%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <th height="35" colspan="4" align="left" valign="middle">Nama - nama perusahaan terdaftar : </th>
              </tr>
               
		<?php
	// Connect to database server
	mysql_connect("Localhost", "root", "") or die (mysql_error ());
	// Select database
	mysql_select_db("acmp1") or die(mysql_error());
	// SQL query
	$name = "SumateraUtara";
	$strSQL = "SELECT * FROM user WHERE Provinsi = '$name'";
	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	$i=1;
	
	while($row = mysql_fetch_array($rs)) {
	   // Write the value of the column FirstName (which is now in the array $row)
	   $cc=0;
	   $gc=$row['Theme'];
	   $cgc=substr($gc,17,1);
	if($cgc==1)
	$cc=1;
	else if($cgc==2)
	$cc=2;
$gt=mysql_query("SELECT Theme FROM user WHERE  NomorId=2 and level_user=1");
$rw = mysql_fetch_array($gt);
$ff = $rw[0]; 
$ptg=substr($ff,12,5);
	 echo "<tr>";
      echo "<td width='27%' colspan='8'>";
      echo "<table width='100%' border='0' cellspacing='0'>";
      echo "<tr>";
      echo "<th width='3%' align='left' valign='middle' scope='col'>".$i."."."</th>";
      echo "<th width='95%' align='left' valign='middle' scope='col' onmouseover=''>";
	  $a=$row['NamaPerusahaan'];
	  echo '<a style=color:sienna; href=';echo "$ptg$cgc";echo'.php?link=' . $a . '>';echo "$a"; echo'</a>';
	  echo "</th>"; 
      echo "</tr>";
      echo "</table>";
      echo "</td>"; 
	  ++$i;
	  echo "</tr>";
	  }
	  
	  
	// Close the database connection
	mysql_close();
	?>
            </table>
          </div> </td>
        </tr>
      </table>    </td>
  </tr>
  
  <tr>
   <table width="100%">
	<tr>
	<td>
    	<p align="left"><span class="a">Welcome to..</span></p>
      	<p align="center"><span class="style5">www.allcom-portal.com</span></p>
    </td>
	</tr>
  
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="home1">
  <tr>
    <td scope="col">Jln. Thamrin no. xxx - Medan 20000 </td>
    </tr>
  <tr>
    <td>JVM&reg; 2013 Located in Medan - Sumatera Utara, Indonesia </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Copyright&copy; 2013 </td>
    </tr>
  <tr>
    <td>PAC - MAN TEAM MAKER </td>
    </tr>
	</table></td></tr></table></div>
	
</table>
  </tr>
</table>



</body>
</html>
