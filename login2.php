<?php include "header.php";?>


<?php include "connect.php"; ?>
<?php include "functionssignin.php"; ?>
<?php include "title_bar.php"; 

?>

<?php
if(isset($_POST['submit']))
{
	$Email = $_POST['Email'];
	
	$password = md5($_POST['password']);
	if(empty($Email) or empty ($password)){
		echo "<p> fields empty</p>";
	}
	else {
		$check_login = mysqli_query($con,"SELECT id,type FROM users WHERE Email = '$Email' AND password='$password'");
		if(mysqli_num_rows($check_login)==1){
			
			$run=mysqli_fetch_array($check_login);
			$user_id=$run['id'];
			$type=$run['type'];
			if($type=='d'){
				echo "<p>your account is deactivated by site admin.</p>";
			}
			else{
				$_SESSION['user_id']=$user_id;
				header('location: profile.php');
			}
		}
		else {
			echo "wrong Email or password";
		}
		
		
	}
	
}
?>
