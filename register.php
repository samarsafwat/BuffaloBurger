<?php include "header.php";?>

<html>
<head>
<title>Register - Admin panel
</title>
</head>
<body>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<script type="text/javascript">
   
	function Validate()
	{

		  var y=document.forms["registerForm"]["Email"].value;
		  alert (y.indexOf("@"));
		  if (y.indexof("@")==-1)
		  {
		  	alert("Email not Valid");
		  	return false;
		  	
		  }
		  
		return true;
	}
</script>
<h3>Register here</h3>
<form method="post" onsubmit="return Validate()" name="registerForm">
<?php
if(isset($_POST['submit']))
{
	$Email = $_POST['Email'];
	$password = md5($_POST['password']);
	if(empty($Email) or empty ($password)){
		echo "<p> fields empty</p>";
	}
	else {
		mysqli_query($con, "INSERT INTO users VALUES ('','$Email','$password','3','a') ");
		echo "<p> Successfuly Registered</p>";
		
		
	}
	
}
?>
<table>
<tr><td>Email</td><td><input type="text" name="Email" /></td></tr>
<tr><td>Password</td><td><input type="password" name="password" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Register" /></td></tr>
</form>
</body>
</html>