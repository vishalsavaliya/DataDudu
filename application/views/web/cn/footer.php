<<<<<<< HEAD
<!-- Footer Widgets -->
<footer>
    <!-- Footer Info -->
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <p class="copyright">數據嘟嘟 版權 2016.</p>       
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?= base_url() ?>webassets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/application.js"></script>
<script type="text/javascript">
    $(document).ready(function () {      
        
        $dropid = localStorage.getItem('dropid');
        if ($dropid == null) {
            localStorage.setItem('dropid', 'drop1');
        }
        $dropid = localStorage.getItem('dropid');
        $('.catdrop').removeClass('faq-open');
        $('#' + $dropid + ' .catdrop').removeClass('faq-close');
        $('#' + $dropid + ' .catdrop').addClass('faq-open');
        $('#' + $dropid + ' .faq-content').show();


        $('.catdrop').click(function () {
            $dropid = $(this).parent().attr('id');
            localStorage.setItem('dropid', $dropid);
        });
        
        $('.cat').click(function(){
            $(this).next().children('span').trigger('click');            
        });
        
        $full = $(window).height();
        $header = $('header').height();
        $main_header = $('.main-header').height();
        $footer = $('footer').height();
        $content = $full - (+$header + +$main_header + +$footer + 30);
        $('.wrap').css('min-height', $content);
        
    });
</script>
=======
<!-- Footer Widgets -->
<footer>
    <!-- Footer Info -->
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <p class="copyright">數據嘟嘟 版權 2016.</p>       
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?= base_url() ?>webassets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?= base_url() ?>webassets/js/application.js"></script>
<script type="text/javascript">
    $(document).ready(function () {      
        
        $dropid = localStorage.getItem('dropid');
        if ($dropid == null) {
            localStorage.setItem('dropid', 'drop1');
        }
        $dropid = localStorage.getItem('dropid');
        $('.catdrop').removeClass('faq-open');
        $('#' + $dropid + ' .catdrop').removeClass('faq-close');
        $('#' + $dropid + ' .catdrop').addClass('faq-open');
        $('#' + $dropid + ' .faq-content').show();


        $('.catdrop').click(function () {
            $dropid = $(this).parent().attr('id');
            localStorage.setItem('dropid', $dropid);
        });
        
        $('.cat').click(function(){
            $(this).next().children('span').trigger('click');            
        });
        
        $full = $(window).height();
        $header = $('header').height();
        $main_header = $('.main-header').height();
        $footer = $('footer').height();
        $content = $full - (+$header + +$main_header + +$footer + 30);
        $('.wrap').css('min-height', $content);
        
    });
</script>
>>>>>>> origin/master
</html>