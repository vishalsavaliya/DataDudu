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
                <div class="col-md-12">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">API Category Detail</h4>
                        </div>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <div class="row">
                                <div class="col-md-12 space20">
                                    <a href="<?= site_url() ?>admin/category/addCategory" class="create btn btn-success">
                                        <i class="fa fa-plus"></i>
                                        Create New API Category
                                    </a>                                    
                                </div>
                            </div>
                            <div class="table-responsive">
                                <form name="checkForm" id="checkForm" action="<?=  site_url()?>admin/category/deleteCategory" method="post">
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>API Category Name</th>
                                                <th>Category Order</th>
                                                <th>No Of Document</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($category as $value) { ?>
                                                <tr>
                                                    <td><?= $value->category_name ?></td>
                                                    <td><?= $value->corder ?></td>
                                                    <td><?= $value->total ?></td>
                                                    <td>
                                                        <a href="<?= site_url() ?>admin/category/editCategory/<?= $value->category_id ?>" class="btn bg-primary btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <button type="button" value="<?= $value->category_id ?>" class="btn bg-danger btn-xs delete">
                                                            <i class="fa fa-trash"></i>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <input id="catid" name="category_id" type="hidden" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $msg = $this->input->get('msg'); ?>
<?php
switch ($msg) {
    case "I":
        $m = "Category Successfully Created..!";
        $t = "success";
        break;
    case "U":
        $m = "Category Successfully Updated..!";
        $t = "success";
        break;
    case "D":
        $m = "Category Successfully Deleted..!";
        $t = "error";
        break;
    case "E":
        $m = "Documents Exist In THis Category..!";
        $t = "error";
        break;
    case "NE":
        $m = "Category Name Already Exist..!";
        $t = "error";
        break;
    default:
        $m = 0;
        break;
}
?>


<script type="text/javascript">
    $(document).ready(function () {
<?php if ($msg): ?>
            alertify.<?= $t ?>("<?= $m ?>");
<?php endif; ?>

        $('.delete').click(function (e) {
            var catname = $(this).parent().prev().prev().text();
            var catid = $(this).val();
            alertify.confirm("Are you sure you want to delete <br/>"+ catname, function (e) {
                if (e) {
                    $('#catid').val(catid);
                    $('#checkForm').submit();
                    return true;
                }
                else {
                    return false;
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
                <div class="col-md-12">
                    <div class="panel panel-light-primary" id="panel5">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">API Category Detail</h4>
                        </div>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <div class="row">
                                <div class="col-md-12 space20">
                                    <a href="<?= site_url() ?>admin/category/addCategory" class="create btn btn-success">
                                        <i class="fa fa-plus"></i>
                                        Create New API Category
                                    </a>                                    
                                </div>
                            </div>
                            <div class="table-responsive">
                                <form name="checkForm" id="checkForm" action="<?=  site_url()?>admin/category/deleteCategory" method="post">
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>API Category Name</th>
                                                <th>Category Order</th>
                                                <th>No Of Document</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($category as $value) { ?>
                                                <tr>
                                                    <td><?= $value->category_name ?></td>
                                                    <td><?= $value->corder ?></td>
                                                    <td><?= $value->total ?></td>
                                                    <td>
                                                        <a href="<?= site_url() ?>admin/category/editCategory/<?= $value->category_id ?>" class="btn bg-primary btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <button type="button" value="<?= $value->category_id ?>" class="btn bg-danger btn-xs delete">
                                                            <i class="fa fa-trash"></i>
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <input id="catid" name="category_id" type="hidden" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $msg = $this->input->get('msg'); ?>
<?php
switch ($msg) {
    case "I":
        $m = "Category Successfully Created..!";
        $t = "success";
        break;
    case "U":
        $m = "Category Successfully Updated..!";
        $t = "success";
        break;
    case "D":
        $m = "Category Successfully Deleted..!";
        $t = "error";
        break;
    case "E":
        $m = "Documents Exist In THis Category..!";
        $t = "error";
        break;
    case "NE":
        $m = "Category Name Already Exist..!";
        $t = "error";
        break;
    default:
        $m = 0;
        break;
}
?>


<script type="text/javascript">
    $(document).ready(function () {
<?php if ($msg): ?>
            alertify.<?= $t ?>("<?= $m ?>");
<?php endif; ?>

        $('.delete').click(function (e) {
            var catname = $(this).parent().prev().prev().text();
            var catid = $(this).val();
            alertify.confirm("Are you sure you want to delete <br/>"+ catname, function (e) {
                if (e) {
                    $('#catid').val(catid);
                    $('#checkForm').submit();
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    });
>>>>>>> origin/master
</script>