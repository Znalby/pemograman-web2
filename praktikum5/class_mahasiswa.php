<?php

class mahasiswa
{
public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
{
    $this->namaMahasiswa = $namaMahasiswa;
    $this->nim = $nim;
    $this->domisili = $domisili;
    $this->prodi = $prodi;
    $this->ipk = $ipk;
}

function setPredikatipk($ipk)
    {
    if ($ipk >3.5) {
        echo"Cumloaude";
        } else {    
        echo "You did a great job!";
        }
    }
}

$mahasiswa = new mahasiswa("Muhammad Zen Alby", "0110223077", "Bogor", "Teknik Informatika", "3.96");
echo "Nama Lengkap : " . $mahasiswa->namaMahasiswa;
echo "<br>";
echo "NIM : ". $mahasiswa->nim;
echo "<br>";
echo "Domisili : ". $mahasiswa->domisili;
echo "<br>";
echo "Prodi : ". $mahasiswa->prodi;
echo "<br>";
echo "IPK :". $mahasiswa->ipk;
echo "<br>";
$mahasiswa->setPredikatipk($mahasiswa->ipk);

?>