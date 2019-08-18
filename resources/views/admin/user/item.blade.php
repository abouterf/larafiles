<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->wallet}}</td>
    <td>@include('admin.user.operations',$user)</td>
</tr>