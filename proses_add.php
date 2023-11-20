<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
<style>
  /* Mengubah font pesan SweetAlert menjadi Roboto */
  .swal2-title, .swal2-content, .swal2-confirm {
    font-family: 'Roboto', sans-serif;
  }
</style>

<?php
include '_config.php';

$npm =0;
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];


$query = "INSERT INTO mahasiswa(nama, alamat,nohp)VALUES('$nama','$alamat','$nohp')";
$result = mysqli_query($con, $query);
echo $result;

if ($result) { ?>
  <script>
    Swal.fire({
      icon: 'success', // Ikoni pesan (contoh: success, error, warning)
      title: 'Bagus Berhasil Menambahkan Rating!',
      text: 'Klik OK untuk kembali ke halaman utama',
      confirmButtonColor: '#14b8a6',
      confirmButtonText: 'OK',
      
    }).then((result) => {
      if (result.isConfirmed) {
        // Arahkan ke halaman index.php jika pengguna menekan OK
        location.href = 'index.php';
      }
    });
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'index.php'
  </script>
<?php } ?>