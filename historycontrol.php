<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php";?>

<html>
<head>

<font size="4" align="centre" color="OrangeRed" face="Verdana" >My Orders</font>
<table border="1">
	<tr>
	<td>ID</td>
	<td>FullName</td>
	<td>Email</td>
	<td>Address</td>
	<td>HomeNumber</td>
	<td>MobileNumber</td>
	<td>SandwichName</td>

	<td>Edit</td>
	<td>Delete</td>
	</tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM `orders` WHERE Email='$Email'");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['FullName']."</font></td>";
				echo"<td><font color='black'>" .$test['Email']."</font></td>";
				echo"<td><font color='black'>". $test['Address']. "</font></td>";
				echo"<td><font color='black'>". $test['HomeNumber']. "</font></td>";
                echo"<td><font color='black'>". $test['MobileNumber']. "</font></td>";
				echo"<td><font color='black'>". $test['SandwichName']. "</font></td>";

				echo"<td> <a href ='vieworderhistory.php?id=$id'>Edit</a>";
				echo"<td> <a href ='delorderhistory.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
<br>
<br>
<font size="4" align="centre" color="OrangeRed" face="Verdana" >My Reservations</font>
<table border="1">
	<tr>
	<td>ID</td>
	<td>Name</td>
	<td>Email</td>
	<td>PhoneNumber</td>
	<td>Date</td>
	<td>Time</td>
	<td>NumberOfGuests</td>
	<td>Update</td>
	<td>Delete</td>
	</tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM `reserve` WHERE Email='$Email'");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['Name']."</font></td>";
				echo"<td><font color='black'>" .$test['Email']."</font></td>";
				echo"<td><font color='black'>". $test['PhoneNumber']. "</font></td>";
				echo"<td><font color='black'>". $test['Date']. "</font></td>";
				echo"<td><font color='black'>". $test['Time']. "</font></td>";
				echo"<td><font color='black'>". $test['NumberOfGuests']. "</font></td>";				
				echo"<td> <a href ='viewreservehistory.php?id=$id'>Update</a>";
				echo"<td> <a href ='delreservehistory.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>

  </body>
</html>      