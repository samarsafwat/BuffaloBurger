<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php

		?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
         function validateForm() {
    var x = document.forms["myForm"]["firstname"].value;
    if (x == null || x == "") {
        alert("name must be filled out");
        return false;
    }
}
      </script>
</head>
<body>
<form method="post" name="myForm" onsubmit="return validateForm()">
<table>
	<tr>
		<td>FirstName</td>
		<td><input type="text" name="firstname" /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" /></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="number" name="phone" /></td>
	</tr>
	<tr>
		<td>About Your Visit</td>
		<td>

		        <select name="visit" value="<?php echo $visit ?>" />
				  <option value=""></option>
                  <option value="couple">couple</option>
                  <option value="family">family</option>
                  <option value="friends">friends</option>
                  <option value="solo">solo</option>

        </select>
		</td>
	</tr>
	<tr>
		<td>Rate</td>
		<td>

		        <select name="rate" value="<?php echo $rate ?>" />
                    <option value=""></option>
                    <option value="Poor">Poor</option>
                    <option value="Good">Good</option>
                    <option value="VeryGood">VeryGood</option>
                    <option value="Excellent">VeryGood</option> 
                </select>
		</td>
	</tr>
	<tr>
		<td>Any Comments</td>
		<td><textarea  name="comment" value="<?php echo $comment ?>" /></textarea></td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$firstname=$_POST['firstname'] ;
					$email=$_POST['email'] ;
					$phone=$_POST['phone'] ;
					$visit=$_POST['visit'] ;
					$rate=$_POST['rate'] ;
					$comment=$_POST['comment'] ;
					
								
		 mysqli_query($conn,"INSERT INTO `feedback`(firstname,email,phone,visit,rate,comment) 
		 VALUES ('$firstname','$email','$phone','$visit','$rate','$comment')"); 
				
				
	        }
?>
</form>
<table border="1">
	<tr>
	<td>ID</td>
	<td>firstname</td>
	<td>email</td>
	<td>phone</td>
<td>visit</td>
	<td>rate</td>
	<td>comment</td>	
	<td>Edit</td>
	<td>Delete</td>
	</tr>
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM feedback");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
				echo"<td><font color='black'>" .$test['firstname']."</font></td>";
				echo"<td><font color='black'>" .$test['email']."</font></td>";
				echo"<td><font color='black'>" .$test['phone']."</font></td>";
				echo"<td><font color='black'>" .$test['visit']."</font></td>";
				echo"<td><font color='black'>" .$test['rate']."</font></td>";
				echo"<td><font color='black'>" .$test['comment']."</font></td>";				
				echo"<td> <a href ='viewfeedback.php?id=$id'>Edit</a>";
				echo"<td> <a href ='delfeedback.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
</table>
</body>
</html>

        