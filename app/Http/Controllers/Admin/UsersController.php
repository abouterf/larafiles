<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'))->with(['panel_title' => 'لیست کاربران']);
    }

    public function create()
    {
        return view('admin.user.create')->with(['panel_title' => 'افزودن کاربر جدید']);
    }

    public function store(UserRequest $userRequest)
    {
//        $this->validate(request(), [
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required|min:6'
//        ],
//            [
//                'name.required'=>'وارد کردن نام کامل الزامی است.',
//                'email.required'=>'وارد کردن ایمیل الزامی است.',
//                'email.email'=>'فرمت ایمیل وارد شده صحیح نمیباشد.',
//                'password.required'=>'وارد کردن گذرواژه الزامیست.',
//                'password.min'=>'حداقل کاراکتر ورودی برای کلمه عبور 6 عدد میباشد.'
//            ]);
        $user_data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet')
        ];
        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User) {
            return redirect()->route('admin.users.list')->with('success', 'کاربر جدید با موفقیت ایجاد شد.');
        }
    }

    public function delete($id)
    {
        if ($id && ctype_digit($id)) {
            $user_item = User::find($id);
            if ($user_item && $user_item instanceof User) {
                $user_item->delete();
                return redirect()->route('admin.users.list')->with('delete', 'کاربر مورد نظر با موفقیت حذف گردید.');
            }
        }
    }

    public function edit($id)

    {
        if ($id && ctype_digit($id)) {
            $user_item = User::find($id);
            if ($user_item && $user_item instanceof User) {
                return view('admin.user.edit',compact('user_item'))->with(['panel_title'=>'ویرایش کاربر']);
            }
        }
    }

    public function update(UserRequest $request,$id)
    {
        $user_input = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet')
        ];

        if (!$request->has('password')){
            unset($user_input['password']);
        }

        $user_item = User::find($id);
        $user_item->update($user_input);
        return redirect()->back()->with('success','اطلاعات با موفقیت ویرایش شد.');

    }


}
