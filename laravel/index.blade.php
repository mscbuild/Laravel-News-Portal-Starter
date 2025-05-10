@foreach ($articles as $article)
    <h2><a href="{{ url('/articles/' . $article->slug) }}">{{ $article->title }}</a></h2>
    <p>{{ Str::limit($article->body, 150) }}</p>
@endforeach
{{ $articles->links() }}
