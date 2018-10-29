@extends('layouts.default')

@section('content')

    <h1>Thank you for your submission!</h1>
    <p class="lead">
        {{$data = request() -> all();
        echo "Email: " . $data['email'] . '<br>';}}
    </p>

@endsection