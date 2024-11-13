@if($article->city_id !== 0)
<div class="ml-2 d-flex align-items-center">
    <a href="{{ route('articles.search', ['city' => $article->city_id]) }}" class="text-muted"><i class="fas fa-map-marker-alt p-1"></i>{{ $article->cityName }}</a>
</div>
@endif
