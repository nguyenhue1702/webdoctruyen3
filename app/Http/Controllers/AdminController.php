<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Banner;
use App\Models\dmtruyen;
use App\Models\Publishing;
use App\Models\RegisterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\TheloaiRequest;
use App\Models\theloai;
use App\Models\User;

class AdminController extends Controller
{
    public function FormLoginAdmin()
    {
        return view('User/login');
    }
    public function HomeAdmin()
    {   
     
        return view('Admin/home_admin');
    }

    public function ShowProFile()
    {

        return view('Admin/profile');
    }
    //@ XỬ LÝ DANH MỤC  ADMIN
    public function comic_category()
    {
        $tendms = dmtruyen::all();

        return view('Admin/comic_category')->with('tendms', $tendms);
    }
    //hàm thêm
    public function add_dmtruyen(AdminRequest $request)
    {

        $gan = $request->danhmuc;
        $sl = $request->slugdm;
        $result = DB::table('dmtruyens')->where('danhmuc', $gan)->where('slugdm', $sl)->first();
        if ($result) {
            return redirect()->route('comic_category')->with('loi', "Đã Tồn Tại");
        } else {
            $dm = new dmtruyen();
            $dm->danhmuc = $request->danhmuc;
            $dm->slugdm = $request->slugdm;
            $dm->save();
            return redirect()->route('comic_category')->with('ok', "Thêm Thành Công : $request->danhmuc");
        }
    }
    //hàm xoá
    public function delete_dm($id)
    {
        $namedm = dmtruyen::find($id);
        $namedm->delete();
        return redirect()->route('comic_category')->with('ok', "Xoá Thành Công");
    }
    // hàm click sủa
    public function editdm(dmtruyen $tendms, $id)
    {
        $tendms = dmtruyen::Find($id);
        return view('Admin/editdm', ['tendms' => $tendms]);
    }
    //hàm cập nhật dm
    public function updatedm(AdminRequest $request, $id)
    {
        $news = dmtruyen::find($id);
        $news->danhmuc = $request->danhmuc;
        $news->slugdm = $request->slugdm;
        $news->save();
        return redirect()->route('comic_category')->with('ok', "Cập Nhật Thành Công");
    }
    //@ XỬ LÝ THỂ LOẠI   ADMIN   
    public function page_theloai()
    {
        $all_theloai = theloai::All();
        return view('Admin/theloai_list')->with(compact('all_theloai'));
    }
    public function add_tl(TheloaiRequest $request)
    {
        $gan = $request->theloai;
        $sl = $request->slugtl;
        $result = DB::table('theloais')->where('theloai', $gan)->where('slugtl', $sl)->first();
        if ($result) {
            return redirect()->route('page_theloai')->with('loi', "Đã Tồn Tại");
        } else {
            $theloai = new theloai();
            $theloai->theloai = $request->theloai;
            $theloai->slugtl = $request->slugtl;
            $theloai->save();
            return redirect()->route('page_theloai')->with('ok', "Thêm Thành Công : $request->theloai");
        }
    }
    public function delete_tl($id)
    {
        $item = theloai::find($id);
        $item->delete();
        return redirect()->route('page_theloai')->with('ok', "Xoá Thành Công");
    }
    public function edit_tl($id)
    {
        $theloai = theloai::find($id);
        return view('Admin/theloai_edit', ['theloai' => $theloai]);
    }
    public function updatetl(TheloaiRequest $request, $id)
    {
        $news = theloai::find($id);
        $news->theloai = $request->theloai;
        $news->slugtl = $request->slugtl;
        $news->save();
        return redirect()->route('page_theloai')->with('ok', "Cập Nhật Thành Công");
    }

