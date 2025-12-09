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
            <form method="post" action="<?=url("controllers/setting/updatesetting.php")?>" class="row g-3" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label class="form-label">توضیحات </label>
                            <input type="text" value="<?= $setting['description'] ?>" name="description" class="form-control" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">لوگو</label>
                            <input type="file" name="logo" class="form-control" >
                            <img src="" alt="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">ایمیل</label>
                            <input value="<?= $setting['email'] ?>" type="email" name="email" class="form-control" required="">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">شماره تلفن</label>
                            <input type="text" value="<?= $setting['phonenumber'] ?>" name="phonenumber" class="form-control">
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" id="saveAddBook" value="آپدیت">
                        </div>

                    </form>
        </div>
    </div>
</div>
<!-- end content -->


<?php

include_once "../layouts/footer.php";
