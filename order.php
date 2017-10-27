<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php
		include 'db.php';
		$query="SELECT  SandwichName FROM menu";
		
		$result2 = mysqli_query($conn, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

		?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
         function validateForm() {
    var x = document.forms["orderForm"]["Email"].value;
    if (x == null || x == "") {
        alert("Email must be filled out");
        return false;
    }
	var y = document.forms["orderForm"]["MobileNumber"].value;
    if (y == null || y == "") {
        alert("Mobile Number must be filled out");
        return false;
    }
}
      </script>
</head>
<body>
<form method="post" name="orderForm" onsubmit="return validateForm()" action="order1.php">
<table>
	<tr>
		<td>FullName</td>
		<td><input type="text" name="FullName" /></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="Email" /></td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td><input type="text" name="Address" /></td>
	</tr>
	<tr>
		<td>Home number</td>
		<td><input type="text" name="HomeNumber" /></td>
	</tr>
	<tr>
		<td>Mobile number:</td>
		<td><input type="text" name="MobileNumber" /></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" class="btn btn-success btn-lg"/></td>

	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$FullName=$_POST['FullName'] ;
					$Email=$_POST['Email'] ;		
					$Address=$_POST['Address'] ;
					$HomeNumber=$_POST['HomeNumber'] ;
			 		$MobileNumber=$_POST['MobileNumber'] ;
					$SandwichName= $_POST['SandwichName'] ;					

					
		 mysqli_query($conn,"INSERT INTO `orders`(FullName,Email,Address,HomeNumber,MobileNumber,SandwichName) 
		 VALUES ('$FullName','$Email','$Address','$HomeNumber','$MobileNumber','$SandwichName')"); 
				
				
	        }
?>
</form>

</body>
</html>
