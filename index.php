<?php
	//include_once "Perhitungan/AritmatikaDasar.php";
	/*spl_autoload_register(function ($class_name) {
	    include "Perhitungan/$class_name.php";
	    include "Perhitungan/BangunRuang/$class_name.php";
	});*/
	function __autoload($class_name) 
	{
		$file = sprintf('Perhitungan/%s.php',$class_name);
	    if (is_file($file))
	    {
	        include $file;
	        return;
	    }
	    $file = sprintf('Perhitungan/BangunRuang/%s.php', $class_name);
	    if (is_file($file))
	    {
	        include $file;
	        return;
	    }
	}
    /*$aritmatika=new AritmatikaDasar();
    echo $aritmatika->kali(2,4);
    $persegi= new Persegi();
    echo $persegi->KelilingPersegi(2,4);
    $segitiga= new Segitiga();
    echo $segitiga->LuasSegitiga(2,4);
    echo $segitiga->KelilingSegitiga(2,4,5);*/
    //$j=new LimasSegiEmpat();
    //echo $j->LuasJajargenjang(2,4);
    //echo $j->Volume(2,4);
    
    echo "</br>";
	echo "</br>";
	echo "<a href='?page=aritmatika'>hitung Aritmatika </a>";
	echo "</br>";
	echo "<a href='?page=persegi'>hitung persegi </a>";
	echo "</br>";
	echo "<a href='?page=segitiga'>hitung segitiga </a>";
	echo "</br>";
	echo "<a href='?page=jajargenjang'>hitung Jajargenjang </a>";
	echo "</br>";
	echo "<a href='?page=layang'>hitung layang layang </a>";
	echo "</br>";
	echo "<a href='?page=trapesium'>hitung Trapesium </a>";
	echo "</br>";
	echo "<a href='?page=lingkaran'>hitung Lingkaran </a>";
    
     function TampilkanFormA()
	  {
	    echo '<form method="POST">';
	    echo '<input type="text" name="x"> &nbsp;';
	    echo '<select name="operasi">
	      <option value="tambah">+</option>
	      <option value="kali">x</option>
	      <option value="kurang">-</option>
	      <option value="bagi">/</option>
	    </select> &nbsp;';
	    echo '<input type="text" name="y"> &nbsp;';
	    echo '<label>=</label> &nbsp;';
	    echo '<input type="submit" name="proses" value="Hitung">';
	    echo '</form>';
	  }
	   function FormPersegi(){
        echo "</br>";
        echo 'Hitung Luas Persegi </br>';
        echo '<form method="POST">';
        echo 'Sisi :<input type="text" name="sisi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasPersegi" value="Hitung Luas">';
        echo '</form>';
        echo "</br>";
        echo 'Hitung Keliling Persegi </br>';
        echo '<form method="POST">';
        echo 'Sisi :<input type="text" name="sisi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="kelilingPersegi" value="Hitung Keliling">';
        echo '</form>';
    }
     function FormSegitiga(){
        echo "</br>";
        echo 'Hitung Luas Segitiga </br>';
        echo '<form method="POST">';
        echo 'Alas :<input type="text" name="alas"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasSegitiga" value="Hitung Luas">';
        echo '</form>';
    }
     function FormJajargenjang(){
        echo "</br>";
        echo 'Hitung Luas Jajargenjang </br>';
        echo '<form method="POST">';
        echo 'panjang :<input type="text" name="panjang"> &nbsp;';
        echo 'lebar :<input type="text" name="lebar"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasJajargenjang" value="Hitung Luas">';
        echo '</form>';
    }
     function FormLayang(){
        echo "</br>";
        echo 'Hitung Luas Layang-layang </br>';
        echo '<form method="POST">';
        echo 'Diagonal1 :<input type="text" name="diagonal1"> &nbsp;';
        echo 'Diagonal2 :<input type="text" name="diagonal2"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasLayang" value="Hitung Luas">';
        echo '</form>';
    }

     function FormTrapesium(){
        echo "</br>";
        echo 'Hitung Luas Trapesium </br>';
        echo '<form method="POST">';
        echo 'Jumlah Sisi Sejajar :<input type="text" name="sisiSejajar"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasTrapesium" value="Hitung Luas">';
        echo '</form>';
    }
     function FormLingkaran(){
        echo "</br>";
        echo 'Hitung Luas Lingkaran </br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo '<input type="submit" name="luasLingkaran" value="Hitung Luas">';
        echo '</form>';
    }
    if (isset($_GET["page"])&&$_GET!=="") {
	  $page=$_GET['page'];
	  if ($page==="aritmatika") {
	  	TampilkanFormA();
	  	} elseif ($page==="persegi") {
	    FormPersegi();
	    }elseif ($page==="segitiga") {
	    FormSegitiga();
	    }elseif ($page==="lingkaran") {
	    FormLingkaran();
	    }elseif ($page==="jajargenjang") {
	    ormJajargenjang();
	    }elseif ($page==="layang") {
	    FormLayang();
	    }elseif ($page==="trapesium") {
	    FormTrapesium();
	    }
	}
	if (isset($_POST["proses"])) {
	  $x = $_POST['x'];
	  $y = $_POST['y'];
	  $data= new AritmatikaDasar();
	  if ($_POST['operasi'] == "tambah") {
	    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y)."<br /><br />";
	  } elseif ($_POST['operasi'] == "kali") {
	    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y)."<br /><br />";
	  } elseif ($_POST['operasi'] == "kurang") {
	    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y)."<br /><br />";
	  } elseif ($_POST['operasi'] == "bagi") {
	    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y)."<br /><br />";
	  }
	}elseif (isset($_POST["luasPersegi"])) {
	  $data2= new Persegi();
	  $sisi=$_POST['sisi'];
	  echo "Luas Persegi :".$data2->Luas($sisi);
	}elseif (isset($_POST["kelilingPersegi"])) {
	  $data2= new Persegi();
	  $sisi=$_POST['sisi'];
	  echo "Keliling Persegi :".$data2->Keliling($sisi);
	}elseif (isset($_POST["luasSegitiga"])) {
	  $data2= new Segitiga();
	  $alas=$_POST['alas'];
	  $tinggi=$_POST['tinggi'];
	  echo "Luas Segitiga :".$data2->Luas($alas,$tinggi);
	}