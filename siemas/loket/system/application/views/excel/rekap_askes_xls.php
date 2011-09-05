<?php

$nama_bulan = array(
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

$tahun = $laporan[0]['tahun'];
$bulan = $nama_bulan[$laporan[0]['bulan']];

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Rekap Kunjungan Pasien ASKES")
        ->setSubject("Rekapitulasi Kunjungan Pasien ASKES");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Arial');

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// header

$xls->getActiveSheet()->setTitle("R.Askes " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("A2:AD2")->setCellValueByColumnAndRow(0, 2, "REKAPITULASI KUNJUNGAN PASIEN ASKES");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:AD3")->setCellValueByColumnAndRow(0, 3, "PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:AD4")->setCellValueByColumnAndRow(0, 4, "$bulan $tahun");
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(18.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('8')->setRowHeight(12.75);

// table header

$xls->getActiveSheet()
        ->mergeCells('A6:A8')
        ->mergeCells('B6:E6')
        ->mergeCells('F6:I6')
        ->mergeCells('J6:M6')
        ->mergeCells('N6:N8')
        ->mergeCells('O6:AD6')
        ->mergeCells('B7:B8')
        ->mergeCells('C7:C8')
        ->mergeCells('D7:D8')
        ->mergeCells('E7:E8')
        ->mergeCells('F7:F8')
        ->mergeCells('G7:G8')
        ->mergeCells('H7:H8')
        ->mergeCells('I7:I8')
        ->mergeCells('J7:J8')
        ->mergeCells('K7:K8')
        ->mergeCells('L7:L8')
        ->mergeCells('M7:M8')
        ->mergeCells('O7:S7')
        ->mergeCells('T7:X7')
        ->mergeCells('Y7:AC7')
        ->mergeCells('K7:K8')
        ->mergeCells('L7:L8')
        ->mergeCells('M7:M8')
        ->mergeCells('AD7:AD8')
        ->getStyle('A6:AD9')->getAlignment()->setHorizontal('center')->setVertical('center');

$xls->getActiveSheet()->getStyle('A6:AD8')->getFont()->setSize(10);

// header table

$xls->getActiveSheet()
        ->setCellValue('A6', 'TGL')
        ->setCellValue('B6', 'ASKES UMUM')
        ->setCellValue('B7', 'Gigi')
        ->setCellValue('C7', 'Kia')
        ->setCellValue('D7', 'Lab')
        ->setCellValue('E7', 'Trx')
        ->setCellValue('F7', 'Gigi')
        ->setCellValue('G7', 'Kia')
        ->setCellValue('H7', 'Lab')
        ->setCellValue('I7', 'Trx')
        ->setCellValue('J7', 'Gigi')
        ->setCellValue('K7', 'Kia')
        ->setCellValue('L7', 'Lab')
        ->setCellValue('M7', 'Trx')
        ->setCellValue('F6', 'ASKES GIGI')
        ->setCellValue('J6', 'ASKES KIA')
        ->setCellValue('N6', 'Rujukan')
        ->setCellValue('O6', 'ASKESKIN')
        ->setCellValue('O7', 'Pabaton')
        ->setCellValue('T7', 'Cibogor')
        ->setCellValue('Y7', 'Luar Wilayah')
        ->setCellValue('AD7', 'GR')
        ->setCellValue('O8', 'Jml')
        ->setCellValue('P8', 'Gigi')
        ->setCellValue('Q8', 'KIA')
        ->setCellValue('R8', 'Lab')
        ->setCellValue('S8', 'Trx')
        ->setCellValue('T8', 'Jml')
        ->setCellValue('U8', 'Gigi')
        ->setCellValue('V8', 'KIA')
        ->setCellValue('W8', 'Lab')
        ->setCellValue('X8', 'Trx')
        ->setCellValue('Y8', 'Jml')
        ->setCellValue('Z8', 'Gigi')
        ->setCellValue('AA8', 'KIA')
        ->setCellValue('AB8', 'Lab')
        ->setCellValue('AC8', 'Trx')
        ;

//$xls->getActiveSheet()->getStyle('A6')->getFill()->getStartColor()->setRGB('C0C0C0');

for ($i = 0; $i < 30; $i++)
    $xls->getActiveSheet()->setCellValueByColumnAndRow($i, 9, $i+1);

// lebar kolom jadi auto
$xls->getActiveSheet()->getStyle("A6:AD9")->getFont()->setBold(true);
//$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(4);
$xls->getActiveSheet()->getColumnDimension("C")->setWidth(4);
$xls->getActiveSheet()->getColumnDimension("D")->setWidth(4);
$xls->getActiveSheet()->getColumnDimension("E")->setWidth(4);

$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('F')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('G')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('H')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('I')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('J')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('K')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('L')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('M')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('N')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('O')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('P')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('Q')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('R')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('S')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('T')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('U')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('V')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('W')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('X')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('Y')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('Z')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('AA')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('AB')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('AC')->setWidth(4);
$xls->getActiveSheet()->getColumnDimension('AD')->setWidth(4);

$xls->getActiveSheet()->getStyle('A6:AD10')->applyFromArray($styleThinBlackBorderOutline);

// print data

$i=10; foreach ($laporan as $hasil) :

    $xls->getActiveSheet()->setCellValue("A$i", $i-9);
    $xls->getActiveSheet()->setCellValue("B$i", $hasil['umum_pab']);
    $xls->getActiveSheet()->setCellValue("C$i", $hasil['umum_cib']);
    $xls->getActiveSheet()->setCellValue("D$i", $hasil['umum_LW']);
    $xls->getActiveSheet()->setCellValue("E$i", $hasil['umum_LKot']);

    $xls->getActiveSheet()->setCellValue("F$i", $hasil['gigi_pab']);
    $xls->getActiveSheet()->setCellValue("G$i", $hasil['gigi_cib']);
    $xls->getActiveSheet()->setCellValue("H$i", $hasil['gigi_LW']);
    $xls->getActiveSheet()->setCellValue("I$i", $hasil['gigi_LKot']);

    $xls->getActiveSheet()->setCellValue("J$i", $hasil['kia_pab']);
    $xls->getActiveSheet()->setCellValue("K$i", $hasil['kia_cib']);
    $xls->getActiveSheet()->setCellValue("L$i", $hasil['kia_LW']);
    $xls->getActiveSheet()->setCellValue("M$i", $hasil['kia_LKot']);

    $xls->getActiveSheet()->setCellValue("N$i", $hasil['rujuk']);

    $xls->getActiveSheet()->setCellValue("O$i", $hasil['jam_pab_lab']+$hasil['jam_pab_lab']+$hasil['jam_pab_kia']+$hasil['jam_pab_gigi']);
    $xls->getActiveSheet()->setCellValue("P$i", $hasil['jam_pab_gigi']);
    $xls->getActiveSheet()->setCellValue("Q$i", $hasil['jam_pab_kia']);
    $xls->getActiveSheet()->setCellValue("R$i", $hasil['jam_pab_lab']);
    $xls->getActiveSheet()->setCellValue("S$i", $hasil['jam_pab_radio']);

    $xls->getActiveSheet()->setCellValue("T$i", $hasil['jam_cib_lab']+$hasil['jam_cib_lab']+$hasil['jam_cib_kia']+$hasil['jam_cib_gigi']);
    $xls->getActiveSheet()->setCellValue("U$i", $hasil['jam_cib_gigi']);
    $xls->getActiveSheet()->setCellValue("V$i", $hasil['jam_cib_kia']);
    $xls->getActiveSheet()->setCellValue("W$i", $hasil['jam_cib_lab']);
    $xls->getActiveSheet()->setCellValue("X$i", $hasil['jam_cib_radio']);

    $xls->getActiveSheet()->setCellValue("Y$i",$hasil['jam_lw_lab']+$hasil['jam_lw_lab']+$hasil['jam_lw_kia']+$hasil['jam_lw_gigi']);
    $xls->getActiveSheet()->setCellValue("Z$i", $hasil['jam_lw_gigi']);
    $xls->getActiveSheet()->setCellValue("AA$i", $hasil['jam_lw_kia']);
    $xls->getActiveSheet()->setCellValue("AB$i", $hasil['jam_lw_lab']);
    $xls->getActiveSheet()->setCellValue("AC$i", $hasil['jam_lw_radio']);

        $xls->getActiveSheet()->setCellValue("AD$i", $hasil['gr']);

    $xls->getActiveSheet()->getStyle("A$i:AD$i")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$i:AD$i")->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
    $xls->getActiveSheet()->getStyle("A$i:AD$i")->applyFromArray($styleThinBlackBorderOutline);

    // A,E,F,G,I,L: center

    $xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("B$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("C$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("H$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("J$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("K$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("M$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("N$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("O$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("P$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Q$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("R$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("S$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("T$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("U$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("V$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("W$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("X$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Y$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Z$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AA$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AB$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AC$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AD$i")->getAlignment()->setHorizontal('center');
    
$i++; endforeach;

// 30 hari
if($i==41)
    $z=40;
//31 hari
else if($i==40) $z=39;

$y=10;

//echo $i." ".$z;exit;
$xls->getActiveSheet()->setCellValue("A$i","JUMLAH");
$xls->getActiveSheet()->setCellValue("B$i","=SUM(B$y:B$z)");
$xls->getActiveSheet()->setCellValue("C$i","=SUM(C$y:C$z)");
$xls->getActiveSheet()->setCellValue("D$i","=SUM(D$y:D$z)");
$xls->getActiveSheet()->setCellValue("E$i","=SUM(E$y:E$z)");
$xls->getActiveSheet()->setCellValue("F$i","=SUM(F$y:F$z)");
$xls->getActiveSheet()->setCellValue("G$i","=SUM(G$y:G$z)");
$xls->getActiveSheet()->setCellValue("H$i","=SUM(H$y:H$z)");
$xls->getActiveSheet()->setCellValue("I$i","=SUM(I$y:I$z)");
$xls->getActiveSheet()->setCellValue("J$i","=SUM(J$y:J$z)");
$xls->getActiveSheet()->setCellValue("K$i","=SUM(K$y:K$z)");
$xls->getActiveSheet()->setCellValue("L$i","=SUM(L$y:L$z)");
$xls->getActiveSheet()->setCellValue("M$i","=SUM(M$y:M$z)");
$xls->getActiveSheet()->setCellValue("N$i","=SUM(N$y:N$z)");
$xls->getActiveSheet()->setCellValue("O$i","=SUM(O$y:O$z)");
$xls->getActiveSheet()->setCellValue("P$i","=SUM(P$y:P$z)");
$xls->getActiveSheet()->setCellValue("Q$i","=SUM(Q$y:Q$z)");
$xls->getActiveSheet()->setCellValue("R$i","=SUM(R$y:R$z)");
$xls->getActiveSheet()->setCellValue("S$i","=SUM(S$y:S$z)");
$xls->getActiveSheet()->setCellValue("T$i","=SUM(T$y:T$z)");
$xls->getActiveSheet()->setCellValue("U$i","=SUM(U$y:U$z)");
$xls->getActiveSheet()->setCellValue("V$i","=SUM(V$y:V$z)");
$xls->getActiveSheet()->setCellValue("W$i","=SUM(W$y:W$z)");
$xls->getActiveSheet()->setCellValue("X$i","=SUM(X$y:X$z)");
$xls->getActiveSheet()->setCellValue("Y$i","=SUM(Y$y:Y$z)");
$xls->getActiveSheet()->setCellValue("Z$i","=SUM(Z$y:Z$z)");
$xls->getActiveSheet()->setCellValue("AA$i","=SUM(AA$y:AA$z)");
$xls->getActiveSheet()->setCellValue("AB$i","=SUM(AB$y:AB$z)");
$xls->getActiveSheet()->setCellValue("AC$i","=SUM(AC$y:AC$z)");
$xls->getActiveSheet()->setCellValue("AD$i","=SUM(AD$y:AD$z)");

// output it

$xls->getActiveSheet()->getStyle("A$i:AD$i")->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getStyle("A$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("B$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("C$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("E$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("F$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("G$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("H$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("I$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("J$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("K$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("L$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("M$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("N$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("O$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("P$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Q$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("R$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("S$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("T$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("U$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("V$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("W$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("X$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Y$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("Z$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AA$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AB$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AC$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("AD$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("A$i:AD$i")->getFont()->setBold(true);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="R.Askes_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");