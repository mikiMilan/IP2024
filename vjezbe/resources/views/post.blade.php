@extends('master')

@section('title', 'Online ucenje - '.$post[0])

@section('main-content')
    <h2>{{$post[0]}}</h2>

    <p>{{ $post[1] }}</p>
@endsection

