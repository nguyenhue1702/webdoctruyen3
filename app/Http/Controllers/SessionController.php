<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Chapter;

class SessionController extends Controller
{
    //@ XỬ LÝ CHƯƠNG TRUYỆN ADMIN
    public function form_session(){
        $user = Session::get('id');
        if (Session::get('role') == 2) {
            $chapter = Chapter::with('Product')->orderBy('id','DESC')->get();
        } else {
            $chapter = Chapter::with('Product')->orderBy('id','DESC')->where('user_id', $user)->get();
        }

        return view('Admin/session_list')->with('chapter',$chapter);
    }
    public function create_session(){
        $user = Session::get('id');
        $truyens = Product::orderBy('id','DESC')->where('id_author', $user)->get();
        return view('Admin/session_new')->with('truyens',$truyens);
    }
    public function add_session(SessionRequest $request){
        $user = Session::get('id');
        $new = new Chapter();
        $new->session = $request->session;
        $new->slug_session=$request->slug_session;
        $new->title_session=$request->title_session;
        $new->content_session=$request->content_session;
        $new->tomtat_session=$request->tomtat_session;
        $new->kichhoat=$request->kichhoat;
        $new->id_product=$request->id_product;
        $new->user_id=$user;

        $old_session = Chapter::orderBy('id','DESC')->where('id_product',$request->id_product)->where('session',$request->session)->get();
        $count_session = count($old_session);
      if($count_session >= 1){


      return redirect()->back()->with('loi',"Chương Đã Tồn Tại !");
      }
      $new->save();
        return redirect()->route('session_list')->with('ok',"Thêm Thành Công : $request->title_session");



    }
    public function delete_session($id){
        $session = Chapter::find($id);
        $session->delete();
        return redirect()->back()->with('ok','Xoá Thành Công');

    }
    public function edit_session($id){
        $sessions = Chapter::Find($id);
        $truyen = Product::orderBy('id','DESC')->get();
        return view('Admin/session_edit')->with(compact('sessions','truyen'));
    }
    public function update_session(SessionRequest $request,$id){
        $new = Chapter::find($id);
        $new->session = $request->session;
        $new->title_session=$request->title_session;
        $new->slug_session=$request->slug_session;
        $new->content_session=$request->content_session;
        $new->tomtat_session=$request->tomtat_session;
        $new->kichhoat=$request->kichhoat;
        $new->id_product=$request->id_product;
        $new->save();
        return redirect()->route('session_list')->with('ok',"Cập Nhật Thành Công : $request->session");
        }
}

