<?php
// todo make ye suder bara ahale 1 cone active dashte bshi y conie update3 ke 
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


        \App\Models\User::factory()->create([
            "id" => 5,
            "email" => "3@gmail.com",
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

        \App\Models\User::factory()->create([
            "id" => 6,
            "email" => "ob@gmail.com",
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

        DB::table('daos')->insert([
            "id" => 1,
            "name" => "Lenovo",
            "symbol" => "LNV",
            "type" => "Limited company",
            "vote_mode" => "majority",
            "worth" => "10",
            "document" => "<p>Contract lorem</p>",
            "extras" => '[{"id":0,"key":"key1","value":"val1","pv":"1"},{"id":1,"key":"key2","value":"val2","pv":"0"}]',
            "published" => "1",
            "is_subset" => "0",
            "lazy" => "on",
            "token" => "91131777",
            "created_at" => "2022-08-07 10:11:28",
            "updated_at" => "2022-08-07 10:11:28",
        ]);
        DB::table('daos')->insert([
            "id" => 2,
            "reform_number" => "1",
            "name" => "Lenovo2",
            "symbol" => "LNV2",
            "type" => "Limited liability company",
            "vote_mode" => "both",
            "worth" => "2",
            "document" => "<p>Contract lorem 2</p>",
            "extras" => "[{\"id\":0,\"key\":\"key1\",\"value\":\"val1\",\"pv\":\"1\"},{\"id\":1,\"key\":\"key2\",\"value\":\"val2\",\"pv\":\"0\"},{\"id\":2,\"key\":\"key3 new\",\"value\":\"val3 new\",\"pv\":\"1\"}]",
            "published" => "0",
            "is_subset" => "1",
            "parent_id" => "1",
            "lazy" => "on",
            "token" => "1974543",
            "created_at" => "2022-08-07 15:30:39",
            "updated_at" => "2022-08-07 15:30:39",
        ]);
        DB::table('dao_user')->insert([
            'user_id' => 1,
            'dao_id' => 1,
            'partner_email' => 'admin@gmail.com',
            'partner_type' => 'owner',
            'partner_share' => '40',
            'partner_accepted' => 1,
        ]);
        DB::table('dao_user')->insert([
            'user_id' => 4,
            'dao_id' => 1,
            'partner_email' => 'subdanial@gmail.com',
            'partner_type' => 'partner',
            'partner_share' => '35',
            'partner_accepted' => 1,
        ]);
        DB::table('dao_user')->insert([
            'user_id' => 5,
            'dao_id' => 1,
            'partner_email' => '3@gmail.com',
            'partner_type' => 'partner',
            'partner_share' => '35',
            'partner_accepted' => 1,
        ]);
        DB::table('dao_user')->insert([
            'user_id' => 6,
            'dao_id' => 1,
            'partner_email' => 'ob@gmail.com',
            'partner_type' => 'observer',
            'partner_share' => '0',
            'partner_accepted' => 0,
        ]);
        DB::table('dao_user')->insert([
            "id" => 5,
            "user_id" => 1,
            "dao_id" => 2,
            "partner_email" => "admin@gmail.com",
            "partner_type" => "owner",
            "partner_share" => 40,
            "partner_accepted" => 1,
            "created_at" => NULL,
            "updated_at" => NULL,
        ]);
        DB::table('dao_user')->insert([
            "id" => 6,
            "user_id" => 4,
            "dao_id" => 2,
            "partner_email" => "subdanial@gmail.com",
            "partner_type" => "partner",
            "partner_share" => 8,
            "partner_accepted" => 0,
            "created_at" => NULL,
            "updated_at" => NULL,
        ]);
        DB::table('dao_user')->insert([
            "id" => 7,
            "user_id" => 5,
            "dao_id" => 2,
            "partner_email" => "3@gmail.com",
            "partner_type" => "partner",
            "partner_share" => 30,
            "partner_accepted" => 0,
            "created_at" => NULL,
            "updated_at" => NULL,
        ]);
        DB::table('dao_user')->insert([
            "id" => 8,
            "user_id" => 6,
            "dao_id" => 2,
            "partner_email" => "ob@gmail.com",
            "partner_type" => "observer",
            "partner_share" => 0,
            "partner_accepted" => 0,
            "created_at" => NULL,
            "updated_at" => NULL,
        ]);
    }
}
