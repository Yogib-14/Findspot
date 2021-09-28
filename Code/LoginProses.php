<?php 
include('connection.php');
if(isset($_POST['email'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * FROM tabel_user WHERE email_user='$email'";
	$result=$connection->query($sql);
	if($row=mysqli_fetch_assoc($result)){
		$db_password = $row['password_user'];
		$user_id = $row['id_user'];
        $db_role = $row['tipe_user'];
		if($password == $db_password){
			session_start();
			$_SESSION['id_user'] = $user_id;		
			$_SESSION['role'] = $db_role;
			header('location:index.php');
		} else {
			?>
			<script>
				window.alert('Incorrect password or username');
				window.location.href='SignUp.php';
			</script>
			<?php
		}
	} else {
		?>
		<script>
			window.alert('Incorrect password or username');
			window.location.href='SignUp.php';
		</script>
		<?php
	}
}
?>