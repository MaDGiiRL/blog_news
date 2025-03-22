<x-layout title="News Sources by Country">
    <div class="container mt-5">
        <h1 class="text-white py-3">News <span class="text-yellow">Sources</span></h1>

        <!-- Filtro per paese -->
        <form id="countryFilterForm" method="GET" action="{{ route('news.sources') }}">
            <div class="mb-4">
                <label for="country" class="form-label text-white">Select Country</label>
                <select id="country" name="country" class="form-select" onchange="document.getElementById('countryFilterForm').submit()">
                    <option value="us" {{ $country == 'us' ? 'selected' : '' }}>USA</option>
                    <option value="gb" {{ $country == 'gb' ? 'selected' : '' }}>UK</option>
                    <option value="de" {{ $country == 'de' ? 'selected' : '' }}>Germany</option>
                    <!-- Aggiungi altre opzioni per altri paesi -->
                </select>
            </div>
        </form>

        <!-- Lista delle fonti -->
        <div class="row">
            @foreach($sources as $source)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-yellow">{{ $source->name }}</h5>
                        <p class="card-text">{{ $source->description ?? 'No description available' }}</p>
                        <a href="{{ $source->url }}" class="btn btn-custom-out" target="_blank">Visit Source <i class="bi bi-arrow-up-right link-yellow"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
<script>
    document.getElementById('country').addEventListener('change', function() {
        document.getElementById('countryFilterForm').submit();
    });
</script>