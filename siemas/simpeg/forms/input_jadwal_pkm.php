<?php include 'header.php'; ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="belowribbon">
    <h1>
        Input jadwal puskesmas
        <input type="submit" class="submit-green" value="Simpan" style="margin-left: 10px"/>
    </h1>
</div>

<div id="page">

    <div class="grid_6" style="width: 48%">
        <div class="module">
            <h2><span>Masukkan jadwal</span></h2>
            <div class="module-table-body">

                <table width="100%">
                    <thead>
                        <tr>
                            <th width="30%">Hari</th>
                            <th width="20%">Buka?</th>
                            <th width="25%">Jam buka</th>
                            <th width="25%">Jam tutup</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>
                                <select name="senin_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="senin_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="senin_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>
                                <select name="selasa_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="selasa_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="selasa_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>
                                <select name="rabu_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="rabu_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="rabu_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>
                                <select name="kamis_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="kamis_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="kamis_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Jum'at</td>
                            <td>
                                <select name="jumat_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="jumat_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="jumat_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>
                                <select name="sabtu_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="sabtu_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="sabtu_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td>
                                <select name="minggu_buka" class="input-long">
                                    <option value="1">Buka</option>
                                    <option value="0" selected="selected">Tutup</option>
                                </select>
                            </td>
                            <td><input type="text" name="minggu_mulai" maxlength="5" class="input-long"/></td>
                            <td><input type="text" name="minggu_selesai" maxlength="5" class="input-long"/></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>