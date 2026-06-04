<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();
    //    static pages 
        $pages = [
            '/',
            '/about',
            '/services',
            '/courses',
            '/blogs',
            '/portfolio',
            '/contact',
            '/faq',
        ];

        foreach ($pages as $page) {

            $sitemap->add(
                Url::create(url($page))
                    ->setPriority(1.0)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        }

//   blog

        $blogs = Post::where('type', 'blog')
            ->where('status', 'published')
            ->select('slug', 'updated_at')
            ->get();

        foreach ($blogs as $blog) {

            $sitemap->add(
                Url::create(url('/blog/' . $blog->slug))
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        // course 
        $courses = Post::where('type', 'course')
            ->where('status', 'published')
            ->select('slug', 'updated_at')
            ->get();

        foreach ($courses as $course) {

            $sitemap->add(
                Url::create(url('/training/' . $course->slug))
                    ->setLastModificationDate($course->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

    // service 
        $services = Post::where('type', 'service')
            ->where('status', 'published')
            ->select('slug', 'updated_at')
            ->get();

        foreach ($services as $service) {

            $sitemap->add(
                Url::create(url('/service/' . $service->slug))
                    ->setLastModificationDate($service->updated_at)
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        }

        return response(
            $sitemap->render(),
            200,
            [
                'Content-Type' => 'application/xml',
            ]
        );
    }
}
