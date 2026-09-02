<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create(['name' => env('ADMIN_NAME'), 'email' => env('ADMIN_EMAIL')]);

        $this->call([
            CourseSeeder::class,
            SkillSeeder::class
        ]);
    }
}
