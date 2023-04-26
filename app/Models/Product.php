<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Product extends Model
{
    use HasFactory;

    public function scopeFilter ($query) 
    {
        if(request('search')){
            return $query->where('nama_sampah','like','%' . request('search') . '%')
                    ->orWhere('deskripsi_sampah', 'like', '%' . request('search') . '%');
        }
    }

    public function User () 
    {
        return $this->belongsTo('App\Models\User');
    }
}
