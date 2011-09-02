<?php

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Daftar Nilai DP3")
        ->setSubject("Daftar Nilai DP3");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// --- 1 tahun doang ---
// header

if ($tahun_2 == 0) {

    $xls->getActiveSheet()->mergeCells("A2:L2")->setCellValueByColumnAndRow(0, 2, "DAFTAR NILAI DP3");
    $xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
    $xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->mergeCells("A3:L3")->setCellValueByColumnAndRow(0, 3, "UPTD PUSKESMAS BOGOR TENGAH");
    $xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
    $xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->mergeCells("A4:L4")->setCellValueByColumnAndRow(0, 4, "TAHUN " . $tahun_1);
    $xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
    $xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
    $xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
    $xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

    $xls->getActiveSheet()->getRowDimension('6')->setRowHeight(30);

    $xls->getActiveSheet()
            ->setCellValue('A6', 'No')
            ->setCellValue('B6', 'Nama')
            ->setCellValue('C6', 'Kesetiaan')
            ->setCellValue('D6', 'Prestasi Kerja')
            ->setCellValue('E6', 'Tanggung Jawab')
            ->setCellValue('F6', 'Ketaatan')
            ->setCellValue('G6', 'Kejujuran')
            ->setCellValue('H6', 'Kerja Sama')
            ->setCellValue('I6', 'Prakarsa')
            ->setCellValue('J6', 'Kepemimpinan')
            ->setCellValue('K6', 'Jumlah')
            ->setCellValue('L6', 'Rata-rata');

    $xls->getActiveSheet()->getStyle('A6:L6')->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle('A6:L6')->getAlignment()->setVertical('center')->setHorizontal('center')->setWrapText(true);

    // data

    $baris = 7;
    foreach ($daftar_nilai_1 as $data) {

        $xls->getActiveSheet()->setCellValue("A$baris", $baris - 6);
        $xls->getActiveSheet()->setCellValue("B$baris", $data['nama']);

        $xls->getActiveSheet()->setCellValue("C$baris", $data['kesetiaan']);
        $xls->getActiveSheet()->setCellValue("D$baris", $data['prestasi_kerja']);
        $xls->getActiveSheet()->setCellValue("E$baris", $data['tanggung_jawab']);
        $xls->getActiveSheet()->setCellValue("F$baris", $data['ketaatan']);
        $xls->getActiveSheet()->setCellValue("G$baris", $data['kejujuran']);
        $xls->getActiveSheet()->setCellValue("H$baris", $data['kerjasama']);
        $xls->getActiveSheet()->setCellValue("I$baris", $data['prakarsa']);
        $xls->getActiveSheet()->setCellValue("J$baris", $data['kepemimpinan']);
        
        $xls->getActiveSheet()->setCellValue("K$baris", "=SUM(C$baris:J$baris)");
        $xls->getActiveSheet()->setCellValue("L$baris", "=AVERAGE(C$baris:J$baris)");

        $xls->getActiveSheet()->getStyle("A$baris:L$baris")->applyFromArray($styleThinBlackBorderOutline);
        $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
        $xls->getActiveSheet()->getStyle("C$baris:L$baris")->getAlignment()->setHorizontal('center');
        $xls->getActiveSheet()->getStyle("A$baris:L$baris")->getAlignment()->setVertical('center');

        $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(18);

        $baris++;
    }

    // colwidth

    $xls->getActiveSheet()->getColumnDimension('A')->setWidth(4.5);
    $xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $xls->getActiveSheet()->getColumnDimension('C')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('D')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('E')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('F')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('G')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('H')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('I')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('J')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('K')->setWidth(12);
    $xls->getActiveSheet()->getColumnDimension('L')->setWidth(12);

    // output it

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="DP3_' . $tahun_1 . '.xls"');

} else {

    $xls->getActiveSheet()->mergeCells("A2:V2")->setCellValueByColumnAndRow(0, 2, "DAFTAR NILAI DP3");
    $xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
    $xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->mergeCells("A3:V3")->setCellValueByColumnAndRow(0, 3, "UPTD PUSKESMAS BOGOR TENGAH");
    $xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
    $xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->mergeCells("A4:V4")->setCellValueByColumnAndRow(0, 4, "TAHUN " . $tahun_1 . ' DAN ' . $tahun_2);
    $xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
    $xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

    $xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
    $xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
    $xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

    $xls->getActiveSheet()->getRowDimension('6')->setRowHeight(30);
    $xls->getActiveSheet()->getRowDimension('7')->setRowHeight(30);

    $xls->getActiveSheet()->mergeCells("A6:A7");
    $xls->getActiveSheet()->mergeCells("B6:B7");
    $xls->getActiveSheet()->mergeCells("C6:D6");
    $xls->getActiveSheet()->mergeCells("E6:F6");
    $xls->getActiveSheet()->mergeCells("G6:H6");
    $xls->getActiveSheet()->mergeCells("I6:J6");
    $xls->getActiveSheet()->mergeCells("K6:L6");
    $xls->getActiveSheet()->mergeCells("M6:N6");
    $xls->getActiveSheet()->mergeCells("O6:P6");
    $xls->getActiveSheet()->mergeCells("Q6:R6");
    $xls->getActiveSheet()->mergeCells("S6:T6");
    $xls->getActiveSheet()->mergeCells("U6:V6");

    $xls->getActiveSheet()
            ->setCellValue('A6', 'No')
            ->setCellValue('B6', 'Nama')
            ->setCellValue('C6', 'Kesetiaan')
            ->setCellValue('E6', 'Prestasi Kerja')
            ->setCellValue('G6', 'Tanggung Jawab')
            ->setCellValue('I6', 'Ketaatan')
            ->setCellValue('K6', 'Kejujuran')
            ->setCellValue('M6', 'Kerja Sama')
            ->setCellValue('O6', 'Prakarsa')
            ->setCellValue('Q6', 'Kepemimpinan')
            ->setCellValue('S6', 'Jumlah')
            ->setCellValue('U6', 'Rata-rata');

    for($a = 2; $a <= 21; $a += 2) {
        $xls->getActiveSheet()->setCellValueByColumnAndRow($a, 7, $tahun_1);
        $xls->getActiveSheet()->setCellValueByColumnAndRow($a+1, 7, $tahun_2);
    }

    $xls->getActiveSheet()->getStyle('A6:V7')->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle('A6:V7')->getAlignment()->setVertical('center')->setHorizontal('center')->setWrapText(true);

    // data

    $baris = 8;
    for ($i = 0; $i < count($daftar_nilai_1); $i++) {

        $xls->getActiveSheet()->setCellValue("A$baris", $baris - 7);
        $xls->getActiveSheet()->setCellValue("B$baris", $daftar_nilai_1[$i]['nama']);

        $xls->getActiveSheet()->setCellValue("C$baris", $daftar_nilai_1[$i]['kesetiaan']);
        $xls->getActiveSheet()->setCellValue("E$baris", $daftar_nilai_1[$i]['prestasi_kerja']);
        $xls->getActiveSheet()->setCellValue("G$baris", $daftar_nilai_1[$i]['tanggung_jawab']);
        $xls->getActiveSheet()->setCellValue("I$baris", $daftar_nilai_1[$i]['ketaatan']);
        $xls->getActiveSheet()->setCellValue("K$baris", $daftar_nilai_1[$i]['kejujuran']);
        $xls->getActiveSheet()->setCellValue("M$baris", $daftar_nilai_1[$i]['kerjasama']);
        $xls->getActiveSheet()->setCellValue("O$baris", $daftar_nilai_1[$i]['prakarsa']);
        $xls->getActiveSheet()->setCellValue("Q$baris", $daftar_nilai_1[$i]['kepemimpinan']);

        $xls->getActiveSheet()->setCellValue("D$baris", $daftar_nilai_2[$i]['kesetiaan']);
        $xls->getActiveSheet()->setCellValue("F$baris", $daftar_nilai_2[$i]['prestasi_kerja']);
        $xls->getActiveSheet()->setCellValue("H$baris", $daftar_nilai_2[$i]['tanggung_jawab']);
        $xls->getActiveSheet()->setCellValue("J$baris", $daftar_nilai_2[$i]['ketaatan']);
        $xls->getActiveSheet()->setCellValue("L$baris", $daftar_nilai_2[$i]['kejujuran']);
        $xls->getActiveSheet()->setCellValue("N$baris", $daftar_nilai_2[$i]['kerjasama']);
        $xls->getActiveSheet()->setCellValue("P$baris", $daftar_nilai_2[$i]['prakarsa']);
        $xls->getActiveSheet()->setCellValue("R$baris", $daftar_nilai_2[$i]['kepemimpinan']);

        $xls->getActiveSheet()->setCellValue("S$baris", "= C$baris + E$baris + G$baris + I$baris + K$baris + M$baris + O$baris + Q$baris");
        $xls->getActiveSheet()->setCellValue("U$baris", "= (C$baris + E$baris + G$baris + I$baris + K$baris + M$baris + O$baris + Q$baris) / 8");

        $xls->getActiveSheet()->setCellValue("T$baris", "= D$baris + F$baris + H$baris + J$baris + L$baris + N$baris + P$baris + R$baris");
        $xls->getActiveSheet()->setCellValue("V$baris", "= (D$baris + F$baris + H$baris + J$baris + L$baris + N$baris + P$baris + R$baris) / 8");

        $xls->getActiveSheet()->getStyle("A$baris:V$baris")->applyFromArray($styleThinBlackBorderOutline);
        $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
        $xls->getActiveSheet()->getStyle("C$baris:V$baris")->getAlignment()->setHorizontal('center');
        $xls->getActiveSheet()->getStyle("A$baris:V$baris")->getAlignment()->setVertical('center');

        $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(18);

        $baris++;
    }

    // colwidth

    $xls->getActiveSheet()->getColumnDimension('A')->setWidth(4.5);
    $xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $xls->getActiveSheet()->getColumnDimension('C')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('D')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('E')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('F')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('G')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('H')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('I')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('J')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('K')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('L')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('M')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('N')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('O')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('P')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('Q')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('R')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('S')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('T')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('U')->setWidth(6);
    $xls->getActiveSheet()->getColumnDimension('V')->setWidth(6);

    // output it

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="DP3_' . $tahun_1 . '_' . $tahun_2 . '.xls"');

}
 
$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");