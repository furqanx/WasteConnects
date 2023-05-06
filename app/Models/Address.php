<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'province',
        'city',
        'district',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
