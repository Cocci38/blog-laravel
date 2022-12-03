@extends('home')

@section('content')

<table class="table table-bordered">

    <tr>
        <th>Titre:</th>
        <td>{{ $article->title }}</td>
    </tr>

    <tr>

        <th>Contenu</th>
        <td>{{ $article->content }}</td>

    </tr>

</table>

@endsection