<?php include "header.php";?>
<html>
<head>
<title>Sign in
</title>
</head>
<body>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; 

?>
<h3>Login here</h3>
<form method="post" action = "login2.php">

<table>
<tr><td>Email</td><td><input type="text" name="Email" /></td></tr>
<tr><td>password</td><td><input type="password" name="password" /></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Login"  /></td></tr>
</form>
</body>
</html>