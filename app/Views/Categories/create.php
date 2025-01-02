<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Categories.createCategory')?></h1>
<form method="post" action="./create" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="CategoryName" class="form-label"><?=lang('Categories.categoryName')?></label>
        <input type="text" class="form-control" name="CategoryName" id="CategoryName" required>
        <div class="invalid-feedback"><?=lang('Categories.pleaseProvideACategoryName')?></div>
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label"><?=lang('Categories.description')?></label>
        <textarea class="form-control" name="Description" id="Description" rows="3"></textarea>
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