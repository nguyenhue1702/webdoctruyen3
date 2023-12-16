<?php

namespace App\Http\Controllers;

use App\Models\dmtruyen;
use App\Models\Product;
use App\Models\theloai;
use App\Models\thuocdanh;
use App\Models\thuocloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Http\Requests\ProductRequest;
use App\Models\baiviet;

class ProductController extends Controller
{
    //@ các function xử lí Truyện ADMIN
    public function listproduct()
    {
        $list_truyen = Product::with('danhmuc')->orderBy('id', 'DESC')->get();

        return view('Admin/product_list')->with('list_truyen', $list_truyen);
    }
    public function form_create_product()
    {
        $tacgias = Author::All();
        $danhmucs = dmtruyen::orderBy('id', 'DESC')->get();
        $theloais = theloai::orderby('id', 'DESC')->get();
        return view('Admin/product_new')->with(compact('danhmucs', 'tacgias', 'theloais'));
    }
    public function add_product(ProductRequest $request)
    {
        $request->validate(
            [
                'img_product' => 'required',
            ],
            [
                'required' => ':attribute phải đuọc chọn', //* cách thể hiện các rule
            ],
            [
                'img_product' => 'Hình Ảnh', //* tuỳ chỉnh thông báo ( :attribute)
            ]
        );
        $gan = $request->name_product;
        $result = DB::table('products')->where('name_product', $gan)->first();
        if ($result) {
            return redirect()->route('create_product')->with('loi', "Đã Tồn Tại : $request->name_product");
        } else {
            $truyen = new Product();
            $truyen->name_product = $request->name_product;
            $truyen->slug_product = $request->slug_product;
            $truyen->content_product = $request->content_product;
            $truyen->hot = $request->hot;
            $truyen->tinhtrang = $request->tinhtrang;
            $truyen->kichhoat = $request->kichhoat;
            $truyen->id_author = $request->id_author;
            foreach ($request->danhmuc as  $item) {
                $truyen->danhmuc_id = $item[0];
            }
            foreach ($request->theloai  as $the) {
                $truyen->theloai_id = $the[0];
            }
            $get_img = $request->file('img_product');
            if ($get_img) {
                $new_img = rand(0, 999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
                $get_img->move('uploads/img_truyen', $new_img); //chọn đường dẫn upload ảnh
                $truyen->img_product = $new_img;
                $truyen->save();
                $truyen->thuocnhieudanhmuctruyen()->attach($request->danhmuc);
                $truyen->thuocnhieutheloaitruyen()->attach($request->theloai);
                return redirect()->route('listproduct')->with('ok', 'Thêm Truyện Thành Công');
            }
        }
    }
    public function delete_truyen($id)
    {
        $truyen = Product::find($id);
        $truyen->delete();
        return redirect()->route('listproduct')->with('ok', 'Xoá Thành công');
    }
    public function edit_product($id)
    {
        $truyens = Product::find($id);
        $danhmucs = dmtruyen::orderBy('id', 'DESC')->get();
        $theloais = theloai::orderBy('id', 'DESC')->get();
        $author = Author::orderBy('id', 'DESC')->get();
        $thuocdanh = thuocdanh::orderBy('id', 'DESC')->where('truyen_id', $truyens->id)->pluck('danhmuc_id')->toArray();
        $thuocloai = thuocloai::orderBy('id', 'DESC')->where('truyen_id', $truyens->id)->pluck('theloai_id')->toArray();



        return view('Admin/product_edit')->with(compact('truyens', 'danhmucs', 'author', 'theloais', 'thuocdanh', 'thuocloai'));
    }
    public function update_product(ProductRequest $request, $id)
    {

        $truyen = Product::find($id);
        $truyen->name_product = $request->name_product;
        $truyen->slug_product = $request->slug_product;
        $truyen->content_product = $request->content_product;
        $truyen->hot = $request->hot;
        $truyen->tinhtrang = $request->tinhtrang;
        $truyen->kichhoat = $request->kichhoat;
        if (is_array($request->danhmuc)) {

            thuocdanh::where('truyen_id', $truyen->id)->delete();
        }
        //@ lấy dữ liệu mảng từ requet->danhmuc và thể loại
        foreach ($request->danhmuc as  $item) {
            $truyen->danhmuc_id = $item[0];
        }
        if (is_array($request->theloai)) {
            thuocloai::where('truyen_id', $truyen->id)->delete();
        }
        foreach ($request->theloai  as $the) {
            $truyen->theloai_id = $the[0];
        }
        

        $truyen->id_author = $request->id_author;
        $get_img = $request->file('img_product');
        if ($get_img) {
            $new_img = rand(0, 999) . '.' . $get_img->getClientOriginalExtension(); //đổi duôi thành đuôi hình ảnh
            $get_img->move('uploads/img_truyen', $new_img); //chọn đường dẫn upload ảnh
            $truyen->img_product = $new_img;
            $truyen->save();
            //@ inser into vô bảng thuocloais và thuocdanhs
            $truyen->thuocnhieudanhmuctruyen()->attach($request->danhmuc);
            $truyen->thuocnhieutheloaitruyen()->attach($request->theloai);
            return redirect()->route('listproduct')->with('ok', 'Cập Nhật Thành Công');
        } else
            $truyen->save();
        $truyen->thuocnhieudanhmuctruyen()->attach($request->danhmuc);
        $truyen->thuocnhieutheloaitruyen()->attach($request->theloai);
        return redirect()->route('listproduct')->with('ok', 'Cập Nhật Thành Công');
    }
    public function ChangeStatusProduct(Request $request)
    {
      
        $status = Product::find($request->truyen_id);
        $status->kichhoat = $request->kichhoat;
        $status->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    
    }
    public function ChangeTinhtrangProduct(Request $request)
    {
      
        $tinhtrang = Product::find($request->truyen_id);
        $tinhtrang->tinhtrang = $request->tinhtrang;
        $tinhtrang->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    
    }
    public function    ChangeHotProduct(Request $request)
    {
      
        $hot = Product::find($request->truyen_id);
        $hot->hot = $request->hot;
        $hot->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    
    }
 
}
