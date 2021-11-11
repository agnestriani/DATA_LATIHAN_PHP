<?php
//PROGRAM INI MENGGUNAKAN ENCAPSULATION

CLASS nasabah1
{
	//atribut atau variabel
	public $norek;
	public $nama;
	protected $uang; // protected supaya datanya bisa digunakan juga di class turunannya

	//method atau fungsi simpan
	public function simpan ($norek,$nama,$disimpan)
	{
		$this -> norek = $norek;
		$this -> nama = $nama;
		$this -> uang += $disimpan; //operasi penjumlahan !!!
		echo "berhasil menyimpan Rp " . $disimpan . "<BR>";
	}
	
	//method atau fungsi tarik
	public function tarik ($norek, $nama, $ditarik)
	{
		$this -> norek = $norek;
		$this -> nama = $nama;
		$this -> uang -= $ditarik; //operasi pengurangan !!!
		echo "berhasil menarik Rp " . $ditarik . "<BR>";
		
	}
	//method atau fungsi tampilkan
	public function tampilkan ()
	{
		echo "Nasabah atas nama " . $this -> nama . " jumlah uangnya adalah Rp " . $this -> uang;
	}
}

class transfer extends nasabah1
{
	//method atau fungsi transfer
	public function transfer ($norek, $norektujuan, $nama, $ditransfer)
	{
		$this -> norek = $norek;
		$this -> norektujuan = $norektujuan;
		$this -> nama = $nama;
		$this -> uang -= $ditransfer; //operasi pengurangan !!!
		echo "berhasil transfer Rp " . $ditransfer . "<BR>";
	}
}


//======================================================================================
$nasabah1 = new transfer;
$nasabah1 -> simpan (556671, "Fauzan", 100000);
$nasabah1 -> simpan (556671, "Fauzan", 200000);
$nasabah1 -> tarik (556671, "Fauzan", 50000);

$nasabah1 -> transfer (556671, 22334455, "Fauzan", 50000);

$nasabah1 -> tampilkan ();



?>
		