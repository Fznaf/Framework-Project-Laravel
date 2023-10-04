<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(){
        $cards = DB::table('cards')-> get();
        return view('welcome', ['cards' => $cards]);
    }
}
