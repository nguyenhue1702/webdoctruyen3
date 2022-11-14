<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_product',
        'slug_product',
        'img_product',
        'content_product',
        'kichhoat',
        'hot',
        'danhmuc_id',
        'theloai_id',
        'id_author',
        'tinhtrang'
        
    ];
  
    public function session(){
        return $this->hasMany('App\Models\session');
    }
    public function Product_favourite(){
        return $this->hasMany('App\Models\favourite');
    }
    public function Author(){
        return $this->belongsTo('App\Models\Author','id_author','id');
    }
    public function danhmuc(){
        return $this->belongsTo('App\Models\dmtruyen','danhmuc_id','id');
    }
  
    
    
    public function theloai(){
        return $this->belongsTo('App\Models\theloai','theloai_id','id');
    }
    //@LIÊN KẾT N-N VS BẢNG DMTRUYEN THÔNG QUA BẢNG THUOCDANHS
    public function thuocnhieudanhmuctruyen(){
       return $this->belongsToMany(dmtruyen::class, 'thuocdanhs','truyen_id','danhmuc_id');
    }
    //@LIÊN KẾT N-N VS BẢNG THELOAI THÔNG QUA BẢNG THUOCLOAIS
    public function thuocnhieutheloaitruyen(){
        return $this->belongsToMany(theloai::class, 'thuocloais','truyen_id','theloai_id');
    }
}
