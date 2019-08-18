<tr>
    <td>{{$plan->plan_id}}</td>
    <td>{{$plan->plan_title}}</td>
    <td>{{$plan->plan_limit_download_count}}</td>
    <td>{{$plan->plan_price}}</td>
    <td>{{$plan->plan_days_count}}</td>
    <td>
        <a href="{{route('admin.plans.edit',[$plan->plan_id])}}">ویرایش</a>
        <a href="{{route('admin.plans.delete',[$plan->plan_id])}}">حذف</a>
    </td>
</tr>