<div class="col-12 col-lg-9">
	<div class="row">
		<div class="col-6 col-lg-3 col-md-6">
			<div class="card">
				<div class="card-body px-4 py-4-5">
					<div class="row">
						<div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
							<div class="stats-icon purple mb-2">
								<i class="bi-box2-heart-fill"></i>
							</div>
						</div>
						<div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
							<h6 class="text-muted font-semibold">Jumlah Produk</h6>
							<h6 class="font-extrabold mb-0"><?= $jml_barang ?> Produk</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-lg-3 col-md-6">
			<div class="card">
				<div class="card-body px-4 py-4-5">
					<div class="row">
						<div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
							<div class="stats-icon blue mb-2">
								<i class="bi-patch-exclamation-fill"></i>
							</div>
						</div>
						<div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
							<h6 class="text-muted font-semibold">Belum Verifikasi</h6>
							<h6 class="font-extrabold mb-0"><?= $blm_verif ?> Verif</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-lg-3 col-md-6">
			<div class="card">
				<div class="card-body px-4 py-4-5">
					<div class="row">
						<div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
							<div class="stats-icon green mb-2">
								<i class="bi-bag-x-fill"></i>
							</div>
						</div>
						<div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
							<h6 class="text-muted font-semibold">Belum Terjual</h6>
							<h6 class="font-extrabold mb-0"><?= $blm_terjual ?> Tersedia</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-lg-3 col-md-6">
			<div class="card">
				<div class="card-body px-4 py-4-5">
					<div class="row">
						<div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
							<div class="stats-icon red mb-2">
								<i class="bi-bag-check-fill"></i>
							</div>
						</div>
						<div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
							<h6 class="text-muted font-semibold">Sudah Terjual</h6>
							<h6 class="font-extrabold mb-0"><?= $terjual ?> Terjual</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-12 col-lg-3">
	<div class="card">
		<div class="card-body py-4 px-4">
			<div class="d-flex align-items-center">
				<div class="avatar avatar-xl">
					<img src="<?= base_url('assets/dist') ?>/assets/compiled/jpg/1.jpg" alt="Face 1">
				</div>
				<div class="ms-3 name">
					<h5 class="font-bold"><?= $username['nama']; ?></h5>
					<h6 class="text-muted mb-0"><?= $username['alamat']; ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>