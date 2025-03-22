<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Source;

class NewsSourceController extends Controller
{
    public function sources(Request $request)
    {
        // Carica le fonti dal database o dall'API se non ci sono
        if (Source::count() === 0) {
            $apiKey = '6ae1fc2a04474bd98b3cd0207b36e8cb';
            $response = Http::get("https://newsapi.org/v2/top-headlines/sources?apiKey=" . $apiKey);

            if ($response->successful()) {
                foreach ($response->json()['sources'] as $source) {
                    Source::create([
                        'id' => $source['id'],
                        'name' => $source['name'],
                        'description' => $source['description'] ?? null,
                        'url' => $source['url'],
                        'category' => $source['category'] ?? null,
                        'language' => $source['language'] ?? null,
                        'country' => $source['country'] ?? null,
                    ]);
                }
            }
        }

        // Filtro per paese
        $country = $request->input('country', 'us'); // Default al paese 'us'
        $sources = Source::where('country', $country)->get();

        return view('news.sources', compact('sources', 'country'));
    }
}
