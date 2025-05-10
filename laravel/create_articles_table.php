Schema::create('articles', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->text('body');
    $table->string('image_path')->nullable();
    $table->foreignId('category_id')->constrained();
    $table->timestamps();
});
