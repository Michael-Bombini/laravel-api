@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 mr-4 text-center bg-white">
                <div class="p-3">
                    <h2 class="mb-4">Manage your posts</h2>
                    <div class="mb-2">
                        <i class="fa-solid fa-4x fa-newspaper"></i>
                    </div>
                    <div class="mb-1">
                        <a href="{{route('admin.posts.index')}}" class="btn btn-manage">Admin panel</a>
                    </div>
                </div>
            </div>
            <div class="col-5 ml-4 text-center bg-white">
                <div class="p-3">
                    <h2 class="mb-4">See Users details</h2>
                    <div class="mb-2">
                        <i class="fa-solid fa-4x fa-user-check"></i>
                    </div>
                    <div class="mb-1">
                        <a href="{{route('admin.users.index')}}" class="btn btn-manage">View Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
