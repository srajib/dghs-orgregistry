<?php
session_start(); //Start the current session
include('lib/connect.php');
/*$login = $_SESSION['loginid'];
$logout = time();
mysql_query("UPDATE admin_rec SET logout_time='$logout' WHERE login_time='$login'");
*/
session_destroy(); //Destroy it! So we are logged out now
?><head>
<meta http-equiv="refresh" content="2; url=<?php echo $url="http://".$_SERVER['HTTP_HOST']."/org_reg/"; ?>">

<title>Admin Login - CCC - Logout</title>
</head>
<html>


<style type="text/css">
<!--
.style1 {
	font-family: tahoma;
	font-weight: bold;
}
-->
</style>
<body>

<p>
  <style type="text/css">
<!--
.style1 {
	font-family: tahoma;
	font-size: 17px;
	font-weight: bold;
}
-->
</style>
</p>
<p>&nbsp;</p>
<table width="749" height="283" border="0" align="center">
  <tr>
    <td height="50" align="center" valign="middle"><span class="style1">You have been successfully logged out. You will be redirected shortly to Home page. </span></td>
  </tr>
  <tr>
    <td align="center" valign="middle"><img src="img/loading.gif" alt="loading" width="341" height="247" /></td>
  </tr>
</table>

</body>
</html>