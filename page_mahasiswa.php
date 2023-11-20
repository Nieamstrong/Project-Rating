<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5">
  <!-- smallbox -->
  <div class="mb-4  w-fit  flex flex-warp">
    <!-- smallbox w-laundry -->
    <div class="rounded-lg bg-teal-200 p-4 mx-2 hover:opacity-80 shadow-lg">
      <p class="font-semibold text-teal-700">Jumlah Data Website Pengelolaan Laundry</p>
      <?php
      $dataCount = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry'")->fetch_assoc();
      $totalData = $dataCount['total'];
      $dataCount1 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry' AND Alamat ='Bintang 1'")->fetch_assoc();
      $totalData1 = $dataCount1['total'];
      $dataCount2 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry' AND Alamat ='Bintang 2'")->fetch_assoc();
      $totalData2 = $dataCount2['total'];
      $dataCount3 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry' AND Alamat ='Bintang 3'")->fetch_assoc();
      $totalData3 = $dataCount3['total'];
      $dataCount4 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry' AND Alamat ='Bintang 4'")->fetch_assoc();
      $totalData4 = $dataCount4['total'];
      $dataCount5 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengelolaan Laundry' AND Alamat ='Bintang 5'")->fetch_assoc();
      $totalData5 = $dataCount5['total'];
      ?>
      <p class="text-2xl font-bold text-left text-slate-800"> <?= $totalData ?> Data</p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐ : <?= $totalData1 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐ : <?= $totalData2 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐ : <?= $totalData3 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐ : <?= $totalData4 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐⭐ : <?= $totalData5 ?></p>
    </div>
    <!-- smallbox webpam -->
    <div class="rounded-lg bg-teal-200 p-4 mx-2 hover:opacity-80 shadow-lg">
      <p class="font-semibold text-teal-700">Jumlah Data Website Pengaduan Aspirasi Masyarakat</p>
      <?php
      $dataCount = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat'")->fetch_assoc();
      $totalData = $dataCount['total'];
      $dataCount1 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat' AND Alamat ='Bintang 1'")->fetch_assoc();
      $totalData1 = $dataCount1['total'];
      $dataCount2 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat' AND Alamat ='Bintang 2'")->fetch_assoc();
      $totalData2 = $dataCount2['total'];
      $dataCount3 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat' AND Alamat ='Bintang 3'")->fetch_assoc();
      $totalData3 = $dataCount3['total'];
      $dataCount4 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat' AND Alamat ='Bintang 4'")->fetch_assoc();
      $totalData4 = $dataCount4['total'];
      $dataCount5 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pengaduan Aspirasi Masyarakat' AND Alamat ='Bintang 5'")->fetch_assoc();
      $totalData5 = $dataCount5['total'];
      ?>
      <p class="text-2xl font-bold text-left text-slate-800"><?= $totalData ?> Data</p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐ : <?= $totalData1 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐ : <?= $totalData2 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐ : <?= $totalData3 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐ : <?= $totalData4 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐⭐ : <?= $totalData5 ?></p>
    </div>
    <!-- smallbox spp -->
    <div class="rounded-lg bg-teal-200 p-4 mx-2 hover:opacity-80 shadow-lg">
      <p class="font-semibold text-teal-700">Jumlah Data Website Pembayaran Spp</p>
      <?php
      $dataCount = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp'")->fetch_assoc();
      $totalData = $dataCount['total'];
      $dataCount1 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp' AND Alamat ='Bintang 1'")->fetch_assoc();
      $totalData1 = $dataCount1['total'];
      $dataCount2 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp' AND Alamat ='Bintang 2'")->fetch_assoc();
      $totalData2 = $dataCount2['total'];
      $dataCount3 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp' AND Alamat ='Bintang 3'")->fetch_assoc();
      $totalData3 = $dataCount3['total'];
      $dataCount4 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp' AND Alamat ='Bintang 4'")->fetch_assoc();
      $totalData4 = $dataCount4['total'];
      $dataCount5 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = 'Website Pembayaran Spp' AND Alamat ='Bintang 5'")->fetch_assoc();
      $totalData5 = $dataCount5['total'];
      ?>
      <p class="text-2xl font-bold text-left text-slate-800"><?= $totalData ?> Data</p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐ : <?= $totalData1 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐ : <?= $totalData2 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐ : <?= $totalData3 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐ : <?= $totalData4 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐⭐ : <?= $totalData5 ?></p>
    </div>
    <!-- smallbox d-laundry -->
    <div class="rounded-lg bg-teal-200 p-4 mx-2 hover:opacity-80 shadow-lg">
      <p class="font-semibold text-teal-700">Jumlah Data Pengelolaan Laundry Desktop</p>
      <?php
      $dataCount = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop'")->fetch_assoc();
      $totalData = $dataCount['total'];
      $dataCount1 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop' AND Alamat ='Bintang 1'")->fetch_assoc();
      $totalData1 = $dataCount1['total'];
      $dataCount2 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop' AND Alamat ='Bintang 2'")->fetch_assoc();
      $totalData2 = $dataCount2['total'];
      $dataCount3 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop' AND Alamat ='Bintang 3'")->fetch_assoc();
      $totalData3 = $dataCount3['total'];
      $dataCount4 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop' AND Alamat ='Bintang 4'")->fetch_assoc();
      $totalData4 = $dataCount4['total'];
      $dataCount5 = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa WHERE nama = ' Pengelolaan Laundry Desktop' AND Alamat ='Bintang 5'")->fetch_assoc();
      $totalData5 = $dataCount5['total'];
      ?>
      <p class="text-2xl font-bold text-left text-slate-800"><?= $totalData ?> Data</p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐ : <?= $totalData1 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐ : <?= $totalData2 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐ : <?= $totalData3 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐ : <?= $totalData4 ?></p>
      <p class="text-2xl font-bold text-left text-slate-800">⭐⭐⭐⭐⭐ : <?= $totalData5 ?></p>
    </div>

  </div>


  <!-- card table -->
  <div class="card im-box shadow-md mb-8">
    <h5 class="card-header fs-2 fw-bold text-center text-teal-500">Data Rating Project</h5>

    <div class="card-body">
      <!-- count all data -->
      <div class="mx-5 text-center ">
        <p class="font-semibold text-teal-700">Jumlah Semua Data</p>
        <?php
        $dataCount = mysqli_query($con, "SELECT COUNT(*) as total FROM mahasiswa")->fetch_assoc();
        $totalData = $dataCount['total'];
        ?>
        <p class="text-2xl font-bold underline decoration-teal-800 text-slate-800"><?= $totalData ?> Data</p>
        <!-- <button type="button" class=" py-2 px-7 font-semibold rounded-full bg-teal-500 text-white" data-toggle="modal" data-target="#modalAdd">
        Tambah Data Mahasiswa
      </button> -->
      </div>
      <!-- table -->
      <div class="overflow-x-auto overflow-scroll mt-3">
        <table class="table table-striped mt-3 text-center rounded-lg " id="main-table">
          <thead>
            <tr class="text-xl  text-teal-700">
              <th scope="col">No</th>
              <th scope="col">Nama Pemberi Rating</th>

              <th scope="col">Nama Project</th>
              <th scope="col">Rating Project</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            $data = mysqli_query($con, "SELECT * FROM mahasiswa");
            foreach ($data as $row) : ?>
              <tr class="text-center over">
                <th scope="row"><?= $i++ ?></th>
                <td><?= $row['nohp'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['alamat'] ?></td>



                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="form" action="proses_add.php" method="POST">

          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" rows="2" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="">No. HP</label>
            <input type="number" name="nohp" class="form-control">
          </div>
          <div class="form-group mb-2">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <button type="reset" class="bg-red-700 text-white py-2 px-4 rounded-md font-medium " data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="bg-teal-500 text-white py-2 px-4 rounded-md font-medium " onclick="return validateForm()">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ./Modal add -->
<script type='text/javascript'>
  function validateForm(form) {

    var nameField = form.name;
    var addressLine01 = form.addressLine01;

    if (isNotEmpty(nameField)) {
      if (isNotEmpty(addressLine01)) {
        return true;
        {
          {
            return false;
          }

          function isNotEmpty(field) {

            var fieldData = field.value;
            var regexPattern = /^[a-z][a-z\s]*$/;


            var letters = /^[A-Za-z]+$/;
            if (inputtxt.value.match(letters)) {

              field.className = "FieldError"; //Classs to highlight error
              alert("Please correct the errors in order to continue.");
              return false;

            } else {

              field.className = "FieldOk"; //Resets field back to default
              return true; //Submits form
            }

          }
        }
      }
    }

  }
</script>

<?php include '_footer.php'; ?>