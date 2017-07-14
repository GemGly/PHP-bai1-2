 <?php
  $dictionary = array(
   "Hello" => "Xin chào",
   "Good" => "Tốt",
   "How" => "Thế nào"
  	);
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	$searchword = $_POST["search"];
   	$flag = false;
   	foreach ($dictionary as $word => $value) {
   		if ($word == $searchword) {
   			echo "Từ" .$word ."<br> Nghĩa là :" .$value;
   			echo "<br>";
   			$flag = true;
   		}

   	}
   	if ($flag == false) {
   		echo "Từ này không có nghĩa";
   	}
   }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		input[type=text]{
			width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 5px;
		}
	</style>
</head>
<body>
   
	<h2>Từ điển Anh Việt</h2>
	<form action="" method="post">
	<input type="text" name="search" placeholder="Nhập từ cần tìm">
	<input type="submit" id="submit" value="Tìm">
	</form>
	
</body>
</html>