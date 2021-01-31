@extends('layout.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        My name is {{ $name }}
        <br/>
        and my class is {{ $myClass }}
    </div>
@endsection