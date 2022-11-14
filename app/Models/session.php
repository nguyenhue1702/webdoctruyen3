<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;
    protected $fillable = [
        'session',
        'title_session',
        'content_session',
        'kichhoat',
        'tomtat_session',
        'slug_session',
        'id_product',
        'view_session',
    ];
    public function Product(){
        return $this->belongsTo('App\Models\Product','id_product','id');
    }
    public function Session_comment(){
        return $this->hasMany('App\Models\Comment');
    }
}
