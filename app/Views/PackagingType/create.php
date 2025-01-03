<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Packaging.createPackagingType')?></h1>
<form method="post" action="./create" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="PackagingTypeName" class="form-label"><?=lang('App.name')?></label>
        <input type="text" class="form-control" name="PackagingTypeName" id="PackagingTypeName" required>
    </div>
    <div class="mb-3">
        <label for="PackagingTypeDescription" class="form-label"><?=lang('App.description')?></label>
        <input type="text" class="form-control" name="PackagingTypeDescription" id="PackagingTypeDescription">
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