<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Kalaripayattu Basic Course',
                'slug' => 'kalaripayattu-basic-course',
                'duration' => '21 days',
                'semester_count' => 1
            ],
            [
                'name' => '3 Year Kalaripayattu Certificate Course',
                'slug' => '3-year-kalaripayattu-certificate-course',
                'duration' => '3 years',
                'semester_count' => 12
            ],
            [
                'name' => '6 Year Kalaripayattu Certificate Course',
                'slug' => '6-year-kalaripayattu-certificate-course',
                'duration' => '6 years',
                'semester_count' => 24
            ],
            [
                'name' => '12 Year Kalaripayattu Certificate Course',
                'slug' => '12-year-kalaripayattu-certificate-course',
                'duration' => '12 years',
                'semester_count' => 48
            ],
        ];

        foreach ($courses as $course) {
            Course::create([
                'name' => $course['name'],
                'slug' => $course['slug'],
                'duration' => $course['duration'],
            ]);
        }
    }
}
