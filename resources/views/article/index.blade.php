@extends('home')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Article</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('article/create') }}">Ajouter</a>
        </div>

    </div>

 

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

 

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Titre</th>
            <th>Contenu</th>

        </tr>

        @foreach ($articles as $index => $article):

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td>

                    <form action="{{ url('article/'. $article->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('article/'. $article->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('article/'. $article->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection