<<<<<<< HEAD
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">Add New API Document</h1>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">
                                <?= isset($document) ? "Edit Existing" : "New" ?> API Document
                            </h4>
                        </div>
                        <?php $method = isset($document) ? "updateDocument" : "createDocument"; ?>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <form id="documentForm" role="form" action="<?= site_url() ?>admin/document/<?= $method ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label> Document Name</label>
                                        <input id="doc_name" value="<?= isset($document) ? $document->doc_name : '' ?>" type="text" name="doc_name" autofocus="autofocus" class="form-control" placeholder="Document Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label> Document Order</label>
                                        <input value="<?= isset($document) ? $document->dorder : '' ?>" type="number" name="dorder" class="form-control" placeholder="Document Order" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select id='category_id' name="category_id" class="form-control">
                                            <option value="-1">--Select API Category--</option>
                                            <?php foreach ($category as $value) { ?>
                                                <option value="<?= $value->category_id ?>"><?= $value->category_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Document Description</label>
                                        <textarea id="editor1" name="description"><?= isset($document) ? $document->description : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-primary chinese" >Convert To Chinese</button>
                                </div>
                                <div class="clang" style="display: <?= isset($document) ? "block" : "none" ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>文件名称</label>
                                            <input id="ch_doc_name" value="<?= isset($document) ? $document->ch_doc_name : '' ?>" type="text" name="ch_doc_name" autofocus="autofocus" class="form-control" placeholder="文件名称" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>文档说明</label>
                                            <textarea id="editor2" name="ch_description"><?= isset($document) ? $document->ch_description : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary addCategory">
                                        <?= isset($document) ? "Update Document" : "Create Document" ?> 
                                    </button>
                                </div>
                                <?php if (isset($document)): ?>
                                    <input type="hidden" name="doc_id" value="<?= $document->doc_id ?>" />
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#category_id').val("<?= isset($document) ? $document->category_id : "-1" ?>");
        $('.chinese').click(function () {
            $('.clang').show();
            $text = $('#doc_name').val();
            $text1 = CKEDITOR.instances['editor1'].getData();
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text, lang: "en-zh"},
                success: function (data, textStatus, jqXHR) {
                    $('#ch_doc_name').val(data.text[0]);
                }
            });
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text1, lang: "en-zh", format: "html"},
                success: function (data, textStatus, jqXHR) {
                    CKEDITOR.instances['editor2'].setData(data.text[0]);
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
                    <h1 class="mainTitle">Add New API Document</h1>
                </div>
            </div>
        </section>
        <!-- end: PAGE TITLE -->
        <!-- start: DYNAMIC TABLE -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">
                                <?= isset($document) ? "Edit Existing" : "New" ?> API Document
                            </h4>
                        </div>
                        <?php $method = isset($document) ? "updateDocument" : "createDocument"; ?>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <form id="documentForm" role="form" action="<?= site_url() ?>admin/document/<?= $method ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label> Document Name</label>
                                        <input id="doc_name" value="<?= isset($document) ? $document->doc_name : '' ?>" type="text" name="doc_name" autofocus="autofocus" class="form-control" placeholder="Document Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label> Document Order</label>
                                        <input value="<?= isset($document) ? $document->dorder : '' ?>" type="number" name="dorder" class="form-control" placeholder="Document Order" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select id='category_id' name="category_id" class="form-control">
                                            <option value="-1">--Select API Category--</option>
                                            <?php foreach ($category as $value) { ?>
                                                <option value="<?= $value->category_id ?>"><?= $value->category_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Document Description</label>
                                        <textarea id="editor1" name="description"><?= isset($document) ? $document->description : '' ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-primary chinese" >Convert To Chinese</button>
                                </div>
                                <div class="clang" style="display: <?= isset($document) ? "block" : "none" ?>">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>文件名称</label>
                                            <input id="ch_doc_name" value="<?= isset($document) ? $document->ch_doc_name : '' ?>" type="text" name="ch_doc_name" autofocus="autofocus" class="form-control" placeholder="文件名称" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>文档说明</label>
                                            <textarea id="editor2" name="ch_description"><?= isset($document) ? $document->ch_description : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary addCategory">
                                        <?= isset($document) ? "Update Document" : "Create Document" ?> 
                                    </button>
                                </div>
                                <?php if (isset($document)): ?>
                                    <input type="hidden" name="doc_id" value="<?= $document->doc_id ?>" />
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#category_id').val("<?= isset($document) ? $document->category_id : "-1" ?>");
        $('.chinese').click(function () {
            $('.clang').show();
            $text = $('#doc_name').val();
            $text1 = CKEDITOR.instances['editor1'].getData();
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text, lang: "en-zh"},
                success: function (data, textStatus, jqXHR) {
                    $('#ch_doc_name').val(data.text[0]);
                }
            });
            $.ajax({
                url: "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160202T092633Z.22e43eabd3b30c45.204f3337d141baef304caa48b0f3b8cc6022bc9b",
                type: "post",
                data: {text: $text1, lang: "en-zh", format: "html"},
                success: function (data, textStatus, jqXHR) {
                    CKEDITOR.instances['editor2'].setData(data.text[0]);
                }
            });
        });
    });
>>>>>>> origin/master
</script>