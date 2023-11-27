<?php

namespace App\Http\Controllers;

use App\Models\QuanLyChiTieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuanLyChiTieuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = QuanLyChiTieu::get();
        $totalMoney = QuanLyChiTieu::sum('Money');
        return view('list', compact(['data', 'totalMoney']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all()
            ,[
                'Title' => 'required',
                'Date' => 'required|date_format:d/m/Y',
                'Money' => 'required|numeric',
                'Note' => 'required',
            ],[
                '*.required'=> ':attribute Không được để trống',
                '*.date_format'=> ':attribute Phải là định dạng d-m-y',
                '*.numeric'=> ':attribute Phải là số'

            ],
             [
                'Title' => "Danh mục",
                'Date' => "Ngày",
                'Money' => "Tiền",
                'Note' => "Ghi chú",
         ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        QuanLyChiTieu::create($request->all());
        return redirect()->route('qlct.index')->with('messages', 'Them moi thanh cong');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuanLyChiTieu $quanLyChiTieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuanLyChiTieu $quanLyChiTieu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuanLyChiTieu $quanLyChiTieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        QuanLyChiTieu::find($id)->delete();
        return redirect()->route('qlct.index')->with('messages', 'Xoa thanh cong');
    }
}
