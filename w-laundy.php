<?php include '_header.php'; ?>
<!-- content -->
<div class="container mt-5 bg-white">
    <div class="container mx-auto mt-5">
        <div class=" mx-auto bg-white shadow-lg rounded-lg ">
            <div class="p-7">
                <h1 class="text-2xl font-bold text-gray-800">Rating Project Website Laundry</h1>
                <form action="proses_add.php" method="POST">
                    <label for="alamat" class="text-gray-600">Pilih rating:</label>
                    <div class="form-group px-4 ">
                        <label for="" class="font-medium text-left mt-2">Nama Pemberi Rating</label>
                        <input type="text" name="nohp" class=" mt-2  form-control border-2 rounded-full border-teal-500 focus:border-teal-800" style="max-width: 500px;">
                    </div>
                    <div class="flex items-center text-center mt-2">
                        <input type="hidden" name="nama" value="Website Pengelolaan Laundry" id="nama">



                        <div class="form-check">
                            <input type="radio" name="alamat" class="form-check-input text-3xl mx-2 border-yellow-400 focus:bg-yellow-400 focus:border-none" id="star1" value="Bintang 1" required>
                            <label class="form-check-label text-4xl" for="star1">⭐</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="alamat" class="form-check-input text-3xl mx-2 border-yellow-400 focus:bg-yellow-400 focus:border-none" id="star2" value="Bintang 2">
                            <label class="form-check-label text-4xl" for="star2">⭐⭐</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="alamat" class="form-check-input text-3xl mx-2 border-yellow-400 focus:bg-yellow-400 focus:border-none" id "star3" value="Bintang 3">
                            <label class="form-check-label text-4xl" for="star3">⭐⭐⭐</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="alamat" class="form-check-input text-3xl mx-2 border-yellow-400 focus:bg-yellow-400 focus:border-none" id "star4" value="Bintang 4">
                            <label class="form-check-label text-4xl" for="star4">⭐⭐⭐⭐</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="alamat" class="form-check-input text-3xl mx-2 border-yellow-400 focus:bg-yellow-400 focus:border-none" id="star5" value="Bintang 5">
                            <label class="form-check-label text-4xl" for="star5">⭐⭐⭐⭐⭐</label>
                        </div>

                        <button type="submit" name="submit" class="mx-16 bg-teal-500 text-white py-6 px-12 rounded-md font-medium hover:opacity-80 hover:shadow-lg">Kirimkan Rating</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>