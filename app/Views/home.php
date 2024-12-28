<?= $this->extend('layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<div class="row">
    <!-- Card 1 -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-users me-2"></i>Total Users</h5>
                <p class="card-text">1234</p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-dollar-sign me-2"></i>Sales</h5>
                <p class="card-text">987</p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-boxes me-2"></i>Orders</h5>
                <p class="card-text">567</p>
            </div>
        </div>
    </div>
</div>

<!-- Additional Content (Charts, Tables, etc.) -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-history me-2"></i>Recent Activity</h5>
                <ul>
                    <li><i class="fas fa-user-check me-2"></i>User John Doe logged in.</li>
                    <li><i class="fas fa-cart-plus me-2"></i>New sale: Product XYZ.</li>
                    <li><i class="fas fa-check-circle me-2"></i>Order #12345 completed.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
