<?php
include_once "../layouts/header.php";
?>
<!-- sidebar -->
<?php
include_once "../layouts/sidebar.php";

$setting=$conn->query("SELECT * FROM setting")->fetch();
?>
<!-- end sidebar -->

<!-- content -->
<div class="col-12 col-md-9 col-lg-10 p-4" id="content">
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-header bg-white">
            تنظمیات سایت
        </div>
        <div class="card-body">
            <form method="post" action="http://localhost/bookshop/controllers/books/insertbook.php" class="row g-3" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label class="form-label">توضیحات </label>
                            <input type="text" value="<?=  $setting['description'] ?>" name="description" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Writer</label>
                            <input type="text" name="writer" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Genre</label>
                            <input type="text" name="genre" class="form-control" required="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Count</label>
                            <input type="number" name="count" class="form-control" value="1" min="0">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Row</label>
                            <input type="text" name="row" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" selected="">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" id="saveAddBook" value="save">
                        </div>

                    </form>
        </div>
    </div>
</div>
<!-- end content -->


<?php

include_once "../layouts/footer.php";
