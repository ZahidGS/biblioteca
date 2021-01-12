@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a la biblioteca de MuchaWeb</h1>
        <h3 class="lead">Aquí podrás registrar y publicar tus libros favoritos.</h3>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('books.index') }}" role="button">Lista de libros</a>
      </div>
</div>
@endsection
