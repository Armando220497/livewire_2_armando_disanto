<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>{{ $article->title }}</h1>
                <h3>{{ $article->subtitle }}</h3>

                @if ($article->img)
                    <div class="my-3">
                        <img src="{{ asset('storage/' . $article->img) }}" alt="{{ $article->title }}" class="img-fluid"
                            style="max-width: 30%; height: auto;">
                    </div>
                @endif

                <p class="mt-4">{{ $article->body }}</p>
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Torna agli articoli</a>
            </div>
        </div>
    </div>
</x-layout>
