<?php
include 'header.php';
?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<html>
<body>

<h2>Send e-mail to admin:</h2>

<form action="MAILTO:admin@gmail.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name" ><br>
E-mail:<br>
<input type="text" name="mail" ><br>
Comment:<br>
<input type="text" name="comment"  size="50"><br><br>
<input type="submit" value="Send">
<input type="reset" value="Reset">
</form>

</body>
</html>