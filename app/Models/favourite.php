<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
      
        'user_id',
        'product_id',
    ];
    public function Favourite_user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function Favourite_product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
    public function Comment_session(){
        return $this->belongsTo('App\Models\session','session_id','id');
    }
}
