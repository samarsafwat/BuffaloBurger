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
<form method="post" name="reserveForm" onsubmit="return validateForm()" action="profile.php">
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

</body>
</html>

        