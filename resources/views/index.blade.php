@extends('layouts.app')
@section('content')
    <div class="container text-center">

        <div class="sub-title">WELCOME to...</div>
        <h1 class="main-title">BOOLPRESS</h1>
        <div class="sub-title">the most powerful cms</div>
        
    </div>
    
<div class="container mt-5 py-4 text-center">

    <div class="bp-logo m-auto mb-4 pb-4 ">
        B
    </div>

    <a class="btn btn-primary btn-bool mt-5" href="{{ route('login') }}">
        GET STARTED
    </a>
    <br>
    <a class="btn btn-primary btn-bool mt-5" href="{{ route('public') }}">
        PUBLIC AREA
    </a>

</div>
    
@endsection
