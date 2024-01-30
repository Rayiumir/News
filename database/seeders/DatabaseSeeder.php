<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use modules\Rayium\User\Models\User;

class DatabaseSeeder extends Seeder
{
    public static array $seeders = [];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (Self::$seeders as $row)
        {
            $this->call($row);
        }

        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
