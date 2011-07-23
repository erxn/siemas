<?php include 'header.php'; ?>

<?php include 'list_pegawai.php'; ?>

<script type="text/javascript" src="jquery.js"></script>

<div class="belowribbon">
    <h1>
        Input absensi
    </h1>
</div>

<div id="page">

    <div style="margin: 0px 1%">
        <div class="module">
            <h2><span>Pilih tanggal</span></h2>
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

                $bulan_ini = intval(date("n"));

                function getCalendar($month, $year) {
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
	<table id="calendar" width="100%" border="1">
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
                            else
                                echo '<td class="days"><a href="#">' . $day . '</a></td>';
                        }
                        echo '</tr>';
                    }

                    echo '</table>';

                    return ob_get_clean();
                }
                ?>

                <p>Tahun <strong><?php echo date("Y") ?></strong> Bulan
                    <select id="bulan">
                        <?php for ($i = 1; $i <= 12; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($i == $bulan_ini)
                                echo 'selected="selected"'; ?>><?php echo $bulan[$i]; ?></option>
                                <?php endfor; ?>
                    </select>
                </p>

                <p>
                    Klik pada tanggal yang akan diinput absensi
                </p>

                <?php echo getCalendar($bulan_ini, intval(date("Y"))); ?>

            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>