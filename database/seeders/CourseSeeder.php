<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['name' => 'Kalaripayattu Basic Course', 'slug' => 'kalaripayattu-basic-course'],
            ['name' => '3 Year Kalaripayattu Certificate Course', 'slug' => '3-year-kalaripayattu-certificate-course'],
            ['name' => '6 Year Kalaripayattu Certificate Course', 'slug' => '6-year-kalaripayattu-certificate-course'],
            ['name' => '12 Year Kalaripayattu Certificate Course', 'slug' => '12-year-kalaripayattu-certificate-course'],
        ];

        foreach ($courses as $course) {
            Course::create(['name' => $course['name'], 'slug' => $course['slug']]);
        }
    }
}
