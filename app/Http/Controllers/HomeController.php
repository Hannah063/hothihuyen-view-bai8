<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = 'Học lập trình tại Unicode';
        $content = 'Học lập trình Laravel 8.x tại Unicode';
        return view('home')->with(['title'=>$title, 'content'=>$content]);
        //return View::make('home')->with(['title'=>$title, 'content'=>$content]);
        // $contentView = view('home')->render();
        // // $contentView = $contentView->render();
        // dd($contentView);
        // //return $contentView;
    }
    public function getNews()
    {
        return 'Danh sách tin tức';
    }
    public function getCategories($id)
    {
        return 'Chuyên mục' . $id;
    }
    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
