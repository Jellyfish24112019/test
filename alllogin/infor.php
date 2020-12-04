
<?php  
	session_start();
	require 'connect.php';
	echo"<h1>Danh sach thông tin</h1>";
	echo"<h2>Xin chào :".$_SESSION['name'];
?>
<table border="1">
	<tr>
		<th>MATV</th>
		<th>USER</th>
		<th>HỌ VÀ TÊN</th>
		<th>BIETHIEU</th>
		<th>PASSWORD</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<th>ADRESS</th>
		<th>PLACEWORK</th>
		<th>CHỨC VỤ</th>
		<th>HÀNH ĐỘNG</th>
	</tr>
<?php  

	$sql = "select * from thongtin";
	$rp = $con->query($sql);
	while ($rs=$rp->fetch_assoc()) {
		echo "<tr>
				<td>".$rs['MATV']."</td>
				<td>".$rs['TENDANGNHAP']."</td>
				<td>".$rs['HOVATEN']."</td>
				<td>".$rs['BIETHIEU']."</td>
				<td>".$rs['PASS']."</td>
				<td>".$rs['EMAIL']."</td>
				<td>".$rs['PHONE']."</td>
				<td>".$rs['DIACHI']."</td>
				<td>".$rs['NOILAMVIEC']."</td>
				<td>".$rs['CHUCVU']."</td>
				<td><a href='update.php?MATV=".$rs['MATV']."'>Sửa</a>||<a href='drop.php?MATV=".$rs['MATV']."'>Xóa</a></td>
			</tr>";
	}
	$con->close();
?>
</table>
<button><a href="serch.php">Tìm Kiếm</a></button>
<button><a href="login.php">Đăng Nhập</a></button>
<button><a href="logout.php">Đăng Xuất</a></button>