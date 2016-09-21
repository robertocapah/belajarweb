<?php
class AritmatikaDasar{
  private $x;
  private $y;

  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }

  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }

  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }

  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }

  public function TampilkanFormA()
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
}

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

class BangunDuaDimensi{
    protected $panjang;
    protected $lebar;
    protected $alas;
    protected $tinggi;
    protected $diagonal1;
    protected $diagonal2;
    protected $sisiSejajar;
    protected $jari;

    public function FormPersegi(){
        echo "</br>";
        echo 'Hitung Luas Persegi </br>';
        echo '<form method="POST">';
        echo 'Sisi :<input type="text" name="sisi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasPersegi" value="Hitung Luas">';
        echo '</form>';
    }
    public function FormSegitiga(){
        echo "</br>";
        echo 'Hitung Luas Segitiga </br>';
        echo '<form method="POST">';
        echo 'Alas :<input type="text" name="alas"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasSegitiga" value="Hitung Luas">';
        echo '</form>';
    }
    public function FormJajargenjang(){
        echo "</br>";
        echo 'Hitung Luas Jajargenjang </br>';
        echo '<form method="POST">';
        echo 'panjang :<input type="text" name="panjang"> &nbsp;';
        echo 'lebar :<input type="text" name="lebar"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasJajargenjang" value="Hitung Luas">';
        echo '</form>';
    }
    public function FormLayang(){
        echo "</br>";
        echo 'Hitung Luas Layang-layang </br>';
        echo '<form method="POST">';
        echo 'Diagonal1 :<input type="text" name="diagonal1"> &nbsp;';
        echo 'Diagonal2 :<input type="text" name="diagonal2"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasLayang" value="Hitung Luas">';
        echo '</form>';
    }

    public function FormTrapesium(){
        echo "</br>";
        echo 'Hitung Luas Trapesium </br>';
        echo '<form method="POST">';
        echo 'Jumlah Sisi Sejajar :<input type="text" name="sisiSejajar"> &nbsp;';
        echo 'Tinggi :<input type="text" name="tinggi"> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input type="submit" name="luasTrapesium" value="Hitung Luas">';
        echo '</form>';
    }
    public function FormLingkaran(){
        echo "</br>";
        echo 'Hitung Luas Lingkaran </br>';
        echo '<form method="POST">';
        echo 'Jari-jari :<input type="text" name="jari"> &nbsp;';
        echo '<input type="submit" name="luasLingkaran" value="Hitung Luas">';
        echo '</form>';
    }
    public function Persegi($panjang,$lebar){
      $this->panjang=$panjang;
      $this->lebar=$lebar;
      $luas=$this->panjang*$this->lebar;
      return $luas;
    }
    public function Segitiga($alas,$tinggi){
      $this->alas=$alas;
      $this->tinggi=$tinggi;
      $luas=$this->alas*$this->tinggi/2;
      return $luas;
    }
    public function Jajargenjang($panjang,$lebar){
      $this->panjang=$panjang;
      $this->lebar=$lebar;
      $luas=$this->panjang*$this->lebar;
      return $luas;
    }
    public function Layang($diagonal1,$diagonal2){
      $this->diagonal1=$diagonal1;
      $this->diagonal2=$diagonal2;
      $luas=0.5*$this->diagonal1*$this->diagonal2;
      return $luas;
    }
    public function Trapesium($sisiSejajar,$tinggi){
      $this->sisiSejajar=$sisiSejajar;
      $this->tinggi=$tinggi;
      $luas=0.5*$this->sisiSejajar*$this->tinggi;
      return $luas;
    }
    public function Lingkaran($jari){
      $this->jari=$jari;
      $luas=4.14*$this->jari*$this->jari;
      return $luas;
    }


}
if (isset($_GET["page"])&&$_GET!=="") {
  $page=$_GET['page'];
  if ($page==="aritmatika") {
  $data = new AritmatikaDasar();
  $data->TampilkanFormA();
  } elseif ($page==="persegi") {
    $data2 = new BangunDuaDimensi();
    $data2->FormPersegi();
    }elseif ($page==="segitiga") {
    $data2 = new BangunDuaDimensi();
    $data2->FormSegitiga();
    }elseif ($page==="lingkaran") {
    $data2 = new BangunDuaDimensi();
    $data2->FormLingkaran();
    }elseif ($page==="jajargenjang") {
    $data2 = new BangunDuaDimensi();
    $data2->FormJajargenjang();
    }elseif ($page==="layang") {
    $data2 = new BangunDuaDimensi();
    $data2->FormLayang();
    }elseif ($page==="trapesium") {
    $data2 = new BangunDuaDimensi();
    $data2->FormTrapesium();
    }
}
if (isset($_POST["proses"])) {
  $x = $_POST['x'];
  $y = $_POST['y'];
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
  $sisi=$_POST['sisi'];
  echo "Luas Persegi :".$data2->Persegi($sisi);
}elseif (isset($_POST["luasSegitiga"])) {
  $alas=$_POST['alas'];
  $tinggi=$_POST['tinggi'];
  echo "Luas Segitiga :".$data2->Segitiga($alas,$tinggi);
}elseif (isset($_POST["luasLingkaran"])) {
  $jari=$_POST['jari'];
  echo "Luas Lingkaran :".$data2->Lingkaran($jari);
}elseif (isset($_POST["luasJajargenjang"])) {
  $panjang=$_POST['panjang'];
  $lebar=$_POST['lebar'];
  echo "Luas Jajargenjang :".$data2->Jajargenjang($panjang,$lebar);
}elseif (isset($_POST["luasLayang"])) {
  $diagonal1=$_POST['diagonal1'];
  $diagonal2=$_POST['diagonal2'];
  echo "Luas Layang-Layang :".$data2->Layang($diagonal1,$diagonal2);
}elseif (isset($_POST["luasTrapesium"])) {
  $sisiSejajar=$_POST['sisiSejajar'];
  $tinggi=$_POST['tinggi'];
  echo "Luas Trapesium :".$data2->Trapesium($sisiSejajar,$tinggi);
}

/**
* 
*/
class BangunRuang extends BangunDuaDimensi
{
  protected $tinggi;
  function VolumeBalok($tinggi){
   $this->tinggi=$tinggi;
   $VolumeBalok=$this->tinggi*$panjang*$lebar;
  }
}
?>