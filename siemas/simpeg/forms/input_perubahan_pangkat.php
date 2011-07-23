<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<div class="belowribbon">
    <h1>
        Input perubahan pangkat dan golongan
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">

        <div class="module">
            <h2><span>Masukkan data perubahan pangkat dan golongan</span></h2>
            <div class="module-body">
                <table width="100%" class="noborder">
                    <tbody>
                        <tr>
                            <td>Pilih pegawai</td>
                            <td>
                                <select name="sel_pegawai">
                                    <option value="0">-</option>
                                    <?php
                                    for ($j = 1; $j < count($pegawai); $j++) {

                                        echo "<option>{$pegawai[$j]}</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Riwayat pangkat</td>
                            <td>
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>Pangkat</th>
                                            <th>Golongan</th>
                                            <th>TMT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Golongan baru</td>
                            <td>
                                <select name="gol_ruang" id="gol_ruang" onchange="setJabatan(this.options[this.selectedIndex].value)" class="input-short">
                                    <option value="">-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pangkat baru</td>
                            <td><input type="text" name="pangkat" id="pangkat" maxlength="255" class="input-medium"/></td>
                        </tr>
                        <tr>
                            <td>TMT</td>
                            <td><input type="text" name="tmt" maxlength="255" class="datepicker input-medium"/></td>
                        </tr>
                    </tbody>
                </table>

                <script type="text/javascript">

                    var pangkat = new Array();

                    pangkat['I / a'] = "Juru Muda";
                    pangkat['I / b'] = "Juru Muda Tingkat 1";
                    pangkat['I / c'] = "Juru";
                    pangkat['I / d'] = "Juru Tingkat 1";
                    pangkat['II / a'] = "Pengatur Muda";
                    pangkat['II / b'] = "Pengatur Muda Tingkat 1";
                    pangkat['II / c'] = "Pengatur";
                    pangkat['II / d'] = "Pengatur Tingkat 1";
                    pangkat['III / a'] = "Penata Muda";
                    pangkat['III / b'] = "Penata Muda Tingkat 1";
                    pangkat['III / c'] = "Penata";
                    pangkat['III / d'] = "Penata Tingkat 1";
                    pangkat['IV / a'] = "Pembina";
                    pangkat['IV / b'] = "Pembina Tingkat 1";
                    pangkat['IV / c'] = "Pembina Utama Muda";
                    pangkat['IV / d'] = "Pembina Utama Madya";
                    pangkat['IV / e'] = "Pembina Utama";

                    for(var j in pangkat) {

                        document.getElementById("gol_ruang").innerHTML += "<option value='"+j+"'>"+j+"</option>";

                    }

                    function setJabatan(gol_ruang) {

                        document.getElementById("pangkat").value = pangkat[gol_ruang];

                    }

                </script>


            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>