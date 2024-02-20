<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
            List Product
            </h5>
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
                            <?php if ($p->verif == '1') : ?>
                                <td class="text-primary ">Sudah Terverifikasi</td>
                            <?php else: ?>
                                <td class="text-danger"><b>Belum Terverifikasi</b></td>
                            <?php endif ?>
                             <?php if ($p->status == '1') : ?>
                                <td>Terjual</td>
                            <?php else: ?>
                                <td>Tersedia</td>
                            <?php endif ?>
                            <?php if ($this->session->userdata('iduser') == '1'): ?>
                                <td><?= $p->nama ?></td>
                            <?php endif ?>
                            <?php if ($p->verif == '1') : ?>
                                <td>
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Batal Verifikasi" data-bs-target="#modalBtlVerif<?= $p->id_product ?>" class="btn btn-warning btn-sm"><i class="bi-patch-check"></i></button>
                                </td>
                            <?php else: ?>
                                <td>
                                <button href="" data-bs-toggle="modal" data-bs-placement="top" title="Verifikasi" data-bs-target="#modalVerif<?= $p->id_product ?>" class="btn btn-danger btn-sm"><i class="bi-patch-minus"></i></button>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--Verif Modal -->
<?php foreach ($product as $p)  : ?>
<div class="modal fade text-left" id="modalVerif<?= $p->id_product ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="myModalLabel1">Verifikasi Product</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah anda yakin ingin memverifikasi produk <b>"<?= $p->nama_product ?>"</b>?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                <span class="d-none d-sm-block">Close</span>
                </button>
                <a href="<?= base_url('verif/verif_product/' .$p->id_product) ?>" class="btn btn-primary ms-1"><span class="d-none d-sm-block"> Verifikasi</span></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Verif Modal -->

<!-- Batal Verif Modal -->
<?php foreach ($product as $p)  : ?>
<div class="modal fade text-left" id="modalBtlVerif<?= $p->id_product ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="myModalLabel1">Batal Verifikasi Product</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Apakah anda ingin membatalkan verifikasi produk <b>"<?= $p->nama_product ?>"</b>?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                <span class="d-none d-sm-block">Close</span>
                </button>
                <a href="<?= base_url('verif/btl_verif_product/' .$p->id_product) ?>" class="btn btn-danger ms-1"><span class="d-none d-sm-block"> Batal Verifikasi</span></a>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- End Batal Verif Modal -->