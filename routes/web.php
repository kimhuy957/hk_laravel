<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
///nhap l1
// Route::get('/', function () {
//     return view('from');
// });
// Route::get('/from', function () {
//     return view('welcome');
// });
// Route::get("/home",function(){
//     $user =new User();
    
//     dd($user);
//     return view('home');
// });
// Route::get('/unicode',function(){
//     return "phương thúc Get";
// });
// Route::post('/unicode',function(){
//     return "phương thúc Get1";
// });
//Client Routes
Route::prefix('categories')->group(function(){
    //danh sách chuyên mục 
    Route::get('/',[CategoriesController::class,'index'])->name('categorie.list');
    //lấy chi tiet 1 chuyên mục (Áp dụng showw from sửa chuyên mục)
    Route::get('/edit/{id}',[CategoriesController::class,'getCategory'])->name('categorie.edit');
    //xử lý update chuyên mục
    Route::post('/edit/{id}',[CategoriesController::class,'updatecCategory']);
    //Hiện thị from add dữ liệu 
    Route::get('/add',[CategoriesController::class,'addCategory'])->name('categorie.add'); 
    //sử lý thêm chuyên mục 
    Route::post('/add',[CategoriesController::class,'handleAddCategory']); 
    //xóa du liệu (phương thức delete)
    Route::delete('/delete/{id}',[CategoriesController::class,'deleteCategory']);
});
//admin route
Route::prefix('admin')->group(function (){
    Route::get('/', [DashboardController::class,'index']);
        Route::resource('producsts', ProductsController::class);
});
