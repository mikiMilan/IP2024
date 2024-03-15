@extends('master')

@section('title', 'Online ucenje - '.$naziv)

@section('main-content')
    <h2>{{$naziv}}</h2>

    <ul>
        @foreach ($predmeti as $item)
            <li><a href="course/{{$item['id']}}">{{$item['naziv']}}</a></li>
        @endforeach
    </ul
@endsection

