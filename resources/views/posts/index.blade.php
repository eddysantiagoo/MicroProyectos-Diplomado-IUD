@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
  <form action="{{ route('posts')}}" method="POST">
    @csrf

    @if (session('success'))
    <h6 class="alert alert-success">{{session ('success')}}</h6>
    @endif

    @error('title')
    <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    <!-- Componente de registro del post -->
    <div class="mb-3">
      <label for="title" class="form-label">Titulo del post 🐳</label>
      <input type="text" name="title" class="form-control">
    </div>

    <label for="categoria_id" class="form-label">Categoria del post</label>
    <select name="categoria_id" class="form-select">
      @foreach ($categorias as $categoria )
      <option value="{{$categoria->id}}">{{$categoria->name}}</option>
      @endforeach
    </select>


    <button type="submit" class="btn btn-primary">Registrar posts</button>
  </form>

  <div>
    @foreach ( $posts as $post )
    <div class="row py-1">
      <div class="col-md-9 d-flex align-items-center">
        <a href="{{ route('posts-edit', ['id' => $post->id]) }}">{{ $post-> title}}</a>

      </div>

      <div class="col-md-3 d-flex justify-content-and">
        <form action="{{ route('posts-destroy', [$post->id]) }}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </form>
      </div>
    </div>
    @endforeach
  </div>

</div>
@endsection