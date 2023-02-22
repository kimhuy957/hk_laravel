<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    class HomeControllers extends Controller{
        //Action index()
        public function index(){
            return 'Home';
        }
        //Action getNews()
        public function getNews(){
            return "Danh sách tin tức";
        }
        
    }
?>