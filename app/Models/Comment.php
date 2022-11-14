<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'session_id',
        'user_id',
    ];
    public function Comment_user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function Comment_session(){
        return $this->belongsTo('App\Models\session','session_id','id');
    }
}
