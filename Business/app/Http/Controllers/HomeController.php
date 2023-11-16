<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){
        $weather = $this->getWeather();
        return view('welcome', compact('weather'));
    }

    public function listBook(){
        $listBook = BookTable::paginate(5);
        $listOption = ['complete', 'waiting', 'cancel'];
        return view('list-book', compact('listBook', 'listOption'));
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

    public function updateStatus(Request $request, $status){
        $booktable = BookTable::find($request['id']);
        $booktable->status = $status;
        $booktable->save();
        return redirect('/list-book')->with('message', 'Cập nhật thành công');
    }


    public function getWeather($city= "Hanoi"){
        $urlApi = "http://api.openweathermap.org/data/2.5/find?q=".$city."&appid=f352463719d3def80f3056cc332ce129";
        $response = Http::get($urlApi);
        return json_decode($response);
    }
}
