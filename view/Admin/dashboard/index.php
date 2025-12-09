<?php
include_once "../layouts/header.php";
?>
<!-- sidebar -->
<?php
include_once "../layouts/sidebar.php";
?>
<!-- end sidebar -->

<!-- content -->
<div class="col-12 col-md-9 col-lg-10 p-4" id="content">

    <h1 class="h3 mb-4">Overview</h1>
    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="card shadow-sm border-0 stat-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-book fs-1 me-3 text-primary"></i>
                        <div>
                            <div class="h5 mb-0">1,240</div>
                            <div class="text-muted">Books</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card shadow-sm border-0 stat-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-people fs-1 me-3 text-success"></i>
                        <div>
                            <div class="h5 mb-0">532</div>
                            <div class="text-muted">Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card shadow-sm border-0 stat-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-journal-check fs-1 me-3 text-warning"></i>
                        <div>
                            <div class="h5 mb-0">87</div>
                            <div class="text-muted">Active Reservations</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card shadow-sm border-0 stat-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-lock fs-1 me-3 text-danger"></i>
                        <div>
                            <div class="h5 mb-0">5</div>
                            <div class="text-muted">Admins</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-header bg-white">
            Recent Activity
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">New user registered</li>
                <li class="list-group-item">Book updated</li>
                <li class="list-group-item">Reservation created</li>
            </ul>
        </div>
    </div>
</div>
<!-- end content -->


<?php

include_once "../layouts/footer.php";
