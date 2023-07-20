<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; KP.3 Logistic Web Application <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/script.js"></script>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/DataTables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/DataTables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/Buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/Buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/Buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/Buttons/js/buttons.colVis.min.js"></script>






<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#tabel1').DataTable({
            "lengthMenu": [
                [5, 10, 100],
                [5, 10, 100]
            ],
            // buttons: ['excel', 'pdf', 'colvis']
            buttons: ['excel']
        });
        table.buttons().container()
            .prependTo('#tabel1_wrapper .col-md-6:eq(0)');

    });
</script>

</body>

</html>