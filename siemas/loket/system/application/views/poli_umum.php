<?php if(isset($antrian)) { ?>
<div style="width: 100%">
  <h4  class="float-right">Total: <?php echo count($antrian) ?> orang</h4>
  <br/>
  <table style="width: 100%">
        <thead>
            <tr>
                <th class="header" style="width: 1%;">No</th>
                <th class="header" style="width: 12%;">Nama</th>
                <th class="header" style="width: 1%;">Umur</th>
                <th class="header" style="width: 22%;">Alamat</th>
                <th class="header" style="width: 8%;">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($antrian as $a) {?>
            <tr>
                <td class="align-center"><?php echo $i++;?></td>
                <td><a href="">Meri Marlina</a></td>
                <td>19 th</td>
                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                <td>Antri</td>
            </tr>
            <?php }?>
            <tr>
                <td class="align-center">1</td>
                <td><a href="">Meri Marlina</a></td>
                <td>19 th</td>
                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                <td>Antri</td>
            </tr>

            <tr>
                <td class="align-center">1</td>
                <td><a href="">Meri Marlina</a></td>
                <td>19 th</td>
                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                <td>Antri</td>
            </tr>
            <tr>
                <td class="align-center">1</td>
                <td><a href="">Meri Marlina</a></td>
                <td>19 th</td>
                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                <td>Sedang diperiksa</td>
            </tr>
            <tr>
                <td class="align-center">1</td>
                <td><a href="">Meri Marlina</a></td>
                <td>19 th</td>
                <td>Jl. Bara IV No.13 Cibogor, Bogor Tengah</td>
                <td>Antri</td>
            </tr>
        </tbody>
    </table>
</div>
<?php }?>