<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
         function validateForm() {
    var x = document.forms["reserveForm"]["Name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
	var y = document.forms["reserveForm"]["Email"].value;
    if (y == null || y == "") {
        alert("Email must be filled out");
        return false;
    }
}
      </script>
</head>
<body>
<form method="post" name="reserveForm" onsubmit="return validateForm()">
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="Name" /></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="Email" /></td>
	</tr>
	<tr>
		<td>PhoneNumber</td>
		<td><input type="number" name="PhoneNumber" /></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="Date" /></td>
	</tr>
	<tr>
		<td>Time</td>
		<td><input type="time" name="Time" /></td>
	</tr>
	<tr>
		<td>NumberOfGuests</td>
		<td><input type="number" name="NumberOfGuests" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Reserve" class="btn btn-success btn-lg"/></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$Name=$_POST['Name'] ;
					$Email=$_POST['Email'] ;
					$PhoneNumber= $_POST['PhoneNumber'] ;					
					$Date= $_POST['Date'] ;
					$Time= $_POST['Time'] ;
					$NumberOfGuests= $_POST['NumberOfGuests'] ;
					
		 mysqli_query($conn,"INSERT INTO `reserve`(Name,Email,PhoneNumber,Date,Time,NumberOfGuests) 
		 VALUES ('$Name','$Email','$PhoneNumber','$Date','$Time','$NumberOfGuests')"); 
				
				
	        }
?>
</form>
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
			
				
			$result=mysqli_query($conn,"SELECT * FROM reserve");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['Name']."</font></td>";
				echo"<td><font color='black'>". $test['Email']. "</font></td>";
				echo"<td><font color='black'>". $test['PhoneNumber']. "</font></td>";
				echo"<td><font color='black'>". $test['Date']. "</font></td>";
				echo"<td><font color='black'>". $test['Time']. "</font></td>";
				echo"<td><font color='black'>". $test['NumberOfGuests']. "</font></td>";				
				echo"<td> <a href ='viewreserve.php?id=$id'>Update</a>";
				echo"<td> <a href ='delreserve.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
</body>
</html>

        