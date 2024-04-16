<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    # Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    # Scope Queries
    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
    }

    public function scopeWithCategory($query, string $category){
        $query->whereHas('categories', function ($query) use ($category) {
            $query->where('title', $category);
            // title should be slug in production it's Development
        });
    }

    public function getReadingTime(){
        $mins = round(str_word_count($this->body) / 250 );
        return ($mins < 1) ? 1 : $mins;
    }

    public function getExcerpt(){
        return Str::limit(strip_tags($this->body));
    }

    public function getThumbnailImage(){
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }

    public function likes(){
        return $this->belongsToMany(User::class, 'post_user')->withTimestamps();
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}