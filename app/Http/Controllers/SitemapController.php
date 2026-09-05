<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $urls = [
            [
                'loc' => url('/'),
                'changefreq' => 'weekly',
                'priority' => '1.0',
            ],
            [
                'loc' => url('/about'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => url('/kalaripayattu'),
                'changefreq' => 'monthly',
                'priority' => '0.9',
            ],
            [
                'loc' => url('/kalari-marma-therapy'),
                'changefreq' => 'monthly',
                'priority' => '0.9',
            ],
            [
                'loc' => url('/kalari-yoga'),
                'changefreq' => 'monthly',
                'priority' => '0.9',
            ],
            [
                'loc' => url('/gurukkal'),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ],
            [
                'loc' => url('/contact'),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ],
        ];

        Course::query()
            ->select(['slug', 'updated_at'])
            ->get()
            ->each(function (Course $course) use (&$urls) {
                $urls[] = [
                    'loc' => route('courses.show', $course->slug),
                    'lastmod' => $course->updated_at?->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.8',
                ];
            });

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}
