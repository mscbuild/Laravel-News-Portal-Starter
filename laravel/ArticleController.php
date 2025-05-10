public function index()
{
    $articles = Article::latest()->with('category')->paginate(5);
    return view('articles.index', compact('articles'));
}

public function show($slug)
{
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('articles.show', compact('article'));
}
