<?php
echo "<head><title>Data Diri Anda</title></head>";
$fp = fopen("datadiri.txt", "r");
echo "<table border=0>";

while ($isi = fgets($fp,80)) {
    $pisah = explode("|",$isi);
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>NIM </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Kelas </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Prodi </td><td>: $pisah[4]</td></tr><tr><td>&nbsp;<hr></td></tr>";
}

echo "</table>";
echo "<a href=proses.php> Klik Disini </a>Isi Form Data Diri";
?>