<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

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
        ->setLastModifiedBy("")
        ->setTitle("")
        ->setSubject("");
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
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
// header
//$objPHPExcell->getActiveSheet()->getStyle('A1:H1')->getFont()->setSize(12);

$objPHPExcel->getActiveSheet()->getStyle('A2:F4')->getFont()->setSize(8);
$objPHPExcel->getActiveSheet()->getStyle('D1:J1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q200')->getFont()->setSize(9);


$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D1:J1')->setCellValueByColumnAndRow(3, 1, "LB4");
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('D2:J2')->setCellValueByColumnAndRow(3, 2, "Bulan " . $nama_bulan[$bulan] . ' ' . $tahun);

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:B3')->setCellValueByColumnAndRow(0, 3, "Kecamatan  :  Bogor Tengah");

$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:B4')->setCellValueByColumnAndRow(0, 4, "Kota  :  Bogor");

//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:F4')->setCellValueByColumnAndRow(0, 4, $date);

$objPHPExcel->getActiveSheet()
        ->mergeCells('A5:A7')->setCellValueByColumnAndRow(0, 5, "NO")
        ->mergeCells('B5:B7')->setCellValueByColumnAndRow(1, 5, "Kegiatan")
        ->mergeCells('C5:H5')->setCellValueByColumnAndRow(2, 5, "Kelurahan")
         ->mergeCells('I5:K6')->setCellValueByColumnAndRow(8, 5, "Luar Wil. Kerja")
         ->mergeCells('L5:N6')->setCellValueByColumnAndRow(11, 5, "Luar Wil Bogor")
         ->mergeCells('O5:Q6')->setCellValueByColumnAndRow(14, 5, "Jumlah Total")
         ->mergeCells('C6:E6')->setCellValueByColumnAndRow(2, 6, "PABATON")
         ->mergeCells('F6:H6')->setCellValueByColumnAndRow(5, 6, "COBOGOR")



        ->setCellValueByColumnAndRow(2, 7, "Askes")
        ->setCellValueByColumnAndRow(3, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(4, 7, "Umum")
        ->setCellValueByColumnAndRow(5, 7, "Askes")
        ->setCellValueByColumnAndRow(6, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(7, 7, "Umum")
        ->setCellValueByColumnAndRow(8, 7, "Askes")
        ->setCellValueByColumnAndRow(9, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(10, 7, "Umum")
        ->setCellValueByColumnAndRow(11, 7, "Askes")
        ->setCellValueByColumnAndRow(12, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(13, 7, "Umum")
        ->setCellValueByColumnAndRow(14, 7, "Askes")
        ->setCellValueByColumnAndRow(15, 7, "Jamksemas")
        ->setCellValueByColumnAndRow(16, 7, "Umum")

        ->setCellValueByColumnAndRow(0, 8, "V")
        ->setCellValueByColumnAndRow(1, 8, "UPAYA KESEHATAN GIGI")
        ->setCellValueByColumnAndRow(0, 9, "A")
        ->setCellValueByColumnAndRow(1, 9, "KUNJUNGAN DI BP. GIGI")
        ->setCellValueByColumnAndRow(1, 10, "Kunjungan baru rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 11, "Kunjungan lama rawat jalan gigi")
        ->setCellValueByColumnAndRow(1, 12, "Kunjungan baru ibu hamil")
        ->setCellValueByColumnAndRow(1, 13, "Kunjungan Lama ibu hamil")
        ->setCellValueByColumnAndRow(1, 14, "Kunjungan baru anak prasekolah")
        ->setCellValueByColumnAndRow(1, 15, "Kunjungan lama anak prasekolah")
        ->setCellValueByColumnAndRow(1, 16, "Hari buka Bp. gigi")
        ->setCellValueByColumnAndRow(1, 17, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 18, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 19, "Tumpatan gigi suung")
        ->setCellValueByColumnAndRow(1, 20, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 21, "Pengobatan pulpa & jaringan periapikal")
        ->setCellValueByColumnAndRow(1, 22, "Pengobatan gusi dan atau periodontal")
        ->setCellValueByColumnAndRow(1, 23, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 24, "Karies gigi")
        ->setCellValueByColumnAndRow(1, 25, "Penyakit pulpa dan jaringan periapikal")
        ->setCellValueByColumnAndRow(1, 26, "Penyakit gusi dan periodontal")
        ->setCellValueByColumnAndRow(1, 27, "Penyakit dentofasial termasuk inaloklusi")
        ->setCellValueByColumnAndRow(1, 28, "Gangguan gigi dan jaringan lainnya")



        ->setCellValueByColumnAndRow(0, 29, "B")
        ->setCellValueByColumnAndRow(1, 30, "KUNJUNGAN U K G S")
        ->setCellValueByColumnAndRow(1, 31, "Tumpatan gigi tetap")
        ->setCellValueByColumnAndRow(1, 32, "Pencabutan gigi tetap")
        ->setCellValueByColumnAndRow(1, 33, "Tumpatan gigi suung")
        ->setCellValueByColumnAndRow(1, 34, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 35, "Pencabutan gigi sulung")
        ->setCellValueByColumnAndRow(1, 36, "Pengobatan pulpa")
        ->setCellValueByColumnAndRow(1, 37, "Pengobatan periodontal")
        ->setCellValueByColumnAndRow(1, 38, "Pembersihan karang gigi")
        ->setCellValueByColumnAndRow(1, 39, "Rujukan ke puskesmas")
        ->setCellValueByColumnAndRow(1, 40, "Pembinaan ke SD UKGS")
        ->setCellValueByColumnAndRow(1, 41, "Jumlah murid SD UKGS")
        ->setCellValueByColumnAndRow(1, 42, "Murid SD UKGS yang perlu perawatan ")
        ->setCellValueByColumnAndRow(1, 43, "Murid SD UKGS yang mendapat perawatan")
        ->setCellValueByColumnAndRow(1, 44, "Penyuluhan di sekolah SD/MI")
        ->setCellValueByColumnAndRow(1, 45, "Penyuluhan di sekolah TK/RA")
        ->setCellValueByColumnAndRow(1, 46, "Sikat gigi masal di SD/MA")
        ->setCellValueByColumnAndRow(1, 47, "Sikat gigi masal di TK/RA")
        ->setCellValueByColumnAndRow(1, 48, "Pembinaan ke desa UKGMD")
        ->setCellValueByColumnAndRow(1, 49, "Penduduk yang mendapatkan penyuluhan kesehatan gigi")
        ->setCellValueByColumnAndRow(1, 50, "Rujukan kader,Posyandu,BP, sekolah")
        ->getStyle('A5:AO5')->applyFromArray($styleAlignHorizontalCenter);
for($n=1;$n<=19;$n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n+9, $n);
}
for($n=1;$n<=20;$n++) {
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, $n+30, $n);
}

$objPHPExcel->getActiveSheet()->getStyle('G6:N6')->applyFromArray($styleAlignHorizontalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q50')->applyFromArray($styleAlignVerticalCenter);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q50')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:A6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B5:B6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D5:F5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G5:N5')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D6:N7')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('O5:Q7')->applyFromArray($styleThinBlackBorderAll);
$objPHPExcel->getActiveSheet()->getStyle('A5:Q7')->getFill()->setFillType(Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDEEDD');


//kunjungan baru
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 10, $p_a_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 10, $p_j_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 10, $p_u_kunj_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 10, $c_a_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 10, $c_j_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 10, $c_u_kunj_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 10, $lw_a_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 10, $lw_j_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,10, $lw_u_kunj_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 10, $lk_a_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 10, $lk_j_kunj_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,10, $lk_u_kunj_baru);



//kunjungan lama
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 11, $p_a_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 11, $p_j_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 11, $p_u_kunj_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 11, $c_a_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 11, $c_j_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 11, $c_u_kunj_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 11, $lw_a_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 11, $lw_j_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,11, $lw_u_kunj_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 11, $lk_a_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 11, $lk_j_kunj_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,11, $lk_u_kunj_lama);



// hamil baru
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 12, $pab_a_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 12, $pab_j_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 12, $pab_u_hamil_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 12, $cib_a_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 12, $cib_j_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 12, $cib_u_hamil_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 12, $lw_a_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 12, $lw_j_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,12, $lw_u_hamil_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 12, $lk_a_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 12, $lk_j_hamil_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,12, $lk_u_hamil_baru);

// hamil lama
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 13, $pab_a_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 13, $pab_j_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 13, $pab_u_hamil_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 13, $cib_a_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 13, $cib_j_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 13, $cib_u_hamil_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 13, $lw_a_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 13, $lw_j_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,13, $lw_u_hamil_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 13, $lk_a_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 13, $lk_j_hamil_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,13, $lk_u_hamil_lama);




// anak baru
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 14, $pab_a_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 14, $pab_j_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 14, $pab_u_anak_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 14, $cib_a_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 14, $cib_j_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 14, $cib_u_anak_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 14, $lw_a_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 14, $lw_j_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,14, $lw_u_anak_baru);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 14, $lk_a_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 14, $lk_j_anak_baru);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,14, $lk_u_anak_baru);



// anak lama
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 15, $pab_a_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 15, $pab_j_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 15, $pab_u_anak_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 15, $cib_a_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 15, $cib_j_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 15, $cib_u_anak_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 15, $lw_a_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 15, $lw_j_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,15, $lw_u_anak_lama);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 15, $lk_a_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 15, $lk_j_anak_lama);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,15, $lk_u_anak_lama);


// tumpatan tetap
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 17, $p_a_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 17, $p_j_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 17, $p_u_tumpatan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 17, $c_a_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 17, $c_j_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 17, $c_u_tumpatan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 17, $lw_a_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 17, $lw_j_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,17, $lw_u_tumpatan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 17, $lk_a_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 17, $lk_j_tumpatan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,17, $lk_u_tumpatan_tetap);


// pencabutan tetap
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 18, $p_a_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 18, $p_j_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 18, $p_u_pencabutan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 18, $c_a_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 18, $c_j_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 18, $c_u_pencabutan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 18, $lw_a_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 18, $lw_j_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,18, $lw_u_pencabutan_tetap);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 18, $lk_a_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 18, $lk_j_pencabutan_tetap);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,18, $lk_u_pencabutan_tetap);


// tumpatan sulung
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 19, $p_a_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 19, $p_j_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 19, $p_u_tumpatan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 19, $c_a_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 19, $c_j_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 19, $c_u_tumpatan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 19, $lw_a_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 19, $lw_j_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,19, $lw_u_tumpatan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 19, $lk_a_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 19, $lk_j_tumpatan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,19, $lk_u_tumpatan_sulung);



// pencabutab sulung
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 20, $p_a_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 20, $p_j_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 20, $p_u_pencabutan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 20, $c_a_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 20, $c_j_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 20, $c_u_pencabutan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 20, $lw_a_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 20, $lw_j_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,20, $lw_u_pencabutan_sulung);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 20, $lk_a_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 20, $lk_j_pencabutan_sulung);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,20, $lk_u_pencabutan_sulung);


// pencabutab sulung
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 21, $p_a_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 21, $p_j_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 21, $p_u_pulpa_periapikal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 21, $c_a_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 21, $c_j_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 21, $c_u_pulpa_periapikal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 21, $lw_a_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 21, $lw_j_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,21, $lw_u_pulpa_periapikal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 21, $lk_a_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 21, $lk_j_pulpa_periapikal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,21, $lk_u_pulpa_periapikal);


// pencabutab sulung
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 22, $p_a_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 22, $p_j_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 22, $p_u_gusi_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 22, $c_a_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 22, $c_j_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 22, $c_u_gusi_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 22, $lw_a_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 22, $lw_j_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,22, $lw_u_gusi_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 22, $lk_a_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 22, $lk_j_gusi_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13, 22,$lk_u_gusi_periodontal);



// karang gigi
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 23, $p_a_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 23, $p_j_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 23, $p_u_karang_gigi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 23, $c_a_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 23, $c_j_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 23, $c_u_karang_gigi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 23, $lw_a_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 23, $lw_j_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,23, $lw_u_karang_gigi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 23, $lk_a_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 23, $lk_j_karang_gigi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,23, $lk_u_karang_gigi);


// karang gigi
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 24, $p_a_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 24, $p_j_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 24, $p_u_karies);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 24, $c_a_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 24, $c_j_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 24, $c_u_karies);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 24, $lw_a_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 24, $lw_j_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,24, $lw_u_karies);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 24, $lk_a_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 24, $lk_j_karies);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,24, $lk_u_karies);


// pulpa
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 25, $p_a_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 25, $p_j_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 25, $p_u_pulpa);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 25, $c_a_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 25, $c_j_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 25, $c_u_pulpa);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 25, $lw_a_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 25, $lw_j_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,25, $lw_u_pulpa);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 25, $lk_a_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 25, $lk_j_pulpa);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,25, $lk_u_pulpa);

// karang gigi
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 26, $p_a_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 26, $p_j_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 26, $p_u_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 26, $c_a_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 26, $c_j_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 26, $c_u_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 26, $lw_a_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 26, $lw_j_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,26, $lw_u_periodontal);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 26, $lk_a_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 26, $lk_j_periodontal);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,26, $lk_u_periodontal);



// karang gigi
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 27, $p_a_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 27, $p_j_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 27, $p_u_dentofasial);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 27, $c_a_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 27, $c_j_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 27, $c_u_dentofasial);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 27, $lw_a_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 27, $lw_j_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,27, $lw_u_dentofasial);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 27, $lk_a_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 27, $lk_j_dentofasial);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,27, $lk_u_dentofasial);

// karang gigi
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, 28, $p_a_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, 28, $p_j_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, 28, $p_u_gangguan_gusi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, 28, $c_a_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, 28, $c_j_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, 28, $c_u_gangguan_gusi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8, 28, $lw_a_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9, 28, $lw_j_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,28, $lw_u_gangguan_gusi);

$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11, 28, $lk_a_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12, 28, $lk_j_gangguan_gusi);
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,28, $lk_u_gangguan_gusi);

for($i=10;$i<=28;$i++){
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(14, $i,"=C$i+F$i+I$i+L$i");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(15, $i,"=D$i+G$i+J$i+M$i");
$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(16, $i,"=E$i+H$i+K$i+N$i");

}

$objPHPExcel->getActiveSheet()->setTitle('Harian');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="LB4_Gigi_' . $nama_bulan[$bulan]. '-' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($objPHPExcel, "Excel5");
$objWriter->save("php://output");

?>