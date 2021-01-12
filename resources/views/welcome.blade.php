@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Biblioteca de MuchaWeb</h1>
        <h3 class="lead">Una app para conocer de libros.</h3>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">LogIn</a>
      </div>
</div>
@endsection
