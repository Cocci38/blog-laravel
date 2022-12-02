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

    <form action="{{ url('article') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Titre :</label>
            <input type="text" class="form-control" id="title" placeholder="Entrez un nom" name="nom">
        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu:</label>
            <input type="text" class="form-control" id="content" placeholder="Company" name="company">

        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection