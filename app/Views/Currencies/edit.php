<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<h1 class="text-center my-4"><?=lang('Currencies.editCurrency')?></h1>
<form method="post" action="./<?= $currencies['CurrencyID']; ?>" class="needs-validation" novalidate>
    <?= csrf_field() ?> <!-- This will add the CSRF token field -->
    <div class="mb-3">
        <label for="CurrencyCode" class="form-label"><?=lang('Currencies.currencyCode')?></label>
        <input type="text" class="form-control" name="CurrencyCode" id="CurrencyCode" value="<?= $currencies['CurrencyCode']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="CurrencyName" class="form-label"><?=lang('Currencies.currencyName')?></label>
        <input type="text" class="form-control" name="CurrencyName" id="CurrencyName" value="<?= $currencies['CurrencyName']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="CurrencySymbol" class="form-label"><?=lang('Currencies.currencySymbol')?></label>
        <input type="text" class="form-control" name="CurrencySymbol" id="CurrencySymbol" value="<?= $currencies['CurrencySymbol']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="ExchangeRate" class="form-label"><?=lang('Currencies.exchangeRate')?></label>
        <input type="text" class="form-control" name="ExchangeRate" id="ExchangeRate" value="<?= $currencies['ExchangeRate']; ?>" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="Status" id="Status"  <?= $currencies['Status'] == 'active' ? 'checked' : ''; ?>>
        <label for="Status" class="form-check-label"><?= lang('App.status') ?></label>
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
