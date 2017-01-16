<?php
      // Fungsi header dengan mengirimkan raw data excel
      header("Content-type: application/vnd-ms-excel");

      // Mendefinisikan nama file ekspor "hasil-export.xls"
      // filename = nama file yang akan disimpan
      header("Content-Disposition: attachment; filename=data_pendaftar.xls");

      // Tambahkan table
      include 'index.php';
?>
