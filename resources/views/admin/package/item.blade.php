<tr>
    <td>{{$package->package_title}}</td>
    <td>{{$package->package_price}}</td>
    <td>{{$package->files()->get()->count()}}</td>
    <td>
        <a href="{{route('admin.packages.edit',[$package->package_id])}}">ویرایش</a>
        <a href="{{route('admin.packages.delete',[$package->package_id])}}">حذف</a>
        <a href="{{route('admin.packages.sync_files',[$package->package_id])}}">فایلها</a>
    </td>
</tr>