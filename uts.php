<?php
$data = array('mhs1' => array('Toni', '122122', 'Laki-Laki', 'Teknik Informatika'),
			  'mhs2' => array('Roni', '214123', 'Laki-Laki', 'Ekonomi'),
			  'mhs3' => array('Tina', '512321', 'Perempuan', 'Teknik Kimia')
			 );
echo "<table border='1'>";
echo "<tr>";
echo "<td>Nama</td>";
echo "<td>NIM</td>";
echo "<td>Jenis Kelamin</td>";
echo "<td>Fakultas</td>";
echo "</tr>";
echo "<tr>";
foreach ($data['mhs1'] as $mahasiswa) {
	echo "<td>$mahasiswa</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($data['mhs2'] as $mahasiswa) {
	echo "<td>$mahasiswa</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($data['mhs3'] as $mahasiswa) {
	echo "<td>$mahasiswa</td>";
}
echo "</tr>";
echo "</table>";
?>