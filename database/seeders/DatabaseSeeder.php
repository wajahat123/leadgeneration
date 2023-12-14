<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

     Schema::disableForeignKeyConstraints();

     User::truncate();
     Lead::truncate();

     Schema::enableForeignKeyConstraints();


        // User::factory(2)->create();
        // Lead::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'support'
            ],
            [
                'name' => 'Leo Doe',
                'email' => 'leodoe@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'support'
            ],
            [
                'name' => 'Keo walker',
                'email' => 'keowalker@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'sales'
            ],
            [
                'name' => 'Mark Doe',
                'email' => 'doe@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'support'
            ],
            [
                'name' => 'Hen Doe',
                'email' => 'henndoe@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'support'
            ],
            [
                'name' => 'Meo walker',
                'email' => 'meowalker@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'sales'
            ],
            [
                'name' => 'Ben Doe',
                'email' => 'bendoe@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'support'
            ],
            [
                'name' => 'Ben walker',
                'email' => 'benwalker@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'sales'
            ],
            [
                'name' => 'Doe walker',
                'email' => 'doewalker@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'sales'
            ],
            [
                'name' => 'Joe walker',
                'email' => 'joewalker@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'sales'
            ],




        ];


        User::insert($user);


        $leads = [

            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],

            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],
            [
                'type' => 'tiktok',
            ],
            [
                'type' => 'instagram',
            ],
            [
                'type' => 'facebook',
            ],
            [
                'type' => 'linkedin',
            ],

        ];

        Lead::insert($leads);
    }
}
