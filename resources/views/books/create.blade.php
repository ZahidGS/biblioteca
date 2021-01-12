@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 mx-auto">
        <div class="card">
            <h5 class="card-header">Nuevo Libro</h5>
            <div class="card-body">
                <form action="{{route('books.store')}}" method="post" novalidate>
                    @csrf
                    <div class="form-group row">
                        <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('titulo') is invalid @enderror"
                                value="{{old('titulo')}}" id="titulo" name="titulo" required>
                        </div>

                        @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('descripcion') is invalid @enderror"
                                value="{{old('descripcion')}}" id="descripcion" name="descripcion" required>
                        </div>

                        @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row ">
                        <label for="abstracto" class="col-sm-3 col-form-label">Abstracto</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('abstracto') is invalid @enderror"
                                id="abstracto" rows="3" name="abstracto" required>{{old('abstracto')}}</textarea>
                        </div>

                        @error('abstracto')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="isbn" class="col-sm-3 col-form-label">ISBN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('isbn') is invalid @enderror"
                                value="{{old('isbn')}}" id="isbn" name="isbn" placeholder="clave de 13 numeros" required>
                        </div>

                        @error('isbn')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="fecha_publicacion" class="col-sm-3 col-form-label">Fecha Publicación</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('fecha_publicacion') is invalid @enderror"
                                value="{{old('fecha_publicacion')}}" id="fecha_publicacion" name="fecha_publicacion" required>
                        </div>

                        @error('fecha_publicacion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="autor" class="col-sm-3 col-form-label">Autor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('autor') is invalid @enderror"
                                value="{{old('autor')}}" id="autor" name="autor" required>
                        </div>

                        @error('autor')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="editorial" class="col-sm-3 col-form-label">Editorial</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('editorial') is invalid @enderror"
                                value="{{old('editorial')}}" id="editorial" name="editorial" required>
                        </div>

                        @error('editorial')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-outline-danger" href="{{ route('books.index') }}" role="button">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
