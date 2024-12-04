<?php
include'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h2>Data Siswa</h2>
 <table border="1">
  <tr>
   <td>No</td>
   <td>nama siswa</td>
   <td>alamat</td>
   <td>kelamin</td>
   <td>agama</td>
   <td>asal</td>
   <td>aksi</td>
  </tr>
  <?php
        $no =1;
        $query = mysqli_query($koneksi,"SELECT * FROM data_siswa");
        while ($data =mysqli_fetch_array($query)){
            ?>
  <tr>
   <td><?php echo $no++;?></td>
   <td><?php echo $data ['nama_siswa']?></td>
   <td><?php echo $data ['alamat_siswa']?></td>
   <td><?php echo $data ['jk_siswa']?></td>
   <td><?php echo $data ['agama_siswa']?></td>
   <td><?php echo $data ['asal_sekolah']?></td>
   <td><a href="">edit</a> <a href="">hapus</a></td>

  </tr>
  <?php
        }
        ?>
 </table>
</body>

</html>