    //@ XU LÝ TÁC GIẢ       ADMIN   
    public function ListAuthor()
    {
        $authors = Author::orderby('id', 'DESC')->get();
        return view('Admin/author_list')->with('authors', $authors);
    }
    public function createauthor()
    {
        return view('Admin/author_create');
    }
    public function newauthor(AuthorRequest $request)
    {
        //!validation riêng hình ảnh
        $request->validate(
            [
                'img_author' => 'required',
            ],
            [
                'required' => ':attribute phải đuọc chọn', //* cách thể hiện các rule
            ],
            [
                'img_author' => 'Hình Ảnh', //* tuỳ chỉnh thông báo ( :attribute)
            ]
        );
        $new = new Author();
        $new->name_author = $request->name_author;
        $new->country_author = $request->country_author;
        $new->date_author = $request->date_author;
        $get_img = $request->file('img_author');
        if ($get_img) {
            $new_img = rand(0, 99999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_author', $new_img); //chọn đường dẫn upload ảnh
            $new->img_author = $new_img;
            $new->save();
            return redirect()->route('ListAuthor')->with('ok', "Thêm Mới Thành Công");
        }
        $new->save();
        return redirect()->route('ListAuthor')->with('ok', "Thêm Mưới Thành Công");
    }
    public function edit_author(Author $authors, $id)
    {
        $authors = Author::Find($id);
        return view('Admin/author_edit', ['authors' => $authors]);
    }
    public function updateauthor(AuthorRequest $request, $id)
    {
        $news = Author::find($id);
        $news->name_author = $request->name_author;
        $news->country_author = $request->country_author;
        $news->date_author = $request->date_author;
        $get_img = $request->file('img_author');
        if ($get_img) {
            $new_img = rand(0, 999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_author', $new_img); //chọn đường dẫn upload ảnh
            $news->img_author = $new_img;
            $news->save();
            return redirect()->route('ListAuthor')->with('ok', "Cập Nhật Thành Công");
        }
        $news->save();
        return redirect()->route('ListAuthor')->with('ok', "Cập Nhật Thành Công");
    }
    public function delete_author($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('ListAuthor')->with('ok', "Xoá Thành Công");
    }

    //@ XỬ LÝ NHÀ XUẤT BẢN ADMIN
    public function List_Publishing()
    {
        $publishings = Publishing::All();
        return view('Admin/Publishing_list')->with('publishings', $publishings);
    }
    public function create_publishing()
    {
        return view('Admin/Publishing_new');
    }
    public function new_publishing(Request $request)
    {
        $new = new Publishing();
        $new->name_publishing = $request->name_publishing;
        $new->address = $request->address;
        $get_img = $request->file('img_publishing');
        if ($get_img) {
            $new_img = rand(0, 99999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_publishing', $new_img); //chọn đường dẫn upload ảnh
            $new->img_publishing = $new_img;
            $new->save();
            return redirect()->route('Publishing')->with('ok', "Thêm Mới Thành Công");
        }
        $new->save();
        return redirect()->route('Publishing')->with('ok', "Thêm Mới Thành Công");
    }
    public function delete_publishing($id)
    {
        $object = Publishing::find($id);
        $object->delete();
        return redirect()->route('Publishing')->with('ok', "Xoá Thành Công");
    }
    public function edit_publishing(Publishing $publishings, $id)
    {
        $publishings = Publishing::Find($id);
        return view('Admin/Publishing_edit', ['publishings' => $publishings]);
    }
    public function update_publishing(Request $request, $id)
    {
        $news = Publishing::find($id);
        $news->name_publishing = $request->name_publishing;
        $news->address = $request->address;
        $get_img = $request->file('img_author');
        if ($get_img) {
            $new_img = rand(0, 99999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_publishing', $new_img); //chọn đường dẫn upload ảnh
            $news->img_publishing = $new_img;
            $news->save();
            return redirect()->route('Publishing')->with('ok', "Cập Nhật Thành Công");
        }
        $news->save();
        return redirect()->route('Publishing')->with('ok', "Cập Nhật Thành Công");
    }
    //@ XỬ LÝ BANNER   ADMIN     
    public function ListBanner()
    {
        $banners = Banner::all();
        return view('Admin/banner_list')->with('banners', $banners);
    }
    public function create_banner()
    {
        return view('Admin/banner_create');
    }
    public function new_banner(BannerRequest $request)
    {
        $request->validate(
            [
                'img_banner' => 'required',
            ],
            [
                'required' => ':attribute phải đuọc chọn', //* cách thể hiện các rule
            ],
            [
                'img_banner' => 'Hình Ảnh', //* tuỳ chỉnh thông báo ( :attribute)
            ]



        );
        $new = new Banner();
        $new->title_banner = $request->title_banner;
        $new->show_banner = $request->show_banner;
        $get_img = $request->file('img_banner');
        if ($get_img) {
            $new_img = rand(0, 99999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_banner', $new_img); //chọn đường dẫn upload ảnh
            $new->img_banner = $new_img;
            $new->save();
            return redirect()->route('ListBanner')->with('ok', "Thêm Mới Thành Công");
        }
        $new->save();
        return redirect()->route('Publishing')->with('ok', "Thêm Mới Thành Công");
    }
    public function delete_banner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('ListBanner')->with('ok', "Xoá Thành Công");
    }
    public function edit_banner($id)
    {
        $banners = Banner::Find($id);
        return view('Admin/banner_edit', ['banners' => $banners]);
    }
    public function updatebanner(Request $request, $id)
    {
        $news = Banner::find($id);
        $news->title_banner = $request->title_banner;
        $news->show_banner = $request->show_banner;
        $get_img = $request->file('img_banner');
        if ($get_img) {
            $new_img = rand(0, 99999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_banner', $new_img); //chọn đường dẫn upload ảnh
            $news->img_banner = $new_img;
            $news->save();
            return redirect()->route('ListBanner')->with('ok', "Cập Nhật Thành Công");
        }
        $news->save();
        return redirect()->route('ListBanner')->with('ok', "Cập Nhật Thành Công");
    }
    public function ChangeStatusBanner(Request $request){
        $status = Banner::find($request->item_id);
        $status->show_banner = $request->show_banner;
        $status->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }
    //tìm kiem



}
