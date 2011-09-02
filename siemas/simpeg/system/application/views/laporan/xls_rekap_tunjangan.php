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
        ->setTitle("Daftar Pembayaran TPP")
        ->setSubject("Daftar Pembayaran TPP Puskesmas Bogor Tengah");

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

// header

$xls->getActiveSheet()->mergeCells("A2:H2")->setCellValueByColumnAndRow(0, 2, "DAFTAR PEMBAYARAN TAMBAHAN TUNJANGAN PENGHASILAN");
$xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16)->setBold(true);
$xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A3:H3")->setCellValueByColumnAndRow(0, 3, "PUSKESMAS BOGOR TENGAH");
$xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');

$xls->getActiveSheet()->mergeCells("A4:H4")->setCellValueByColumnAndRow(0, 4, "Bulan : " . $nama_bulan[$bulan] . ' ' . $tahun);
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
        ->setCellValue('D6', 'Gol')
        ->setCellValue('E6', 'Nilai')
        ->setCellValue('F6', 'Jumlah Tunjangan')
        ->setCellValue('G6', 'PPh 21')
        ->setCellValue('H6', 'Jumlah Diterima');

$xls->getActiveSheet()->getStyle('A6:H6')->applyFromArray($styleThinBlackBorderOutline);
$xls->getActiveSheet()->getStyle('A6:H6')->getAlignment()->setVertical('center')->setHorizontal('center')->setWrapText(true);

// data

$baris = 7;
foreach ($daftar_tunjangan as $data) {

    $j = $this->pegawai->get_jabatan_terakhir($data['id_pegawai']);
    $g = $this->pegawai->get_pangkat_terakhir($data['id_pegawai']);
    $golongan = explode(' / ', $g['golongan']);
    $golongan = $golongan[0];

    $xls->getActiveSheet()->setCellValue("A$baris", $baris - 6);
    $xls->getActiveSheet()->setCellValue("B$baris", $data['nama']);
    $xls->getActiveSheet()->setCellValue("C$baris", $j['jabatan']);
    $xls->getActiveSheet()->setCellValue("D$baris", $golongan);
    $xls->getActiveSheet()->setCellValue("E$baris", round($data['tpp'], 1));

    $xls->getActiveSheet()->setCellValue("F$baris", $data['tunjangan']);
    $xls->getActiveSheet()->setCellValue("G$baris", $data['pph21']);
    $xls->getActiveSheet()->setCellValue("H$baris", "= F$baris - G$baris");

    $xls->getActiveSheet()->getStyle("A$baris:H$baris")->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$baris:E$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("A$baris:H$baris")->getAlignment()->setVertical('center');

    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(17);

    $xls->getActiveSheet()->getStyle("F$baris:H$baris")->getNumberFormat()->setFormatCode('_(* #,##0_);_(* (#,##0);_(* "-"_);_(@_)');

    $baris++;
}

// column width

$xls->getActiveSheet()->getColumnDimension('A')->setWidth(3.86);
$xls->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('D')->setWidth(3.5);
$xls->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$xls->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$xls->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$xls->getActiveSheet()->getColumnDimension('H')->setWidth(15);

// output it

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Pembayaran_TPP_' . $nama_bulan[$bulan] . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");