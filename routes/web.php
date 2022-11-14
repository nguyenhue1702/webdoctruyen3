<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Models\Banner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Admin
Route::get('/Form_Login',[AdminController::class,'FormLoginAdmin'])->name('FormLoginAdmin');
Route::post('/Login',[UserController::class,'LoginAdmin'])->name('LoginAdmin');

Route::group(['middleware'=>['login']],function(){
Route::get('/HomeAdmin',[AdminController::class,'HomeAdmin'])->name('HomeAdmin');
Route::get('/Admin/Profile',[AdminController::class,'ShowProFile'])->name('ShowProFile');
Route::get('/Admin/form_category',[AdminController::class,'comic_category'])->name('comic_category');
//add danh mục
Route::post('/Admin/add_dm',[AdminController::class,'add_dmtruyen'])->name('add_dm');
Route::delete('/Admin/delete_dm/{id}',[AdminController::class,'delete_dm'])->name('delete_dm');
Route::get('/Admin/editdm/{id}',[AdminController::class,'editdm'])->name('editdm');
Route::put('/Admin/updatedm/{id}',[AdminController::class,'updatedm'])->name('updatedm');
//thể loại
Route::get('/Admin/page_theloai',[AdminController::class,'page_theloai'])->name('page_theloai');
Route::post('/Admin/add_theloai',[AdminController::class,'add_tl'])->name('add_tl');
Route::delete('/Admin/delete_tl/{id}',[AdminController::class,'delete_tl'])->name('delete_tl');
Route::get('/Admin/edit_tl/{id}',[AdminController::class,'edit_tl'])->name('edit_tl');
Route::put('/Admin/updatetl/{id}',[AdminController::class,'updatetl'])->name('updatetl');


//bài viết
Route::get('/Admin/create_article',[ArticleController::class,'form_create_article'])->name('form_create_article');
Route::get('/Admin/ListArticle',[ArticleController::class,'ListBaiViet'])->name('ListArticle');
Route::post('/Admin/Submit_Article',[ArticleController::class,'submit_article'])->name('submit_article');
Route::get('/Admin/editbv/{id}',[ArticleController::class,'edit_baiviet'])->name('edit_baiviet');
Route::put('/Admin/updatebv/{id}',[ArticleController::class,'updatebv'])->name('updatebv');
Route::delete('/Admin/delete_bv/{id}',[ArticleController::class,'delete_bv'])->name('article_delete');
//ListBanner
Route::get('/Admin/ListBanner',[AdminController::class,'ShowListBanner'])->name('ListBanner');
//truyện
Route::get('/Admin/products',[ProductController::class,'listproduct'])->name('listproduct');
Route::get('Admin/form_create_product',[ProductController::class,'form_create_product'])->name('create_product');
Route::post('/Admin/add_product',[ProductController::class,'add_product'])->name('add_product');
Route::delete('/Admin/delete_truyen/{id}',[ProductController::class,'delete_truyen'])->name('delete_truyen');
Route::get('Admin/edit_product/{id}',[ProductController::class,'edit_product'])->name('edit_product');
Route::put('/Admin/update_product/{id}',[ProductController::class,'update_product'])->name('update_product');



//tác giả
Route::get('/Admin/author',[AdminController::class,'ListAuthor'])->name('ListAuthor');
Route::get('/Admin/createauthor',[AdminController::class,'createauthor'])->name('createauthor');
Route::post('/Admin/newauthor',[AdminController::class,'newauthor'])->name('newauthor');
Route::get('/Admin/edit_author/{id}',[AdminController::class,'edit_author'])->name('edit_author');
Route::put('/Admin/update_author/{id}',[AdminController::class,'updateauthor'])->name('updateauthor');
Route::delete('/Admin/delete_author/{id}',[AdminController::class,'delete_author'])->name('delete_author');

//banner
Route::get('/Admin/Banner',[AdminController::class,'ListBanner'])->name('ListBanner');
Route::get('/Admin/create_banner',[AdminController::class,'create_banner'])->name('create_banner');
Route::post('/Admin/newbanner',[AdminController::class,'new_banner'])->name('new_banner');
Route::delete('/Admin/deletebanner/{id}',[AdminController::class,'delete_banner'])->name('delete_banner');
Route::get('/Admin/edit_banner/{id}',[AdminController::class,'edit_banner'])->name('edit_banner');
Route::put('/Admin/update_banner/{id}',[AdminController::class,'updatebanner'])->name('update_banner');
//session

Route::get('/Admin/Session',[SessionController::class,'form_session'])->name('session_list');
Route::get('/Admin/create_session',[SessionController::class,'create_session'])->name('create_session');
Route::post('/Admin/NewSession',[SessionController::class,'add_session'])->name('add_session');
Route::delete('/Admin/delete_session/{id}',[SessionController::class,'delete_session'])->name('delete_session');
Route::get('/Admin/edit_session/{id}',[SessionController::class,'edit_session'])->name('edit_session');
Route::put('/Admin/update_session/{id}',[SessionController::class,'update_session'])->name('update_session');




//nhà xuất bản

Route::get('/Admin/Publishing',[AdminController::class,'List_Publishing'])->name('Publishing');
Route::get('/Admin/create_publishing',[AdminController::class,'create_publishing'])->name('create_publishing');
Route::post('/Admin/new_publishing',[AdminController::class,'new_publishing'])->name('new_publishing');
Route::get('/Admin/edit_publishing/{id}',[AdminController::class,'edit_publishing'])->name('edit_publishing');
Route::put('/Admin/update_publishing/{id}',[AdminController::class,'update_publishing'])->name('update_publishing');
Route::delete('/Admin/delete_publishing/{id}',[AdminController::class,'delete_publishing'])->name('delete_publishing');
//user
Route::get('/Admin/ListUsers',[UserController::class,'list_users'])->name('list_users');
Route::delete('/Admin/delete_users/{id}',[UserController::class,'delete_user'])->name('delete_user');
Route::get('/Admin/edit_user/{id}',[UserController::class,'edit_user'])->name('edit_user');
Route::put('/Admin/update_user/{id}',[UserController::class,'update_user'])->name('update_user');
//đăng bài
Route::get('/User/DangBai',[UserController::class,'user_article'])->name('user_article');
Route::get('/Admin/list_bv_user',[UserController::class,'list_bv_user'])->name('baiviet_user');
Route::delete('/Admin/delete_bv_user/{id}',[UserController::class,'delete_bv_user'])->name('delete_bv_user');
Route::get('/Admin/edit_bv_user/{id}',[UserController::class,'edit_bv_user'])->name('edit_bv_user');
Route::put('/Admin/update_bv_user/{id}',[UserController::class,'update_bv_user'])->name('update_bv_user');


Route::post('/User/apply_bv',[UserController::class,'new_article'])->name('sb_article');

Route::get('/Website/List_Article',[UserController::class,'ds_article'])->name('ds_article');
//baiviet website

Route::delete('/ListArticle/dele_bv_user_web/{id}',[WebsiteController::class,'dele_bv_user_web'])->name('dele_bv_user_web');

Route::get('/ListArticle/edit_bv_user_web/{id}',[WebsiteController::class,'edit_bv_user_web'])->name('edit_bv_user_web');
Route::put('/User/update_bv_user_web/{id}',[WebsiteController::class,'update_bv_user_web'])->name('update_bv_user_web');

Route::post('/User/insert_comment',[CommentController::class,'insert_comment'])->name('insert_comment');

Route::post('/User/add_favourite',[FavouriteController::class,'add_favourite'])->name('add_favourite');
Route::delete('/User/remove_favourite/{id}',[FavouriteController::class,'remove_favourite'])->name('remove_favourite');
Route::get('/User/info',[UserController::class,'info'])->name('info');
});
    




