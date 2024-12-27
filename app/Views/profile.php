<?= $this->extend('layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
<div class="row">
    <div class="col-md-6">
        <!-- Profile Form -->
        <?= form_open('/update-profile') ?>
        <div class="row mb-3">
            <div class="col-sm-12">
                <?php if (isset($error)): ?>
                    <p style="color:red;"><?= $error ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="firstname" class="col-md-3 col-form-label">Username</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="username" name="username" value="<?= $session->get('username')?>" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="firstname" class="col-md-3 col-form-label">First Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $session->get('firstname')?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastname" class="col-md-3 col-form-label">Last Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $session->get('lastname')?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-md-3 col-form-label">New Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Enter new password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="confirm-password" class="col-md-3 col-form-label">Confirm Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                       placeholder="Confirm new password">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success me-2" id="save-button">
                <i class="fas fa-save me-1"></i>Save Changes
            </button>
        </div>
        <?= form_close() ?>
    </div>
    <div class="col-md-6">

    </div>
</div>

<?= $this->endSection() ?>
