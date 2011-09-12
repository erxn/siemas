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
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);

// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);

$objPHPExcel->getActiveSheet()->getStyle('A4:L50')->getFont()->setSize(9);


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(0, 2, "Laporan Kegiatan Harian BP Gigi ");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2')->setCellValueByColumnAndRow(0, 2, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kota  :  Bogor");

//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('A4:A6')->setCellValueByColumnAndRow(0, 4, "NO")
        ->mergeCells('B4:B6')->setCellValueByColumnAndRow(1, 4, "Kegiatan")
        ->mergeCells('C4:F4')->setCellValueByColumnAndRow(2, 4, "Kelurahan")
        ->mergeCells('C5:D5')->setCellValueByColumnAndRow(2, 5, "Pabaton")
        ->mergeCells('E5:F5')->setCellValueByColumnAndRow(4, 5, "Cibogor")
        ->mergeCells('G4:H5')->setCellValueByColumnAndRow(6, 4, "Luar Wl Kerja")
        ->mergeCells('I4:J5')->setCellValueByColumnAndRow(8, 4, "Luar Wl Kota Bogor")
        ->mergeCells('K4:L5')->setCellValueByColumnAndRow(10, 4, "Jumlah")
        ->setCellValueByColumnAndRow(2, 6, "Gkn")
        ->setCellValueByColumnAndRow(3, 6, "Non")
        ->setCellValueByColumnAndRow(4, 6, "Gkn")
        ->setCellValueByColumnAndRow(5, 6, "Non")
        ->setCellValueByColumnAndRow(6, 6, "Gkn")
        ->setCellValueByColumnAndRow(7, 6, "Non")
        ->setCellValueByColumnAndRow(8, 6, "Gkn")
        ->setCellValueByColumnAndRow(9, 6, "Non")
        ->setCellValueByColumnAndRow(10, 6, "Gkn")
        ->setCellValueByColumnAndRow(11, 6, "Non")
        ->setCellValueByColumnAndRow(0, 7, "V")
        ->setCellValueByColumnAndRow(1, 7, "UPAYA KESEHATAN GIGI")
        ->setCellValueByColumnAndRow(0, 8, "A")
        ->setCellValueByColumnAndRow(1, 8, "KUNJUNGAN DI BP. GIGI")
        ->setCellValueByColumnAndRow(1, 9, "Kujungan baru rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 10, "Kunjungan lama rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 11, "Hari buka Bp. gigi")
        ->setCellValueByColumnAndRow(1, 12, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 13, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 14, "Tumpatan gigi sulung")
        ->setCellValueByColumnAndRow(1, 15, "Pencabutan gigi Sulung")
        ->setCellValueByColumnAndRow(1, 16, "Pengobatan pulpa & jaringan periapikal")
        ->setCellValueByColumnAndRow(1, 17, "Pengobatan gusi dan atau Periodontal")
        ->setCellValueByColumnAndRow(1, 18, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(0, 20, "B")
        ->setCellValueByColumnAndRow(1, 20, "KUNJUNGAN UKGS")
        ->setCellValueByColumnAndRow(1, 21, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 22, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 23, "Tumpatan gigi sulung")
        ->setCellValueByColumnAndRow(1, 24, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 25, "Pengobatan pulpa")
        ->setCellValueByColumnAndRow(1, 26, "Pengobatan periodontal")
        ->setCellValueByColumnAndRow(1, 27, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 28, "Rujukan ke pskesmas")
        ->setCellValueByColumnAndRow(1, 29, "PEmbinaan ke SD UKGS")
        ->setCellValueByColumnAndRow(1, 30, "Jumlah murid SD UKGS")
        ->setCellValueByColumnAndRow(1, 31, "Murid UKGS yang perlu perawatan")
        ->setCellValueByColumnAndRow(1, 32, "Murid SD UKGS yang mendapat perawatan")
        ->setCellValueByColumnAndRow(1, 33, "Penyuluhan di sekolah SD/MI")
        ->setCellValueByColumnAndRow(1, 34, "Penyuluhan di sekolah TK/RA")
        ->setCellValueByColumnAndRow(1, 35, "Sikat gigi masal di SD/MI")
        ->setCellValueByColumnAndRow(1, 36, "sikat gigi masal di TK/RA")
        ->setCellValueByColumnAndRow(1, 37, "Pembinaan ke desa UKGMD")
        ->setCellValueByColumnAndRow(1, 38, "Penduduk yang mendapatkan penyuluhan kesehatan gigi")
        ->setCellValueByColumnAndRow(1, 39, "Rujukan dari Kader,Posyandu,BP,Sekolah,dll")
        ->getStyle('A4:AO5')->applyFromArray($styleAlignHorizontalCenter);
for ($n = 1; $n <= 10; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 8, $n);
}
for ($n = 1; $n <= 19; $n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n + 20, $n);
}

$objPHPExcel->getActiveSheet()->getStyle('G6:N6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A4:L39')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A4:L39')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A4:A6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B4:B6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C4:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D4:F4')->applyFromArray($styleThinBlackBorderOutline);
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