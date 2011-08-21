
            <tr class="odd">
                <td>Anamnesis:</td>
                <td><textarea name="n_anamnesis" rows="5" cols="40" input=""></textarea></td>
            </tr>

            <tr>
                <td>Diagnosa:</td>
                <td><textarea name="n_diagnosa" rows="5" cols="40"></textarea></td>
            </tr>

            <tr class="odd">
                <td>Penyakit:</td>
                <td> <select name="n_penyakit">
                        <?php foreach ($data_peny as $dp) {?>
                        <option value="<?php echo $dp['id_penyakit'];?>"><?php echo $dp['nama_penyakit'];?></option>
                            <?php } ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Layanan Gigi:</td>
                <td>
                    <select name="n_layanan">
                        <?php  foreach ($data_lay as $dl) { ?>
                        <option value="<?php echo $dl['id_layanan']; ?>"><?php echo $dl['nama_layanan'];?></option>
                            <?php } ?>
                    </select>

                </td>
            </tr>

            <tr class="odd">
                <td>Keterangan:</td>

                <td><textarea name="n_ket" rows="5" cols="40"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><a style="text-decoration: none" href=""><input name="submit"  type="submit" class="submit-green" value="Simpan" name="simpan"></a></td>

            </tr>
   