<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plan.list',compact('plans'))->with('panel_title','طرح های اشتراکی');
    }

    public function create()
    {
        return view('admin.plan.create')->with('panel_title', 'ایجاد طرح جدید');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'plan_name' => 'required',
            'plan_limit_download_count' => 'required',
            'plan_price' => 'required',
            'plan_days_count'=>'required'
        ]);
        $new_plan = Plan::create([
            'plan_title'=>$request->input('plan_name'),
            'plan_limit_download_count'=>$request->input('plan_limit_download_count'),
            'plan_price'=>$request->input('plan_price'),
            'plan_days_count'=>$request->input('plan_days_count')
        ]);

        if ($new_plan){
            return redirect()->route('admin.plans.list')->with('success','طرح اشتراکی با موفقیت ایجاد گردید.');
        }
    }

    public function edit(Request $request,$plan_id)//web.php $plan_id passed
    {
        $plan_id = intval($plan_id);
        $plan_item = Plan::find($plan_id);
        return view('admin.plan.edit',compact('plan_item'));
    }

    public function update(Request $request ,$plan_id)
    {
        $plan_id =intval($plan_id);
        $plan_item = Plan::find($plan_id);
        //validate plan edit
        $updated_plan = $plan_item->update(
            [
                'plan_title'=>$request->input('plan_name'),
                'plan_limit_download_count'=>$request->input('plan_limit_download_count'),
                'plan_price'=>$request->input('plan_price'),
                'plan_days_count'=>$request->input('plan_days_count')
            ]
        );
        if ($updated_plan){
            return redirect()->route('admin.plans.list')->with('success','به روز رسانی با موفقیت انجام شد.');
        }
    }

    public function delete($plan_id)
    {
        $plan_item = Plan::find($plan_id);
        if ($plan_item){
            Plan::destroy([$plan_id]);
            return redirect()->route('admin.plans.list')->with('success','طرح مورد نظر با موفقیت حذف شد.');
        }
    }
}
