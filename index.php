<?php
  //koneksi
  $server     = "localhost";
  $user       = "root";
  $password   = "";
  $db         = "u5961869_bai_main";
  $koneksi = mysql_connect($server, $user, $password);
  if ($koneksi) {
    $buka = mysql_select_db($db);
    if (!$buka) {
      die("Database Eror karena ".mysql_error());
    }
  }else{
    die("Oops! Ada eror pada ".mysql_error());
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laporan ke Excel</title>
  </head>
  <body>
      <h2>Laporan Pendaftar Ke Excel</h2>
      <table border="1">
          <tr>
            <th>No </th>
            <th>ID </th>
            <th> NAMA LENGKAP</th>
            <th>NIM </th>
            <th> L/P</th>
            <th>Nomor HP </th>
            <th> LINE/BBM</th>
            <th>Mentoring </th>
            <th> Tanggal Daftar</th>
            <th>Status </th>
          </tr>

          <?php
              $query = "SELECT id_calon,nama_lengkap,nim,jenis_kelamin,no_hp,line_bbm,mentoring,tanggal_daftar,status from calon_anggota ORDER BY tanggal_daftar DESC";
              $sql = mysql_query($query);
              $no = 1;

              while ($data = mysql_fetch_assoc($sql)) {
                echo "
                    <tr>
                    <td>" .$no."</td>
                    <td>" .$data['id_calon']."</td>
                    <td>" .$data['nama_lengkap']."</td>
                    <td>" .$data['nim']."</td>
                    <td>" .$data['jenis_kelamin']."</td>
                    <td>" .$data['no_hp']."</td>
                    <td>" .$data['line_bbm']."</td>
                    <td>" .$data['mentoring']."</td>
                    <td>" .$data['tanggal_daftar']."</td>
                    <td>" .$data['status']."</td>

                    </tr>
                ";
              }
          ?>
          <tr>

          </tr>
      </table>

      <p><a href="ex2excel.php"><button>Export Data ke Excel</button></a></p>
  </body>
</html>
