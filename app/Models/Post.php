<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'image',
        'slug',
        'link',
        'category_id',
        'description',
    ];

    // Satu post punya 1 kategori
    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    // Satu post punya banyak genre
    // public function genre(): BelongsToMany{
    //     return $this->belongsToMany(Genre::class);
    // }

    // Lazy loadaing
    protected $with = ['category'];
}
