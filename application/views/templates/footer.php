
 </section>
        </div>
 <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2024 &copy; Jidan Hafidz Fauzi</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"
                  ><i class="bi bi-heart-fill icon-mid"></i
                ></span>
                by <a href="#">Hafidz</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    

     <!-- Modal Loading -->
      <div class="modal fade text-left" id="loading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
          <div class="modal-content">
              <div class="modal-header bg-info">
                  <div class="spinner-grow text-light" role="status">
                      <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark" role="status">
                      <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                      <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark" role="status">
                      <span class="visually-hidden">Loading...</span>
                  </div>
              </div>
          </div>
      </div>
      </div>

    <script src="<?= base_url('assets/dist') ?>/assets/static/js/components/dark.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url('assets/dist') ?>/assets/compiled/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/static/js/pages/dashboard.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/static/js/pages/datatables.js"></script>

    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/filepond/filepond.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/toastify-js/src/toastify.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/static/js/pages/filepond.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="<?= base_url('assets/dist') ?>/assets/static/js/pages/parsley.js"></script>
    <script type="text/javascript">
      function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>

  </body>
</html>