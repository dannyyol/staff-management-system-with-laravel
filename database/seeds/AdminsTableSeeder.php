<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'Dannyyol',
            'image' => '',
            'first_name' => 'Daniel',
            'last_name' => 'Ayo
            ',
            'email' => 'daniel.borngreat@gmail.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);
    }
}
