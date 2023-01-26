<?php
require 'vendor/autoload.php';
include "koneksi.php";

if (isset($_POST['submit'])){
    $err        ="";
    $ekstensi   ="";
    $success    ="";
       
    $file_name = $_FILES['filexls']['name'];
    $file_data = $_FILES['filexls']['tmp_name'];
        
    if (empty($file_name)){
            $err .= "<li>Silakan Masukan file yang kamu inginkan.</li>";
        }else {
            $ekstensi = pathinfo($file_name)['extension'];
        
        $ekstensi_allowed = array("xls", "xlsx");
        if (!in_array($ekstensi,$ekstensi_allowed)){
                $err .= "<li>Silakan masukkan file tipe xls atau xlsx. File yang kamu masukkan <b> $file_name</br> punya tipe <b>$ekstensi</b></li>";
            }
        if (empty($err)){
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile("$file_data");
            $spreadsheet = $reader->load($file_data);
            $sheetData =$spreadsheet->getActiveSheet()->toArray();

            //var_dump ($sheetData['1']['1']);
            
            $jumlahData = 0;
            for($i=1;$i<count($sheetData); $i++){
                
                //CEK: Berenti baca file
                if ( !empty($sheetData[$i]['1']) ) {
                    
                    //CEK: Kalo ngga ada agency ga diinput 
                    if ( !empty($sheetData[$i]['4']) ) {
                    
                    $nd = $sheetData [$i]['1'];
                    $status = $sheetData [$i]['2'];
                    $id_partner = $sheetData [$i]['3'];
                    $agency = $sheetData [$i]['4'];
                    $witel = $sheetData [$i]['5'];
                    $nama_kostumer = $sheetData [$i]['6'];
                    $jml_bln = $sheetData [$i]['7'];
                    $bln_akhir = $sheetData [$i]['8'];
                    $bln_awal = $sheetData [$i]['9'];
                    $last_bulan_bayar = $sheetData [$i]['10'];
                    $tgl_last_bayar = $sheetData [$i]['11'];
                    $status_lunas = $sheetData [$i]['12'];
                    $status_sama = $sheetData [$i]['13'];
                    $jml_tgk = $sheetData [$i]['14'];
                    $rp_tgk = $sheetData [$i]['15'];
                    $jml_lunas = $sheetData [$i]['16'];
                    $rp_lunas = $sheetData [$i]['17'];
                    $rp_tag_akhir = $sheetData [$i]['18'];
                    $rp_tag_awal = $sheetData [$i]['19'];
                    $mata_uang = $sheetData [$i]['20'];
                    
                    //CEK: NAMPILIN DATA YANG MASUK
                    
                    //echo " $agency - $witel $jml_tgk";

                    //echo "$nd - $status - $id_partner - $agency - $witel - $nama_kostumer - 
                    //$jml_bln - $status_lunas - $status_sama - $jml_tgk - $rp_tgk - $jml_lunas - $rp_lunas - $rp_tag_akhir - $rp_tag_awal - $mata_uang ";

                    //echo "$nd - $status - $id_partner - $agency - $witel - $nama_kostumer - 
                    //$jml_bln - $bln_akhir - $bln_awal - $last_bulan_bayar - $tgl_last_bayar - $status_lunas - $status_sama - $jml_tgk - $rp_tgk - $jml_lunas - $rp_lunas - $rp_tag_akhir - $rp_tag_awal - $mata_uang ";
                    
                    //INPUT: Masukin isi file excel ke database               
                    $sql1 = "INSERT INTO mahasiswa ( nd, status, id_partner, agency, witel, nama, jumlah_bulan, bulan_akhir, bulan_awal, last_bulan_dibayar, 
                    tanggal_last_bayar, status_lunas, status_sama, jumlah_tgk, rp_tgk, jumlah_lunas, rp_lunas, rp_tagihan_akhir, rp_tagihan_awal, mata_uang) 
                    values ('$nd', '$status', '$id_partner', '$agency', '$witel', '$nama_kostumer','$jml_bln', '$bln_akhir', '$bln_awal', '$last_bulan_bayar', 
                    '$tgl_last_bayar', '$status_lunas', '$status_sama', '$jml_tgk', '$rp_tgk', '$jml_lunas', '$rp_lunas', '$rp_tag_akhir', '$rp_tag_awal', '$mata_uang')";
                    
                    mysqli_query($koneksi,$sql1);

                    $jumlahData++;
                    }
                }

            }
            if ($jumlahData > 0) {
                    $success = "$jumlahData Berhasil Dimasukkan";
            }
        }
    }

        if ($err) {
            ?>
            <div class="alert alert-danger">
                     <ul><?php echo $err ?></ul>
            </div>
            <?php

        }
        if ($success){
            ?>
            <div class="alert alert-primary">
                <?php echo $success?>
            </div>
            <?php
        }
             
}
?>