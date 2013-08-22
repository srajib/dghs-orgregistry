<html>
<head>
<title>Sanctioned Post</title>
<script>
function showOrg(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","query3.php?q="+str,true);
xmlhttp.send();
}
</script>


<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","query.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<?php
include('lib/connect.php');
?>
<table width="200" border="0" align="left">
    <tr>
      <td><a href="index.php">Home</a></td>
    </tr>
    <tr>
      <td><a href="search.php">Search</a></td>
    </tr>
  </table>
  <form name="form1" id="form1">
<table border="1" align="center" bordercolor="#999999">
<td colspan="1" bgcolor="#CCCCCC" style="border-color:#999"><!--Select Organization Type:--></td>
<td colspan="8" bgcolor="#CCCCCC" style="border-color:#999">
      <!--<select name="type" onChange="showOrg(this.value)">
        <option value=""><< Select >></option>-->
        <?php
	/*$sel = mysql_query("SELECT * FROM org_type ORDER BY org_type asc");
	while($rowtype = mysql_fetch_assoc($sel))
	{*/
	?>
        <option value="<?php /*echo $rowtype['id'];*/ ?>"><?php /*echo $rowtype['org_type'];*/ ?></option>
    <?php
	/*}*/
	?>
      <!--</select>-->
      </td>
<tr>
<td colspan="1" bgcolor="#CCCCCC" style="border-color:#999"><b>Select Organization</b></td>
<td colspan="8" bgcolor="#CCCCCC" style="border-color:#999">
<div id="txtHint1">
<select name="org" onChange="showUser(this.value)">
<?php
$org = mysql_query("SELECT * FROM organizations order by org_name asc");
while($orgrow = mysql_fetch_assoc($org))
{
?>
<option value="<?php echo $orgrow['org_id']; ?>"><?php echo $orgrow['org_name']; ?></option>
<?php
}
?>
</select>
</div>
</td>
</tr>
</table>
</form>
<div id="txtHint">
<table border="1" align="center" bordercolor="#999999">
<tr>
<td bgcolor="#00CCCC" style="border-color:#999; width:150px"><b>Sanctioned Post ID</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:150px"><b>Designation</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:150px"><b>Type of Post</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:80px"><b>Payscale</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:100px"><b>Class</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:100px"><b>Group Code</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:150px"><b>1st Level</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:150px"><b>2nd Level</b></td>
<td bgcolor="#00CCCC" style="border-color:#999; width:110px"><b>Sanctioned Post</b></td>
</tr>
<tr>
<td style="border-color:#999;" align="center">Select an Organization</td>
</tr>
</table>
</div>
</body>
</html>