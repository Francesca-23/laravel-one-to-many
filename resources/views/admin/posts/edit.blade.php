@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">

            <form action="{{route('admin.posts.update', $post)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Titolo --}}
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control @error ('titolo') is-invalid @enderror" id="titolo" name="titolo" value="{{old('titolo') ?? $post->titolo}}">
                
                @error('titolo')             
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                {{-- Immagine --}}
                <label for="immagine" class="form-label">Immagine</label>
                <input type="file" class="form-control @error ('immagine') is-invalid @enderror" id="immagine" name="immagine" value="{{old('immagine') ?? $post->immagine}}">

                @error('immagine')             
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                {{-- Link --}}
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control @error ('link') is-invalid @enderror" id="link" name="link" value="{{old('link') ?? $post->link}}">

                @error('link')             
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                {{-- Descrizione --}}
                <label for="descrizione" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error ('descrizione') is-invalid @enderror" id="descrizione" name="descrizione" value="{{old('descrizione') ?? $post->descrizione}}">

                @error('descrizione')             
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                {{-- Tecnologie --}}
                <label for="tecnologie" class="form-label">Tecnologie</label>
                <input type="text" class="form-control @error ('tecnologie') is-invalid @enderror" id="tecnologie" name="tecnologie" value="{{old('tecnologie') ?? $post->tecnologie}}">

                @error('tecnologie')             
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <button type="submit" class=" d-block btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</div>

@endsection