<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call all individual seeders
        $this->call('ApiKeysSeeder');
        $this->call('UserRoleTypeSeeder');
        $this->call('UsersSeeder');
        $this->call('CategoriesSeeder');
        $this->call('CurrencySeeder');
        $this->call('UnitTypesSeeder');
        $this->call('SuppliersSeeder');
        $this->call('StorageTypeSeeder');
        $this->call('StorageLocationSeeder');
        $this->call('NotesSeeder');
        $this->call('ShippingMethodsSeeder');
        $this->call('PackagingTypeSeeder');
        $this->call('OperationsSeeder');
        $this->call('MaintenanceSeeder');
        $this->call('ProductsSeeder');
        $this->call('DiscountsSeeder');
        $this->call('MarketingCostsSeeder');
        $this->call('ReturnsSeeder');
        $this->call('SupportSeeder');
        $this->call('RawMaterialsSeeder');
        $this->call('PackagingSeeder');
        $this->call('ShippingCostsSeeder');
        $this->call('StorageSeeder');
        $this->call('InventorySeeder');
        $this->call('ProductComponentsSeeder');
    }
}
