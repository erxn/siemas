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
        ->setTitle("Rekap Kunjungan Pasien Umum")
        ->setSubject("Rekapitulasi Kunjungan Pasien UMUM");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Calibri');

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// header

$xls->getActiveSheet()->setTitle("R.Umum " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("A2:AE2")->setCellValueByColumnAndRow(0, 2, "REKAPITULASI KUNJUNGAN PASIEN UMUM");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:AE3")->setCellValueByColumnAndRow(0, 3, "PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:AE4")->setCellValueByColumnAndRow(0, 4, "$bulan $tahun");
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('7')->setRowHeight(25.5);
$xls->getActiveSheet()->getRowDimension('8')->setRowHeight(12.75);

// table header

$xls->getActiveSheet()
        ->mergeCells('A6:A7')
        ->mergeCells('B6:F6')
        ->mergeCells('G6:K6')
        ->mergeCells('L6:P6')
        ->mergeCells('Q6:U6')
        ->mergeCells('V6:Z6')
        ->mergeCells('AA6:AE6')
        ->getStyle('A6:AE8')->getAlignment()->setHorizontal('center')->setVertical('center');

$xls->getActiveSheet()->getStyle('A6:AE8')->getFont()->setSize(10);

// header table

$xls->getActiveSheet()
        ->setCellValue('A6', 'TGL')
        ->setCellValue('B6', 'KUNJUNGAN gigi')
        ->setCellValue('G6', 'KUNJUNGAN BARU')
        ->setCellValue('L6', 'KUNJUNGAN UMUM')
        ->setCellValue('Q6', 'KUNJUNGAN GIGI')
        ->setCellValue('V6', 'KUNJUNGAN KIA')
        ->setCellValue('AA6', 'KUNJUNGAN KB')
        ->setCellValue('B7', 'JML')
        ->setCellValue('C7', 'Pab')
        ->setCellValue('D7', 'Cib')
        ->setCellValue('E7', 'LPKM')
        ->setCellValue('F7', 'Kab')
        ->setCellValue('G7', 'JML')
        ->setCellValue('H7', 'Pab')
        ->setCellValue('I7', 'Cib')
        ->setCellValue('J7', 'LPKM')
        ->setCellValue('K7', 'Kab')
        ->setCellValue('L7', 'JML')
        ->setCellValue('M7', 'Pab')
        ->setCellValue('N7', 'Cib')
        ->setCellValue('O7', 'LPKM')
        ->setCellValue('P7', 'Kab')
        ->setCellValue('Q7', 'JML')
        ->setCellValue('R7', 'Pab')
        ->setCellValue('S7', 'Cib')
        ->setCellValue('T7', 'LPKM')
        ->setCellValue('U7', 'Kab')
        ->setCellValue('V7', 'JML')
        ->setCellValue('W7', 'Pab')
        ->setCellValue('X7', 'Cib')
        ->setCellValue('Y7', 'LPKM')
        ->setCellValue('Z7', 'Kab')
        ->setCellValue('AA7', 'JML')
        ->setCellValue('AB7', 'Pab')
        ->setCellValue('AC7', 'Cib')
        ->setCellValue('AD7', 'LPKM')
        ->setCellValue('AE7', 'Kab')
        ;
$xls->getActiveSheet()->getStyle('A8:AE8')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFD8D8D8');


for ($i = 0; $i <= 30; $i++)
    $xls->getActiveSheet()->setCellValueByColumnAndRow($i, 8, $i+1);

// lebar kolom jadi auto
$xls->getActiveSheet()->getStyle("A6:AE8")->getFont()->setBold(true);
$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(30);

//$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);


$xls->getActiveSheet()->getStyle('A6:AE8')->applyFromArray($styleThinBlackBorderOutline);

// print data

$i=9; foreach ($laporan as $hasil) :

    $xls->getActiveSheet()->setCellValue("A$i", $i-8);
    $xls->getActiveSheet()->setCellValue("B$i", $hasil['umum_pab']+$hasil['umum_cib']+$hasil['umum_LW']+$hasil['umum_LKot']);

    $xls->getActiveSheet()->setCellValue("C$i", $hasil['umum_pab']);
    $xls->getActiveSheet()->setCellValue("D$i", $hasil['umum_cib']);
    $xls->getActiveSheet()->setCellValue("E$i", $hasil['umum_LW']);
    $xls->getActiveSheet()->setCellValue("F$i", $hasil['umum_LKot']);

    $xls->getActiveSheet()->setCellValue("G$i", $hasil['baru_pab']+$hasil['baru_cib']+$hasil['baru_LW']+$hasil['baru_LKot']);
    $xls->getActiveSheet()->setCellValue("H$i", $hasil['baru_pab']);
    $xls->getActiveSheet()->setCellValue("I$i", $hasil['baru_cib']);
    $xls->getActiveSheet()->setCellValue("J$i", $hasil['baru_LW']);
    $xls->getActiveSheet()->setCellValue("K$i", $hasil['baru_LKot']);
    
    $xls->getActiveSheet()->setCellValue("L$i", $hasil['umum_pab']+$hasil['umum_cib']+$hasil['umum_LW']+$hasil['umum_LKot']);
    $xls->getActiveSheet()->setCellValue("M$i", $hasil['umum_pab']);
    $xls->getActiveSheet()->setCellValue("N$i", $hasil['umum_cib']);
    $xls->getActiveSheet()->setCellValue("O$i", $hasil['umum_LW']);
    $xls->getActiveSheet()->setCellValue("P$i", $hasil['umum_LKot']);
    
    $xls->getActiveSheet()->setCellValue("Q$i", $hasil['gigi_pab']+$hasil['gigi_cib']+$hasil['gigi_LW']+$hasil['gigi_LKot']);
    $xls->getActiveSheet()->setCellValue("R$i", $hasil['gigi_pab']);
    $xls->getActiveSheet()->setCellValue("S$i", $hasil['gigi_cib']);
    $xls->getActiveSheet()->setCellValue("T$i", $hasil['gigi_LW']);
    $xls->getActiveSheet()->setCellValue("U$i", $hasil['gigi_LKot']);

    $xls->getActiveSheet()->setCellValue("V$i", $hasil['kia_pab']+$hasil['kia_cib']+$hasil['kia_LW']+$hasil['kia_LKot']);
    $xls->getActiveSheet()->setCellValue("W$i", $hasil['kia_pab']);
    $xls->getActiveSheet()->setCellValue("X$i", $hasil['kia_cib']);
    $xls->getActiveSheet()->setCellValue("Y$i", $hasil['kia_LW']);
    $xls->getActiveSheet()->setCellValue("Z$i", $hasil['kia_LKot']);

    $xls->getActiveSheet()->setCellValue("AA$i", $hasil['kb_pab']+$hasil['kb_cib']+$hasil['kb_LW']+$hasil['kb_LKot']);
    $xls->getActiveSheet()->setCellValue("AB$i", $hasil['kb_pab']);
    $xls->getActiveSheet()->setCellValue("AC$i", $hasil['kb_cib']);
    $xls->getActiveSheet()->setCellValue("AD$i", $hasil['kb_LW']);
    $xls->getActiveSheet()->setCellValue("AE$i", $hasil['kb_LKot']);


    $xls->getActiveSheet()->getStyle("A$i:AE$i")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$i:AE$i")->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
    $xls->getActiveSheet()->getStyle("A$i:AE$i")->applyFromArray($styleThinBlackBorderOutline);

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
    $xls->getActiveSheet()->getStyle("AE$i")->getAlignment()->setHorizontal('center');
$i++; endforeach;

$z = $i-1;
$xls->getActiveSheet()->setCellValue("A$i","JUMLAH");
$xls->getActiveSheet()->setCellValue("B$i","=SUM(B9:B$z)");
$xls->getActiveSheet()->setCellValue("C$i","=SUM(C9:C$z)");
$xls->getActiveSheet()->setCellValue("D$i","=SUM(D9:D$z)");
$xls->getActiveSheet()->setCellValue("E$i","=SUM(E9:E$z)");
$xls->getActiveSheet()->setCellValue("F$i","=SUM(F9:F$z)");
$xls->getActiveSheet()->setCellValue("G$i","=SUM(G9:G$z)");
$xls->getActiveSheet()->setCellValue("H$i","=SUM(H9:H$z)");
$xls->getActiveSheet()->setCellValue("I$i","=SUM(I9:I$z)");
$xls->getActiveSheet()->setCellValue("J$i","=SUM(J9:J$z)");
$xls->getActiveSheet()->setCellValue("K$i","=SUM(K9:K$z)");
$xls->getActiveSheet()->setCellValue("L$i","=SUM(L9:L$z)");
$xls->getActiveSheet()->setCellValue("M$i","=SUM(M9:M$z)");
$xls->getActiveSheet()->setCellValue("N$i","=SUM(N9:N$z)");
$xls->getActiveSheet()->setCellValue("O$i","=SUM(O9:O$z)");
$xls->getActiveSheet()->setCellValue("P$i","=SUM(P9:P$z)");
$xls->getActiveSheet()->setCellValue("Q$i","=SUM(Q9:Q$z)");
$xls->getActiveSheet()->setCellValue("R$i","=SUM(R9:R$z)");
$xls->getActiveSheet()->setCellValue("S$i","=SUM(S9:S$z)");
$xls->getActiveSheet()->setCellValue("T$i","=SUM(T9:T$z)");
$xls->getActiveSheet()->setCellValue("U$i","=SUM(U9:U$z)");
$xls->getActiveSheet()->setCellValue("V$i","=SUM(V9:V$z)");
$xls->getActiveSheet()->setCellValue("W$i","=SUM(W9:W$z)");
$xls->getActiveSheet()->setCellValue("X$i","=SUM(X9:X$z)");
$xls->getActiveSheet()->setCellValue("Y$i","=SUM(Y9:Y$z)");
$xls->getActiveSheet()->setCellValue("Z$i","=SUM(Z9:Z$z)");
$xls->getActiveSheet()->setCellValue("AA$i","=SUM(AA9:AA$z)");
$xls->getActiveSheet()->setCellValue("AB$i","=SUM(AB9:AB$z)");
$xls->getActiveSheet()->setCellValue("AC$i","=SUM(AC9:AC$z)");
$xls->getActiveSheet()->setCellValue("AD$i","=SUM(AD9:AD$z)");
$xls->getActiveSheet()->setCellValue("AE$i","=SUM(AE9:AE$z)");
// output it

$xls->getActiveSheet()->getStyle("A$i:AE$i")->applyFromArray($styleThinBlackBorderOutline);
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
    $xls->getActiveSheet()->getStyle("AE$i")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("A$i:AE$i")->getFont()->setBold(true);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="R.Umum_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");