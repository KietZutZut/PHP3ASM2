<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
{
    $tatCaTin = DB::table('news')->orderBy('created_at', 'desc')->get(['id', 'title']);
    $tinNoiBat = DB::table('news')->orderBy('views', 'desc')->first();
    $tinXemNhieu = DB::table('news')->orderBy('views', 'desc')->limit(5)->get(['id', 'title']);

    return view('home', compact('tatCaTin', 'tinNoiBat', 'tinXemNhieu'));
}


    public function xemNhieu(){
        $tinXemNhieu = DB::table('news')
            ->orderBy('views', 'desc')
            ->limit(10)
            ->get(['title']);
        return view('xemnhieu', compact('tinXemNhieu'));
    }

    public function tinMoi(){
        $tinMoi = DB::table('news')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get(['title']);
        return view('tinmoi', compact('tinMoi'));
    }

    public function tinTrongLoai($id){
        $tinTrongLoai = DB::table('news')->where('category_id', $id)->get(['id', 'title']);
        $tenLoai = DB::table('categories')->where('id', $id)->value('name');
        return view('tintrongloai', compact('tinTrongLoai', 'tenLoai'));
    }

    public function chiTietTin($id){
        $tin = DB::table('news')
            ->where('id', $id)
            ->first();
        return view('chitiettin', compact('tin'));
    }
}
