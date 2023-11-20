<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Ubah Data Mahasiswa</h5>
    <div class="card-body">

      <?php
      $id = $_GET['id'];
      $data = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id = $id");
      foreach ($data as $row) : ?>

        <form action="proses_edit.php" method="POST">
          <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
          
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" rows="2" class="form-control"><?= $row['alamat'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="">No. HP</label>
            <input type="text" name="nohp" class="form-control" value="<?= $row['nohp'] ?>">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
          </div>
          <div class="form-group mt-2">
              <button type="reset" class="btn btn-danger">Clear</button>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- ./content -->
