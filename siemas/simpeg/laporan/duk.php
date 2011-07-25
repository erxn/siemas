<?php include 'header.php'; ?>

<script type="text/javascript" src="template/jquery.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $("tr:nth-child(even)").addClass("even");
    })


</script>

<div class="belowribbon">
    <h1>
        Daftar urut kepangkatan (<?php echo date("Y"); ?>)
    </h1>
</div>

<div id="page" style="margin-top: 0px;">
    <div style="margin: 0px 1%">

        <div class="module">
            <h2><span>Pilihan</span></h2>
            <div class="module-body">
                <strong>Tampilkan kolom:</strong>
                <input type="checkbox" name="nama" checked="checked"/> Nama
                <input type="checkbox" name="nip" checked="checked"/> NIP
                <input type="checkbox" name="pangkat" checked="checked"/> Pangkat
                <input type="checkbox" name="masa_kerja" checked="checked"/> Masa kerja
                <input type="checkbox" name="pendidikan" checked="checked"/> Pendidikan
                <input type="checkbox" name="ttl" checked="checked"/> TTL
                <input type="checkbox" name="jabatan" checked="checked"/> Jabatan
                <input type="checkbox" name="kenaikan_gaji" checked="checked"/> Kenaikan gaji
                <input type="checkbox" name="npwp"/> NPWP
                <input type="checkbox" name="unit_kerja"/> Unit kerja |
                <strong>Urutkan berdasarkan:</strong>
                <select name="urut">
                    <option value="0">Jabatan (struktural)</option>
                    <option value="1">Pangkat (fungsional)</option>
                </select>
                <input type="submit" class="submit-green" value="Tampilkan"/>
            </div>
        </div>


        <div class="module">
            <h2><span>Daftar urut kepangkatan</span></h2>
            <div class="module-table-body">
                <table border="1">
                    <tbody>
                        <tr>
                            <th rowspan="2">NO.</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">NIP</th>
                            <th colspan="2">Pangkat</th>
                            <th colspan="2">Masa Kerja</th>
                            <th colspan="2">Pendidikan</th>
                            <th rowspan="2">Tempat dan Tanggal Lahir</th>
                            <th rowspan="2">Jabatan</th>
                            <th rowspan="2">Kenaikan Gaji YAD</th>
                        </tr>

                        <tr>
                            <th>Golongan / Ruang</th>
                            <th>TMT</th>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Nama</th>
                            <th>Tahun Ijazah</th>
                        </tr>

