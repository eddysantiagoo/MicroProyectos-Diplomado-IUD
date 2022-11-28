@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <div class="row mx-auto">
        <form action="{{ route('categorias.update', ['categoria' => $categoria->id])}}" method="POST">
            @method('PATCH')
            @csrf

            @if (session('success'))
            <h6 class="alert alert-success">{{session ('success')}}</h6>
            @endif

            @error('name')
            <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <!-- Componente de registro del categorias -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la categoria</label>
                <input type="text" name="name" class="form-control" value="{{$categoria->name}}">
            </div>

            <!-- Componente para registrar color -->

            <div class="mb-3">
                <label for="color" class="form-label">Color de la categoria</label>
                <input type="color" name="color" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar categoria</button>
        </form>

    </div>
    @if ($categoria->posts->count()>0)
    @foreach ($categoria->posts as $post)
    <div class="row py-1">
        <div class="col-md-9 d-flex align-items-center">
            <a href="{{ route('posts-edit', ['id' => $post->id]) }}">{{ $post-> title}}</a>

        </div>

        <div class="col-md-3 d-flex justify-content-and">
            <form method="POST" action="{{ route('posts-destroy', [$post->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </div >
    @endforeach
    @else
    No hay posts para esta categoria

    @endif

</div>
</div>
@endsection