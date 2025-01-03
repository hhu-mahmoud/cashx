<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Suppliers.createSupplier')?></h1>
<form method="post" action="./create" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="SupplierName" class="form-label"><?=lang('Suppliers.supplierName')?></label>
        <input type="text" class="form-control" name="SupplierName" id="SupplierName" required>
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label"><?=lang('App.description')?></label>
        <input type="text" class="form-control" name="Description" id="Description">
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label"><?=lang('Email.email')?></label>
        <input type="text" class="form-control" name="Email" id="Email">
    </div>
    <div class="mb-3">
        <label for="PhoneNumber" class="form-label"><?=lang('App.phoneNumber')?></label>
        <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber">
    </div>
    <div class="mb-3">
        <label for="ContactInfo" class="form-label"><?=lang('App.contactInfo')?></label>
        <input type="text" class="form-control" name="ContactInfo" id="ContactInfo">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label"><?=lang('App.address')?></label>
        <input type="text" class="form-control" name="Address" id="Address">
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fas fa-save"></i> <?=lang('App.save')?>
    </button>
</form>

<script>
    // Bootstrap form validation
    (function () {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
<?= $this->endSection() ?>