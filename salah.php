<?php
// Soal Nomor Satu
$data = array('Asep', '2500000', '2'); // Data Asep => Nama, Gaji, Lama Bekerja
if ($data[2] > 5 and $data[2] <= 10) { // Lama Bekerja Lebih Dari 5 Tahun Sampai 10 Tahun
	$tunjangan = $data[1] * 25/100;
	$total = $data[1] + $tunjangan;
} elseif ($data[2] > 3 and $data[2] <= 5) { // Lama Bekerja Lebih Dari 3 Tahun Sampai 5 Tahun
	$tunjangan = $data[1] * 15/100;
	$total = $data[1] + $tunjangan;
} elseif ($data[2] > 10) { // Lama Bekerja Lebih Dari 10 Tahun
	$tunjangan = $data[1] * 40/100;
	$total = $data[1] + $tunjangan;
} else { // Lama Bekerja Kurang Dri 3 Tahun
    $tunjangan = $data[1] * 5/100;
    $total = $data[1] + $tunjangan;
}
//bikin Border
echo "<table border='1'>";
echo "<tr>";
echo "<td>Nama</td>";
echo "<td>Gaji</td>";
echo "<td>Lama Bekerja</td>";
echo "<td>Tunjangan</td>";
echo "<td>Total Pendapatan</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$data[0]</td>"; // Output Nama
echo "<td>$data[1]</td>"; // Output Gaji
echo "<td>$data[2]</td>"; // Output Lama Bekerja
echo "<td>$tunjangan</td>"; // Output Tunjangan
echo "<td>$total</td>"; // Output Total Pendapatan
echo "</tr>";
echo "</table>";

echo "<br />"; // Membuat Baris Baru

// Soal Nomor Dua
// Menampung Data Dengan Array Multidimensional
//sumber data 'mhs'
$data = array('<tr><td>Toni</td>', '<td>122122</td>', '<td>Laki-Laki</td>', '<td>Teknik Informatika</td></tr>', '<tr><td>Roni</td>', '<td>214123</td>', '<td>Laki-Laki</td>', '<td>Ekonomi</td></tr>', '<tr><td>Tina</td>', '<td>512321</td>', '<td>Perempuan</td>', '<td>Teknik Kimia</td></tr>'
			 );
//bikin tabel
echo "<table border='1'>";
echo "<tr>";
echo "<td>Nama</td>";
echo "<td>NIM</td>";
echo "<td>Jenis Kelamin</td>";
echo "<td>Fakultas</td>";
echo "</tr>";
//looping pake foreach variabel 'mhs'
foreach ($data as $mahasiswa) {
	echo "$mahasiswa";
	echo "$data[3]";
}
echo "</table>";
?>