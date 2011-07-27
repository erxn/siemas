<?php

echo $judul;
echo "<br/>";

foreach($pegawai as $p) {
    echo $p['nip'];
    echo $p['nama'];
    echo "<br/>";
}

?>
