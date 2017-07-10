@extends('layout')

@section('content')

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Phaneven's Blog</h1>
        </div>
    </div>
    <h2> {{$articles -> title}}</h2>
    <div class="body">
        {{$articles -> body}}
    </div>
@stop