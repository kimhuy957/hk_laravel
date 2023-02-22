<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct(){

    }
    //hẹn thiiwj danhsach chuyên mục (Phương thức get)
    public function index(){
        return view('clients/categories/list');
    }
    //lấy ra 1 chuyên mục theo id
    public function getCategory($id){
        return view('clients/categories/edit');
    }
    //Sửa 1 chuyên mục (Phương thức POST)
    public function updatecCategory($id){
         return "submit sửa chuyên mục: ".$id;
    }
    //Showw form thêm dữ liệu (phương thức Get)
    public function addCategory(){
        return view('clients/categories/add');
    }
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        // "submit thêm chuyên mục:";
    }
    //Xóa dư liệu (delete)
    public function deleteCategory($id){
        return "submit xoa chuyên mục:".$id;

    }
}
