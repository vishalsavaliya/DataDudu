<<<<<<< HEAD
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: PAGE TITLE -->
        <section id="page-title">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="mainTitle">API Documents</h1>
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
                            <h4 class="panel-title text-white">API Documents Detail</h4>
                        </div>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <div class="row">
                                <div class="col-md-12 space20">
                                    <a href="<?= site_url() ?>admin/document/addDocument" class="create btn btn-success">
                                        <i class="fa fa-plus"></i>
                                        Create New API Document
                                    </a>
                                    <button value="Delete" id="Delete" class="btn btn-danger delete">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <form name="checkForm" id="checkForm" action="" method="post">
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th style="padding: 10px;">
                                                    <input type="checkbox"/>
                                                </th>
                                                <th>Date</th>
                                                <th>API Document Name</th>
                                                <th>API Category</th>
                                                <th>Document Order</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($documents as $value) { ?>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <label>
                                                                <input type="checkbox" class="check" name="document[]" value="<?= $value->doc_id ?>"/>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-m-Y',  strtotime($value->doc_date)) ?></td>
                                                    <td><?= $value->doc_name ?></td>
                                                    <td><?= $value->category_name ?></td>
                                                    <td><?= $value->dorder ?></td>
                                                    <td>
                                                        <a href="<?= site_url() ?>admin/document/editDocument/<?= $value->doc_id ?>" class="btn bg-primary btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
        $m = "API Document Successfully Created..!";
        $t = "success";
        break;
    case "U":
        $m = "API Document Successfully Updated..!";
        $t = "success";
        break;
    case "D":
        $m = "API Documents Successfully Deleted..!";
        $t = "error";
        break;
    case "NE":
        $m = "Document Name Already Exist..!";
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

        $('button.delete').click(function (e) {
            var cgroup = "";
            var act = $(this).val();
            $('.table.table-striped tbody tr').each(function () {
                if ($(this).children('td:first').find('div.checked').length) {
                    $txt = $(this).children('td:nth-child(3)').text();
                    cgroup += $txt.trim() + ",";
                }
            });

            cgroup = cgroup.substring(0, cgroup.length - 1);

            alertify.confirm("Are you sure want to delete this documents:<br/>" + cgroup, function (e) {
                if (e) {
                    $('#checkForm').attr('action', "<?= site_url() ?>admin/document/deleteDocument");
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
                    <h1 class="mainTitle">API Documents</h1>
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
                            <h4 class="panel-title text-white">API Documents Detail</h4>
                        </div>
                        <div class="panel-body bg-white" style="border: 1px solid #3395ff;">
                            <div class="row">
                                <div class="col-md-12 space20">
                                    <a href="<?= site_url() ?>admin/document/addDocument" class="create btn btn-success">
                                        <i class="fa fa-plus"></i>
                                        Create New API Document
                                    </a>
                                    <button value="Delete" id="Delete" class="btn btn-danger delete">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <form name="checkForm" id="checkForm" action="" method="post">
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th style="padding: 10px;">
                                                    <input type="checkbox"/>
                                                </th>
                                                <th>Date</th>
                                                <th>API Document Name</th>
                                                <th>API Category</th>
                                                <th>Document Order</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($documents as $value) { ?>
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <label>
                                                                <input type="checkbox" class="check" name="document[]" value="<?= $value->doc_id ?>"/>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td><?= date('d-m-Y',  strtotime($value->doc_date)) ?></td>
                                                    <td><?= $value->doc_name ?></td>
                                                    <td><?= $value->category_name ?></td>
                                                    <td><?= $value->dorder ?></td>
                                                    <td>
                                                        <a href="<?= site_url() ?>admin/document/editDocument/<?= $value->doc_id ?>" class="btn bg-primary btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                            Edit
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
        $m = "API Document Successfully Created..!";
        $t = "success";
        break;
    case "U":
        $m = "API Document Successfully Updated..!";
        $t = "success";
        break;
    case "D":
        $m = "API Documents Successfully Deleted..!";
        $t = "error";
        break;
    case "NE":
        $m = "Document Name Already Exist..!";
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

        $('button.delete').click(function (e) {
            var cgroup = "";
            var act = $(this).val();
            $('.table.table-striped tbody tr').each(function () {
                if ($(this).children('td:first').find('div.checked').length) {
                    $txt = $(this).children('td:nth-child(3)').text();
                    cgroup += $txt.trim() + ",";
                }
            });

            cgroup = cgroup.substring(0, cgroup.length - 1);

            alertify.confirm("Are you sure want to delete this documents:<br/>" + cgroup, function (e) {
                if (e) {
                    $('#checkForm').attr('action', "<?= site_url() ?>admin/document/deleteDocument");
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