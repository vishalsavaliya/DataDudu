<<<<<<< HEAD
</div>
<!-- start: FOOTER -->
<footer>
    <div class="footer-inner">
        <div class="pull-left">
            &copy; <span class="current-year"></span><span class="text-bold text-uppercase">DataDuhu Inc</span>. <span>All rights reserved</span>
        </div>
        <div class="pull-right">
            <span class="go-top"><i class="ti-angle-up"></i></span>
        </div>
    </div>
</footer>
<!-- end: FOOTER -->

<script type="text/javascript">
    $(function () {
        $("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal'
        });
        checkbox();
        function checkbox() {
            $('table thead :checkbox').on('ifChecked ifUnchecked', function (event) {
                if (event.type == 'ifChecked') {
                    $('.icheckbox_minimal').iCheck('check');
                } else {
                    $('.icheckbox_minimal').iCheck('uncheck');
                }
            });
            $('table tbody :checkbox').on('ifChanged', function (event) {
                if ($('table tbody :checkbox').filter(':checked').length == $('table tbody :checkbox').length) {
                    $('table thead :checkbox').prop('checked', true);
                } else {
                    $('table thead :checkbox').prop('checked', false);
                }
                $('table thead :checkbox').iCheck('update');
            });
        }
        //-----------------------------iCheck All-----------------------------//

        $('ul.pagination').on('click', function () {
            $('.icheckbox_minimal').iCheck('uncheck');
            $("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal'
            });
            checkbox();
        });
    });

    $(document).ready(function () {
    });
</script>

<!-- start: MAIN JAVASCRIPTS -->

<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->

<script src="<?= base_url() ?>assets/vendor/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/alertify/alertify.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>assets/vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/autosize/autosize.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/selectFx/classie.js"></script>
<script src="<?= base_url() ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/selectFx/selectFx.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


<script src="<?= base_url() ?>assets/vendor/DataTables/jquery.dataTables.min.js"></script>

<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<!-- start: JavaScript Event Handlers for this page -->


<script src="<?= base_url() ?>assets/js/table-data.js"></script>
<script src="<?= base_url() ?>assets/js/form-elements.js"></script>

<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init();
        FormElements.init();
    });
</script>
</body>
</html>
=======
</div>
<!-- start: FOOTER -->
<footer>
    <div class="footer-inner">
        <div class="pull-left">
            &copy; <span class="current-year"></span><span class="text-bold text-uppercase">DataDuhu Inc</span>. <span>All rights reserved</span>
        </div>
        <div class="pull-right">
            <span class="go-top"><i class="ti-angle-up"></i></span>
        </div>
    </div>
</footer>
<!-- end: FOOTER -->

<script type="text/javascript">
    $(function () {
        $("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal'
        });
        checkbox();
        function checkbox() {
            $('table thead :checkbox').on('ifChecked ifUnchecked', function (event) {
                if (event.type == 'ifChecked') {
                    $('.icheckbox_minimal').iCheck('check');
                } else {
                    $('.icheckbox_minimal').iCheck('uncheck');
                }
            });
            $('table tbody :checkbox').on('ifChanged', function (event) {
                if ($('table tbody :checkbox').filter(':checked').length == $('table tbody :checkbox').length) {
                    $('table thead :checkbox').prop('checked', true);
                } else {
                    $('table thead :checkbox').prop('checked', false);
                }
                $('table thead :checkbox').iCheck('update');
            });
        }
        //-----------------------------iCheck All-----------------------------//

        $('ul.pagination').on('click', function () {
            $('.icheckbox_minimal').iCheck('uncheck');
            $("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal'
            });
            checkbox();
        });
    });

    $(document).ready(function () {
    });
</script>

<!-- start: MAIN JAVASCRIPTS -->

<script src="<?= base_url() ?>assets/vendor/modernizr/modernizr.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->

<script src="<?= base_url() ?>assets/vendor/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/alertify/alertify.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>assets/vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/autosize/autosize.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/selectFx/classie.js"></script>
<script src="<?= base_url() ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/selectFx/selectFx.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>


<script src="<?= base_url() ?>assets/vendor/DataTables/jquery.dataTables.min.js"></script>

<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<!-- start: JavaScript Event Handlers for this page -->


<script src="<?= base_url() ?>assets/js/table-data.js"></script>
<script src="<?= base_url() ?>assets/js/form-elements.js"></script>

<script>
    jQuery(document).ready(function () {
        Main.init();
        TableData.init();
        FormElements.init();
    });
</script>
</body>
</html>
>>>>>>> origin/master
