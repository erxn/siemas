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

$xls->getDefaultStyle()->getFont()->setName('Arial');

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

    $xls->getActiveSheet()->getColumnDimension('A')->setWidth(3.29);
    $xls->getActiveSheet()->getColumnDimension('B')->setWidth(30.29);
    $xls->getActiveSheet()->getColumnDimension('C')->setWidth(0.92);
    $xls->getActiveSheet()->getColumnDimension('D')->setWidth(49.57);

    // header

    $xls->getActiveSheet()->mergeCells("A1:D1")->setCellValue('A1', "BIODATA JABATAN FUNGSIONAL");
    $xls->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
    $xls->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension('1')->setRowHeight(19.5);

    $xls->getActiveSheet()->mergeCells("A2:D2")->setCellValue('A2', "PUSKESMAS BOGOR TENGAH");
    $xls->getActiveSheet()->getStyle('A2')->getFont()->setSize(16);
    $xls->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension('2')->setRowHeight(19.5);

    $xls->getActiveSheet()->mergeCells("A3:D3")->setCellValue('A3', "TAHUN $tahun");
    $xls->getActiveSheet()->getStyle('A3')->getFont()->setSize(16);
    $xls->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getRowDimension('3')->setRowHeight(19.5);

    // data

    $xls->getActiveSheet()->setCellValue('A6', "1");
    $xls->getActiveSheet()->getStyle('A6')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B6', "NAMA");
    $xls->getActiveSheet()->setCellValue('C6', ":");
    $xls->getActiveSheet()->setCellValue('D6', $pegawai['nama']);
    $xls->getActiveSheet()->getStyle('B6:D6')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('7')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A8', "2");
    $xls->getActiveSheet()->getStyle('A8')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B8', "NIP");
    $xls->getActiveSheet()->setCellValue('C8', ":");
    $xls->getActiveSheet()->setCellValue('D8', format_nip($pegawai['nip']));
    $xls->getActiveSheet()->getStyle('B8:D8')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('8')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('9')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A10', "3");
    $xls->getActiveSheet()->getStyle('A10')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B10', "TEMPAT/TANGGAL LAHIR");
    $xls->getActiveSheet()->setCellValue('C10', ":");
    $xls->getActiveSheet()->setCellValue('D10', $pegawai['tempat_lahir'] . ', ' . tampilan_tanggal_indonesia($pegawai['tanggal_lahir'], false, true));
    $xls->getActiveSheet()->getStyle('B10:D10')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('10')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('11')->setRowHeight(12);

    $g = $this->pegawai->get_pangkat_terakhir($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A12', "4");
    $xls->getActiveSheet()->getStyle('A12')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B12', "PANGKAT/GOLONGAN");
    $xls->getActiveSheet()->setCellValue('C12', ":");
    $xls->getActiveSheet()->setCellValue('D12', $g['pangkat'] . ' / ' . str_replace(" / ", " ", $g['golongan']));
    $xls->getActiveSheet()->getStyle('B12:D12')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('12')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('13')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A14', "5");
    $xls->getActiveSheet()->getStyle('A14')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B14', "STATUS KEPEGAWAIAN");
    $xls->getActiveSheet()->setCellValue('C14', ":");
    $xls->getActiveSheet()->setCellValue('D14', $pegawai['status_kepegawaian']);
    $xls->getActiveSheet()->getStyle('B14:D14')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('14')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('15')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A16', "6");
    $xls->getActiveSheet()->getStyle('A16')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B16', "SUMBER GAJI");
    $xls->getActiveSheet()->setCellValue('C16', ":");
    $xls->getActiveSheet()->setCellValue('D16', $pegawai['sumber_gaji']);
    $xls->getActiveSheet()->getStyle('B16:D16')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('16')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('17')->setRowHeight(12);

    $j = $this->pegawai->get_jabatan_terakhir($pegawai['id_pegawai']);

    $xls->getActiveSheet()->setCellValue('A18', "7");
    $xls->getActiveSheet()->getStyle('A18')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B18', "JABATAN");
    $xls->getActiveSheet()->setCellValue('C18', ":");
    $xls->getActiveSheet()->setCellValue('D18', $j['jabatan']);
    $xls->getActiveSheet()->getStyle('B18:D18')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('18')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('19')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A20', "8");
    $xls->getActiveSheet()->getStyle('A20')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B20', "UNIT KERJA");
    $xls->getActiveSheet()->setCellValue('C20', ":");
    $xls->getActiveSheet()->setCellValue('D20', "Puskesmas Bogor Tengah");
    $xls->getActiveSheet()->getStyle('B20:D20')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('20')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('21')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A22', "9");
    $xls->getActiveSheet()->getStyle('A22')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B22', "SATUAN ORGANISASI");
    $xls->getActiveSheet()->setCellValue('C22', ":");
    $xls->getActiveSheet()->setCellValue('D22', "Dinas Kesehatan Kota Bogor");
    $xls->getActiveSheet()->getStyle('B22:D22')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('22')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('23')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A24', "10");
    $xls->getActiveSheet()->getStyle('A24')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B24', "ALAMAT UNIT KERJA");
    $xls->getActiveSheet()->setCellValue('C24', ":");
    $xls->getActiveSheet()->setCellValue('D24', "Jalan Telepon No. 1 Kel.Pabaton");
    $xls->getActiveSheet()->setCellValue('D25', "Kecamatan Bogor Tengah");
    $xls->getActiveSheet()->setCellValue('D26', "Kode Pos 16121");
    $xls->getActiveSheet()->getStyle('B24:D26')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('24')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('25')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('26')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('27')->setRowHeight(12);

    $xls->getActiveSheet()->setCellValue('A28', "11");
    $xls->getActiveSheet()->getStyle('A28')->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue('B28', "TELP/FAX");
    $xls->getActiveSheet()->setCellValue('C28', ":");
    $xls->getActiveSheet()->setCellValue('D28', "( 0251 ) 832 65 40");
    $xls->getActiveSheet()->getStyle('B28:D28')->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension('28')->setRowHeight(20);
    $xls->getActiveSheet()->getRowDimension('29')->setRowHeight(12);

    $id_pegawai = $pegawai['id_pegawai'];
    $pendidikan = $this->pegawai->get_pendidikan_pegawai($id_pegawai);
    $pelatihan = $this->pegawai->get_pelatihan_pegawai($id_pegawai);
    $jabatan = $this->jabatan->get_by_id_pegawai($id_pegawai);

    $baris = 30;

    $xls->getActiveSheet()->setCellValue("A$baris", "12");
    $xls->getActiveSheet()->getStyle("A$baris")->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue("B$baris", "RIWAYAT JABATAN");
    $xls->getActiveSheet()->setCellValue("C$baris", ":");

    if (count($jabatan) > 0) {
        foreach ($jabatan as $j) {
            if(format_tanggal_tampilan($j['TMT']) != '')
                $xls->getActiveSheet()->setCellValue("D$baris", $j['jabatan'] . ' (TMT ' . format_tanggal_tampilan($j['TMT']) . ')');
            else
                $xls->getActiveSheet()->setCellValue("D$baris", $j['jabatan']);
            $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
            $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
            $baris++;
        }
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
    } else {
        $xls->getActiveSheet()->setCellValue("D$baris", "-");
        $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
        $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
    }

    $baris++;

    $xls->getActiveSheet()->setCellValue("A$baris", "13");
    $xls->getActiveSheet()->getStyle("A$baris")->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue("B$baris", "RIWAYAT PENDIDIKAN");
    $xls->getActiveSheet()->setCellValue("C$baris", ":");

    if (count($pendidikan) > 0) {
        foreach ($pendidikan as $p) {
            if($p['tahun_ijazah'] != '')
                $xls->getActiveSheet()->setCellValue("D$baris", $p['pendidikan'] . ' (Tahun ' . $p['tahun_ijazah'] . ')');
            else
                $xls->getActiveSheet()->setCellValue("D$baris", $p['pendidikan']);
            $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
            $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
            $baris++;
        }
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
    } else {
        $xls->getActiveSheet()->setCellValue("D$baris", "-");
        $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
        $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
        $baris++;
    }

    $baris++;

    $xls->getActiveSheet()->setCellValue("A$baris", "14");
    $xls->getActiveSheet()->getStyle("A$baris")->getFont()->setSize(10);
    $xls->getActiveSheet()->setCellValue("B$baris", "RIWAYAT PELATIHAN");
    $xls->getActiveSheet()->setCellValue("C$baris", ":");

    if (count($pelatihan) > 0) {
        foreach ($pelatihan as $p) {
            if($p['tahun'] != '')
                $xls->getActiveSheet()->setCellValue("D$baris", $p['pelatihan'] . ' (Tahun ' . $p['tahun'] . ')');
            else
                $xls->getActiveSheet()->setCellValue("D$baris", $p['pelatihan']);
            $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
            $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
            $baris++;
        }
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
    } else {
        $xls->getActiveSheet()->setCellValue("D$baris", "-");
        $xls->getActiveSheet()->getStyle("B$baris:D$baris")->getFont()->setSize(12);
        $xls->getActiveSheet()->getRowDimension("$baris")->setRowHeight(20);
        $xls->getActiveSheet()->getRowDimension("" . ($baris + 1))->setRowHeight(12);
        $baris++;
    }

    $baris += 3;
    $xls->getActiveSheet()->setCellValue("D$baris", "Bogor, " . tampilan_tanggal_indonesia(date("Y-m-d"), false, true));
    $xls->getActiveSheet()->getStyle("D$baris")->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(14.25);
    $xls->getActiveSheet()->getStyle("D$baris")->getAlignment()->setHorizontal('center');

    $baris += 6;
    $xls->getActiveSheet()->setCellValue("D$baris", $pegawai['nama']);
    $xls->getActiveSheet()->getStyle("D$baris")->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(14.25);
    $xls->getActiveSheet()->getStyle("D$baris")->getAlignment()->setHorizontal('center');
    $xls->getActiveSheet()->getStyle("D$baris")->getFont()->setBold(true);
    $xls->getActiveSheet()->getStyle("D$baris")->getFont()->setUnderline(true);

    $baris++;
    $xls->getActiveSheet()->setCellValue("D$baris", "NIP. " . format_nip($pegawai['nip']));
    $xls->getActiveSheet()->getStyle("D$baris")->getFont()->setSize(12);
    $xls->getActiveSheet()->getRowDimension($baris)->setRowHeight(14.25);
    $xls->getActiveSheet()->getStyle("D$baris")->getAlignment()->setHorizontal('center');

    $sheet++;

}


// output it

$xls->setActiveSheetIndex(0);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Biodata_Fungsional_' . $bulan . '_' . $tahun . '.xls"');

$objWriter = IOFactory::createWriter($xls, "Excel5");
$objWriter->save("php://output");