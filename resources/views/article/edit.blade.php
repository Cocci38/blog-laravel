@extends('home')


@section('content')


    <h1>{{ isset($article->id) ? 'Modifier un article' : 'Ajouter un article' }}</h1>
    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ isset($article->id) ? url('article/'. $article->id) : url('article') }}" >
        @method(isset($article->id) ? 'PATCH' : 'POST')
        @csrf

        
        <div class="form-group mb-3">

            <label for="title">Titre:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Entrer un titre"  value="{{ isset($article->id) ? $article->title : '' }}">

        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu :</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Entrer un contenu">{{ isset($article->id) ? $article->content : '' }}</textarea>

        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="button"><a class="btn btn-info" href="{{ url('/') }}">Retour</a></button>

    </form>

@endsection