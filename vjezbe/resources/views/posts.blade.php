@extends('master')

@section('title', 'Online ucenje - Novosti')

@section('main-content')
    <div class="container">
        <div class="row">
            <h2>Novosti</h2>
        </div>
        <div class="row">
            @foreach($posts as $key=>$post)
            <div class="col-3">
                <div class="card">
                    <img src="{{ asset("img/images.jpeg") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$post[0]}}</h5>
                    <p class="card-text">{{$post[1]}}</p>
                    <a href="/post/{{ $key }}" class="btn btn-primary">Pročitajte više</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

