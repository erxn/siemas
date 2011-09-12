<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//view
$objPHPExcel = new PHPExcel();

// border
$styleThinBlackBorderOutline = array(
    'borders' => array(
        'outline' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

$styleThinBlackBorderAll = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// Align
$styleAlignHorizontalCenter = array(
    'alignment' => array(
        'horizontal' => Style_Alignment::HORIZONTAL_CENTER,
    ),
);

$styleAlignVerticalCenter = array(
    'alignment' => array(
        'vertical' => Style_Alignment::VERTICAL_CENTER,
    ),
);

// Set properties
$objPHPExcel->getProperties()->setCreator("Siemas")
        ->setLastModifiedBy("085710236116")
        ->setTitle("Rekap Tahunan Tindakan Gigi")
        ->setSubject("Rekap Tahunan Tindakan Gigi");
$objPHPExcel->getActiveSheet()->getPageSetup()
        ->setOrientation(Worksheet_PageSetup::ORIENTATION_LANDSCAPE)
        ->setPaperSize(Worksheet_PageSetup::PAPERSIZE_A4)
        ->setFitToWidth(1)->setFitToHeight(0);

$objPHPExcel->getActiveSheet()->getPageMargins()->setTop(0.75)
        ->setRight(0.4)
        ->setLeft(0.4)
        ->setBottom(0.75);


// Set Cell excell
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(3.22);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(43);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(10);

// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('D2:J2')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A5:O200')->getFont()->setSize(9);


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D2:J2')->setCellValueByColumnAndRow(3, 2, "Laporan Kegiatan Tahunan BP Gigi ");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:B4')->setCellValueByColumnAndRow(0, 4, "Kota  :  Bogor");

//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('A5:A6')->setCellValueByColumnAndRow(0, 5, "NO")
        ->mergeCells('B5:B6')->setCellValueByColumnAndRow(1, 5, "Kegiatan")
        ->mergeCells('C5:N5')->setCellValueByColumnAndRow(2, 5, "Bulan")
        ->mergeCells('O5:O6')->setCellValueByColumnAndRow(14, 5, "Jumlah")
        ->setCellValueByColumnAndRow(2, 6, "Jan")
        ->setCellValueByColumnAndRow(3, 6, "Feb")
        ->setCellValueByColumnAndRow(4, 6, "Mar")
        ->setCellValueByColumnAndRow(5, 6, "Apr")
        ->setCellValueByColumnAndRow(6, 6, "Mei")
        ->setCellValueByColumnAndRow(7, 6, "Jun")
        ->setCellValueByColumnAndRow(8, 6, "Jul")
        ->setCellValueByColumnAndRow(9, 6, "Agt")
        ->setCellValueByColumnAndRow(10, 6, "Sept")
        ->setCellValueByColumnAndRow(11, 6, "Okt")
        ->setCellValueByColumnAndRow(12, 6, "Nov")
        ->setCellValueByColumnAndRow(13, 6, "des")
        ->setCellValueByColumnAndRow(0, 7, "I")
        ->setCellValueByColumnAndRow(1, 7, "KUNJUNGAN PUSKESMAS")
        ->setCellValueByColumnAndRow(1, 8, "Jumlah penduduk wilayah kerja puskesmas")
        ->setCellValueByColumnAndRow(1, 9, "Jumlah kunjungan baru rawat jalan gigi ke puskesmas")
        ->setCellValueByColumnAndRow(1, 10, "Jumlah kunjungan lama rawat jalan gigi ke puskesmas")
        ->setCellValueByColumnAndRow(1, 11, "Jumlah BUMIL di wilayah kerja puskesmas")
        ->setCellValueByColumnAndRow(1, 12, "Jumlah kunjungan BRJG Bumil")
        ->setCellValueByColumnAndRow(1, 13, "Jumlah kunjungan LRJG Bumil")
        ->setCellValueByColumnAndRow(1, 14, "Jumlah anak prasekolah di wilayah kerja PKM")
        ->setCellValueByColumnAndRow(1, 15, "Jumlah kunjungan BRJG anak prasekolah")
        ->setCellValueByColumnAndRow(1, 16, "Jumlah kunjungan LRJG anak prasekolah")
        ->setCellValueByColumnAndRow(1, 17, "Jumlah kunjungan BRJG anak SD/MI")
        ->setCellValueByColumnAndRow(1, 18, "Jumlah kunjungan LRJG anak SD/MI")
        ->setCellValueByColumnAndRow(0, 20, "II")
        ->setCellValueByColumnAndRow(1, 20, "DIAGNOSA/JENIS KELAINAN PELAYANAN MEDIK GIGI")
        ->setCellValueByColumnAndRow(1, 21, "Karies gigi")
        ->setCellValueByColumnAndRow(1, 22, "Penyakit pulpa & jaringan periapikal")
        ->setCellValueByColumnAndRow(1, 23, "Gingivitis & jaringan periodontal")
        ->setCellValueByColumnAndRow(1, 24, "Gangguan gigi & jaringan lainnya")
        ->setCellValueByColumnAndRow(1, 25, "Penyakit rongga mulut")
        ->setCellValueByColumnAndRow(0, 27, "III")
        ->setCellValueByColumnAndRow(1, 27, "JENIS KEGIATAN PELAYANAN MEDIK GIGI")
        ->setCellValueByColumnAndRow(1, 28, "Tumpakan gigi tetap")
        ->setCellValueByColumnAndRow(1, 29, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 30, "Tumpatan gigi sulung")
        ->setCellValueByColumnAndRow(1, 31, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 32, "Pengobatan Pulpa")
        ->setCellValueByColumnAndRow(1, 33, "Pengobatan periodontal")
        ->setCellValueByColumnAndRow(1, 34, "pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 35, "pengobatan lain-lain")
        ->setCellValueByColumnAndRow(1, 36, "jumlah rujukan")
        ->setCellValueByColumnAndRow(0, 38, "IV")
        ->setCellValueByColumnAndRow(1, 38, "PROGRAM PROMOTIF & PREVENTIF UKGS")
        ->setCellValueByColumnAndRow(1, 39, "Jumlah SD/MI di wilayah kerja puskesmas")
        ->setCellValueByColumnAndRow(1, 40, "Jumlah SD/MI UKGS Binaan")
        ->setCellValueByColumnAndRow(1, 41, "Jumlah frekuensi kunjungan petugas ke SD/MI UKGS Binaan")
        ->setCellValueByColumnAndRow(1, 42, "Penyuluhan kesgilut di SD UKGS")
        ->setCellValueByColumnAndRow(1, 43, "Jumlah SD/MI yang melaksanakan sikat gigi masal")
        ->setCellValueByColumnAndRow(1, 44, "Pelayanan asuhan pada anak SD UKGS")
        ->setCellValueByColumnAndRow(1, 45, "Tahap I(Paket Minimal)")
        ->setCellValueByColumnAndRow(1, 46, "Tahap II(Paket Optimal)")
        ->setCellValueByColumnAndRow(1, 47, "Tahap III (Paket Paripurna)")
        ->setCellValueByColumnAndRow(1, 48, "Jumlah murid SD/MI yang diperiksa")
        ->setCellValueByColumnAndRow(0, 50, "V")
        ->setCellValueByColumnAndRow(1, 50, "PROGRAM KURATIF SD UKGS")
        ->setCellValueByColumnAndRow(1, 51, "Murid kelas selektif yg membutuhkan perawatan")
        ->setCellValueByColumnAndRow(1, 52, "Murid kelas selaktif yang mendapat perawatan")
        ->setCellValueByColumnAndRow(1, 53, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 54, "Tumpatan gigi sulung")
        ->setCellValueByColumnAndRow(1, 55, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 56, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 57, "Pengobatan pulpa")
        ->setCellValueByColumnAndRow(1, 58, "Pengobatan periodontal")
        ->setCellValueByColumnAndRow(1, 59, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 60, "Rujukan ke puskesmas/RS/dll")
        ->setCellValueByColumnAndRow(0, 50, "VI")
        ->setCellValueByColumnAndRow(1, 50, "PROGRAM UKGMD")
        ->setCellValueByColumnAndRow(1, 51, "Jumlah desa diwilayah kerja")
        ->setCellValueByColumnAndRow(1, 52, "Jumlah desa Binaan UKGMD")
        ->setCellValueByColumnAndRow(1, 53, "Jumlah frekuensi penyuluhan KEsgilut ke desa")
        ->setCellValueByColumnAndRow(1, 54, "Jumlah Posyandu dengan UKGMD")
        ->setCellValueByColumnAndRow(1, 55, "Pratama")
        ->setCellValueByColumnAndRow(1, 56, "Madya")
        ->setCellValueByColumnAndRow(1, 57, "Purnama")
        ->setCellValueByColumnAndRow(1, 58, "Mandiri")
        ->setCellValueByColumnAndRow(1, 59, "Jumlah kunjungan petugas ke posyandu")
        ->setCellValueByColumnAndRow(1, 60, "Jumlah masyarakat yang diperiksa")
        ->setCellValueByColumnAndRow(1, 61, "Jumlah penderita yang dirujuk ke puskesmas")
        ->setCellValueByColumnAndRow(1, 62, "Dewasa")
        ->setCellValueByColumnAndRow(1, 63, "anak balita")
        ->setCellValueByColumnAndRow(0, 65, "VII")
        ->setCellValueByColumnAndRow(1, 65, "RUJUKAN GIGI")
        ->setCellValueByColumnAndRow(1, 66, "Rujukan gigi ke Rumah Sakit")
        ->setCellValueByColumnAndRow(1, 67, "Rujukan gigi ke Unit lain")
        ->setCellValueByColumnAndRow(1, 68, "Rujukan gigi dari Rumah Sakit")
        ->setCellValueByColumnAndRow(1, 69, "Rujukan gigi dari Unit lain")
        ->setCellValueByColumnAndRow(0, 82, "8")
        ->setCellValueByColumnAndRow(0, 71, "VIII")
        ->setCellValueByColumnAndRow(1, 71, "DATA USAHA KESEHATAN SEKOLAH")
        ->setCellValueByColumnAndRow(1, 72, "Jumlah TK Pemerintah/Negeri")
        ->setCellValueByColumnAndRow(1, 73, "Jumlah TK Swasta")
        ->setCellValueByColumnAndRow(1, 74, "Jumlah TK UKGM Binaan")
        ->setCellValueByColumnAndRow(1, 75, "Jumlah SD/MI Pemerintah/Negeri")
        ->setCellValueByColumnAndRow(1, 76, "Jumlah SD/MI Swasta")
        ->setCellValueByColumnAndRow(1, 77, "Jumlah murid kelas I-VI")
        ->setCellValueByColumnAndRow(1, 78, "Jumlah murid Kelas Selektif")
        ->setCellValueByColumnAndRow(1, 79, "Kelas I")
        ->setCellValueByColumnAndRow(1, 80, "Kelas III")
        ->setCellValueByColumnAndRow(1, 81, "Kelas V")
        ->setCellValueByColumnAndRow(1, 82, "Pelayanan asuhan pada SD/MI UKGS")
        ->setCellValueByColumnAndRow(1, 83, "Tahap I(Paket Minimal)")
        ->setCellValueByColumnAndRow(1, 84, "Tahap II(Paket Optimal)")
        ->setCellValueByColumnAndRow(1, 85, "tahap III (Paket Paripurna)")
        ->setCellValueByColumnAndRow(0, 87, "IX")
        ->setCellValueByColumnAndRow(1, 87, "DATA USAHA KESEHATAN SEKOLAH")
        ->setCellValueByColumnAndRow(1, 88, "Jumlah penduduk Kecamatan")
        ->setCellValueByColumnAndRow(1, 89, "Jumlah Desa diwilayah kerja")
        ->setCellValueByColumnAndRow(1, 90, "Jumlah posyandu di wilayah kerja")
        ->setCellValueByColumnAndRow(1, 91, "Pratama")
        ->setCellValueByColumnAndRow(1, 92, "Madya")
        ->setCellValueByColumnAndRow(1, 93, "Purnama")
        ->setCellValueByColumnAndRow(1, 94, "Mandiri")
        ->setCellValueByColumnAndRow(0, 96, "X")
        ->setCellValueByColumnAndRow(1, 96, "DATA TENAGA")
        ->setCellValueByColumnAndRow(1, 97, "Dokter Gigi")
        ->setCellValueByColumnAndRow(1, 98, "Perawat Gigi")
        ->setCellValueByColumnAndRow(1, 99, "Kader ukgmd")
        ->setCellValueByColumnAndRow(1, 100, "Kader UKGS")
        ->setCellValueByColumnAndRow(0, 102, "XI")
        ->setCellValueByColumnAndRow(1, 102, "DATA SARJANA")
        ->setCellValueByColumnAndRow(1, 103, "Dental Unit Set")
        ->setCellValueByColumnAndRow(1, 104, "Dental Unit Mobile")
        ->setCellValueByColumnAndRow(1, 105, "Dental Unit High Speed")
        ->setCellValueByColumnAndRow(1, 106, "Dental Unit Elektrik")
        ->setCellValueByColumnAndRow(1, 107, "ART Set")
        ->setCellValueByColumnAndRow(1, 108, "Hand Instrument")
        ->setCellValueByColumnAndRow(1, 109, "Kader Set")
        ->setCellValueByColumnAndRow(1, 110, "Sterilisator listrik")
        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
for ($n = 1; $n <= 11; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 7, $n);
}
for ($n = 1; $n <= 5; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 20, $n);
}
for ($n = 1; $n <= 9; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 27, $n);
}
for ($n = 1; $n <= 10; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 38, $n);
}
for ($n = 1; $n <= 5; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 50, $n);
}
for ($n = 6; $n <= 9; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 53, $n);
}
for ($n = 1; $n <= 4; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 65, $n);
}
for ($n = 1; $n <= 7; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 71, $n);
}
for ($n = 1; $n <= 3; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 87, $n);
}
for ($n = 1; $n <= 4; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 96, $n);
}
for ($n = 1; $n <= 8; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 102, $n);
}

