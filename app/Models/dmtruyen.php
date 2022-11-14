<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dmtruyen extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'danhmuc',
        'slugdm'
    ];
    public function nhieuTruyen(){
        return $this->belongsToMany(Product::class,'thuocdanhs','danhmuc_id','truyen_id');
     }
  
}
