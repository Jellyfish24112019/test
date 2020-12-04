<?php  

	require 'connect.php';
	$is = $_POST['MATV'];
	$sql = "select * from thongtin where TENDANGNHAP='$rs'";
	$rp = $con->query($sql);
	$rs = $rp->fetch_assoc();
?>
<h1>Update</h1>
<form>
	Mã Thành Viên : <input type="hidden" name="MATV" value="<?php echo $rp['MATV']; ?>"><?php $rp['MATV']; ?><br>
	Tên Đăng Nhập : <input type="text" name="user" value="<?php $rp['TENDANGNHAP']; ?>"><br>
	Họ Và Tên : <input type="text" name="hovaten" value="<?php $rp['HOVATEN']; ?>"><br>
	Biệt Danh : <input type="text" name="biethieu" value="<?php $rp['BIETHIEU']; ?>"><br>
	Pass : <input type="Password" name="password" value="<?php $rp['PASS']; ?>"><br>
	Email : <input type="text" name="email" value="<?php $rp['EMAIL']; ?>"><br>
	Điện Thoại : <input type="text" name="phone" value="<?php $rp['PHONE']; ?>"><br>
	Địa Chỉ : <input type="Password" name="diachi" value="<?php $rp['DIACHI']; ?>"><br>
	Nơi Làm Việc : <input type="Password" name="noilamviec" value="<?php $rp['NOILAMVIEC']; ?>"><br>
	Chức Vụ : <input type="Password" name="chucvu" value="<?php $rp['CHUCVU']; ?>"><br>
	<button name="update">Update</button>
</form>
<?php  
	
	if(isset($_POST['update'])){
		session_start();
		$mavt = $_POST['MATV'];
		$user = $_POST['user'];
		$hovaten = $_POST['hovaten'];
		$biethieu = $_POST['biethieu'];
		$pass = $_POST['password'];
		$mail = $_POST['email'];
		$phone = $_POST['phone'];
		$diachi = $_POST['diachi'];
		$noilamviec = $_POST['noilamviec'];
		$chucvu = $_POST['chucvu'];

		$sql = 'select * from thongtin where TENDANGNHAP='$user'';
		$rp = $con->query($sql);

		if($rp->num_rows!=0){
			echo "Tên Đăng nhập đã tồn tậi";
		}else{
			$sqll="UPDATE thongtin SET TENDANGNHAP ='$user', HOVATEN='$hovaten',BIETHIEU='$biethieu',PASS='$pass',EMAIL='$mail',PHONE='$dienthoai',BIETHIEU='$biethieu' ,NOILAMVIEC='$noilamviec',CHUCVU='$chucvu' where MATV='$matv'" or die("Lỗi truy vấn!");
			if($con->query($sqll)===true)
			{
				$_SESSION['name']=$user;
		   		header("location:infor.php");
			}
			else{
		   		echo"lỗi thêm dữ liệu".$con->error;
			}
		}

	}

?>