<?php include 'header.php';?>


                <!-- Example table -->
                <div class="module">
                	<h2><span>Laporan Hasil Laboratorium</span></h2>

                    <div class="module-body">
                        <form action="">
                            <table width="614" border="0">
                              <tr>
                                <td width="79">Pasien</td>
                                <td width="15">:</td>
                                <td width="144"><a href="#">Annisa Anastasia </a></td>
                                <td width="81">&nbsp;</td>
                                <td width="111">Dokter </td>
                                <td width="10">:</td>
                                <td width="144">Dr. Dindin</td>
                              </tr>
                              <tr>
                                <td>Umur / JK</td>
                                <td>:</td>
                                <td>20 tahun / Perempuan</td>
                                <td>&nbsp;</td>
                                <td>Tgl Permohonan</td>
                                <td>:</td>
                                <td>Date Picker</td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>Cibogor</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                            <h4>
                              <input type="submit" name="simpan2" value="Cetak" />
                            </h4>
                          <table width="972" class="tablesorter" id="myTable" border="1">
<thead>
                                <tr>
                                    <th width="6%" style="width:5%">No</th>
                                  <th width="10%" style="width:5%">Tgl Pemeriksaan</th>
                                  <th width="14%" style="width:15%">Pemeriksaan</th>
                                  <th width="17%" style="width:16%">No. Sampel</th>
                                  <th width="20%" style="width:16%">Hasil</th>
                                  <th width="18%" style="width:17%">Nilai Rujukan</th>
                                  <th width="15%" style="width:14%">Aksi</th>
          </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td>Date Picker</td>
                                    <td><a href="">Haemoglobin</a></td>
                                    <td><div align="center">
                                      <input type="text" name="no_sampel" size="10">
                                  </div></td>
                                    <td><input type="text" name="haemoglobin" size="30"> </td>
                                    <td><ul>
                                            <li>LK: 14 - 18 g/dl</li>
                                            <li>
                                              <div align="left">PR: 12 - 16 g/dl</div>
                                            </li>
                                        </ul></td>
                                    <td><input type="submit" name="simpan" value="simpan">
                                        <input type="submit" name="ubah" value="ubah">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td>Date Picker</td>
                                    <td><a href="">WIDAL</a></td>
                                    <td><div align="center">
                                      <input type="text" name="no_sampel" size="10">
                                  </div></td>
                                    <td><div align="center">
                                      <select name="widal">
                                        <option value="O">O Antigen</option>
                                        <option value="H">H Antigen</option>
                                      </select>
                                    </div></td>
                                    
                                        <td></td>
                                    <td><input type="submit" name="simpan" value="simpan">
                                        <input type="submit" name="ubah" value="ubah">
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            
                      </form>
                    </div>
                </div> <!-- End .module -->
