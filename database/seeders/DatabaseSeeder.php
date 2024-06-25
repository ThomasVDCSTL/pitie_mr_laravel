<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "thomas",
            'email' => "jtenik@taras.modit",
            'phone_number' => "0606060606",
            'adress' => "dtc",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Satan",
            'email' => "viens@onest.bien",
            'phone_number' => "0666666666",
            'adress' => "tmtc",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'image' => "https://th.bing.com/th/id/OIP.i9UnVjfWFatqmmr_2iGrKgHaFC?w=261&h=180&c=7&r=0&o=5&pid=1.7",
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Iblis",
            'email' => "personne@meconnais.jpp",
            'phone_number' => "0606060606",
            'adress' => "jsp",
            'password' => Hash::make('password'),
            'artisan' => 0,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'image' => "https://th.bing.com/th/id/OIP.0l7_6OmvSlLNihkK4termgHaE7?w=260&h=180&c=7&r=0&o=5&pid=1.7",
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Cerbère",
            'email' => "goodboy@doggo.waf",
            'phone_number' => "0606060606",
            'adress' => "la niche à coté de la porte",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'image' => "https://th.bing.com/th/id/OIP.LdSA7tiyw10xHaZowqFQ0AHaHE?w=193&h=185&c=7&r=0&o=5&pid=1.7",
        ]);
        DB::table('users')->insert([
            'uuid' => Str::uuid(),
            'username' => "Charon",
            'email' => "10bal@uber.tqt",
            'phone_number' => "0606060606",
            'adress' => "dans ma super auto tah lamborghini",
            'password' => Hash::make('password'),
            'artisan' => 1,
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'image' => "data:image/jpeg;base64,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",
        ]);
        $this->call(ProductSeeder::class);

    }
}
