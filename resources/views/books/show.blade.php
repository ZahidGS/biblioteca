@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 mx-auto">
        <div class="card">
            <h5 class="card-header text-center">DETALLE DE LIBRO</h5>
            <div class="card-body">
                    <div class="form-group row">
                        <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->titulo }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->descripcion }}</label>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="abstracto" class="col-sm-3 col-form-label">Abstracto</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="abstracto" rows="3">{{ $book->abstracto }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isbn" class="col-sm-3 col-form-label">ISBN</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->isbn }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha_publicacion" class="col-sm-3 col-form-label">Fecha Publicación</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->fecha_publicacion }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="autor" class="col-sm-3 col-form-label">Autor</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->autor }}</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editorial" class="col-sm-3 col-form-label">Editorial</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->editorial }}</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="usuario" class="col-sm-3 col-form-label">Usuario</label>
                        <div class="col-sm-9">
                            <label class="form-control">{{ $book->user->name }}</label>
                        </div>
                    </div>

                    <hr>
                    <a class="btn btn-primary btn-lg" href="{{ route('books.index') }}" role="button">Lista de libros</a>
            </div>
        </div>
    </div>
</div>
@endsection
