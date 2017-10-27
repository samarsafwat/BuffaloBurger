<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
         function validateForm() {
    var x = document.forms["menuForm"]["SandwichName"].value;
    if (x == null || x == "") {
        alert("SandwichName must be filled out");
        return false;
    }
	var y = document.forms["menuForm"]["Price"].value;
    if (y == null || y == "") {
        alert("Price must be filled out");
        return false;
    }
}
      </script>
</head>
<body>
<form method="post" name="menuForm" onsubmit="return validateForm()">
<table>
	<tr>
		<td>SandwichName</td>
		<td><input type="text" name="SandwichName" /></td>
	</tr>
	<tr>
		<td>Price</td>
		<td><input type="number" name="Price" /></td>
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
	
			 		$SandwichName=$_POST['SandwichName'] ;
					$Price= $_POST['Price'] ;					
					
					
		 mysqli_query($conn,"INSERT INTO `menu`(SandwichName,Price) 
		 VALUES ('$SandwichName','$Price')"); 
				
				
	        }
?>
</form>
<table border="1">
<tr>
	<td>ID</td>
	<td>SandwichName</td>
	<td>Price</td>
	<td>Update</td>
	<td>Delete</td></tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM menu");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['SandwichName']."</font></td>";
				echo"<td><font color='black'>". $test['Price']. "</font></td>";
						
				echo"<td> <a href ='viewmenu.php?id=$id'>Update</a>";
				echo"<td> <a href ='delmenu.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
</body>
</html>

        