<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MasterMigration extends Migration
{
    public function up()
    {

        // Call individual migrations
        $this->call('ApiKeys');
        $this->call('Users');
        $this->call('Categories');
        $this->call('Currency');
        $this->call('UnitTypes');
        $this->call('Suppliers');
        $this->call('StorageType');
        $this->call('StorageLocation');
        $this->call('Notes');
        $this->call('ShippingMethods');
        $this->call('PackagingType');
        $this->call('Operations');
        $this->call('Maintenance');
        $this->call('Products');
        $this->call('Discount');
        $this->call('Marketing');
        $this->call('Returns');
        $this->call('Support');
        $this->call('RawMaterials');
        $this->call('Packaging');
        $this->call('ShippingCosts');
        $this->call('Inventory');
        $this->call('ProductComponents');
        $this->call('Storage');

    }

    public function down()
    {
        // Get the list of all tables in the database
        $tables = $this->db->listTables();

        // Loop through each table and drop it
        foreach ($tables as $table) {
            $this->forge->dropTable($table, true);
        }
    }
}
