<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $totalComics = Comic::all()->count();
        $newComics = Comic::where('created_at', '>', '2022-09-14 00:00:00')->count();
        $totalComicsValue = Comic::sum('price');

        $dashboardInfo = [
            'totalComics' => $totalComics,
            'newComics' => $newComics,
            'totalComicsValue' => $totalComicsValue,
        ];


        return view('admin.home', compact('dashboardInfo'));
    }
}
