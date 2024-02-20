<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Give2Give |
                <?= $title ?>
                </title>
                <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon" />
                <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png" />
                <link rel="stylesheet" href="<?= base_url('assets/dist') ?>/assets/compiled/css/app.css" />
                <link rel="stylesheet" href="<?= base_url('assets/dist') ?>/assets/compiled/css/app-dark.css" />
                <link rel="stylesheet" href="<?= base_url('assets/dist') ?>/assets/compiled/css/iconly.css" />
        </head>
        <style type="text/css">
        .act-btn{
        display: block;
        width: 80px;
        height: 70px;
        text-decoration: none;
        transition: ease all 0.3s;
        position: fixed;
        right: 30px;
        bottom:30px;
        }

        #carousel-product img {
                background-position: center;
                background-size: cover;
        }
        </style>
        <body>
                <script src="assets/static/js/initTheme.js"></script>
                <div class="act-btn">
                        <div class="form-check form-switch fs-4">
                                <input
                                class="form-check-input me-0"
                                type="checkbox"
                                id="toggle-dark"
                                style="cursor: pointer"
                                />
                        </div>
                </div>
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container px-4 px-lg-5">
                                <a class="navbar-brand text-center" href="<?= base_url('main') ?>">Give to Give <br>GKI Depok</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                                                <li class="nav-item"><a class="nav-link" href=""#>About</a></li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <li><a class="dropdown-item" href="#">All Products</a></li>
                                                                <li><hr class="dropdown-divider" /></li>
                                                                <li><a class="dropdown-item" href="#">New Arrivals</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                        <form class="d-flex">
                                                
                                                <a class="btn btn-success ms-3" href="<?= base_url('login') ?>">
                                                        <i class="bi-box-arrow-in-right"></i>
                                                Login</a>
                                        </form>
                                </div>
                        </div>
                </div>
        </nav>
        <!-- Related items section-->
        <section class="py-3 bg-secondary" id="allProduct">
                <div class="container px-4 px-lg-5 mt-5">
                        <h2 class="fw-bolder mb-4">All products</h2>
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                <?php $no = 1;
                                foreach($product as $p) : ?>
                                <div class="col mb-5 productCard">
                                        <div class="card h-100">
                                                <a href="" data-bs-toggle="modal" data-bs-placement="top" title="Edit Product" data-bs-target="#edit<?= $p->id_product ?>">
                                                        <!-- ket kondisi produk -->
                                                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                                                <?php if ($p->kondisi): ?>
                                                                Bekas
                                                                <?php else: ?>
                                                                Baru
                                                                <?php endif; ?>
                                                        </div>
                                                        <!-- Product image-->
                                                        <?php if ($p->gambar0): ?>
                                                        <img class="card-img-top" width="450" height="180" src="<?= base_url('assets/upload') ?>/<?= $p->gambar0 ?>" alt="...">
                                                        <?php else: ?>
                                                        <img class="card-img-top" width="450" height="180" src="https://dummyimage.com/450x300/dee2e6/ff0000&text=Upload+Gb.+product" alt="...">
                                                        <?php endif; ?>
                                                        <!-- Product details-->
                                                        <div class="card-body p-4">
                                                                <div class="text-center">
                                                                        <!-- Product name-->
                                                                        <h5 class="fw-bolder"><?= $p->nama_product ?></h5>
                                                                        <!-- Product price-->
                                                                        Rp. <?= number_format($p->harga,0,",",".") ?>
                                                                        <p class="card-text"><?= $p->keterangan ?></p>
                                                                </div>
                                                        </div>
                                                        <!-- Product actions-->
                                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                                <div class="text-center"><a class="btn btn-success mt-auto" href="https://wa.me/<?= $p->no_telp ?>?text=Hai,%20saya%20tertarik%20dengan%20postingan%20<?= $p->nama_product ?>%20anda" target="_blank"><i class="bi-whatsapp"></i> Hubungi Penjual</a></div>
                                                        </div>
                                                </a>
                                        </div>
                                </div>
                                <?php endforeach ?>
                        </div>
                </div>
        </section>
        <!-- Modal Detail -->
        <?php foreach ($product as $p)  : ?>
        <div class="modal fade text-left" id="edit<?= $p->id_product ?>" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1<?= $p->id_product ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" id="headMdlProduct" role="document" >
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1<?= $p->id_product ?>">Detail Product <?= $p->nama_product ?></h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i>
                                        </button>
                                </div>
                                <div class="modal-body">
                                        <div id="Gallerycarousel<?= $p->id_product ?>" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#Gallerycarousel<?= $p->id_product ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#Gallerycarousel<?= $p->id_product ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#Gallerycarousel<?= $p->id_product ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                        <button type="button" data-bs-target="#Gallerycarousel<?= $p->id_product ?>" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                </div>
                                                <div class="carousel-inner" id="carousel-product" style="height: 400px;">
                                                        <div class="carousel-item active">
                                                                <img class="d-block w-100" src="<?= base_url('assets/upload')?>/<?= $p->gambar0 ?>">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?= base_url('assets/upload')?>/<?= $p->gambar1 ?>">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?= base_url('assets/upload')?>/<?= $p->gambar2 ?>">
                                                        </div>
                                                        <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?= base_url('assets/upload')?>/<?= $p->gambar3 ?>">
                                                        </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#Gallerycarousel<?= $p->id_product ?>" role="button" type="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#Gallerycarousel<?= $p->id_product ?>" role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                </a>
                                        </div>
                                        <div >
                                                <h1><?= $p->nama_product ?>
                                                <?php if ($p->kondisi == '0'): ?>
                                                        <span>(Baru)</span>
                                                <?php else : ?>
                                                        <span>(Bekas)</span>
                                                <?php endif; ?>
                                                </h1>
                                                <h4>Rp. <?= number_format($p->harga,0,",",".") ?></h4>
                                                <p><b><u>Spesifikasi</u></b><br><?= $p->spesifikasi ?></p>
                                                <p><b><u>Keterangan</u></b><br><?= $p->keterangan ?></p>
                                        </div>
                                </div>
                        <div class="modal-footer">
                                <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                                </button>
                        </div>
                        </div>
                </div>
        </div>
<?php endforeach ?>
<!-- End Modal Detail -->
<footer>
        <div class="footer clearfix pt-2 text-muted bg-gray">
                <div class="row justify-content-between">
                        <div class="col-4">
                                <p>2024 &copy; Jidan Hafidz Fauzi</p>
                        </div>
                        <div class="col-4 text-end">
                                <p>
                                        Crafted with
                                        <span class="text-danger"
                                                ><i class="bi bi-heart-fill icon-mid"></i
                                        ></span>
                                        by <a href="#">Hafidz</a>
                                </p>
                        </div>
                        
                </div>
        </div>
</footer>
<script src="<?= base_url('assets/dist') ?>/assets/static/js/components/dark.js"></script>
<script src="<?= base_url('assets/dist') ?>/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/dist') ?>/assets/compiled/js/app.js"></script>
<!-- Need: Apexcharts -->
<script src="<?= base_url('assets/dist') ?>/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets/dist') ?>/assets/static/js/pages/dashboard.js"></script>
</body>
</html>