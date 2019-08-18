<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.list',compact('packages'))->with('panel_title','لیست پکیج ها');
    }

    public function create()
    {
        return view('admin.package.create');
    }

    public function store(Request $request)
    {
        //validate
        $new_package = Package::create([
            'package_title'=> $request->input('package_name'),
            'package_price'=>$request->input('package_price')
        ]);

        if ($new_package){
            return redirect()->route('admin.packages.list')->with('success','پکیج جدید با موفقیت ثبت شد.');
        }
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function sync_files(Request $request,$package_id)
    {
        $files = File::all();
        $package_item = Package::find($package_id);
        $package_files = $package_item->files()->get()->pluck('file_id')->toArray();
        return view('admin.package.files',compact('files','package_files'))->with('panel_title','انتخاب فایلهای پکیج');
    }

    public function update_sync_files(Request $request,$package_id)
    {
        $package_item = Package::find($package_id);
        $files = $request->input('files');
        if ($package_item && is_array($files)){
            //$package_item->files()->attach($files);
            $package_item->files()->sync($files);
            return redirect()->route('admin.packages.list')->with('success','عملیات با موفقیت انجام شد.');
        }
    }
}
