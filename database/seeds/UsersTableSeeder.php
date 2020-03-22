<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'dannyyol',
                'image' => '',
                'first_name' => 'Daniel',
                'last_name' => 'Ayo',
                'role' => 'admin',
                'email' => 'daniel.borngreat@gmail.com',
                'password' => bcrypt('password'),
                'status' => '1',
                'phone' => '08032385888',
                'address' => 'Lagos',
                'gender' => 'male',
                'dob' => '2019-06-07',
                'join_date' => '2020-03-12',
                'job_type' => 'sales',
                'city' => 'Ikeja',
                'age' => '27',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'joctics',
                'image' => '',
                'first_name' => 'Joe',
                'last_name' => 'Ray',
                'role' => 'employee',
                'email' => 'joeray@gmail.com',
                'password' => bcrypt('password'),
                'status' => '1',
                'phone' => '986133131',
                'address' => 'Ebonyi',
                'gender' => 'male',
                'dob' => '2020-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'IT',
                'city' => 'Ikeja',
                'age' => '22',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'patrick',
                'image' => '',
                'first_name' => 'Patrick',
                'last_name' => 'Fred',
                'role' => 'admin',
                'email' => 'fred@gmail.com',
                'password' => bcrypt('password'),
                'status' => '1',
                'phone' => '4567897890',
                'address' => 'Ikeja',
                'gender' => 'male',
                'dob' => '2020-07-9',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'Lagos',
                'age' => '21',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Jolie',
                'image' => '',
                'first_name' => 'Janet',
                'last_name' => 'Kathryn',
                'role' => 'employee',
                'email' => 'janet@gmail.com',
                'password' => bcrypt('password'),
                'status' => '1',
                'phone' => '345678990',
                'address' => 'Ikeja',
                'gender' => 'male',
                'dob' => '2020-12-2',
                'join_date' => '2020-3-22',
                'job_type' => 'Developer',
                'city' => 'Ikeja',
                'age' => '45',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Jack',
                'image' => '',
                'first_name' => 'Jack',
                'last_name' => 'Billy',
                'role' => 'employee',
                'email' => 'billy@gmail.com',
                'password' => bcrypt('password'),
                'status' => '1',
                'phone' => '4567890789',
                'address' => 'Lagos',
                'gender' => 'male',
                'dob' => '2012-2-12',
                'join_date' => '2019-03-12',
                'job_type' => 'designer',
                'city' => 'Ikeja',
                'age' => '25',
            ],
        ]);
    }
}