$objPHPExcel->getActiveSheet()->getStyle('G6:N6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:O110')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:O110')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G5:N5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D6:N6')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('O5:O6')->applyFromArray($styleThinBlackBorderAll);
// the real data
//       $i = 7;
//        foreach($layanan_h as $layanan) {
//            $active1 = 'A'.$i.':'.'AH'.$i;
//            $active2 = 'A'.$i;
//            $active3 = 'D'.$i.':'.'AO'.$i;
//            $formula1 = '=AH'.$i.'+AI'.$i;
//            $objPHPExcel->getActiveSheet()->getStyle($active1)->applyFromArray($styleThinBlackBorderAll);
//            $objPHPExcel->getActiveSheet()->getStyle($active2)->getAlignment()->setHorizontal(Style_Alignment::HORIZONTAL_CENTER);
//            $objPHPExcel->getActiveSheet()->getStyle($active3)->applyFromArray($styleAlignHorizontalCenter);
//            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $layanan['id_layanan']);
//            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, $i, $layanan['nama_layanan']);
//            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(34, $i, $layanan['harga_layanan']);
//
//            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(35, $i, $formula1);
//            $x=5;
//            for($z=1;$z<=31;$z++){
//                $t=$x+$z;
//                $obatn='obat'.$z;
//                if(isset($data[$obatn])){
//                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($t, $i, $data[$obatn]);}
//            }
//          $i++;}
//
//       $objPHPExcel->getActiveSheet()->getStyle('A6:F' . ($i-1))->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->getActiveSheet()->setTitle('Harian');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
//header('Content-Disposition: attachment;filename="rekap_resep_bulanan_' . $namanya . '-' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");
?>