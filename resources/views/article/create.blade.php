@extends('home')


@section('content')

    <h1>Ajouter un article</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    {{-- <form action="{{ url('article') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Entrez un nom">
        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu:</label>
            <input type="text" name="content" class="form-control" id="content" placeholder="Company">

        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>
        <button type="button"><a class="btn btn-info" href="{{ url('/') }}">Retour</a></button>

    </form> --}}
    <form action="{{ url('article') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Titre :</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Entrez un titre">
        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu:</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Ecrire un contenu d'article"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>
        <button type="button"><a class="btn btn-info" href="{{ url('/') }}">Retour</a></button>

    </form>

@endsection