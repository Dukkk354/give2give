<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
            List User
            </h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bi bi-person-fill-add"></i> Tambah User</button>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Sektor</th>
                            <th>No Telp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach($user as $u) : ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $u->nama ?></td>
                            <td><?= $u->alamat ?></td>
                            <td><?= $u->sektor ?></td>
                            <td><?= $u->no_telp ?></td>
                            <td>
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Edit" data-bs-target="#edit<?= $u->iduser ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Delete" data-bs-target="#modalDelete<?= $u->iduser ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah User </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <form action="<?= base_url('User/add_user') ?>" method="POST">
                <div class="modal-body">
                    <label for="nama_user">Username: </label>
                    <div class="form-group">
                        <input id="username" name="username" type="text" placeholder="Masukan Nama Username" class="form-control">
                    </div>
                    <label for="harga">Password: </label>
                    <div class="form-group">
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                    </div>
                    <label for="nama_user">Nama User: </label>
                    <div class="form-group">
                        <input id="nama_user" name="nama_user" type="text" placeholder="Masukan Nama User" class="form-control">
                    </div>
                    <label for="alamat">Alamat: </label>
                    <div class="form-group">
                        <input id="alamat" name="alamat" type="text" placeholder="Masukan Alamat" class="form-control">
                    </div>
                    <label for="sektor">Sektor: </label>
                        <fieldset class="form-group">
                            <select class="form-select" id="sektor" name="sektor">
                              <option value="" selected disabled>-- Silahkan Pilih --</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                            </select>
                          </fieldset>
                    <label for="no_telp">No. Telp: </label>
                    <div class="form-group">
                        <input id="no_telp" name="no_telp" onkeypress="return hanyaAngka(event)" type="text" placeholder="Masukan Nomor Telepon" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" value="upload" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal"> <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Add -->

<!-- Edit Add -->
<?php foreach ($user as $u)  : ?>
<div class="modal fade" id="edit<?= $u->iduser ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah User </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
            </div>
            <form action="<?= base_url('User/edit_user/' .$u->iduser) ?>" method="POST">
                <div class="modal-body">
                    <label for="nama_user">Username: </label>
                    <div class="form-group">
                        <input id="username" name="username" type="text" placeholder="Masukan Nama Username" value="<?= $u->username ?>" class="form-control">
                    </div>
                    <label for="harga">Password: </label>
                    <div class="form-group">
                        <input id="password" name="password" value="<?= $u->password ?>" type="password" placeholder="Password" class="form-control">
                    </div>
                    <label for="nama_user">Nama User: </label>
                    <div class="form-group">
                        <input id="nama_user" name="nama_user" value="<?= $u->nama ?>" type="text" placeholder="Masukan Nama User" class="form-control">
                    </div>
                    <label for="alamat">Alamat: </label>
                    <div class="form-group">
                        <input id="alamat" value="<?= $u->alamat ?>" name="alamat" type="text" placeholder="Masukan Alamat" class="form-control">
                    </div>
                    <label for="sektor">Sektor: </label>
                        <fieldset class="form-group">
                            <select class="form-select" id="sektor" name=" sektor" value="<?= $u->sektor ?>">
                              <option value="" disabled>-- Silahkan Pilih --</option>
                              <option value="1" <?php if($u->sektor == '1') echo "selected"; ?>>1</option>
                              <option value="2" <?php if($u->sektor == '2') echo "selected"; ?>>2</option>
                              <option value="3" <?php if($u->sektor == '3') echo "selected"; ?>>3</option>
                              <option value="4" <?php if($u->sektor == '4') echo "selected"; ?>>4</option>
                              <option value="5" <?php if($u->sektor == '5') echo "selected"; ?>>5</option>
                              <option value="6" <?php if($u->sektor == '6') echo "selected"; ?>>6</option>
                              <option value="7" <?php if($u->sektor == '7') echo "selected"; ?>>7</option>
                              <option value="8" <?php if($u->sektor == '8') echo "selected"; ?>>8</option>
                            </select>
                          </fieldset>
                    <label for="no_telp">No. Telp: </label>
                    <div class="form-group">
                        <input id="no_telp" name="no_telp" value="<?= $u->no_telp ?>" type="text" onkeypress="return hanyaAngka(event)" placeholder="Masukan Nomor Telepon" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" value="upload" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal"> <i class="bx bx-check d-block d-sm-none"></i><span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Edit Add -->

<!--Delete Modal -->
<?php foreach ($user as $u)  : ?>
<div class="modal fade text-left" id="modalDelete<?= $u->iduser ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="myModalLabel1">Hapus Data User</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah anda yakin ingin menghapus data user<b>"<?= $u->nama ?>"</b>?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                <span class="d-none d-sm-block">Close</span>
                </button>
                <a href="<?= base_url('user/delete_user/' .$u->iduser) ?>" class="btn btn-danger ms-1"><span class="d-none d-sm-block">Delete</span></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Delete Modal -->