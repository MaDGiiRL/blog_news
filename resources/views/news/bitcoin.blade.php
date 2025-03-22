<x-layout title="Top Bitcoin Headlines">
    <div class="container mt-5">
        <h1 class="text-white py-3">Top <span class="text-yellow">Bitcoin</span> Headlines</h1>
        <div class="row">
            @foreach($headlines as $headline)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($headline->urlToImage)
                    <img src="{{ $headline->urlToImage }}" class="card-img-top" alt="{{ $headline->title }}">
                    @endif
                    <div class="card-body">
                        <small class="text-white-50 py-1">Pubblicato: {{ \Carbon\Carbon::parse($headline->publishedAt)->format('d/m/Y H:i') }}</small>
                        <h5 class="card-title">{{ $headline->title }}</h5>
                        <p class="text-white-50 small">{{ \Illuminate\Support\Str::limit($headline->description, 80, '...') }}</p>
                        <a href="{{ $headline->url }}" class="btn btn-custom-out" target="_blank">
                            Read More <i class="bi bi-arrow-up-right link-yellow"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>