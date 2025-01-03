<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Notes.editNote')?></h1>
<form method="post" action="./<?= $notes['NoteID']; ?>" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="RelatedTo" class="form-label"><?=lang('App.relatedTo')?></label>
        <input type="text" class="form-control" name="RelatedTo" id="RelatedTo" value="<?= $notes['RelatedTo']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="NoteContent" class="form-label"><?=lang('Notes.note')?></label>
        <textarea class="form-control" name="NoteContent" id="NoteContent" rows="3"><?= $notes['NoteContent']; ?></textarea>
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
