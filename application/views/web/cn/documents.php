<!-- Main content -->
<div class="wrap container" role="document">
    <div class="content row">
        <!-- Sidebar -->        
        <aside class="col-sm-3 faq-accordion" role="complementary">            
            <section class="widget nav_menu-2 widget_nav_menu">
                <div>
                    <h3>研究所 文件</h3>
                    <ul class="catul">
                        <?php
                        if (isset($category)) {
                            foreach ($category as $cat) {
                                ?>
                                <li>
                                    <article id="drop<?= $cat->category_id ?>" class="faq">
                                        <h5 class="cat"><?= $cat->ch_category_name ?></h5>
                                        <?php
                                        $document = $this->common->getDocByCategory($cat->category_name);
                                        if (isset($document) && count($document) > 0) {
                                            ?>
                                            <h5 class="entry-title catdrop"><span></span></h5>
                                            <div class="faq-content">
                                                <ul class="docul">
                                                    <?php foreach ($document as $doc) { ?>
                                                        <li class="doc">
                                                            <a href="<?= site_url() ."cn/". str_replace(" ", "-", $cat->category_name) . "/" . str_replace(" ", "-", $doc->doc_name) ?>">
                                                                <?= $doc->ch_doc_name ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        <?php } ?>
                                    </article>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </section>
        </aside> <!-- /.sidebar --> 
        <?php if (isset($category)) { ?>
            <div class="main col-sm-9" role="main">
                <div class="row knowledge-base-row">
                    <?php foreach ($category as $cat) { ?>
                        <div class="col-sm-6 kb-category">
                            <h2>
                                <a href="<?= site_url() ."cn/". str_replace(" ", "-", $cat->category_name) ?>">
                                    <?= $cat->ch_category_name ?>
                                </a>
                            </h2>
                            <?php
                            $document = $this->common->getDocByCategory($cat->category_name);
                            if (isset($document) && count($document) > 0) {
                                ?>
                                <ul class="category-posts">
                                    <?php foreach ($document as $doc) { ?>
                                        <li class="doc">
                                            <i class="fa fa-fw fa-file-text-o"></i>
                                            <a href="<?= site_url() ."cn/". str_replace(" ", "-", $cat->category_name) . "/" . str_replace(" ", "-", $doc->doc_name) ?>">
                                                <?= $doc->ch_doc_name ?>
                                            </a>
                                        </li>                                        
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>            
            </div><!-- /.main -->
        <?php } ?>        
    </div><!-- /.content -->
</div><!-- /.wrap -->
<script type="text/javascript">
    $(document).ready(function () {
        localStorage.setItem('dropid', 'drop1');
    });
</script>
