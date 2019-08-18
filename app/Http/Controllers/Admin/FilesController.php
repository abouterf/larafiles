<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.file.list', compact('files'))->with('panel_title', 'لیست فایلها');
    }

    public function create()
    {
        return view('admin.file.create')->with('panel_title', 'ایجاد فایل جدید');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file_name' => 'required',
            'file_item' => 'required'
        ],[
            'file_name.required'=>'وارد کردن نام فایل الزامیست.',
            'file_item.required'=>'انتخاب یک فایل الزامیست.',
        ]);


        $new_file_data = [
            'file_title' => $request->input('file_name'),
            'file_description'=> $request->input('file_description'),
            'file_type'=>$request->file('file_item')->getMimeType(),
            'file_size'=>$request->file('file_item')->getClientSize(),
        ];
        $new_file_name = str_random(40).'.'.$request->file('file_item')->getClientOriginalExtension();
        $result = $request->file('file_item')->move(public_path('images'),$new_file_name);
        if ($result instanceof \Symfony\Component\HttpFoundation\File\File){
            $new_file_data['file_name'] = $new_file_name;
            File::create($new_file_data);
        }

    }

    public function edit()
    {

    }
}
