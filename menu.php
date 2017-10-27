<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Menu</title>

</head>

<body>

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
<table border="1" width="100%">
		<tr align='center'>
	
	<td>SandwichName</td>
	<td>Price</td>

	
	</tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM menu");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				//echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='OrangeRed'>" .$test['SandwichName']."</font></td>";
				echo"<td><font color='OrangeRed'>". $test['Price']. " EGP</font></td>";
	
				//echo"<td> <a href ='viewmenu.php?id=$id'></a>";
				//echo"<td> <a href ='delmenu.php?id=$id'><center></center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
