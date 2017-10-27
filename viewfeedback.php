<?php include "header.php";?>
<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; ?>
<?php
require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM feedback WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$firstname=$test['firstname'] ;
				$email=$test['email'] ;
				$phone=$test['phone'] ;
				$visit=$test['visit'];
				$rate=$test['rate'] ;
				$comment=$test['comment'] ;				
					
if(isset($_POST['save']))
{	
	$firstname_save = $_POST['firstname'];
	$email_save = $_POST['email'];
	$phone_save = $_POST['phone'];
	$visit_save = $_POST['visit'];
	$rate_save = $_POST['rate'];
	$comment_save = $_POST['comment'];	
	
	mysqli_query($conn,"UPDATE feedback SET firstname ='$firstname_save',email='$email_save',
		 phone ='$phone_save',visit='$visit_save',rate ='$rate_save',comment ='$comment_save' WHERE id = '$id'")
				or die(mysqli_error()); 
	echo "Saved!";
	
	header("Location: feedbackcontrol.php");			
}

?>

<html>
<head>

</head>

<body>
<form method="post">
<table>
	<tr>
		<td>FirstName</td>
		<td><input type="text" name="firstname" value="<?php echo $firstname ?>"/></td>
	</tr>
		<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $email ?>"/></td>
	</tr>
	
	<tr>
		<td>Phone</td>
		<td><input type="text" name="phone" value="<?php echo $phone ?>"/></td>
	</tr>
	<tr>
		<td>About your visit</td>
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
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>
 