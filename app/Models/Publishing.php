<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_publishing',
        'img_publishing',
        'address',
        
    ];
    public function tt(){
        return $this->hasMany('App\Models\Product', 'id_publishing', 'id');
    }
}
