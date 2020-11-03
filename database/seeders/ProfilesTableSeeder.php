<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Holmes',
                'email_id' => 'Holmes.dummy@mailinator.com',
                'phone_number' => '25896312',
                'location' => 'Pune',
                'description' => 'Pune',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'name' => 'Kevin',
                'email_id' => 'Kevin.dummy@mailinator.com',
                'phone_number' => '25896312',
                'location' => 'Mumbai',
                'description' => 'Mumbai',
                'created_by' => 1,
                'updated_by' => 1
            ]
        ]);
    }
}
