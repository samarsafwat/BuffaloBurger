<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM orders WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$FullName=$test['FullName'] ;
				$Email=$test['Email'] ;
				$Address=$test['Address'] ;
				$HomeNumber=$test['HomeNumber'] ;
				$MobileNumber=$test['MobileNumber'] ;
				$SandwichName= $test['SandwichName'] ;					

if(isset($_POST['save']))
{	
	$FullName_save = $_POST['FullName'];
	$Email_save = $_POST['Email'];
	$Address_save = $_POST['Address'];
	$HomeNumber_save = $_POST['HomeNumber'];
	$MobileNumber_save = $_POST['MobileNumber'];
	$SandwichName_save = $_POST['SandwichName'];

	
	mysqli_query($conn,"UPDATE orders SET FullName ='$FullName_save',Email='$Email_save',
		 Address ='$Address_save',HomeNumber ='$HomeNumber_save' ,MobileNumber='$MobileNumber_save',SandwichName='$SandwichName_save' WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: historycontrol.php");			
}

		include 'db.php';
		$query="SELECT  SandwichName FROM menu";
		
		$result2 = mysqli_query($conn, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

	
mysqli_close($conn);
?>

<html>
<head>

</head>

<body>
<form method="post">
<table>
	<tr>
		<td>FullName</td>
		<td><input type="text" name="FullName" value="<?php echo $FullName ?>"/></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="Email" value="<?php echo $Email ?>"/></td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="Address" value="<?php echo $Address ?>"/></td>
	</tr>
	<tr>
		<td>Home Number</td>
		<td><input type="text" name="HomeNumber" value="<?php echo $HomeNumber ?>"/></td>
	</tr>
	<tr>
		<td>Mobile Number</td>
		<td><input type="text" name="MobileNumber" value="<?php echo $MobileNumber ?>"/></td>
	</tr>

	<tr>
		<td>Sandwich</td>
		<td><select name="SandwichName"  value="<?php echo $SandwichName ?>"/>
		    <?php echo $options;?>
        </select></td>
	</tr>

	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
 