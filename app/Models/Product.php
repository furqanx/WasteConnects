<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'location', 'user_id'];
    /**
     * get the user that own the Product
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * get the categories for the product
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
