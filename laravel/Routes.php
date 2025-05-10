Route::get('/', [HomeController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);
Route::middleware(['auth', 'role:admin|editor'])->group(function () {
    Route::resource('dashboard/articles', Admin\ArticleController::class);
});
