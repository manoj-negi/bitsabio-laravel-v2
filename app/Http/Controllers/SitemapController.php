<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
        public function index() {
        $sitemap = Sitemap::create();

    //    static pages 

        $pages = [
            '/',
            '/about',
            '/services',
            '/portfolio',
            '/contact',

            '/services/ai',
            '/services/rag_solution',
            '/services/data_science',
            '/services/ai-ml',
            '/services/web-app',
            '/services/ai-solution',
            '/services/ui-ux',
            '/services/digital-marketing',
        ];

        foreach ($pages as $page) {

            $sitemap->add(
                Url::create($page)
                    ->setPriority(0.8)
            );
        }

        // blog pages
        
        $blogs = Post::where('type', 'blog')
            ->select('slug', 'updated_at')
            ->get();

        foreach ($blogs as $blog) {

            $sitemap->add(
                Url::create(url('blog/' . $blog->slug))
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.7)
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
