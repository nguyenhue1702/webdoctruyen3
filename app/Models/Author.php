<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_author',
        'img_author',
        'country_author',
        'date_author'
    ];
    public function Au_truyen(){
        return $this->hasMany('App\Models\Product');
    }
}
