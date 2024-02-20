<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'like_count',
        'view_count',
        'comment_count'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }
    public function programming(): BelongsToMany
    {
        return $this->belongsToMany(Programming::class, 'article_programming');
    }
}
