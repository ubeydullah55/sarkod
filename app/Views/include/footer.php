<footer class="footer pt-3">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © 2025,
                    made with <i class="fa fa-heart"></i> by
                    <a href="http://www.ubeydullahdogan.com.tr" class="font-weight-bold" target="_blank">Ubeydullah Dogan</a>
                    for a better web.Versiyon no: <b>1.06</b>
                </div>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </div>
</footer>
</div>
</main>



<!--   Core JS Files   -->
<script src="<?= base_url('assets/assets/js/core/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/core/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/assets/js/plugins/chartjs.min.js') ?>"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('assets/assets/js/soft-ui-dashboard.min.js?v=1.1.0') ?>"></script>
</body>

</html>
