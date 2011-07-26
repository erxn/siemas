<?php $this->load->view('header') ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="belowribbon">
    <h1>
        Input perhitungan TPP
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Persentase masing-masing penilaian terhadap nilai TPP</span></h2>
            <div class="module-table-body">
                <table width="100%" border="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kehadiran</td>
                            <td><input type="text" name="kehadiran" maxlength="4" class="input-short"/> %</td>
                        </tr>
                        <tr>
                            <td>Jam efektif</td>
                            <td><input type="text" name="jam_efektif" maxlength="4" class="input-short"/> %</td>
                        </tr>
                        <tr>
                            <td>Jumlah apel</td>
                            <td><input type="text" name="jumlah_apel" maxlength="4" class="input-short"/> %</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>