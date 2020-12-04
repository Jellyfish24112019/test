<?php

	require 'connect.php';
	//lựa chọn máy chủ mysql
	$a = $_GET['MATV'];
	$sqll="DELETE from thongtin where MATV ='$a'" or die("Lỗi truy vấn!");
	if($con->query($sqll)===true)
	{
	    header("location:infor.php");
	}
	else{
	    echo"lỗi thêm dữ liệu".$ketnoi->error;
	}
	$ketnoi->close();

?>