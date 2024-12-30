<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NotesSeeder extends Seeder
{
    public function run()
    {
        // Sample data for Notes table
        $data = [
            [
                'RelatedTo'   => 'Product: Laptop',
                'NoteContent' => 'This product is currently out of stock but will be restocked next month.',
            ],
            [
                'RelatedTo'   => 'Order: #12345',
                'NoteContent' => 'Customer requested expedited shipping.',
            ],
            [
                'RelatedTo'   => 'Customer: John Doe',
                'NoteContent' => 'Customer prefers email communication over phone calls.',
            ],
            [
                'RelatedTo'   => 'Supplier: Tech Supplies Inc.',
                'NoteContent' => 'Negotiated a 10% discount on bulk purchases.',
            ],
        ];

        // Insert the data into the Notes table
        $this->db->table('Notes')->insertBatch($data);
    }
}
