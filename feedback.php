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
		<td>firstname</td>
		<td><input type="text" name="firstname" /></td>
	</tr>
		<tr>
		<td>email</td>
		<td><input type="text" name="email" /></td>
	</tr>
	</tr>
		<tr>
		<td>phone</td>
		<td><input type="text" name="phone" /></td>
	</tr>	
    <tr>
		<td>About your visit</td>
		<td>
             <select name="visit">
                <option value="couple">couple</option>
                <option value="family">family</option>
                <option value="friends">friends</option>
                <option value="solo">solo</option>
</select> 
		</td>
	</tr>
        <tr>
		<td>Rate :</</td>
		<td>
             <select name="rate">
                <option value="poor">poor</option>
                <option value="good">good</option>
                <option value="verygood">verygood</option>
                <option value="excellent">excellent</option>
</select> 
		</td>
	</tr>
		<tr>
		<td>Any Comments</td>
		<td><textarea  name="comment"  value="submit" /></td></textarea>
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

</body>
</html>