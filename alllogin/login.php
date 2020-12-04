<h1>Đăng nhập</h1>
<form method="POST">
	User : <input type="text" name="user"><br/>
	Password : <input type="Password" name="password"><br>
	<input type="submit" name="submit" value="Đăng nhập">
	<button><a href="create.php">Đăng kí</a></button>
</form>

<?php  
	
	session_start();
	if(isset($_POST['submit'])){

		require 'connect.php';

		$user = $_POST['user'];
		$password = $_POST['password'];

		$sql = "select * from thongtin where TENDANGNHAP = '$user' and PASS = '$password'";

		$rp = $con->query($sql);
		if($rp ->num_rows!=0){
			$_SESSION['name'] = $user;
		}
		else{
			echo "Tài khoản không tồn tại";
		}
		if(isset($_SESSION['name'])){
			header('location:infor.php');
		}
		$con->close();
	}
?>