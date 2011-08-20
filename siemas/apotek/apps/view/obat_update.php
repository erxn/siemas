<br/>
<div class="grid_6" style="width: 97%">
<div class="container_12">
        <div class="module">
            <h2><span>Update Obat</span></h2>

                        <form method="POST" action="<?php echo $this->base_url?>index.php/obat/update/<?php echo $daftar->id_obat ; ?>">


            <div class="module-table-body">
                <table >
                    <thead>
                        <tr>
                            <th style="width:30%">ID Obat &nbsp : </th>
                            <th style="width:70%"><?php echo $daftar->id_obat; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Nama Obat &nbsp :</td>
                                <td><input class="input-long" type="text" maxlength="255" name="nbk_obat" value="<?php echo $daftar->nbk_obat; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Satuan Obat &nbsp :</td>
                                <td><input class="input-long" type="text" maxlength="255" name="satuan_obat" value="<?php echo $daftar->satuan_obat; ?>" /></td>
                            </tr>
                            <tr>
                                <td>Stok Obat &nbsp :</td>
                                <td><input class="input-long" type="text" maxlength="255" name="stok_obat" value="<?php echo $daftar->stok_obat; ?>" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" maxlength="255" value="Update" /></td>
                            </tr>
                    </tbody>
                </table>


                <div style="clear: both"></div>
            </div> <!-- End .module-table-body -->

                                    </form>


        </div> <!-- End .module -->
</div> <!-- End .grid_12 -->
</div>