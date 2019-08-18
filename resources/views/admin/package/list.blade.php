@extends('layouts.admin')

@section('content')
    @include('partials.notifications')
    @if($packages && count($packages) > 0)
        <table class="table">
            <thead>
                @include('admin.package.columns')
            </thead>
            @foreach($packages as $package)
                @include('admin.package.item',$package)
            @endforeach
        </table>
    @endif

@endsection