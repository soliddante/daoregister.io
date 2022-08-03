<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'email' => 'admin@gmail.com',
            'type' => NULL,
            'firstname' => 'danial',
            'lastname' => 'rafiee',
            'birthday' => '2022-01-31',
            'gendar' => 'woman',
            'phone' => '9035366888',
            'password' => 'Eloel241',
            'country' => 'US',
            'city' => 'New York',
            'postalcode' => '12345',
            'address' => 'adress',
            'profession' => 'Pro',
            'education' => 'Edu',
            'university' => 'Uni',
            'language_first' => 'English',
            'language_second' => 'Spanish',
            'security_question' => 'Whats you favorite animal',
            'security_answer' => 'cat',
            'instagram' => 'insta',
            'Twitter' => NULL,
            'Facebook' => NULL,
            'Whatsapp' => 'whats',
            'Telegram' => NULL,
            'linkedin' => 'link',
        ]);
        \App\Models\User::factory(2)->create();
    }
}
