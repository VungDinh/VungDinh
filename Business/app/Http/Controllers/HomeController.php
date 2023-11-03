<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function listBook(){
        $listBook = BookTable::paginate(5);
        return view('list-book', compact('listBook'));
    }

    public function bookTable(Request $request){
        try{
            $input = $request->except('_token');
            BookTable::create($input);
            return redirect('/list-book')->with('message', 'Tạo thành công');
        }catch(\Exception $e){
            dd($e);
        }
    }

    public function deleteBook($id){
        BookTable::find($id)->delete();
        return redirect('/list-book')->with('message', 'Xóa thành công');
    }
}
