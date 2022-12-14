@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center bg-warning mb-5">DATA WILL ONLY BE VISUALIZED IF THE USER ALSO ADDED HIS DETAILS</h1>
        @foreach ($details as $detail)
            <div class="d-flex">
                <div class="p-2">
                    ID :
                    {{ $detail['id'] }}

                </div>
                <div class="p-2">
                    INDIRIZZO :
                    {{ $detail['address'] }}
                </div>
                <div class="p-2">
                    CITTA' :
                    {{ $detail['city'] }}
                </div>
                <div>




                    @foreach ($users as $user)
                        @if ($user['id'] === $detail['id'])
                            {{ $user['name'] }}
                            {{ $user['email'] }}
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
@endsection
