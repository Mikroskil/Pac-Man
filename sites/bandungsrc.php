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
		   		<form action="bandungsrc.php" method="get" >
		  		<td width="23%" align="left"><label><input name="query" id="text" type="text" size="50" maxlength="50" /></label></td></form>
				<td width="21%" align="center" valign="middle"><a href="../index.php" class="home1 style8">Home</a></td>
				<td width="21%" align="center" valign="middle"><a href="surabaya.php" class="home1 style8">Jawa Timur</a></td>
				<td width="21%" align="center" valign="middle"><a href="jakarta.php" class="home1 style8">DKI Jakarta</a></td>
				<td width="21%" align="center" valign="middle"><a href="medan.php" class="home1 style8">Sumatera Utara</a></td>
        		</tr>
        <tr>
          <td height="100" colspan="7" align="center" valign="bottom"><div align="justify"><img src="../image/bandung5.png" width="1320" height="150" /></div></td>
        </tr>
        <tr>
          <td height="350" colspan="7" align="center" valign="top"><div class="listper">
            
			<table width="100%" height="81%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <th height="35" colspan="4" align="left" valign="middle">Nama - nama perusahaan terdaftar : </th>
              </tr>
               
		  <?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("acmp1") or die(mysql_error());
    $query = $_GET['query']; 
    $min_length = 1;
	$i=1;
  if(strlen($query) >= $min_length)
  { 
        $query = htmlspecialchars($query); 
        $query = mysql_real_escape_string($query);  
		 $result = mysql_query("SELECT * FROM user WHERE (`NamaPerusahaan` LIKE '%".$query."%')") or die(mysql_error()); 
        if(mysql_num_rows($result) > 0)
  {
            while($results = mysql_fetch_array($result))
   { 
               echo "<tr>";
      echo "<td width='27%'>";
      echo "<table width='100%' border='0' cellspacing='0'>";
      echo "<tr>";
      echo "<th width='3%' align='left' valign='middle' scope='col'>".$i."."."</th>";
      echo "<th width='95%' align='left' valign='middle' scope='col' onmouseover=''><a href='theme1.php' style='color:sienna;'>";
	  echo $results['NamaPerusahaan'];
	  echo "</a></th>";
      echo "</tr>";
      echo "</table>";
      echo "</td>"; 
	  ++$i;
	  echo "</tr>";
            }
           
        }
        else{ 
            echo "<tr align='center' bgcolor='#000000'><td colspan='2' height='25px'><font color='#ff9933'>Maaf  PT. $query tidak ditemukan dalam database kami.</font></td><tr>"; 
   echo "</table>";  
        }   
    }
    else{ 
        echo "Your search keyword contains letters only ".$min_length;
    }
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
