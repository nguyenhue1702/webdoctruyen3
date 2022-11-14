<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;
    protected $fillable = [
        'theloai',
        'slug_theloai'
    ];
    public function tl_Truyens(){
        return $this->belongsToMany(Product::class,'thuocloais','theloai_id','truyen_id');
     }
}
