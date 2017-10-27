
<div>
<?php
if (loggedin())
    {
	
	 ?>
	<a href='profile.php'>  <font size="4" align="centre" color="OrangeRed" face="Verdana" >User Home</font> </a>&nbsp;
<?php
}else{	
	?><body bgcolor="Ivory">

	<div style="background-color:NavajoWhite ; margin:20px; padding:20px;"> 
	<a href='title_bar.php'>  </a> 
<a href='index.php'> <font size="4" align="centre" color="OrangeRed" face="Verdana" >Home</font> </a>&nbsp;	
<a href='login.php'> <font size="4" align="centre" color="OrangeRed" face="Verdana" >Sign in</font> </a>&nbsp;
<a href='register.php'> <font size="4" align="centre" color="OrangeRed" face="Verdana" >Sign up</font> </a>&nbsp;
<a href='menu.php'>  <font size="4" align="centre" color="OrangeRed" face="Verdana" >Menu</font> </a>&nbsp;
<a href='feedback.php'>  <font size="4" align="centre" color="OrangeRed" face="Verdana" >Feedback</font> </a>&nbsp;
<a href='contactus.php'>  <font size="4" align="centre" color="OrangeRed" face="Verdana" >Contact us</font> </a>&nbsp;
<a href='aboutus.php'>  <font size="4" align="centre" color="OrangeRed" face="Verdana" >About us</font> </a>&nbsp;
	<?php
}
?>
</div></body>
