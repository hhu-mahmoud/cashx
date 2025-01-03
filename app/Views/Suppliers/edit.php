<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Suppliers.editSupplier')?></h1>
<form method="post" action="./<?= $suppliers['SupplierID']; ?>" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="SupplierName" class="form-label"><?=lang('Suppliers.supplierName')?></label>
        <input type="text" class="form-control" name="SupplierName" id="SupplierName" value="<?= $suppliers['SupplierName']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label"><?=lang('App.description')?></label>
        <input type="text" class="form-control" name="Description" id="Description" value="<?= $suppliers['Description']; ?>">
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label"><?=lang('Email.email')?></label>
        <input type="text" class="form-control" name="Email" id="Email" value="<?= $suppliers['Email']; ?>">
    </div>
    <div class="mb-3">
        <label for="PhoneNumber" class="form-label"><?=lang('App.phoneNumber')?></label>
        <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" value="<?= $suppliers['PhoneNumber']; ?>">
    </div>
    <div class="mb-3">
        <label for="ContactInfo" class="form-label"><?=lang('App.contactInfo')?></label>
        <input type="text" class="form-control" name="ContactInfo" id="ContactInfo" value="<?= $suppliers['ContactInfo']; ?>">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label"><?=lang('App.address')?></label>
        <input type="text" class="form-control" name="Address" id="Address" value="<?= $suppliers['Address']; ?>">
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fas fa-save"></i> <?=lang('App.edit')?>
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
