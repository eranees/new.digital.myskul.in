<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $data = [
                'firstname' => $faker->firstName,
                'user_role' => 5,
                'org_idd' => $faker->numberBetween(1, 10),
                'cluster_idd' => $faker->numberBetween(1, 50),
                'center_id' => $faker->numberBetween(1, 500),
                'mobile' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
                'password' => md5('password123'), // You may use a more secure hashing method here
                // Add other fields and their fake data here
                'status' => 1,
            ];

            // Insert the fake data into the 'student' table
            $this->db->table('student')->insert($data);
        }
    }
}