//website
Route::get('/',[WebsiteController::class,'Home'])->name('Home');
Route::get('/Logout',[UserController::class,'Logout'])->name('Logout');

Route::get('/Home/baiviet',[WebsiteController::class,'allbaiviet'])->name('allbaiviet');
Route::get('/Home/trangtruyen/{id}/{slug}',[WebsiteController::class,'formTrangtruyen'])->name('trangtruyen');
//@xem thheo danh mục
Route::get('/Home/danhmuc/{id}/{slug}',[WebsiteController::class,'xemtheodanhmuc'])->name('xemtheodanhmuc');
Route::get('/Home/theloai/{id}/{slug}',[WebsiteController::class,'xemtheotheloai'])->name('xemtheotheloai');
// -------session-website---
Route::get('/Home/info-session/{id}/{slug}',[WebsiteController::class,'session_view'])->name('session_view');
// -------doctruyen--------
Route::get('/view/{id}/{slug_product}/{slug_session}',[WebsiteController::class,'doctruyen'])->name('doctruyen');
//timkiem
Route::get('/tim-kiem',[WebsiteController::class,'timkiem'])->name('timkiem');
//timkiem bang ajax
Route::post('/timkiem-ajax',[WebsiteController::class, 'timkiem_ajax']);
//user
Route::get('/DangKi',[UserController::class,'TrangDangKi'])->name('TrangDangKi');
Route::post('/DangKiTK',[UserController::class, 'DangKiTK'])->name('DangKi');
Route::get('/Home/all_baiviet_user',[WebsiteController::class,'all_baiviet_user'])->name('all_baiviet_user');
Route::get('/Home/info_truyen_user/{id}/{slug}',[WebsiteController::class,'view_truyen_user'])->name('view_truyen_user');
//change_status
Route::get('/ChangeStatusProduct',[ProductController::class,'ChangeStatusProduct']) ->name('ChangeStatusProduct');
Route::get('/ChangeTinhtrangProduct',[ProductController::class,'ChangeTinhtrangProduct']) ->name('ChangeTinhtrangProduct');
Route::get('/ChangeHotProduct',[ProductController::class,'ChangeHotProduct']) ->name('ChangeHotProduct');
Route::get('/ChangeBaivietUser',[UserController::class,'ChangeBaivietUser']) ->name('ChangeBaivietUser');
Route::get('/ChangeStatusBanner',[AdminController::class,'ChangeStatusBanner']) ->name('ChangeStatusBanner');
