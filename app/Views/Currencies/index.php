<?= $this->extend('./layouts/layout_dashboard') ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
    <h1 class="text-center my-4"><?= lang('Currencies.currencyManagement') ?></h1>
<?php if (session('user_role_id') <= 2): ?>
    <a class=" btn btn-success btn-sm" href="<?= base_url('categories/create'); ?>"
       aria-label="<?= lang('Categories.addNewCategory') ?>">
        <span data-feather="plus-circle"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?= lang('Categories.addNewCategory') ?></span>
    </a>
<?php endif; ?>
    <div class="table-responsive-md mt-2">
        <table class="table table-striped table-hover table-sm">
            <thead class="table-dark">
            <tr>
                <th scope="col" class="col-md-1 text-center">#</th>
                <th scope="col" class="col-md-3"><?= lang('Currencies.currencyCode') ?></th>
                <th scope="col" class="col-md-3"><?= lang('Currencies.currencyName') ?></th>
                <th scope="col" class="col-md-3"><?= lang('Currencies.currencySymbol') ?></th>
                <th scope="col" class="col-md-6"><?= lang('Currencies.exchangeRate') ?></th>
                <th scope="col" class="col-md-6"><?= lang('App.status') ?></th>
                <?php if (session('user_role_id') <= 2): ?>
                <th scope="col" class="col-md-1"><?= lang('App.edit') ?></th>
                <th scope="col" class="col-md-1"><?= lang('App.delete') ?></th>
            </tr>
            <?php endif; ?>
            </thead>
            <tbody>
            <?php foreach ($currencies as $index => $currency): ?>
                <tr>
                    <th scope="row" class="text-center"><?= $index + 1; ?></th>
                    <td><?= $currency['CurrencyCode']; ?></td>
                    <td><?= $currency['CurrencyName']; ?></td>
                    <td><?= $currency['CurrencySymbol']; ?></td>
                    <td><?= $currency['ExchangeRate']; ?></td>
                    <td><?= $currency['Status']; ?></td>
                    <?php if (session('user_role_id') <= 2): ?>
                        <td>
                            <a href="currencies/edit/<?= $currency['CurrencyID']; ?>"
                               class="btn btn-warning btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-edit"></i> <?= lang('App.edit') ?>
                            </a>

                        </td>
                        <td>
                            <a href="currencies/delete/<?= $currency['CurrencyID']; ?>"
                               class="btn btn-danger btn-sm <?= session('user_role_id') > 2 ? 'd-none' : ''; ?>">
                                <i class="fas fa-trash"></i> <?= lang('App.delete') ?>
                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection() ?>