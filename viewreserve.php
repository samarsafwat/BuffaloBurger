<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM reserve WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Name=$test['Name'] ;
				$Email=$test['Email'] ;				
				$PhoneNumber= $test['PhoneNumber'] ;
				$Date= $test['Date'] ;
				$Time= $test['Time'] ;
				$NumberOfGuests= $test['NumberOfGuests'] ;				
				
if(isset($_POST['save']))
{	
	$Name_save = $_POST['Name'];
	$PhoneNumber_save = $_POST['PhoneNumber'];
	$Date_save = $_POST['Date'];
	$Time_save = $_POST['Time'];
	$NumberOfGuests_save = $_POST['NumberOfGuests'];

		
	mysqli_query($conn,"UPDATE reserve SET Name ='$Name_save', PhoneNumber ='$PhoneNumber_save', Date ='$Date_save', Time ='$Time_save', NumberOfGuests ='$NumberOfGuests_save'
		  WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: historycontrol.php");			
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
		<td>Name</td>
		<td><input type="text" name="Name" value="<?php echo $Name ?>"/></td>
	</tr>
	<tr>
		<td>PhoneNumber</td>
		<td><input type="number" name="PhoneNumber" value="<?php echo $PhoneNumber ?>"/></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="Date" value="<?php echo $Date ?>"/></td>
	</tr>
	<tr>
		<td>Time</td>
		<td><input type="time" name="Time" value="<?php echo $Time ?>"/></td>
	</tr>
	<tr>
		<td>NumberOfGuests</td>
		<td><input type="number" name="NumberOfGuests" value="<?php echo $NumberOfGuests ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
 