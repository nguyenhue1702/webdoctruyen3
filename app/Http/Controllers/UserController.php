<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoginRequest;
use App\Models\RegisterModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserRequest;
use App\Models\articleuser;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\User as AuthUser;
use Laravel\Ui\Presets\React;
use App\Models\theloai;
use App\Models\dmtruyen;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //@ XỬ LÝ ĐĂNG NHẬP VÀ ĐĂNG KÝ
    public function TrangDangKi()
    {
        return view('User/register');
    }
    public function DangKiTK(UserRequest $request)
    {


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->save();

        return redirect()->route('FormLoginAdmin')->with('ok', 'Đăng Kí Thành Công');
    }
    public function LoginAdmin(LoginRequest $request)
    {

        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            Session::put('name', $result->name);
            Session::put('role', $result->role);
            Session::put('id', $result->id);
            Session::put('isLogin', true);
            Session::put('roleUser', $result->role);
            if ($result->role === 0) {
                return redirect()->route('Home')->with('ok', 'Đăng nhập Thành công');
                //tài khoản bình thường
            } else {
                return redirect()->route('HomeAdmin')->with('ok', 'Đăng Nhập Thành Công');
            }
        } else {
            if (empty($request->email) && empty($request->password)) {
                return redirect()->route('FormLoginAdmin')->with('loi', 'Yêu cầu nhập email và mật khẩu !');
            }
            if (isset($request->email) && empty($request->password)) {
                return redirect()->route('FormLoginAdmin')->with('loi', 'Yêu cầu nhập mật khẩu !');
            }
            return redirect()->route('FormLoginAdmin')->with('loi', 'Sai Tài Khoản Hoặc Mật Khẩu !');
        }
    }
    public function Logout()
    {
        Session::put('name', null);
        Session::put('role', null);
        session(['isLogin' => false]);
        session(['roleUser' => -1]);
        return redirect()->route('FormLoginAdmin')->with('ok', 'Đăng Xuất Thành Công');
    }

    public function list_users()
    {
        $users = AuthUser::all();

        return View('Admin/user_list')->with(compact('users'));
    }
    public function delete_user($id)
    {
        $user = AuthUser::find($id);
        $user->delete();
        return redirect()->route('list_users')->with('ok', "Xoá Thành Công");
    }
    public function edit_user($id)
    {
        $user = AuthUser::find($id);

        return view('Admin/user_edit')->with(compact('user'));
    }
    public function update_user(Request $request, $id)
    {

        $news = AuthUser::find($id);
        $news->role = $request->role;
        $news->name = $request->name;
        $news->email = $request->email;
        $news->password = $request->password;
        $news->save();
        return redirect()->route('list_users')->with('ok', "Phân quyền thành công !");
    }
    public function user_article()
    {
        $tendms = dmtruyen::orderBy('id', 'DESC')->get();
        $theloai = theloai::orderBy('id', 'DESC')->get();

        return view('/Website/user_article')->with(compact('tendms', 'theloai'));
    }
    public function new_article(Request $request)
    {

        $new = new articleuser();
        $content = !empty($request->content) ? $request->content : "";
        $new->title = $request->tilte;
        $new->slug = $request->slug;
        $new->user_id = $request->user_id;
        $new->content = $content;
        $new->save();
        return redirect()->route('Home')->with('ok', "Đăng bài thành công đang chờ xét duyệt");
    }
    //@form danh sách bài đăng của user
    public function ds_article()
    {
        $tendms = dmtruyen::orderBy('id', 'DESC')->get();
        $theloai = theloai::orderBy('id', 'DESC')->get();
        $user = Session::get('id');
        //@lấy ra biến $user = id của user đó rồi lấy ra bài đăng của user có id = $user
        $baidang = articleuser::orderBy('id', 'DESC')->where('user_id', $user)->paginate(4);
        return view('/Website/list_article')->with(compact('theloai', 'tendms', 'baidang'));
    }
    //@ xử lý bài viết user
    public function list_bv_user()
    {
        $list = articleuser::with('User_baiviet')->orderBy('id', 'DESC')->get();
        $count = 0;
        foreach ($list as $key => $value) {
            if ($value->apply === 0) {
                $count++;
            }
        }
        Session::put('countStatus', $count);
        return view('Admin/baiviet_user')->with('list', $list);
    }

    public function delete_bv_user($id)
    {
        $bv_user = articleuser::find($id);
        $bv_user->delete();

        return redirect()->route('baiviet_user')->with('ok', "Xoá Thành Công");
    }
    public function edit_bv_user($id)
    {
        $bv_user = articleuser::find($id);

        return view('Admin/edit_bv_user')->with(compact('bv_user'));
    }
    public function update_bv_user(Request $request, $id)
    {
        $new = articleuser::find($id);
        $new->apply = $request->apply;
        $new->save();
        return redirect()->route('baiviet_user')->with('ok', "Cập Nhật Thành Công");
    }
    public function info()
    {
        return redirect()->back()->with('loi', "Chức năng đang bảo trì");
    }
    //@chang status baivietusser
    public function ChangeBaivietUser(Request $request)
    {
        $status = articleuser::find($request->item_id);
        $status->apply = $request->apply;
        $status->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }
}
