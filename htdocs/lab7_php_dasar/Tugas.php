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