<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articleuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'user_id',
    ];
    public function User_baiviet(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
