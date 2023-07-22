<?php

namespace App\Database\Seeds;
// File: app/Database/Seeds/CenterSeeder.php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CenterSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        // Define the number of centers you want to seed
        $numberOfCenters = 50;

        for ($i = 1; $i <= $numberOfCenters; $i++) {
            $data = [
                'center_name' => $faker->unique()->company,
                'center_head_id' => $faker->numberBetween(1, 100),
                'center_cluster_id' => $faker->numberBetween(1, 10),
                'center_type_id' => $faker->numberBetween(1, 3),
            ];

            // Insert the data into the 'center' table
            $this->db->table('center')->insert($data);
        }
    }
}
