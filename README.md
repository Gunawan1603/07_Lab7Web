# 07_Lab7Web

TUGAS PERTEMUAN 9

PEMROGRAMAN WEB

TEKNIK INFORMATIKA

UNIVERSITAS PELITA BANGSA

NAMA  : GUNAWAN

NIM   : 312010191

KELAS : TI.20.B1

DOSEN : Agung Nugroho,S.Kom.,M.Kom

# Pemrograman Web: PHP Dasar

**Instruksi Praktikum**<br>
1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.
Langkah-langkah Praktikum
Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP 
terlebih dahulu. Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7. 
Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu 
XAMPP. 

**Install XAMPP**<br>
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi 
portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan 
direktorinya.

**Menjalankan Web Server**

Untuk menjalankan web server dari menu XAMPP Control.<br>
![07_Lab7Web](Gambar/01.Gambar_XAMPP_Control.jpg)

Gambar 01. XAMPP Control

• Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.
• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\
• Database MySQL
Direktori: \xampp\mysql\
Manajemen database: http://localhost/phpmyadmin

**Memulai PHP**

Buat folder lab7_php_dasar pada root directory web server (C:\xampp\htdocs)
![07_Lab7Web](Gambar/02.Gambar_Directory_Lab7.jpg)

Gambar 02. Directory Lab7

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL: 
http://localhost/lab7_php_dasar/

![07_Lab7Web](Gambar/03.Gambar_Tampilan_Web_Server.jpg)
Gambar 03. Tampilan Web Server

**PHP Dasar**<br>
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat 
kode seperti berikut.<br>
~~~
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
 <h1>Belajar PHP Dasar</h1>
 <?php
 echo "Hello World";
 ?>
</body>
</html>
~~~
![07_Lab7Web](Gambar/04.Gambar_Code_Dasar_PHP.jpg)

Gambar 04. Code Dasar PHP

Kemudian untuk mengakses hasilnya melalui URL: 
http://localhost/lab7_php_dasar/php_dasar.php

![07_Lab7Web](Gambar/05.Gambar_Tampilan_Dasar_PHP.jpg)

Gambar 05. Tampilan Dasar PHP

**Variable PHP**

Menambahkan variable pada program.<br>
~~~
<?php
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
~~~
![07_Lab7Web](Gambar/06.Gambar_Code_Variable_PHP.jpg)

Gambar 06. Code Variable PHP

Kemudian untuk mengakses hasilnya melalui URL: 

![07_Lab7Web](Gambar/07.Gambar_Tampilan_Variable_PHP.jpg)

Gambar 07. Tampilan Variable PHP

**Predefine Variable $_GET**
~~~
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
~~~
![07_Lab7Web](Gambar/08.Gambar_Code_Predefine_Variable.jpg)

Gambar 08. Code Predefine Variable

Untuk mengaksesnya gunakan URL: 
http://localhost/lab7_php_dasar/latihan2.php?nama=Gunawan

![07_Lab7Web](Gambar/09.Gambar_Tampilan_Predefine_Variable.jpg)

Gambar 08. Tampilan Predefine Variable

**Membuat Form Input**
~~~
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
 <label>Nama: </label>
 <input type="text" name="nama">
 <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
~~~
![07_Lab7Web](Gambar/10.Gambar_Code_Form_Input.jpg)

Gambar 09. Code Form Input

![07_Lab7Web](Gambar/11.Gambar_Tampilan_Form_Input.jpg)

Gambar 10. Tampilan Form Input

**Operator**
~~~
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
~~~
![07_Lab7Web](Gambar/12.Gambar_Code_Operator.jpg)

Gambar 11. Code Operator

![07_Lab7Web](Gambar/13.Gambar_Tampilan_Operator.jpg)

Gambar 12. Tampilan Operator

**Kondisi IF**
~~~
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
 echo "Minggu";
} elseif ($nama_hari == "Monday") {
 echo "Senin";
} else {
 echo "Selasa";
}
?>
~~~
![07_Lab7Web](Gambar/14.Gambar_Code_Kondisi_IF.jpg)
Gambar 12. Code Kondisi IF

