<?php

use App\Baiviet;
use App\Danhmuc;
use Carbon\Carbon;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\BaivietController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    $danhmuc = Danhmuc::all();
    $baiviet = Baiviet::all();
    $user = Auth::user();
    $date = Carbon::now();
    $date->subDays(2);
    // dd($date);
    $show_date = Baiviet::whereBetween('updated_at', [$date, Carbon::now()])->orderby('id', 'DESC')->take(10)->get();
    // dd($show_date);
    $view_hight = App\Baiviet::orderBy('luot_view', 'desc')->first();
    // $post_six = Baiviet::where('danh_muc_id', $id)->get();
    // dd($post_cate);


    return view('frontend.index', [
        'danhmuc' => $danhmuc, 'baiviet' => $baiviet,
        'show_date' => $show_date, 'view_hight' => $view_hight, 'user' => $user
    ]);
});
Route::get('chitiet', function () {
    return view('frontend.chitiet');
});
Route::get('lienhe', function () {
    return view('frontend.lienhe');
});
Route::get('tintuc', function () {
    $date = Carbon::now();
    $date->subDays(2);
    $baiviet = Baiviet::all();
    $show_date = Baiviet::whereBetween('updated_at', [$date, Carbon::now()])->orderby('id', 'DESC')->take(10)->get();
    return view('frontend.tintuc', ['baiviet' => $baiviet, 'show_date' => $show_date]);
});

//login



Route::view('user-login', 'login.login')->name('user-login');
Route::post('user-login', [LoginController::class, 'postLogin']);
Route::any('logout', function () {
    Auth::logout();
    return redirect(url('/'));
})->name('logout');

// Danh mục
Route::group(['middleware' => ['check-admin-role']], function () {


    Route::get('admin/home', [HomeController::class, 'index']);
    Route::get('admin/dulieu', [HomeController::class, 'dulieu']);
    //
    Route::get('admin/danh-muc', [DanhmucController::class, 'index'])->name('danhmuc.index');
    Route::get('admin/danh-muc/add', [DanhmucController::class, 'add'])->name('danhmuc.add-danhmuc');
    Route::post('admin/danh-muc/add', [DanhmucController::class, 'SaveAdd']);

    Route::get('admin/danh-muc/edit/{id}', [DanhmucController::class, 'edit'])->name('danhmuc.edit');
    Route::post('admin/danh-muc/edit/{id}', [DanhmucController::class, 'SaveEdit'])->name('danhmuc.save');

    Route::get('admin/danh-muc/remove/{id}', [DanhmucController::class, 'remove'])->name('danhmuc.remove');

    Route::get('admin/bai-viet', [BaivietController::class, 'index'])->name('baiviet.index');
    Route::get('admin/bai-viet/add', [BaivietController::class, 'add'])->name('baiviet.add-baiviet');
    Route::post('admin/bai-viet/add', [BaivietController::class, 'SaveAdd']);

    Route::get('admin/bai-viet/edit/{id}', [BaivietController::class, 'edit'])->name('baiviet.edit');
    Route::post('admin/bai-viet/edit/{id}', [BaivietController::class, 'SaveEdit'])->name('baiviet.save');

    Route::get('admin/bai-viet/remove/{id}', [BaivietController::class, 'remove'])->name('baiviet.remove');

    // Route::get('bai-viet/chi-tiet/{id}', [BaivietController::class, 'detail'])
    //     ->name('baiviet.detail');

    // users

    Route::get('admin/user', [UserController::class, 'index'])->name('user.index');
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('admin/user/edit/{id}', [UserController::class, 'SaveEdit']);

    Route::get('admin/user/remove/{id}', [UserController::class, 'remove'])->name('user.remove');
});

Route::get('bai-viet/chi-tiet/{id}', [BaivietController::class, 'detail'])
    ->name('blog.tangView');
//Bài viết
//


Route::post('tang-view/{id}', [BaivietController::class, 'tangView'])->name('views');

Route::get('search/', [SearchController::class, 'index'])->name('frontend.search');

Auth::routes();

Route::group([
    'prefix' => 'laravel-filemanager',
    // 'middleware' => ['web', 'auth']
], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
