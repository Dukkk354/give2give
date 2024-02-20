<script type="text/javascript">
        function readURL(input, targetId) {
            // Mendapatkan elemen gambar target berdasarkan ID
            var targetImg = $('#' + targetId);

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // Mengatur sumber gambar target dengan hasil baca FileReader
                    targetImg.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input, targetId, product_id) {
            // Mendapatkan elemen gambar target berdasarkan ID
            var targetImg = $('#' + targetId + product_id);

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // Mengatur sumber gambar target dengan hasil baca FileReader
                    targetImg.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function openmdlexampleModalCenter() {
          $('#modalAdd').modal('show');
        }

        function closemdlexampleModalCenter() {
          $('#modalAdd').modal('hide');
        }

        function validateForm(event) {

            event.preventDefault(); // Menghentikan pengiriman formulir biasa

          var nama_product = document.getElementById("nama_product").value;
          var kategori = document.getElementById("kategori").value;
          var harga = document.getElementById("harga").value;
          var spesifikasi = document.getElementById("spesifikasi").value;
          var kondisi = document.getElementById("kondisi").value;
          var keterangan = document.getElementById("keterangan").value;
          var gambar1 = document.getElementById("gambar1").value;
          var gambar2 = document.getElementById("gambar2").value;
          var gambar3 = document.getElementById("gambar3").value;
          var gambar4 = document.getElementById("gambar4").value;

          var regex = /[-/]/;
          
          if (nama_product === '') {
            alert("Nama Product wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          } else if (kategori === '') {
            alert("Kategori wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          } else if (harga === '') {
            alert("Harga wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          }  else if (spesifikasi === '') {
            alert("Spesifikasi wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          } else if (kondisi === '') {
            alert("Kondisi wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          } else if (keterangan === '') {
            alert("Keterangan wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          } else if (gambar1 === '') {
            alert("Gambar ke 1 wajib diisi.");
            return false;
            openmdlexampleModalCenter();
          }  else if (regex.test(gambar1)) {
            alert("Nama file tidak boleh mengandung karakter \"-\" atau \"/\".");
            gambar1.value = '';
            return false;
            openmdlexampleModalCenter();
          } else if (regex.test(gambar2)) {
            alert("Nama file tidak boleh mengandung karakter \"-\" atau \"/\".");
            gambar2.value = '';
            return false;
            openmdlexampleModalCenter();
          } else if (regex.test(gambar3)) {
            alert("Nama file tidak boleh mengandung karakter \"-\" atau \"/\".");
            gambar3.value = '';
            return false;
            openmdlexampleModalCenter();
          } else if (regex.test(gambar3)) {
            alert("Nama file tidak boleh mengandung karakter \"-\" atau \"/\".");
            gambar3.value = '';
            return false;
            openmdlexampleModalCenter();
          }  else if (nama_product && kategori && kategori && kategori && kategori && kategori && !regex.test(gambar1) && !regex.test(gambar2) && !regex.test(gambar3) && !regex.test(gambar4)) {

                $('#loading').modal('show');

                var formData = new FormData(document.getElementById("myForm"));
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "product/do_upload", true);
                xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    // Menyembunyikan loading indicator
                    $('#modalAdd').modal('hide');
                  if (xhr.status === 200) {
                    window.location.href = '<?= base_url() ?>/product/massage/' + encodeURIComponent(1);
                    $('#loading').modal('hide');
                  } else {
                    alert("Terjadi kesalahan saat mengirim formulir.");
                  }
                }
              };
              xhr.send(formData);
                      }
        }

</script>
<style type="text/css">
    img{
        width: 75px;
        height:50px;
    }
    input[type=file]{
        padding:5px;
        background:#2d2d2d;
    }
</style>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
            List Product
            </h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" onclick="openmdlexampleModalCenter();"><i class="bi bi-bag-plus"></i> Tambah Product</button>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Product</th>
                            <th>Harga</th>
                            <th width="10%">Keterangan</th>
                            <th width="10%">Spesifikasi</th>
                            <th>Kategori</th>
                            <th>Kondisi</th>
                            <th>Verifikasi</th>
                            <th>Status</th>
                            <?php if ($this->session->userdata('iduser') == '1'): ?>
                                <th>Penjual</th>
                            <?php endif ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($product as $p) : ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $p->nama_product ?></td>
                            <td><?= $p->harga ?></td>
                            <td><?= $p->keterangan ?></td>
                            <td><?= $p->spesifikasi ?></td>
                            <td><?= $p->kategori ?></td>
                            <?php if ($p->kondisi == '1') : ?>
                                <td>Bekas</td>
                            <?php else: ?>
                                <td>Baru</td>
                            <?php endif ?>
                            <?php if ($p->verif == '1') : ?>
                                <td class="text-primary ">OK</td>
                            <?php else: ?>
                                <td class="text-danger"><b>NOT OK</b></td>
                            <?php endif ?>
                            <?php if ($p->status == '1') : ?>
                                <td>Terjual</td>
                            <?php else: ?>
                                <td>Tersedia</td>
                            <?php endif ?>
                            <?php if ($this->session->userdata('iduser') == '1'): ?>
                                <td><?= $p->nama ?></td>
                            <?php endif ?>
                            <td>
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Edit Product" data-bs-target="#edit<?= $p->id_product ?>" class="btn btn-warning btn-sm"><i class="bi-pencil-square"></i></button>
                                <!-- <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Upload Foto" data-bs-target="#modalUpload<?= $p->id_product ?>" class="btn btn-primary btn-sm"><i class="bi-file-earmark-arrow-up"></i></button> -->
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Delete" data-bs-target="#modalDelete<?= $p->id_product ?>" class="btn btn-danger btn-sm"><i class="bi-trash"></i></button>
                            </td>
                        </tr>
                        
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Basic Tables end -->
<!-- Modal Add -->
<div class="modal fade" id="modalAdd" aria-labelledby="exampleModalCenterTitle">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Product </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
                <div class="modal-body">
            <form id="myForm" enctype="multipart/form-data" onsubmit="return validateForm(event)" data-parsley-validate>
                    <label for="nama_product">Nama Product: </label>
                    <div class="form-group">
                        <input id="nama_product" name="nama_product" type="text" placeholder="Masukan Nama Product" class="form-control" data-parsley-required="true">
                    </div>
                    <label for="kategori">Kategori: </label>
                    <fieldset class="form-group">
                        <select class="form-select" id="kategori" name="kategori">
                            <option value="" selected disabled>-- Silahkan Pilih --</option>
                        <?php $no = 1;
                        foreach($kategori as $k) : ?>
                            <option value="<?= $k->id_kategori ?>"><?= $k->nm_kategori ?></option>
                        <?php endforeach ?>
                        </select>
                    </fieldset>
                    <label for="harga">Harga: </label>
                    <div class="form-group">
                        <input id="harga" name="harga" type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukan Harga" class="form-control" data-parsley-required="true">
                    </div>
                    <div class="card">
                    <label for="harga">Spesifikasi: </label>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" class="form-control" placeholder="Masukan spesifikasi"
                                 id="spesifikasi" name="spesifikasi" data-parsley-required="true"></textarea>
                            <label for="spesifikasi">Spesifikasi</label>
                        </div>
                    </div>
                    <!-- <label for="keterangan">Spesifikasi: </label>
                    <div class="form-group">
                        <input id="keterangan" name="keterangan" type="textarea" placeholder="Masukan Keterangan" class="form-control">
                    </div> -->
                    <label for="kondisi">Kondisi: </label>
                    <fieldset class="form-group">
                        <select class="form-select" id="kondisi" name="kondisi" data-parsley-required="true">
                            <option value="" selected disabled>-- Silahkan Pilih --</option>
                            <option value="0">Baru</option>
                            <option value="1">Bekas</option>
                        </select>
                    </fieldset>
                    <div class="card">
                    <label for="harga">Keterangan: </label>
                        <div class="form-floating">
                            <textarea rows="4" cols="50" class="form-control" placeholder="Masukan keterangan"
                                id="keterangan" name="keterangan" data-parsley-required="true"></textarea>
                            <label for="keterangan">Keterangan</label>
                        </div>
                    </div>
                     <input type="datetime-local" id="datetime" name="datetime" value="<?php echo date('Y-m-d\TH:i'); ?>" hidden>
                    <label for="foto">Upload Gambar  ---------------</label>
                    <div class="form-group">
                        <input class="form-control-file" onchange="readURL(this,'blah1');" name="gambar1" type="file" id="gambar1" required image-crop-aspect-ratio="3:2"> <img id="blah1" src="" alt="your image" />
                    </div>
                    <div class="form-group">
                        <input class="form-control-file" onchange="readURL(this,'blah2');" name="gambar2" type="file" id="gambar2" image-crop-aspect-ratio="3:2"> <img id="blah2" src="" alt="your image" />
                    </div>
                    <div class="form-group">
                        <input class="form-control-file" onchange="readURL(this,'blah3');" name="gambar3" type="file" id="gambar3" image-crop-aspect-ratio="3:2"> <img id="blah3" src="" alt="your image" />
                    </div>
                    <div class="form-group">
                        <input class="form-control-file" onchange="readURL(this,'blah4');" name="gambar4" type="file" id="gambar4" image-crop-aspect-ratio="3:2"> <img id="blah4" src="" alt="your image" />
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-light-secondary" onclick="closemdlexampleModalCenter()"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                    </button>
                    <button class="btn btn-primary ms-1" type="submit"> <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add -->
<!-- Edit Add -->
<?php foreach ($product as $p)  : ?>
<div class="modal fade" id="edit<?= $p->id_product ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalScrollableTitle">Edit Product </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('product/edit_product/' .$p->id_product) ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <label for="nama_product">Nama Product: </label>
                    <div class="form-group">
                        <input id="nama_product" name="nama_product" type="text" placeholder="Masukan Nama Product" class="form-control" data-parsley-required="true" value="<?= $p->nama_product ?>">
                    </div>
                    <label for="kategori">Kategori: </label>
                    <fieldset class="form-group">
                        <select class="form-select" id="kategori" name="kategori">
                            <option value="" selected disabled>-- Silahkan Pilih --</option>
                        <?php $no = 1;
                        foreach($kategori as $k) : ?>
                            <option value="<?= $k->id_kategori ?>" <?php if($p->kategori == $k->id_kategori) echo "selected"; ?> ><?= $k->nm_kategori ?></option>
                        <?php endforeach ?>
                        </select>
                    </fieldset>
                    <label for="harga">Harga: </label>
                    <div class="form-group">
                        <input id="harga" name="harga" type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukan Harga" class="form-control" data-parsley-required="true" value="<?= $p->harga ?>">
                    </div>
                    <div class="card">
                    <label for="harga">Spesifikasi: </label>
                        <div class="form-floating">
                            <textarea rows="10" class="form-control" placeholder="Masukan spesifikasi"
                                id="floatingTextarea" id="spesifikasi" name="spesifikasi" data-parsley-required="true"><?= $p->spesifikasi ?></textarea>
                            <label for="floatingTextarea">Spesifikasi</label>
                        </div>
                    </div>
                    <label for="kondisi">Kondisi: </label>
                    <fieldset class="form-group">
                        <select class="form-select" id="kondisi" name="kondisi">
                            <option value="" disabled>-- Silahkan Pilih --</option>
                            <option value="0" <?php if($p->kondisi == '0') echo "selected"; ?>>Baru</option>
                            <option value="1" <?php if($p->kondisi == '1') echo "selected"; ?>>Bekas</option>
                        </select>
                    </fieldset>
                    <div class="card">
                    <label for="harga">Keterangan: </label>
                        <div class="form-floating">
                            <textarea rows="10" class="form-control" placeholder="Masukan keterangan"
                                id="floatingTextarea" id="keterangan" name="keterangan" data-parsley-required="true"><?= $p->keterangan ?></textarea>
                            <label for="floatingTextarea">Keterangan</label>
                        </div>
                    </div>
                    <!-- <label for="foto">Upload Gambar  ---------------</label>
                    <div class="form-group">
                         <?php if ($p->gambar0 == true): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah5','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah5<?= $p->id_product ?>" src="<?= base_url('assets/upload') ?>/<?= $p->gambar0 ?>" alt="your image" />
                        <?php elseif ($p->gambar0 == false): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah51','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah51<?= $p->id_product ?>" src="" alt="your image" />
                        <?php endif ?>
                    </div> -->
                    <!-- <div class="form-group">
                        <?php if ($p->gambar1 == true): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah6','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah6<?= $p->id_product ?>" src="<?= base_url('assets/upload') ?>/<?= $p->gambar1 ?>" alt="your image" />
                        <?php elseif ($p->gambar1 == false): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah61','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah61<?= $p->id_product ?>" src="" alt="your image" />
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <?php if ($p->gambar2 == true): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah7','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah7<?= $p->id_product ?>" src="<?= base_url('assets/upload') ?>/<?= $p->gambar2 ?>" alt="your image" />
                        <?php elseif ($p->gambar2 == false): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah71','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah71<?= $p->id_product ?>" src="" alt="your image" />
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <?php if ($p->gambar3 == true): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah8','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah8<?= $p->id_product ?>" src="<?= base_url('assets/upload') ?>/<?= $p->gambar3 ?>" alt="your image" />
                        <?php elseif ($p->gambar3 == false): ?>
                            <input class="form-control-file" onchange="readURL2(this,'blah81','<?= $p->id_product ?>');" name="gambar1" type="file" id="" required image-crop-aspect-ratio="3:2">
                            <img id="blah81<?= $p->id_product ?>" src="" alt="your image" />
                        <?php endif ?>
                    </div> -->
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal"> <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>  
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Edit Add -->

<!-- Upload Img Add -->

<?php foreach ($product as $p)  : ?>
    <!--Extra Large Modal -->
    <div class="modal fade text-left w-100" id="modalUpload<?= $p->id_product ?>" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
            role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Upload Gambar Product </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <?= form_open_multipart('product/prosesUpload'); ?>
                <div class="modal-body">
                    <label for="nama_product">Nama Product:</label>
                    <div class="form-group">
                        <input name="id_product" type="text" class="form-control" value="<?= $p->id_product ?>" hidden>
                        <input name="nama_product" type="text" placeholder="Masukan Nama Product" class="form-control" value="<?= $p->nama_product ?>" disabled>
                    </div>
                    <label for="formFileMultiple" class="form-label">Upload File Foto Product (Max. 4 Foto)</label>
                    <div class="form-group">
                        <input class="form-control" name="gambar[]" type="file" id="formFileMultiple" required multiple
                                data-max-files="4" image-crop-aspect-ratio="3:2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal"> <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            <?= form_close(); ?>
        </div>
        </div>
    </div>
<?php endforeach ?>

<!-- End Upload Img Add -->

<!--Delete Modal -->
<?php foreach ($product as $p)  : ?>
<div class="modal fade text-left" id="modalDelete<?= $p->id_product ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="myModalLabel1">Hapus Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah anda yakin ingin menghapus data <b>"<?= $p->nama_product ?>"</b>?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                <span class="d-none d-sm-block">Close</span>
                </button>
                <a href="<?= base_url('product/delete_product/' .$p->id_product) ?>" class="btn btn-danger ms-1"><span class="d-none d-sm-block">Delete</span></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Delete Modal -->