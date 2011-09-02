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

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Daftar Nilai TPP")
        ->setSubject("Daftar Nilai TPP Pegawai Puskesmas Bogor Tengah");

$xls->setActiveSheetIndex(0);

$xls->getDefaultStyle()->getFont()->setName('Arial')->setSize(9);

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// --- PUSKESMAS ---
// header

$xls->getActiveSheet()->setTitle("Puskesmas");

$xls->getActiveSheet()->mergeCells("A2:M2")->setCellValueByColumnAndRow(0, 2, "PENILAIAN TAMBAHAN PERBAIKAN PENGHASILAN");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:M3")->setCellValueByColumnAndRow(0, 3, "PADA PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:M4")->setCellValueByColumnAndRow(0, 4, "Bulan : " . $nama_bulan[$bulan] . ' ' . $tahun);
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(45);

// table header

$xls->getActiveSheet()
        ->setCellValue('A6', 'No')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', 'Jabatan')
        ->setCellValue('D6', 'Jumlah kehadiran ideal')
        ->setCellValue('E6', 'Jumlah kehadiran dicapai')
        ->setCellValue('F6', 'Nilai')
        ->setCellValue('G6', 'Jam kerja efektif ideal')
        ->setCellValue('H6', 'Jam kerja efektif dicapai')
        ->setCellValue('I6', 'Nilai')
        ->setCellValue('J6', 'Jumlah apel ideal')
        ->setCellValue('K6', 'Jumlah apel dicapai')
        ->setCellValue('L6', 'Nilai')
        ->setCellValue('M6', 'TOTAL PENILAIAN');

$xls->getActiveSheet()->getStyle('A6:M6')->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getStyle('A6:M6')->getAlignment()->setVertical('center')->setHorizontal('center')->setWrapText(true);

// data

$baris = 7;
foreach ($tpp_pkm as $data) {

    $xls->getActiveSheet()->setCellValue("A$baris", $baris - 6);
    $xls->getActiveSheet()->setCellValue("B$baris", $data['nama']);
    $xls->getActiveSheet()->setCellValue("C$baris", $data['jabatan']);

    $xls->getActiveSheet()->setCellValue("D$baris", $data['kehadiran_ideal']);
    $xls->getActiveSheet()->setCellValue("E$baris", $data['kehadiran_dicapai']);
    $xls->getActiveSheet()->setCellValue("F$baris", round($data['nilai_kehadiran'], 1));

    $xls->getActiveSheet()->setCellValue("G$baris", $data['jam_efek_ideal']);
    $xls->getActiveSheet()->setCellValue("H$baris", $data['jam_efek_dicapai']);
    $xls->getActiveSheet()->setCellValue("I$baris", round($data['nilai_jam_efek'], 1));

    $xls->getActiveSheet()->setCellValue("J$baris", $data['apel_ideal']);
    $xls->getActiveSheet()->setCellValue("K$baris", $data['apel_dicapai']);
    $xls->getActiveSheet()->setCellValue("L$baris", round($data['nilai_apel'], 1));

    $xls->getActiveSheet()->setCellValue("M$baris", round($data['jumlah'], 1));

    $xls->getActiveSheet()->getStyle("A$baris:M$baris")->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$baris:M$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("A$baris:M$baris")->getAlignment()->setVertical('center');

    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(17);

    $baris++;
}

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setWidth(3.86);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('K')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('L')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('M')->setWidth(10);


// --- BP PEMDA ---
// header

$xls->createSheet();
$xls->setActiveSheetIndex(1);
$xls->getActiveSheet()->setTitle("BP Pemda");

$xls->getActiveSheet()->mergeCells("A2:M2")->setCellValueByColumnAndRow(0, 2, "PENILAIAN TAMBAHAN PERBAIKAN PENGHASILAN");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:M3")->setCellValueByColumnAndRow(0, 3, "PADA BP PEMDA");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:M4")->setCellValueByColumnAndRow(0, 4, "Bulan : " . $nama_bulan[$bulan] . ' ' . $tahun);
$xls->getActiveSheet()->getStyle('A4')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);
$xls->getActiveSheet()->getRowDimension('3')->setRowHeight(18);
$xls->getActiveSheet()->getRowDimension('4')->setRowHeight(18);

$xls->getActiveSheet()->getRowDimension('6')->setRowHeight(45);

// table header

$xls->getActiveSheet()
        ->setCellValue('A6', 'No')
        ->setCellValue('B6', 'Nama')
        ->setCellValue('C6', 'Jabatan')
        ->setCellValue('D6', 'Jumlah kehadiran ideal')
        ->setCellValue('E6', 'Jumlah kehadiran dicapai')
        ->setCellValue('F6', 'Nilai')
        ->setCellValue('G6', 'Jam kerja efektif ideal')
        ->setCellValue('H6', 'Jam kerja efektif dicapai')
        ->setCellValue('I6', 'Nilai')
        ->setCellValue('J6', 'Jumlah apel ideal')
        ->setCellValue('K6', 'Jumlah apel dicapai')
        ->setCellValue('L6', 'Nilai')
        ->setCellValue('M6', 'TOTAL PENILAIAN');

$xls->getActiveSheet()->getStyle('A6:M6')->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getStyle('A6:M6')->getAlignment()->setVertical('center')->setHorizontal('center')->setWrapText(true);

// data

$baris = 7;
foreach ($tpp_bp as $data) {

    $xls->getActiveSheet()->setCellValue("A$baris", $baris - 6);
    $xls->getActiveSheet()->setCellValue("B$baris", $data['nama']);
    $xls->getActiveSheet()->setCellValue("C$baris", $data['jabatan']);

    $xls->getActiveSheet()->setCellValue("D$baris", $data['kehadiran_ideal']);
    $xls->getActiveSheet()->setCellValue("E$baris", $data['kehadiran_dicapai']);
    $xls->getActiveSheet()->setCellValue("F$baris", round($data['nilai_kehadiran'], 1));

    $xls->getActiveSheet()->setCellValue("G$baris", $data['jam_efek_ideal']);
    $xls->getActiveSheet()->setCellValue("H$baris", $data['jam_efek_dicapai']);
    $xls->getActiveSheet()->setCellValue("I$baris", round($data['nilai_jam_efek'], 1));

    $xls->getActiveSheet()->setCellValue("J$baris", $data['apel_ideal']);
    $xls->getActiveSheet()->setCellValue("K$baris", $data['apel_dicapai']);
    $xls->getActiveSheet()->setCellValue("L$baris", round($data['nilai_apel'], 1));

    $xls->getActiveSheet()->setCellValue("M$baris", round($data['jumlah'], 1));

    $xls->getActiveSheet()->getStyle("A$baris:M$baris")->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$baris:M$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("A$baris:M$baris")->getAlignment()->setVertical('center');

    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(17);

    $baris++;
}

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setWidth(3.86);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('G')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('K')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('L')->setWidth(10);
$xls->getActiveSheet()->getColumnDimension('M')->setWidth(10);


// output it

$xls->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Nilai_TPP_' . $nama_bulan[$bulan] . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");