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
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "Bangun Ruang";
    echo "</br>";
    echo "<a href='?page=bola'>hitung Bola</a>";
	echo "</br>";
	echo "<a href='?page=kerucut'>hitung Kerucut </a>";
	echo "</br>";
	echo "<a href='?page=kubus'>hitung Kubus </a>";
	echo "</br>";
	echo "<a href='?page=limasSegiEmpat'>hitung Limas Segi Empat </a>";
	echo "</br>";
	echo "<a href='?page=prismaSegitiga'>hitung PrismaSegitiga </a>";
	echo "</br>";
	echo "<a href='?page=tabung'>hitung Tabung </a>";
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
        echo '<input type="submit" name="hitungPersegi" value="Hitung">';
        echo '</form>';
    }
     function FormSegitiga(){
        echo "</br>";
        echo 'Hitung Luas Segitiga </br>';
        echo '<form method="POST">';
        echo 'Alas :<input type="text" name="alas"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo 'Sisi Miring :<input type="text" name="miring"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungSegitiga" value="Hitung Segitiga">';
        echo '</form>';
    }
     function FormJajargenjang(){
        echo "</br>";
        echo 'Hitung Jajargenjang </br>';
        echo '<form method="POST">';
        echo 'panjang :<input type="text" name="panjang"> &nbsp;';
        echo 'lebar :<input type="text" name="lebar"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungJajargenjang" value="Hitung Luas">';
        echo '</form>';
    }
     function FormLayang(){
        echo "</br>";
        echo 'Hitung Luas Layang-layang </br>';
        echo '<form method="POST">';
        echo 'Diagonal1 :<input type="text" name="diagonal1"> &nbsp;';
        echo 'Diagonal2 :<input type="text" name="diagonal2"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungLayang" value="Hitung Layang">';
        echo '</form>';
    }

     function FormTrapesium(){
        echo "</br>";
        echo 'Hitung Luas Trapesium </br>';
        echo '<form method="POST">';
        echo 'Jumlah Sisi Sejajar :<input type="text" name="sisiSejajar"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo 'Sisi 1 :<input type="text" name="s1"> &nbsp;';
        echo 'Sisi 2 :<input type="text" name="s2"> &nbsp;';
        echo 'Sisi 3 :<input type="text" name="s3"> &nbsp;';
        echo 'Sisi 4 :<input type="text" name="s4"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="HitungTrapesium" value="Hitung Luas">';
        echo '</form>';
    }
     function FormLingkaran(){
        echo "</br>";
        echo 'Hitung Luas Lingkaran </br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo '<input type="submit" name="hitungLingkaran" value="Hitung Luas">';
        echo '</form>';
    }
     function FormBola(){
        echo "</br>";
        echo 'Hitung Bola</br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo '<input type="submit" name="hitungBola" value="Hitung Bola">';
        echo '</form>';
    }
     function FormTabung(){
        echo "</br>";
        echo 'Hitung Tabung</br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo '<input type="submit" name="hitungTabung" value="Hitung Tabung">';
        echo '</form>';
    }
     function FormKerucut(){
        echo "</br>";
        echo 'Hitung Kerucut</br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo 'Selimut :<input type="text" name="selimut"> &nbsp;';
        echo '<input type="submit" name="hitungKerucut" value="Hitung Kerucut">';
        echo '</form>';
    }
	   function FormKubus(){
        echo "</br>";
        echo 'Hitung Kubus </br>';
        echo '<form method="POST">';
        echo 'Sisi :<input type="text" name="sisi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungKubus" value="Hitung Kubus">';
        echo '</form>';
    }
	   function FormLimasSegiEmpat(){
        echo "</br>";
        echo 'Hitung Limas </br>';
        echo '<form method="POST">';
        echo 'Sisi Alas:<input type="text" name="sisia"> &nbsp; </br>';
        echo 'Sisi Miring:<input type="text" name="sisib"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungLimas" value="Hitung Limas">';
        echo '</form>';
    }
	   function FormPrismaSegitiga(){
        echo "</br>";
        echo 'Hitung Prima Segitiga </br>';
        echo '<form method="POST">';
        echo 'lebar Alas:<input type="text" name="alasa"> &nbsp; </br>';
        echo 'tinggi Alas:<input type="text" name="tinggia"> &nbsp;';
        echo 'tinggi Prisma:<input type="text" name="tinggip"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="hitungPrisma" value="Hitung Prima Segitiga">';
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
	    FormJajargenjang();
	    }elseif ($page==="layang") {
	    FormLayang();
	    }elseif ($page==="trapesium") {
	    FormTrapesium();
	    }elseif ($page==="bola") {
	    FormBola();
	    }elseif ($page==="kerucut") {
	    FormKerucut();
	    }elseif ($page==="kubus") {
	    FormKubus();
	    }elseif ($page==="limasSegiEmpat") {
	    FormLimasSegiEmpat();
	    }elseif ($page==="prismaSegitiga") {
	    FormPrismaSegitiga();
	    }elseif ($page==="tabung") {
	    FormTabung();
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
	}elseif (isset($_POST["hitungPersegi"])) {
	  $obj= new Persegi();
	  $sisi=$_POST['sisi'];
	  echo "Luas Persegi :".$obj->Luas($sisi);
	  echo "<br>";
	  echo "Keliling Persegi :".$obj->Keliling($sisi);
	}elseif (isset($_POST["hitungSegitiga"])) {
	  $obj= new Segitiga();
	  $alas=$_POST['alas'];
	  $tinggi=$_POST['tinggi'];
	  $miring=$_POST['miring'];
	  echo "Luas Segitiga :".$obj->Luas($alas,$tinggi);
	  echo "<br>";
	  echo "Keliling Segitiga :".$obj->Keliling($alas,$tinggi,$miring);
	}elseif (isset($_POST["hitungJajargenjang"])) {
	  $obj= new Jajargenjang();
	  $panjang=$_POST['panjang'];
	  $lebar=$_POST['lebar'];
	  echo "Luas Jajargenjang :".$obj->Luas($panjang,$lebar);
	  echo "<br>";
	  echo "Keliling Jajargenjang :".$obj->Keliling($panjang,$lebar);
	}elseif (isset($_POST["hitungLingkaran"])) {
	  $obj= new Lingkaran();
	  $jari=$_POST['jari'];
	  echo "Luas Lingkaran :".$obj->Luas($jari);
	  echo "<br>";
	  echo "Keliling Lingkaran :".$obj->Keliling($jari);
	}elseif (isset($_POST["hitungTrapesium"])) {
	  $obj= new Trapesium();
	  $sisiSejajar=$_POST['sisiSejajar'];
	  $tinggi=$_POST['tinggi'];
	  $s1=$_POST['s1'];
	  $s2=$_POST['s2'];
	  $s3=$_POST['s3'];
	  $s4=$_POST['s4'];
	  echo "Luas Trapesium :".$obj->Luas($sisiSejajar,$tinggi);
	  echo "<br>";
	  echo "Keliling Trapesium :".$obj->Keliling($s1,$s2,$s3,$s4);
	}elseif (isset($_POST["hitungLayang"])) {
	  $obj= new Layang();
	  $d1=$_POST['diagonal1'];
	  $d2=$_POST['diagonal2'];
	  echo "Luas Layang :".$obj->Luas($d1,$d2);
	  echo "<br>";
	  echo "Keliling Layang :".$obj->Keliling($d1,$d2);
	}elseif (isset($_POST["hitungBola"])) {
	  $obj= new Bola();
	  $jari=$_POST['jari'];
	  echo "Luas permukaan Lingkaran :".$obj->Luas($jari);
	  echo "<br>";
	  echo "Volume Lingkaran :".$obj->Volume($jari);
	}elseif (isset($_POST["hitungKerucut"])) {
	  $obj= new Kerucut();
	  $jari=$_POST['jari'];
	  $selimut=$_POST['selimut'];
	  $tinggi=$_POST['tinggi'];
	  echo "Luas permukaan Kerucut :".$obj->Luas($jari,$selimut);
	  echo "<br>";
	  echo "Volume Kerucut :".$obj->Volume($jari,$tinggi);
	}elseif (isset($_POST["hitungTabung"])) {
	  $obj= new Tabung();
	  $jari=$_POST['jari'];
	  $tinggi=$_POST['tinggi'];
	  echo "Luas permukaan Tabung :".$obj->Luas($jari,$tinggi);
	  echo "<br>";
	  echo "Volume Tabung :".$obj->Volume($jari,$tinggi);
	}elseif (isset($_POST["hitungKubus"])) {
	  $obj= new Kubus();
	  $sisi=$_POST['sisi'];
	  echo "Luas Permukaan Kubus :".$obj->LuasP($sisi);
	  echo "<br>";
	  echo "Volume Kubus :".$obj->Volume($sisi);
	}elseif (isset($_POST["hitungLimas"])) {
	  $obj= new LimasSegiEmpat();
	  $sisia=$_POST['sisia'];
	  $sisib=$_POST['sisib'];
	  echo "Luas Permukaan Limas :".$obj->Luas($sisia,$sisib);
	  echo "<br>";
	  echo "Volume Limas :".$obj->Volume($sisia,$sisib);
	}elseif (isset($_POST["hitungPrisma"])) {
	  $obj= new PrismaSegitiga();
	  $alasa=$_POST['alasa'];
	  $tinggia=$_POST['tinggia'];
	  $tinggip=$_POST['tinggip'];
	  echo "Luas Permukaan Prisma :".$obj->Luas($alasa,$tinggia,$tinggip);
	  echo "<br>";
	  echo "Volume Prisma :".$obj->Volume($alasa,$tinggia,$tinggip);
	}