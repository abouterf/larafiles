@extends('layouts.admin')
@section('content')
    @include('admin.user.notifications')
    @if($users && count($users) > 0)
        <table class="table">
            <thead>
                @include('admin.user.columns')
            </thead>
            @foreach($users as $user)
                @include('admin.user.item',$user)
            @endforeach
        </table>
    @endif
@endsection