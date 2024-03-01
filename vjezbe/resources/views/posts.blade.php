@extends('master')

@section('title', 'Online ucenje - Novosti')

@section('main-content')
    <h2>Novosti</h2>

    @foreach($posts as $post)
        @if($post[0]=="Naziv 1")
            <p>Preskocena vijest</p>
        @else
            <h3>{{$post[0]}}</h3>
            <p>{{$post[1]}}</p>
        @endif
    @endforeach
@endsection

