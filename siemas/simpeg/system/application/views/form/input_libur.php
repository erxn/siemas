<?php $this->load->view('header'); ?>

<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="template/calendar.css"/>

<div class="belowribbon">
    <h1>
        Input hari libur nasional
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Input hari libur</span></h2>
            <div class="module-body">
                <?php
                $bulan = array(
                    "",
                    "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                );

                function getCalendar($month, $year, $holidays) {
                    // Use the PHP time() function to find out the timestamp for the current time
                    $current_time = time();

                    // Get the first day of the month
                    $month_start = mktime(0, 0, 0, $month, 1, $year);

                    // Get the name of the month
                    $month_name = date('F', $month_start);

                    // Figure out which day of the week the month starts on.
                    $first_day = date('D', $month_start);

                    // Assign an offset to decide which number of day of the week the month starts on.
                    switch ($first_day) {
                        case "Sun":
                            $offset = 0;
                            break;
                        case "Mon":
                            $offset = 1;
                            break;
                        case "Tue":
                            $offset = 2;
                            break;
                        case "Wed":
                            $offset = 3;
                            break;
                        case "Thu":
                            $offset = 4;
                            break;
                        case "Fri":
                            $offset = 5;
                            break;
                        case "Sat":
                            $offset = 6;
                            break;
                    }

                    // determine how many days were in last month.
                    //	Note: The cal_days_in_month() function returns the number of days in a month for the specified year and calendar.
                    //  Gregorian Calendar: http://en.wikipedia.org/wiki/Gregorian_calendar
                    //  Define this using the constant: CAL_GREGORIAN
                    if ($month == 1)
                        $num_days_last = cal_days_in_month(CAL_GREGORIAN, 12, ($year - 1));
                    else
                        $num_days_last = cal_days_in_month(CAL_GREGORIAN, ($month - 1), $year);

                    // determine how many days are in the this month.
                    $num_days_current = cal_days_in_month(CAL_GREGORIAN, $month, $year);

                    // Count through the days of the current month -- building an array
                    for ($i = 0; $i < $num_days_current; $i++) {
                        $num_days_array[] = $i + 1;
                    }

                    // Count through the days of last month -- building an array
                    for ($i = 0; $i < $num_days_last; $i++) {
                        $num_days_last_array[] = '';
                    }

                    if ($offset > 0) {
                        $offset_correction = array_slice($num_days_last_array, -$offset, $offset);
                        $new_count = array_merge($offset_correction, $num_days_array);
                        $offset_count = count($offset_correction);
                    } else {
                        $new_count = $num_days_array;
                    }

                    // How many days do we now have?
                    $current_num = count($new_count);

                    // Our display is to be 35 cells so if we have less than that we need to dip into next month
                    if ($current_num > 35) {
                        $num_weeks = 6;
                        $outset = (42 - $current_num);
                    } else if ($current_num < 35) {
                        $num_weeks = 5;
                        $outset = (35 - $current_num);
                    }
                    if ($current_num == 35) {
                        $num_weeks = 5;
                        $outset = 0;
                    }

                    // Outset Correction
                    for ($i = 1; $i <= $outset; $i++) {
                        $new_count[] = '';
                    }

                    // Now let's "chunk" the $new_count array
                    // into weeks. Each week has 7 days
                    // so we will array_chunk it into 7 days.
                    $weeks = array_chunk($new_count, 7);

                    // Start the output buffer so we can output our calendar nicely
                    ob_start();

                    // Build the heading portion of the calendar table
                    echo <<<EOS
                        <table class="calendar" width="100%" border="1">
                        <tr class="daynames">
                                <th>Minggu</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                        </tr>
EOS;

                    foreach ($weeks AS $week) {
                        echo '<tr class="week">';
                        foreach ($week as $day) {
                            if ($day == date('d', $current_time) && $month == date('m', $current_time) && $year == date('Y', $current_time))
                                echo '<td class="today"><a href="#">' . $day . '</a></td>';
                            else if(in_array($day, $holidays))
                                echo '<td class="libur"><a href="#">' . $day . '</a></td>';
                            else
                                echo '<td class="days"><a href="#">' . $day . '</a></td>';
                        }
                        echo '</tr>';
                    }

                    echo '</table>';

                    return ob_get_clean();
                }

                $tahun = array(intval(date('Y')) - 4, intval(date('Y')) - 3, intval(date('Y')) - 2, intval(date('Y')) - 1, intval(date('Y')));

                ?>

                <p>Tahun
                    <select id="tahun">
                        <?php for ($i = 0; $i < count($tahun); $i++) : ?>
                            <option value="<?php echo $tahun[$i]; ?>" <?php if ($tahun[$i] == $tahun_ini)
                                echo 'selected="selected"'; ?>><?php echo $tahun[$i]; ?></option>
                                <?php endfor; ?>
                    </select>
                    Bulan
                    <select id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                                    <option value="<?php echo $i; ?>" <?php if ($i == $bulan_ini)
                                        echo 'selected="selected"'; ?>><?php echo $bulan[$i]; ?></option>
                                <?php endfor; ?>
                        </select>
                        <input type="button" value="Tampilkan" class="submit-green" onclick="window.location = 'index.php/absensi/input_libur/' + $('#tahun').val() + '/' + $('#bulan').val()"/>
                    </p>

<!--                    <div class="notification n-information">
                        Klik pada tanggal libur Puskesmas, baik libur nasional maupun libur-libur lainnya
                    </div>-->

                    <table width="100%" border="0" style="border: none" id="pkm">
                        <tr style="border: none">
                            <td style="padding-right: 20px; border: none" width="75%">
                                <h4>Puskesmas Bogor Tengah</h4>
                                <?php echo getCalendar($bulan_ini, $tahun_ini, $tanggal_libur_pkm_all); ?>
                            </td>
                            <td style="border: none" width="25%">
                                <h4>Libur bulan <?php echo $bulan[$bulan_ini]; ?> (PKM Bogor Tengah)</h4>
                                <ul class="bullets">
                                    <?php foreach($libur_pkm as $libur) : ?>
                                    <li><?php echo date("j F Y", strtotime($libur['tanggal'])); ?> - <?php echo $libur['keterangan']; ?> - <input type="button" value="Hapus" onclick="hapus(<?php echo $libur['id_tanggal_libur']; ?>)"/></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                    </table>

                    <table width="100%" border="0" style="border: none" id="bp">
                        <tr style="border: none">
                            <td style="padding-right: 20px; border: none" width="75%">
                                <h4>BP Pemda</h4>
                                <?php echo getCalendar($bulan_ini, $tahun_ini, $tanggal_libur_bp_all); ?>
                            </td>
                            <td style="border: none" width="25%">
                                <h4>Libur bulan <?php echo $bulan[$bulan_ini]; ?> (BP Pemda)</h4>
                                <ul class="bullets">
                                    <?php foreach($libur_bp as $libur) : ?>
                                    <li><?php echo date("j F Y", strtotime($libur['tanggal'])); ?> - <?php echo $libur['keterangan']; ?> - <input type="button" value="Hapus" onclick="hapus(<?php echo $libur['id_tanggal_libur']; ?>)"/></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>
    </div>

    <div id="popup_libur" class="inline_popup">
        <form action="" method="post" onsubmit="if($('#keterangan_libur').val() == '') return false;">
            <h4 id="tanggal_libur"></h4>
            <input type="hidden" value="0" id="bp_pemda" name="bp_pemda"/>
            <input type="hidden" id="tanggal" name="tanggal"/>
            <input type="text" class="input-long" style="width: 200px;" id="keterangan_libur" name="keterangan"/>
            <input type="submit" value="Simpan" class="submit-green" style="margin: 0px" name="submit"/>
            <input type="button" value="Batal" class="submit-gray" style="margin: 0px" onclick="$('#popup_libur').fadeOut()"/>
        </form>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
            $('#pkm table.calendar a').click(function(){
                inputLibur($(this), 0);
                return false;
            });
            $('#bp table.calendar a').click(function(){
                inputLibur($(this), 1);
                return false;
            });
        });

        function inputLibur(t, bp) {

            var tanggal = $(t).text();
            var bulan   = document.getElementById('bulan').options[$('#bulan').val() - 1].innerHTML;
            var tahun   = $('#tahun').val();

            $('#popup_libur').fadeOut('fast', function(){

                if(bp == 1) $('#bp_pemda').val("1");
                else $('#bp_pemda').val("0");

                $('#tanggal_libur').text(tanggal + " " + bulan + " " + tahun + " adalah libur:");
                $('#tanggal').val(tahun + "-" + $('#bulan').val() + "-" + tanggal);
                $(this).css({left: $(t).offset().left + 'px', top: $(t).offset().top + 25 + 'px'}).fadeIn()

            });

            $('#keterangan_libur').focus();

        }

        function hapus(id) {
            if(confirm('Hapus data ini?'))
                window.location = 'index.php/absensi/hapus_libur/' + id + '/' + <?php echo $tahun_ini ?> + '/' + <?php echo $bulan_ini ?>;
        }

    </script>

<?php $this->load->view('footer'); ?>