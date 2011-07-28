<?php

echo $judul;
echo "<br/>";

foreach($pasien as $p) {
    echo $p['id_pasien'];
     echo "<br/>";
    echo $p['tanggal_pendaftaran'];
     echo "<br/>";
    echo $p['nama_pasien'];
     echo "<br/>";
    echo $p['jk'];
     echo "<br/>";
    echo $p['status_pelayanan'];
    echo "<br/>";
}

?>
