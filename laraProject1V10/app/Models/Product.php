<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;




class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'image'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }

}