<!--                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                        </tr>-->

                        <tr>
                            <td>1</td>

                            <td>Dr. ILHAM CHAIDIR</td>

                            <td>19700902 200003 1 004</td>

                            <td>Penata Tk. I - III/d</td>

                            <td>01-10-08</td>

                            <td>12</td>

                            <td>1</td>

                            <td>FK. UI</td>

                            <td>
                                1994</td>

                            <td>Temanggung, 02-09-1970</td>

                            <td>Ka. UPTD Puskesmas</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>
                            <td>2</td>

                            <td>Dr. YOHANA MARI YUSTINI</td>

                            <td>19560327 198302 2 001</td>

                            <td>Pembina Utama Muda - IV/c</td>

                            <td>01-04-09</td>

                            <td>26</td>

                            <td>2</td>

                            <td>FK Sebelas Maret Surakarta</td>

                            <td>
                                1982</td>

                            <td>Magelang, 27-03-1956</td>

                            <td>Dokter Gigi Madya</td>

                            <td>01-02-2011</td>
                        </tr>

                        <tr>
                            <td>3</td>

                            <td>Drg. MELLYAWATI</td>

                            <td>19570207 198403 2 002</td>

                            <td>Pembina Utama Muda - IV/c</td>

                            <td>01-04-09</td>

                            <td>25</td>

                            <td>1</td>

                            <td>S1 Fakultas Kedokteran Gigi UPDMD Moestopo</td>

                            <td>
                                1982</td>

                            <td>Magelang, 07-02-1957</td>

                            <td>Dokter Gigi Madya</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>
                            <td>4</td>

                            <td>Dr. DINDIN A. SETIAWATY</td>

                            <td>19580830 198803 2 001</td>

                            <td>Pembina Utama Muda - IV/c</td>

                            <td>01-04-10</td>

                            <td>22</td>

                            <td>1</td>

                            <td><span>S1 Fakultas Kedokteran UNPAD
                                    Bandung</span></td>

                            <td>
                                1986</td>

                            <td>Bogor, 30-08-1958</td>

                            <td>Dokter</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>
                            <td>5</td>

                            <td>Dr. LINA RUFLINA</td>

                            <td>19571102 198803 2 002</td>

                            <td>Pembina Tk. I - IV/b</td>

                            <td>01-04-07</td>

                            <td>19</td>

                            <td>1</td>

                            <td><span>S1 Fakultas Kedokteran YARSI
                                    Jakarta</span></td>

                            <td>
                                1987</td>

                            <td>Sukabumi, 02-11-1957</td>

                            <td>Dokter</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>
                            <td>6</td>

                            <td>Drg. SITI MILYARNI REMIKA, MM</td>

                            <td>19640212 199103 2 007</td>

                            <td>Pembina Tk. I - IV/b</td>

                            <td>
                                01-10-10</td>

                            <td>19</td>

                            <td>7</td>

                            <td><span>S1 FKG UI th. 1990, S2 ABI Surabaya</span></td>

                            <td>
                                2007</td>

                            <td>Jakarta, 12-02-1964</td>

                            <td>Dokter Gigi</td>

                            <td>01-03-2011</td>
                        </tr>

                        <tr>

                            <td>7</td>

                            <td>ROSMIATI</td>

                            <td>19560525 198111 2 001</td>

                            <td>Penata Tk. I - III/d</td>

                            <td>01-10-05</td>

                            <td>18</td>

                            <td>11</td>

                            <td>SPR</td>

                            <td>
                                1978</td>

                            <td>Belitung, 25-05-1956</td>

                            <td>Perawat</td>

                            <td>01-11-2010</td>
                        </tr>

                        <tr>

                            <td>8</td>

                            <td>SADIYAH, AMKG</td>

                            <td>19620307 198212 2 002</td>

                            <td>Penata Tk. I - III/d</td>

                            <td>01-10-06</td>

                            <td>18</td>

                            <td>10</td>

                            <td>SPRG DEPKES Thn 1982,D3 JKG DEPKES</td>

                            <td>
                                2010</td>

                            <td>Tegal, 07-03-1962</td>

                            <td>Perawat Gigi</td>

                            <td>01-12-2011</td>
                        </tr>

                        <tr>

                            <td>9</td>

                            <td>Drg. KARINA AMALIA</td>

                            <td>19740311 200604 2 011</td>

                            <td>Penata Tk. I - III/d</td>

                            <td>01-10-10</td>

                            <td>4</td>

                            <td>6</td>

                            <td><span>FKG UNPAD</span></td>

                            <td>
                                1999</td>

                            <td>Bogor, 11-03-1974</td>

                            <td>Dokter Gigi</td>

                            <td>01-04-2012</td>
                        </tr>

                        <tr>

                            <td>10</td>

                            <td>SUGIHARYATI, AMKeb</td>

                            <td>19700119 199202 2 001</td>

                            <td>Penata - III/c</td>

                            <td>
                                01-04-09</td>

                            <td>12</td>

                            <td>2</td>

                            <td>SPK RSIJ Th 1988,PPB th 92,Akbid Depkes</td>

                            <td>
                                2007</td>

                            <td>Bogor, 19-01-1970</td>

                            <td>Bidan Penyelia</td>

                            <td>01-02-2011</td>
                        </tr>

                        <tr>

                            <td>11</td>

                            <td>HUSNA</td>

                            <td>19631103 198901 2 001</td>

                            <td>Penata - III/c</td>

                            <td>
                                01-04-09</td>

                            <td>15</td>

                            <td>3</td>

                            <td>SAA Yayasan Imam Bonjol, STLKF Jakarta</td>

                            <td>
                                1992</td>

                            <td>Padang, 03-11-1963</td>

                            <td>Asisten Apoteker</td>

                            <td>01-01-2012</td>
                        </tr>

                        <tr>

                            <td>12</td>

                            <td>ENENG SURTININGSIH, AMKep</td>

                            <td>19700322 199003 2 005</td>

                            <td>Penata - III/c</td>

                            <td>01-10-09</td>

                            <td>15</td>

                            <td>7</td>

                            <td>SPK thn 89,D3 Keperawatan DEPKES</td>

                            <td>
                                2004</td>

                            <td>Karawang, 22-03-1970</td>

                            <td>Perawat</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>

                            <td>13</td>

                            <td>ENDAH PURASANTI, AMKeb</td>

                            <td>19691208 199003 2 002</td>

                            <td>Penata - III/c</td>

                            <td>01-10-09</td>

                            <td>14</td>

                            <td>7</td>

                            <td><span>SPK Th 88,PPB SPKth 90, Akbid
                                    Poltekes</span></td>

                            <td>
                                2008</td>

                            <td>Jakarta, 08-12-1969</td>

                            <td>Bidan Penyelia</td>

                            <td>01-03-2011</td>
                        </tr>

                        <tr>
                            <td>14</td>

                            <td>DWIJO KURJIANTO, AMAK</td>

                            <td>19660417 198803 1 016</td>

                            <td>Penata - III/c</td>

                            <td>
                                01-04-10</td>

                            <td>17</td>

                            <td>1</td>

                            <td>Pekarya Kesehatan th 1988, D3 Analis</td>

                            <td>
                                2007</td>

                            <td>Bogor, 17-04-1966</td>

                            <td>Pranata Labkes</td>

                            <td>01-03-2011</td>
                        </tr>

                        <tr>

                            <td>15</td>

                            <td>SEPTY MARHAENY, AMKep</td>

                            <td>19650929 198803 2 005</td>

                            <td>Penata Muda Tk. I - III/b</td>

                            <td>01-04-06</td>

                            <td>16</td>

                            <td>1</td>

                            <td>D3 Keperawatan DEPKES RI Jakarta</td>

                            <td>
                                1987</td>

                            <td>Tanjungkarang, 29-09-1965</td>

                            <td>Perawat</td>

                            <td>01-03-2012</td>
                        </tr>

                        <tr>

                            <td>16</td>

                            <td>FEBBY HENDRIYANI S.</td>

                            <td>19700102 199203 2 004</td>

                            <td>Penata Muda Tk. I - III/b</td>

                            <td>01-10-10</td>

                            <td>13</td>

                            <td>7</td>

                            <td>SPAG Bandung</td>

                            <td>
                                1989</td>

                            <td>Bandung, 02-01-1970</td>

                            <td>Tata Usaha</td>

                            <td>01-03-2011</td>
                        </tr>

                        <tr>

                            <td>17</td>

                            <td>NINA ANDRIYANTI, AMKL</td>

                            <td>19800826 200501 2 006</td>

                            <td>Penata Muda - III/a</td>

                            <td>01-10-10</td>

                            <td>3</td>

                            <td>9</td>

                            <td>D3 Akademi Kesehatan Lingkungan</td>

                            <td>
                                2004</td>

                            <td>Jakarta, 26-08-1980</td>

                            <td>Sanitarian</td>

                            <td><span>01-01-2011</span></td>
                        </tr>

                        <tr>

                            <td>18</td>

                            <td>RIDWANUDIN HARIS, AMKep</td>

                            <td>19790402 200604 1 015</td>

                            <td>Penata Muda - III/a</td>

                            <td>01-10-10</td>

                            <td>5</td>

                            <td>3</td>

                            <td>AKPER YPIB Majalengka</td>

                            <td>
                                2002</td>

                            <td>Majalengka, 08-04-1979</td>

                            <td>Perawat</td>

                            <td>01-07-2011</td>
                        </tr>

                        <tr>

                            <td>19</td>

                            <td>MARICE SINORITA, AMKeb</td>

                            <td>19810302 200604 2 017</td>

                            <td>Penata Muda - III/a</td>

                            <td>01-10-10</td>

                            <td>2</td>

                            <td>6</td>

                            <td>AKBID DEPKES Bogor</td>

                            <td>
                                2002</td>

                            <td>Bogor, 02-03-1981</td>

                            <td>Bidan</td>

                            <td>01-04-2012</td>
                        </tr>

                        <tr>

                            <td>20</td>

                            <td>T A R P I N, AMRad</td>

                            <td>19770207 200212 1 002</td>

                            <td>Pengatur Tk. I - II/d</td>

                            <td>01-10-07</td>

                            <td>7</td>

                            <td>10</td>

                            <td>D3 ATRO Jurusan Radiologi dan Radioterapi</td>

                            <td>
                                2001</td>

                            <td>Indrmayu, 07-02-1977</td>

                            <td>Radiografer</td>

                            <td>01-12-2010</td>
                        </tr>

                        <tr>
                            <td>21</td>

                            <td>MARYANI, A.Md Kp</td>

                            <td>19740313 200902 2 001</td>

                            <td>Pengatur - II/c</td>

                            <td>01-11-10</td>

                            <td>4</td>

                            <td>10</td>

                            <td><span>D3 Akper Wacana Metro Lampung</span></td>

                            <td>
                                1996</td>

                            <td>Lampung, 13-03-1974</td>

                            <td>Perawat</td>

                            <td><span>01-01-2011</span></td>
                        </tr>

                        <tr>
                            <td>22</td>

                            <td>IIS AISAH</td>

                            <td>19690928 199101 2 002</td>

                            <td>Pengatur - II/c</td>

                            <td>01-10-08</td>

                            <td>14</td>

                            <td>9</td>

                            <td><br /></td>

                            <td><br /></td>

                            <td>Pacet, 28-09-1969</td>

                            <td>Pelaksana</td>

                            <td><span>01-01-2011</span></td>
                        </tr>

                        <tr>
                            <td>23</td>

                            <td>MAD SOLEH</td>

                            <td>19590306 199209 1 001</td>

                            <td>Pengatur Muda Tk. I - II/b</td>

                            <td>01-10-09</td>

                            <td>11</td>

                            <td>1</td>

                            <td>UP SMA</td>

                            <td>
                                2003</td>

                            <td>Bogor, 06-03-1959</td>

                            <td>Pelaksana</td>

                            <td>01-09-2011</td>
                        </tr>

                        <tr>
                            <td>24</td>

                            <td>AGTI NURVITASARI, SKM</td>

                            <td>19861226 201001 2
                                017</td>

                            <td>Penata Muda - III/a</td>

                            <td>
                                01-01-10</td>

                            <td>0</td>

                            <td>0</td>

                            <td>S1 FKM Univ. Siliwangi
                                Tasikmalaya</td>

                            <td>
                                2008</td>

                            <td>Tasikmalaya,
                                26-12-1986</td>

                            <td>Pelaksana</td>

                            <td>01-01-2012</td>
                        </tr>

                        <tr>
                            <td>25</td>

                            <td>NIDA NURAIDA, AMdG</td>

                            <td>19830104 201101 2 005</td>

                            <td>Pengatur - II/c</td>

                            <td>1/1/2011</td>

                            <td>0</td>

                            <td>0</td>

                            <td>D3 Akademi Gizi Jakarta</td>

                            <td>
                                2004</td>

                            <td>Jakarta, 4 Januari 1983</td>

                            <td>Pelaksana Gizi</td>

                            <td>1/1/2013</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>