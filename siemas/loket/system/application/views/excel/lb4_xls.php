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
        ->setTitle("")
        ->setSubject("Laporan Kunjungan");

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

$xls->getActiveSheet()->setTitle("Lap. Kunjungan " . $bulan . ' ' . $tahun);

$xls->getActiveSheet()->mergeCells("A2:AD2")->setCellValueByColumnAndRow(0, 2, "REKAPITULASI SETORAN");
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
        ->mergeCells('A6:A7')
        ->mergeCells('B6:B7')
        ->mergeCells('C6:C7')
        ->mergeCells('D6:P6')
        ->mergeCells('Q6:Q7')
        ->mergeCells('P6:P7')
        ->getStyle('A6:Q8')->getAlignment()->setHorizontal('center')->setVertical('center');

$xls->getActiveSheet()->getStyle('A6:Q7')->getFont()->setSize(12);
$xls->getActiveSheet()->getStyle('A8:Q8')->getFont()->setSize(10);

// header table

$xls->getActiveSheet()
        ->setCellValue('A6', 'TGL')
        ->setCellValue('B6', 'BP.UMUM')
        ->setCellValue('C7', 'GIGI')
        ->setCellValue('D7', 'LABOR')
        ->setCellValue('E7', 'THORAX')
        ->setCellValue('F7', 'EKG')
        ->setCellValue('G7', 'Gigi')
        ->setCellValue('H7', 'RB')
        ->setCellValue('I7', 'SP.A')
        ->setCellValue('J7', 'SP.D')
        ->setCellValue('K7', 'USG')
        ->setCellValue('L7', 'KB')
        ->setCellValue('M7', 'TT.CATIN')
        ->setCellValue('N7', 'KIR')
        ->setCellValue('O7', 'MANTUOX')
        ->setCellValue('P6', 'JUMLAH')
        ->setCellValue('Q6', 'Ket.')
        ;

//$xls->getActiveSheet()->getStyle('A6')->getFill()->getStartColor()->setRGB('C0C0C0');

for ($i = 0; $i < 17; $i++)
    $xls->getActiveSheet()->setCellValueByColumnAndRow($i, 8, $i+1);

// lebar kolom jadi auto
$xls->getActiveSheet()->getStyle("A6:Q8")->getFont()->setBold(true);
//$xls->getActiveSheet()->getColumnDimension("A")->setWidth(8);
$xls->getActiveSheet()->getColumnDimension("B")->setWidth(10);
$xls->getActiveSheet()->getColumnDimension("C")->setWidth(10);
$xls->getActiveSheet()->getColumnDimension("D")->setWidth(10);
$xls->getActiveSheet()->getColumnDimension("E")->setWidth(10);

$xls->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
//$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('K')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('L')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('M')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('N')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('O')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('P')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('Q')->setWidth(10);

$xls->getActiveSheet()->getStyle('A6:Q8')->applyFromArray($styleThinBlackBorderOutline);

// print data

$i=9; foreach ($laporan as $hasil) :
    //print_r($hasil);exit;
    $xls->getActiveSheet()->setCellValue("A$i", $i-8);
    $xls->getActiveSheet()->setCellValue("B$i", $hasil['umum']);
    $xls->getActiveSheet()->setCellValue("C$i", " ");
    $xls->getActiveSheet()->setCellValue("D$i", $hasil['labor']);
    $xls->getActiveSheet()->setCellValue("E$i", $hasil['rontgen']);

    $xls->getActiveSheet()->setCellValue("F$i", $hasil['ekg']);
    $xls->getActiveSheet()->setCellValue("G$i", $hasil['haji']);
    $xls->getActiveSheet()->setCellValue("H$i", $hasil['rb']);

    $xls->getActiveSheet()->setCellValue("I$i", $hasil['anak']);
    $xls->getActiveSheet()->setCellValue("J$i", " ");
    $xls->getActiveSheet()->setCellValue("K$i", $hasil['usg']);
    $xls->getActiveSheet()->setCellValue("L$i", '');
    $xls->getActiveSheet()->setCellValue("M$i", $hasil['catin']);
    $xls->getActiveSheet()->setCellValue("N$i", '');
    $xls->getActiveSheet()->setCellValue("O$i", $hasil['mantuox']);
    $xls->getActiveSheet()->setCellValue("P$i", "=SUM(B$i:O$i");

    $xls->getActiveSheet()->getStyle("A$i:P$i")->getAlignment()->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$i:P$i")->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
    $xls->getActiveSheet()->getStyle("A$i:Q$i")->applyFromArray($styleThinBlackBorderOutline);

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

$i++; endforeach;

//echo "i= ".$i;exit;
// 30 hari
if($i==40)
    $z=40;
//31 hari
else if($i==39) $z=39;

$y=10;

//echo $i." ".$z;exit;
$xls->getActiveSheet()->setCellValue("A$i","JUMLAH");
$xls->getActiveSheet()->setCellValue("B$i","SUM(B$y:B$z)");
$xls->getActiveSheet()->setCellValue("C$i","SUM(C$y:C$z)");
$xls->getActiveSheet()->setCellValue("D$i","SUM(D$y:D$z)");
$xls->getActiveSheet()->setCellValue("E$i","SUM(E$y:E$z)");
$xls->getActiveSheet()->setCellValue("F$i","SUM(F$y:F$z)");
$xls->getActiveSheet()->setCellValue("G$i","SUM(G$y:G$z)");
$xls->getActiveSheet()->setCellValue("H$i","SUM(H$y:H$z)");
$xls->getActiveSheet()->setCellValue("I$i","SUM(I$y:I$z)");
$xls->getActiveSheet()->setCellValue("J$i","SUM(J$y:J$z)");
$xls->getActiveSheet()->setCellValue("K$i","SUM(K$y:K$z)");
$xls->getActiveSheet()->setCellValue("L$i","SUM(L$y:L$z)");
$xls->getActiveSheet()->setCellValue("M$i","SUM(M$y:M$z)");
$xls->getActiveSheet()->setCellValue("N$i","SUM(N$y:N$z)");
$xls->getActiveSheet()->setCellValue("O$i","SUM(O$y:O$z)");
$xls->getActiveSheet()->setCellValue("P$i","SUM(P$y:P$z)");

// output it

$xls->getActiveSheet()->getStyle("A$i:Q$i")->applyFromArray($styleThinBlackBorderOutline);
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

    $xls->getActiveSheet()->getStyle("A$i:Q$i")->getFont()->setBold(true);
    $xls->getActiveSheet()->getRowDimension($i)->setRowHeight(25);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="R.Setoran_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");