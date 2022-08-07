<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('Eloel241'),
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

        \App\Models\User::factory()->create([
            "id" => 4,
            "email" => "subdanial@gmail.com",
            "wallet" => NULL,
            "type" => "0",
            "firstname" => "danial",
            "lastname" => "rafiee",
            "birthday" => "2021-07-06",
            "gendar" => "man",
            "phone" => "90353666888",
            "password" => Hash::make('Eloel241'),
            "country" => "US",
            "city" => "Afghanistan",
            "postalcode" => "123456",
            "address" => "myAddress",
            "profession" => "pro",
            "education" => "edu",
            "university" => "uni",
            "language_first" => "English",
            "language_second" => "spanish",
            "security_question" => "animal",
            "security_answer" => "cat",
            "instagram" => "insta",
            "Twitter" => "-",
            "Facebook" => "-",
            "Whatsapp" => "-",
            "Telegram" => "-",
            "linkedin" => "-",
            "remember_token" => NULL,
            "created_at" => "2022-08-07 10:09:32",
            "updated_at" => "2022-08-07 10:13:34",
        ]);

        DB::table('dao_user')->insert([
            'user_id' => 4,
            'dao_id' => 1,
            'partner_email' => 'subdanial@gmail.com',
            'partner_type' => 'partner',
            'partner_share' => '20',
            'partner_accepted' => 0,
        ]);

        DB::table('daos')->insert([
            "id" => 1,
            "name" => "Lenovo",
            "symbol" => "LNV",
            "type" => "Limited company",
            "vote_mode" => "owner",
            "worth" => "10",
            "document" => "<p>Contract lorem</p>",
            "extras" => "{\"Key1Pub\":[\"VAL1pub\",\"0\"],\"Key2PV\":[\"VAL2pv\",\"1\"]}",
            "published" => "0",
            "is_subset" => "0",
            "lazy" => "on",
            "token" => "91131777",
            "created_at" => "2022-08-07 10:11:28",
            "updated_at" => "2022-08-07 10:11:28",
        ]);
    }
}
