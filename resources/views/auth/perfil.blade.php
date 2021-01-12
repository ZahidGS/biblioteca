@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto col-6 m-3">
        <div class="row">
            <div class="col-4">
                    <img src="{{ asset('storage/' . Auth::user()->picture ) }}"
                    class="card-img-top rounded-circle img-fluid m-4" alt="Sin imagen">
            </div>
            <div class="col-8">
                <div class="card-body mt-4">
                    <h4 class="card-title">Usuario: {{ Auth::user()->name }}</h4>
                    <h5 class="card-text">Email: {{ Auth::user()->email }}</h5>
                    <h5 class="card-text">Total de libros: {{ $books->count() }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around align-items-center">
        <h1>Libros registrados por este usuario</h1>
        <a class="btn btn-primary" href="{{ route('books.index') }}" role="button">Lista general</a>
        <a class="btn btn-success" href="{{ route('editPerfil') }}" role="button">Actualiza tu perfil</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->titulo }}</td>
                <td>{{ $book->descripcion }}</td>
                <td class="row">
                    <a class="btn btn-success btn-sm mr-3" href="{{ route('books.show', $book) }}"
                        role="button">Detalle</a>
                    @if ($book->user_id == Auth::id())
                    <form action="{{ route('books.destroy', $book->id) }}" method="post" class="formulario-eliminar">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}


</div>
@endsection


@section('js')

@if (session('registrado') == 'ok')
    <script>
        Swal.fire(
            'Registrado!!',
            'El registro se ha hecho correctamente y está al final de la lista',
            'success'
        )
    </script>
@endif


@if (session('eliminar') == 'Ok')
    <script>
        Swal.fire(
            'Elminado!!',
            'El registro se ha eliminado correctamente',
            'success'
        )
    </script>
@endif

    <script>

        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estas seguro?',
            text: "Se eliminará definitivamente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.value) {
                this.submit();
            }
            })
        });

    </script>
@endsection
