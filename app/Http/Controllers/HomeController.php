<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $totalComics = Comic::all()->count();
        $firstUploadDate = DB::table('comics')->select('created_at')->orderBy('created_at')->first();
        $firstUploadDate = $firstUploadDate->created_at;
        $newComics = Comic::where('created_at', '>', $firstUploadDate)->count();
        $totalComicsValue = Comic::sum('price');

        $dashboardInfo = [
            'totalComics' => $totalComics,
            'newComics' => $newComics,
            'totalComicsValue' => $totalComicsValue,
        ];


        return view('admin.home', compact('dashboardInfo'));
    }
}
