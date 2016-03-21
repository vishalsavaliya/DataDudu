<<<<<<< HEAD
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">API Categories</h1>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">
                                <?= isset($category) ? "Edit Existing" : "New" ?> API Category
                            </h4>
                        </div>
                        <?php $method = isset($category) ? "updateCategory" : "createCategory"; ?>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <form id="categoryForm" role="form" action="<?= site_url() ?>admin/category/<?= $method ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input id="category_name" value="<?= isset($category) ? $category->category_name : '' ?>" type="text" name="category_name" autofocus="autofocus" class="form-control" placeholder="Category Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Order</label>
                                        <input id="corder" value="<?= isset($category) ? $category->corder : '' ?>" type="number" name="corder" autofocus="autofocus" class="form-control" placeholder="Category Order" required/>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-primary chinese" >Convert To Chinese</button>
                                    </div>
                                    <div class="clang" style="display: <?= isset($category)?"block":"none"?>">
                                        <div class="form-group">
                                            <label>分类名称</label>
                                            <input id="ch_category_name" value="<?= isset($category) ? $category->ch_category_name : '' ?>" type="text" name="ch_category_name" class="form-control" placeholder="分类名称" required/>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary addCategory">
                                        <?= isset($category) ? "Update Category" : "Create Category" ?> 
                                    </button>
                                </div>
                                <?php if (isset($category)): ?>
                                    <input type="hidden" name="category_id" value="<?= $category->category_id ?>" />
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.chinese').click(function () {
            $('.clang').show();
            $text = $('#category_name').val();
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text, lang: "en-zh"},
                success: function (data, textStatus, jqXHR) {
                    $('#ch_category_name').val(data.text[0]);
                }
            });
        });
    });
=======
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">API Categories</h1>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">
                                <?= isset($category) ? "Edit Existing" : "New" ?> API Category
                            </h4>
                        </div>
                        <?php $method = isset($category) ? "updateCategory" : "createCategory"; ?>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <form id="categoryForm" role="form" action="<?= site_url() ?>admin/category/<?= $method ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input id="category_name" value="<?= isset($category) ? $category->category_name : '' ?>" type="text" name="category_name" autofocus="autofocus" class="form-control" placeholder="Category Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Order</label>
                                        <input id="corder" value="<?= isset($category) ? $category->corder : '' ?>" type="number" name="corder" autofocus="autofocus" class="form-control" placeholder="Category Order" required/>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-primary chinese" >Convert To Chinese</button>
                                    </div>
                                    <div class="clang" style="display: <?= isset($category)?"block":"none"?>">
                                        <div class="form-group">
                                            <label>分类名称</label>
                                            <input id="ch_category_name" value="<?= isset($category) ? $category->ch_category_name : '' ?>" type="text" name="ch_category_name" class="form-control" placeholder="分类名称" required/>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary addCategory">
                                        <?= isset($category) ? "Update Category" : "Create Category" ?> 
                                    </button>
                                </div>
                                <?php if (isset($category)): ?>
                                    <input type="hidden" name="category_id" value="<?= $category->category_id ?>" />
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.chinese').click(function () {
            $('.clang').show();
            $text = $('#category_name').val();
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text, lang: "en-zh"},
                success: function (data, textStatus, jqXHR) {
                    $('#ch_category_name').val(data.text[0]);
                }
            });
        });
    });
>>>>>>> origin/master
</script>