<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Ramsey\Uuid\Uuid;

class Article extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'resume',
        'text',
        'user_id',
    ];

    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function users() {
        return $this->belongsTo('App/Models/User');
    }

    protected $KeyType = 'string';

    public $incrementing = false;

    protected static function booted()
    {
        static::creating(fn(Article $article) => $article->id = (string) Uuid::uuid4());
    }

    use HasFactory;
}
