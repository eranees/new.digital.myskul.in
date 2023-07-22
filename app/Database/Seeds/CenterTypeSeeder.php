<?php
// File: app/Database/Seeds/CenterTypeSeeder.php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CenterTypeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ct_id' => 1,
                'ct_name' => 'Child Friendly Space',
                'ct_age_group' => '6-10',
                'ct_status' => 1,
            ],
            [
                'ct_id' => 2,
                'ct_name' => 'Adolescent Resource Center',
                'ct_age_group' => '11-18',
                'ct_status' => 1,
            ],
            // Add more data rows as needed
        ];

        // Insert the data into the 'center_type' table
        $this->db->table('center_type')->insertBatch($data);
    }
}
