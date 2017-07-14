<?php
  $person = array(
   "1" => array("ten" => "Nguyễn Văn A",
                "ngaysinh" => "1999/10/6",
                "diachi" => "Hà Nội"
   	            ),
   "2" => array("ten" => "Nguyễn Văn B",
   	            "ngaysinh" => "1998/12/5",
   	            "diachi" => "Thái Bình")

  	);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
		}
		tr,th{
			padding: 8px;
			text-align: center;
			border-bottom: 1px solid #ddd; 
		}
	</style>
</head>
<body>
	<table border="0">
		<caption><h1>Danh sách khách hàng</h1></caption>
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			
		</tr>
		
  <?php
  	foreach ($person as $key => $value) {
  	?>
  	<tr>
  	<td><?=$key ?></td>
  	<td><?=$value['ten']?></td>
  	<td><?=$value['ngaysinh']?></td>
  	<td><?=$value['diachi']?></td>
  	</tr>
  	<?php	
  	}

  ?>
	</table>
</body>
</html>