<?php include "header.php";?>
<html>
<head>
<title>
</title>
</head>
<body>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>

<p><div> <font size="4" align="centre" color="OrangeRed" face="Verdana" >You are logged in as <b>
    <?php echo $Email ?>
</b>
   

<p><?php
if($user_level==1){ echo "Admin"; include 'admin.php';}
if($user_level==2){echo "Manager"; include 'manager.php';}
if($user_level==3){echo "Customer"; include 'customer.php';

}
 ?></font></p></div>
</body>
</html>