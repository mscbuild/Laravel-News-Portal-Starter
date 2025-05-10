class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'category_id', 'image_path'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
