<?php
include 'header.php';
?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<html>

<table border="1">
<tr>
	<td>ID</td>
	<td>Email</td>
	<td>Password</td>
<td>user_level</td>
<td>type</td>
	<td>Update</td>
	<td>Delete</td></tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM users");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['Email']."</font></td>";
				echo"<td><font color='black'>". $test['Password']. "</font></td>";
echo"<td><font color='black'>". $test['user_level']. "</font></td>";
echo"<td><font color='black'>". $test['type']. "</font></td>";
				echo"<td> <a href ='viewregister.php?id=$id'>Update</a>";
				echo"<td> <a href ='delregister.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
</body>
</html>

        