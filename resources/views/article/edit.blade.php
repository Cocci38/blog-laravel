@extends('home')


@section('content')


    <h1>Modifier un article</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('article/'. $article->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="title">Titre:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Entrer un titre"  value="{{ $article->title }}">

        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu :</label>
            <input type="text" name="content" class="form-control" id="content" placeholder="Entrer un contenu" value="{{ $article->content }}">

        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection