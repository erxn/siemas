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

$tahun = date("Y");
$bulan = $nama_bulan[date("n")];

// PHPExcel object

$xls = new PHPExcel();

// Set properties
$xls->getProperties()->setCreator("SIM Puskesmas Bogor Tengah")
        ->setLastModifiedBy("SIM Puskesmas Bogor Tengah")
        ->setTitle("Biodata Fungsional")
        ->setSubject("Biodata Fungsional Pegawai Puskesmas Bogor Tengah");

$xls->getDefaultStyle()->getFont()->setName('Tahoma')->setSize(10);

$styleThinBlackBorderOutline = array(
    'borders' => array(
        'allborders' => array(
            'style' => Style_Border::BORDER_THIN,
            'color' => array('argb' => 'FF000000'),
        ),
    ),
);

// satu pegawai satu sheet

$sheet = 0;
foreach($daftar_pegawai as $pegawai) {

    $xls->createSheet();
    $xls->setActiveSheetIndex($sheet);
    $xls->getActiveSheet()->setTitle($pegawai['nama']);

    $xls->getActiveSheet()->getColumnDimension('A')->setWidth(4.14);
    $xls->getActiveSheet()->getColumnDimension('B')->setWidth(22.86);
    $xls->getActiveSheet()->getColumnDimension('C')->setWidth(17);
    $xls->getActiveSheet()->getColumnDimension('D')->setWidth(14.14);
    $xls->getActiveSheet()->getColumnDimension('E')->setWidth(13.14);
    $xls->getActiveSheet()->getColumnDimension('F')->setWidth(10.29);
    $xls->getActiveSheet()->getColumnDimension('G')->setWidth(6.43);

    // header

    $xls->getActiveSheet()->mergeCells("A1:G1")->setCellValue('A1', "SURAT KETERANGAN");
    $xls->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
    $xls->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension('1')->setRowHeight(19.5);

    $xls->getActiveSheet()->mergeCells("A2:G2")->setCellValue('A2', "UNTUK MENDAPATKAN PEMBAYARAN TUNJANGAN KELUARGA");
    $xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16);
    $xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);

    // data
    
    $xls->getActiveSheet()->setCellValue('A5', "Yang bertanda tangan di bawah");
    $xls->getActiveSheet()->getStyle('A5')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('5')->setRowHeight(15.75);

    $xls->getActiveSheet()->setCellValue('A6', "1");
    $xls->getActiveSheet()->setCellValue('B6', "N a m a");
    $xls->getActiveSheet()->setCellValue('C6', " : " . $pegawai['nama']);
    $xls->getActiveSheet()->getStyle('B6:C6')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('6')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A7', "2");
    $xls->getActiveSheet()->setCellValue('B7', "N I P");
    $xls->getActiveSheet()->setCellValue('C7', " : " . format_nip($pegawai['nip']));
    $xls->getActiveSheet()->getStyle('B7:C7')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('7')->setRowHeight(20);

    $g = $this->pegawai->get_pangkat_terakhir($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A8', "3");
    $xls->getActiveSheet()->setCellValue('B8', "Pangkat, Golongan/Ruang");
    $xls->getActiveSheet()->setCellValue('C8', " : " . $g['pangkat'] . ' - ' . $g['golongan']);
    $xls->getActiveSheet()->getStyle('B8:C8')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('8')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A9', "4");
    $xls->getActiveSheet()->setCellValue('B9', "Terhitung mulai tanggal");
    $xls->getActiveSheet()->setCellValue('C9', " : " . format_tanggal_tampilan($g['TMT']));
    $xls->getActiveSheet()->getStyle('B9:C9')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('9')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A10', "5");
    $xls->getActiveSheet()->setCellValue('B10', "Tempat, tanggal lahir");
    $xls->getActiveSheet()->setCellValue('C10', " : " . $pegawai['tempat_lahir'] . ', ' . tampilan_tanggal_indonesia($pegawai['tanggal_lahir'], false, true));
    $xls->getActiveSheet()->getStyle('B10:C10')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('10')->setRowHeight(20);

    $jk = "";
    if($pegawai['jk'] == 'L') $jk = "Laki-laki";
    if($pegawai['jk'] == 'P') $jk = "Perempuan";

    $xls->getActiveSheet()->setCellValue('A11', "6");
    $xls->getActiveSheet()->setCellValue('B11', "Jenis kelamin");
    $xls->getActiveSheet()->setCellValue('C11', " : " . $jk);
    $xls->getActiveSheet()->getStyle('B11:C11')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('11')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A12', "7");
    $xls->getActiveSheet()->setCellValue('B12', "A g a m a");
    $xls->getActiveSheet()->setCellValue('C12', " : " . $pegawai['agama']);
    $xls->getActiveSheet()->getStyle('B12:C12')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('12')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A13', "8");
    $xls->getActiveSheet()->setCellValue('B13', "Jenis Kepegawaian");
    $xls->getActiveSheet()->setCellValue('C13', " : Pegawai Negeri Sipil");
    $xls->getActiveSheet()->getStyle('B13:C13')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('13')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A14', "9");
    $xls->getActiveSheet()->setCellValue('B14', "Status Kepegawaian");
    $xls->getActiveSheet()->setCellValue('C14', " : " . $pegawai['status_kepegawaian'] . ' Daerah');
    $xls->getActiveSheet()->getStyle('B14:C14')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('14')->setRowHeight(20);

    $j = $this->pegawai->get_jabatan_terakhir($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A15', "10");
    $xls->getActiveSheet()->setCellValue('B15', "J a b a t a n");
    $xls->getActiveSheet()->setCellValue('C15', " : " . $j['jabatan']);
    $xls->getActiveSheet()->getStyle('B15:C15')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('15')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A16', "11");
    $xls->getActiveSheet()->setCellValue('B16', "Unit Kerja");
    $xls->getActiveSheet()->setCellValue('C16', " : DINAS KESEHATAN KOTA BOGOR");
    $xls->getActiveSheet()->getStyle('B16:C16')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('16')->setRowHeight(20);

    $k = $this->pegawai->get_gaji_terakhir($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A17', "12");
    $xls->getActiveSheet()->setCellValue('B17', "Gaji Pokok / PP");
    $xls->getActiveSheet()->setCellValue('C17', " : Peraturan Pemerintah Nomor 25 Tahun 2010  Rp." . format_rupiah($k['gaji']));
    $xls->getActiveSheet()->getStyle('B17:C17')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('17')->setRowHeight(20);

    $mkg = $this->pegawai->get_masa_kerja_golongan($pegawai['id_pegawai']);
    $mks = $this->pegawai->get_masa_kerja_keseluruhan($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A18', "13");
    $xls->getActiveSheet()->setCellValue('B18', "Masa kerja golongan");
    $xls->getActiveSheet()->setCellValue('C18', " : " . $mkg['masa_kerja_tahun'] . " Tahun " . $mkg['masa_kerja_bulan'] . " Bulan");
    $xls->getActiveSheet()->getStyle('B18:C18')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('18')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A19', "14");
    $xls->getActiveSheet()->setCellValue('B19', "Masa kerja keseluruhan");
    $xls->getActiveSheet()->setCellValue('C19', " : " . $mks['masa_kerja_tahun'] . " Tahun " . $mks['masa_kerja_bulan'] . " Bulan");
    $xls->getActiveSheet()->getStyle('B19:C19')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('19')->setRowHeight(20);

    $xls->getActiveSheet()->setCellValue('A20', "15");
    $xls->getActiveSheet()->setCellValue('B20', "Alamat");
    $xls->getActiveSheet()->setCellValue('C20', " : " . $pegawai['alamat']);
    $xls->getActiveSheet()->getStyle('B20:C20')->getFont()->setSize(10);
    $xls->getActiveSheet()->getRowDimension('20')->setRowHeight(20);

    $baris = 23;

    $xls->getActiveSheet()->mergeCells("A$baris:G$baris")->setCellValue("A$baris", "TANGGUNGAN KELUARGA");
    $xls->getActiveSheet()->getStyle("A$baris")->getFont()->setSize(12);
    $xls->getActiveSheet()->getStyle("A$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(15);
    $baris++;
    
    $xls->getActiveSheet()
        ->setCellValue("A$baris", 'NO')
        ->setCellValue("B$baris", 'NAMA ISTRI/SUAMI/ANAK')
        ->setCellValue("C$baris", 'TANGGAL LAHIR')
        ->setCellValue("D$baris", 'TANGGAL NIKAH')
        ->setCellValue("E$baris", "PEKERJAAN /\nSEKOLAH")
        ->setCellValue("F$baris", "TUNJANGAN\nDAPAT/TIDAK")
        ->setCellValue("G$baris", "KET");
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(30);
    $xls->getActiveSheet()->getStyle("A$baris:G$baris")->getAlignment()->setHorizontal('center')->setVertical('center');
    $xls->getActiveSheet()->getStyle("A$baris:G$baris")->getAlignment()->setWrapText(true);
    $baris++;

    $data_tanggungan = $this->pegawai->get_tanggungan_pegawai($pegawai['id_pegawai']);

    if (count($data_tanggungan) > 0) {
        $i = 1;
        foreach ($data_tanggungan as $d) {
            $xls->getActiveSheet()->setCellValue("A$baris", $i);
            $xls->getActiveSheet()->setCellValue("B$baris", $d['nama']);
            $xls->getActiveSheet()->setCellValue("C$baris", tampilan_tanggal_indonesia($d['tanggal_lahir'], false, true));
            $xls->getActiveSheet()->setCellValue("D$baris", tampilan_tanggal_indonesia($d['tanggal_nikah'], false, true));
            $xls->getActiveSheet()->setCellValue("E$baris", $d['pekerjaan']);
            $xls->getActiveSheet()->setCellValue("F$baris", ($d['dapat_tunjangan'] == "1") ? "Dapat" : "Tidak");
            $xls->getActiveSheet()->setCellValue("G$baris", $d['keterangan']);
            $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(20);
            $xls->getActiveSheet()->getStyle("A$baris:G$baris")->getAlignment()->setVertical('center');
            $i++;
            $baris++;
        }
    } else {
        $xls->getActiveSheet()->setCellValue("A$baris", '-');
        $xls->getActiveSheet()->setCellValue("B$baris", '-');
        $xls->getActiveSheet()->setCellValue("C$baris", '-');
        $xls->getActiveSheet()->setCellValue("D$baris", '-');
        $xls->getActiveSheet()->setCellValue("E$baris", '-');
        $xls->getActiveSheet()->setCellValue("F$baris", '-');
        $xls->getActiveSheet()->setCellValue("G$baris", '-');
        $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(20);
        $xls->getActiveSheet()->getStyle("A$baris:G$baris")->getAlignment()->setVertical('center')->setHorizontal('center');
        $baris++;
    }

    // border
    $xls->getActiveSheet()->getStyle("A24:G" . ($baris-1))->applyFromArray($styleThinBlackBorderOutline);
    $xls->getActiveSheet()->getStyle("A24:G" . ($baris-1))->getFont()->setSize(8);
    $baris++;

    $xls->getActiveSheet()->setCellValue("A$baris", "Keterangan ini saya buat dengan sesungguhnya dan apabila keterangan ini tidak benar saya bersedia dituntut");
    $baris++;
    $xls->getActiveSheet()->setCellValue("A$baris", "dimuka pengadilan berdasarkan Undang-undang yang berlaku dan bersedia mengembalikan semua semua");
    $baris++;
    $xls->getActiveSheet()->setCellValue("A$baris", "uang tunjangan yang telah saya terima yang seharusnya bukan menjadi hak saya.");
    $baris++;
    $baris++;
    $baris++;

    $xls->getActiveSheet()->mergeCells("E$baris:F$baris");
    $xls->getActiveSheet()->setCellValue("E$baris", "Bogor, " . tampilan_tanggal_indonesia(date("Y-m-d"), false, true));
    $xls->getActiveSheet()->getStyle("E$baris")->getAlignment()->setHorizontal('center');

    $baris += 3;
    $xls->getActiveSheet()->mergeCells("E$baris:F$baris");
    $xls->getActiveSheet()->setCellValue("E$baris", "Yang menerangkan,");
    $xls->getActiveSheet()->getStyle("E$baris")->getAlignment()->setHorizontal('center');

    $baris += 5;
    $xls->getActiveSheet()->mergeCells("E$baris:F$baris");
    $xls->getActiveSheet()->setCellValue("E$baris", $pegawai['nama']);
    $xls->getActiveSheet()->getStyle("E$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("E$baris")->getFont()->setBold(true);
    $xls->getActiveSheet()->getStyle("E$baris")->getFont()->setUnderline(true);

    $baris++;
    $xls->getActiveSheet()->mergeCells("E$baris:F$baris");
    $xls->getActiveSheet()->setCellValue("E$baris", "NIP. " . format_nip($pegawai['nip']));
    $xls->getActiveSheet()->getStyle("E$baris")->getAlignment()->setHorizontal('center');



    $sheet++;

}


// output it

$xls->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="SKUM-PTK_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");