![07_Lab7Web](Gambar/15.Gambar_Tampilan_Kondisi_IF.jpg)

Gambar 13. Tampilan Kondisi IF

**Kondisi Switch**
~~~
<?php
$nama_hari = date("l");
switch ($nama_hari) {
 case "Sunday":
 echo "Minggu";
 break;
 case "Monday":
 echo "Senin";
 break;
case "Tuesday":
 echo "Selasa";
 break;
 default:
 echo "Sabtu";
?>
~~~
![07_Lab7Web](Gambar/16.Gambar_Code_Kondisi_Switch.jpg)
Gambar 14. Code Kondisi Switch

![07_Lab7Web](Gambar/17.Gambar_Tampilan_Kondisi_Switch.jpg)

Gambar 15. Tampilan Kondisi Switch

**Perulangan for**
~~~
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
 echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
 echo "Perulangan ke: " . $i . '<br />';
}
?>
~~~
![07_Lab7Web](Gambar/18.Gambar_Code_Perulangan_for.jpg)
Gambar 16. Code Perulangan for

![07_Lab7Web](Gambar/19.Gambar_Tampilan_Perulangan_for.jpg)

Gambar 17. Tampilan Perulangan for

**Perulangan while**
~~~
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
}
?>
~~~
![07_Lab7Web](Gambar/20.Gambar_Code_Perulangan_while.jpg)
Gambar 18. Code Perulangan while

![07_Lab7Web](Gambar/21.Gambar_Tampilan_Perulangan_while.jpg)

Gambar 19. Tampilan Perulangan while

**Perulangan dowhile**
~~~
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
 echo "Perulangan ke: " . $i . '<br />';
 $i++;
} while ($i<=10);
?>
~~~
![07_Lab7Web](Gambar/22.Gambar_Code_Perulangan_dowhile.jpg)
Gambar 20. Code Perulangan dowhile

![07_Lab7Web](Gambar/23.Gambar_Tampilan_Perulangan_dowhile.jpg)

Gambar 21. Tampilan Perulangan dowhile

**Pertanyaan dan Tugas**

Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan 
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung 
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang 
berbeda-beda sesuai pilihan pekerjaan.

 >**Jawab :**
 ~~~
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>PHP Dasar</title>
</head>
<body>
<h2>Tugas</h2>
  <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <br>
    <label>Tanggal Lahir: </label>
    <input type="text" name="tgl_lahir">
    <br>
    <label>Pekerjaan:
      <select name='pekerjaan'>
                <option value='Direktur'>Direktur</option>
                <option value='Manager'>Manager</option>
                <option value='Staff'>Staff</option>
                <option value='Operator'>Operator</option>
      </select>
    </label>
    <br>
    <input type="submit" value="Kirim">
  </form>
  <?php
        # Memanggil Nama
        echo 'Nama: ' . $_POST['nama'];
        # Merubah Tanggal Lahir menjadi Umur (Tahun)
        $tgl_lahir = @$_POST['tgl_lahir'];
        $lahir = new DateTime($tgl_lahir);
        $hari_ini = new DateTime();
        $diff = $hari_ini->diff($lahir);
        # Memanggil fungsi umur yg sudah dibuat diatas
        echo "<br> Umur: ". $diff->y ." Tahun";

        # Memanggil pekerjaan
        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];

        # Kondisi if pekerjaan untuk menentukan gaji
        $pekerjaan = @$_POST['pekerjaan'];

        if($pekerjaan == "Direktur"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Manager"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }elseif($pekerjaan == "Staff"){
            echo '<br> Gaji: Rp. 5.000.000,-';
        }elseif($pekerjaan == "Operator"){
            echo '<br> Gaji: Rp. 4.000.000,-';
        }
    ?>
</body>
</html>
~~~

![07_Lab7Web](Gambar/24.Gambar_Code_Tugas.jpg)
![07_Lab7Web](Gambar/25.Gambar_Code_Tugas1.jpg)

Gambar 22. Code form input

![07_Lab7Web](Gambar/26.Gambar_Tampilan_Tugas1.jpg)

Gambar 23. Tampilan form input
 
Cukup Sekian Penjelasan Dari Saya

**TERIMAKASIH**

