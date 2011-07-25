<?php

$nama = array(
    "Abrar",
    "Dimas",
    "Meri",
    "Annisa"
);

?>

<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
    </tr>
    <?php foreach($nama as $elemen) { ?>
    <tr>
        <td></td>
        <td><?php echo $elemen; ?></td>
    </tr>
    <?php } ?>
</table>