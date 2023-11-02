<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function listBook(){
        $listBook = BookTable::all();
        return view('list-book', compact('listBook'));
    }

    public function bookTable(Request $request){
        $input = $request->except('_token');
        BookTable::create($request->toArray());
        return redirect()->action([HomeController::class, 'listBook']);
    }
}
