<html>
<head>
	<title>Tugas</title>
</head>
<body>
<form action="" name="aritmatika" method="post">
x :<input type="text" name="x"> operasi :<select name="operasi">
										<option value="tambah">tambah</option>
										<option value="kurang">kurang</option>
										<option value="kali">kali</option>
										<option value="bagi">bagi</option>
										</select> 
y: <input type="text" name="y">
<input type="submit" name="submit" value="=">
</form>
<?php
 
 if (isset($_POST["submit"])){
 echo "triger on";
 require_once "AritmatikaDasar.php";
 $data=new AritmatikaDasar();
 $x=$_POST["x"];
 $y=$_POST["y"];
 $operasi=$_POST["operasi"];
 	if ($operasi=="tambah"){
 		$data->tambah($x,$y);
 		//echo "Hasil :".$hasil;
 	}elseif ($operasi=="kurang") {
		$data->kurang($x,$y);
		//echo "Hasil :".$hasil; 		
 	}elseif ($operasi=="kali") {
		$data->kali($x,$y);
		//echo "Hasil :".$hasil; 		
 	}elseif ($operasi=="bagi") {
		$data->bagi($x,$y);
		//echo "Hasil :".$hasil; 		
 	}
 }

?>
</body>
</html>