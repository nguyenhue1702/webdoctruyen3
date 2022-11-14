<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use Illuminate\Support\Facades\DB;
use App\Models\dmtruyen;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function ListBaiViet(){
        $baiviets= baiviet::All();
        return view('Admin/article_list')->with('baiviets',$baiviets);
    }
    public function form_create_article(){
        return view('Admin/article_new');
    }
    //thêm bài viết
    public function submit_article(Request $request){
        $baiviet = new baiviet();
        $baiviet->name_bv=$request->name_bv;
        $baiviet->info_bv=$request->info_bv;
        
        $get_img=$request->file('hinhanh_bv');
        if($get_img){
            $new_img= rand(0,999).'.'.$get_img->getClientOriginalExtension();//đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_baiviet',$new_img);//chọn đường dẫn upload ảnh
            $baiviet->hinhanh_bv=$new_img;
            $baiviet->save();
            return redirect()->route('ListArticle')->with('ok','Thêm Thành Công');
        }
        dd('thatbai');
    }
    //xoá bài viết
    public function delete_bv($id){
        $bv = baiviet::find($id);
        $bv->delete();
        return redirect()->route('ListArticle')->with("ok","Xoá Thành Công");
    }
    //Sửa Bài Viết
    public function edit_baiviet(baiviet $baiviets, $id){
        $baiviets = baiviet::Find($id);
        return view('Admin/article_edit' ,['baiviets' => $baiviets],);
       }
       //cạp nhật bài viết
     public function updatebv(Request $request, $id)
       {
           $news = baiviet::find($id);
          $news->name_bv= $request->name_bv; 
          $news->info_bv=$request->info_bv;
          $get_img=$request->file('hinhanh_bv');
          if($get_img){
              $new_img= rand(0,999).'.'.$get_img->getClientOriginalExtension();//đổi duôi thành đuôi hình ảnh
              $get_img->move('uploads/img_baiviet',$new_img);//chọn đường dẫn upload ảnh
              $news->hinhanh_bv=$new_img;
              $news->save();
           return redirect()->route('ListArticle')->with('ok',"Cập Nhật Thành Công");
      
}
// DB::table('baiviets')->where('id',$id)->update($news);
$news->save();
return redirect()->route('ListArticle')->with('ok',"Cập Nhật Thành Công");
}
}
