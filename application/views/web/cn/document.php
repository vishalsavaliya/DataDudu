<!-- Main content -->
<div class="wrap container" role="document">
    <div class="content row">
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
        <?php if (isset($fulldocument)) { ?>
            <div class="main col-sm-9" role="main">
                <article class="post hentry">
                    <header>
                        <h2 class="entry-title docname" style="color:#3498db">
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <?= $fulldocument->ch_doc_name ?>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <?= $fulldocument->ch_description ?>
                    </div>                                        
                </article>            
            </div><!-- /.main -->
        <?php } ?>        
    </div><!-- /.content -->
</div><!-- /.wrap -->