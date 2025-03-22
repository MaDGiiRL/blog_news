<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Headline;

class NewsController extends Controller
{
    public function top_usa()
    {

        $apiKey = '6ae1fc2a04474bd98b3cd0207b36e8cb';
        $response = Http::get("https://newsapi.org/v2/top-headlines", [
            'country' => 'us',
            'apiKey'  => $apiKey
        ]);


        if ($response->successful()) {
            $articles = $response->json()['articles'];

            foreach ($articles as $article) {
                Headline::updateOrCreate(
                    ['url' => $article['url']],
                    [
                        'title'       => $article['title'],
                        'description' => $article['description'] ?? null,
                        'urlToImage'  => $article['urlToImage'] ?? null,
                        'publishedAt' => $article['publishedAt'] ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null
                    ]
                );
            }


            $headlines = Headline::orderBy('publishedAt', 'desc')->get();

            return view('news.top_usa', compact('headlines'));
        } else {

            abort(500, 'Errore nella chiamata all\'API NewsAPI');
        }
    }


    public function techNews()
    {
        $apiKey = '6ae1fc2a04474bd98b3cd0207b36e8cb';
        $response = Http::get("https://newsapi.org/v2/everything", [
            'domains' => 'techcrunch.com,thenextweb.com',
            'apiKey'  => $apiKey
        ]);

        if ($response->successful()) {
            $articles = $response->json()['articles'];

            foreach ($articles as $article) {
                Headline::updateOrCreate(
                    ['url' => $article['url']],
                    [
                        'title'       => $article['title'],
                        'description' => $article['description'] ?? null,
                        'urlToImage'  => $article['urlToImage'] ?? null,
                        'publishedAt' => $article['publishedAt'] ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null
                    ]
                );
            }

            $headlines = Headline::orderBy('publishedAt', 'desc')->get();

            return view('news.tech', compact('headlines'));
        } else {
            abort(500, 'Errore nella chiamata all\'API Tech News');
        }
    }


    public function appleNews()
    {
        $apiKey = '6ae1fc2a04474bd98b3cd0207b36e8cb';
        $response = Http::get("https://newsapi.org/v2/everything", [
            'q'      => 'apple',
            'from'   => '2025-03-21',
            'to'     => '2025-03-21',
            'sortBy' => 'popularity',
            'apiKey' => $apiKey
        ]);

        if ($response->successful()) {
            $articles = $response->json()['articles'];

            foreach ($articles as $article) {
                Headline::updateOrCreate(
                    ['url' => $article['url']],
                    [
                        'title'       => $article['title'],
                        'description' => $article['description'] ?? null,
                        'urlToImage'  => $article['urlToImage'] ?? null,
                        'publishedAt' => $article['publishedAt'] ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null
                    ]
                );
            }

            $headlines = Headline::orderBy('publishedAt', 'desc')->take(3)->get();

            return view('news.apple', compact('headlines'));
        } else {
            abort(500, 'Errore nella chiamata all\'API Apple News');
        }
    }



    public function bitcoin()
    {

        $apiKey = '6ae1fc2a04474bd98b3cd0207b36e8cb';
        $response = Http::get("https://newsapi.org/v2/everything?q=bitcoin&apiKey=" . $apiKey);


        if ($response->successful()) {
            $articles = $response->json()['articles'];


            foreach ($articles as $article) {

                $urlToImage = isset($article['urlToImage']) && strlen($article['urlToImage']) <= 255
                    ? $article['urlToImage']
                    : null;


                Headline::updateOrCreate(
                    ['url' => $article['url']],
                    [
                        'title'       => $article['title'],
                        'description' => $article['description'] ?? null,
                        'urlToImage'  => $urlToImage,
                        'publishedAt' => $article['publishedAt'] ? date('Y-m-d H:i:s', strtotime($article['publishedAt'])) : null
                    ]
                );
            }


            $headlines = Headline::orderBy('publishedAt', 'desc')->get();


            return view('news.bitcoin', compact('headlines'));
        } else {

            abort(500, 'Errore nella chiamata all\'API NewsAPI');
        }
    }
}
