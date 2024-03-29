@extends('layouts.admin')

@section('content')

    @if($files && count($files) > 0)
        <table class="table">
            <thead>
                @include('admin.file.columns')
            </thead>
            @foreach($files as $file)
                @include('admin.file.item',$file)
            @endforeach
        </table>
    @endif

@endsection