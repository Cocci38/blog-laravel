<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon mini-blog</title>
</head>
<body>

    <menu>
        <li><button type="button"><a class="btn btn-info" href="{{ url('/') }}">Liste des articles</a></button></li>
        <li><button type="button"><a class="btn btn-success" href="{{ url('article/edit') }}">Ajouter</a></button></li>
    </menu>
    {{-- <?// if (DB::connection()->getPdo()) {
       // echo "Connexion réussi à la base de données =>"
        //DatabaseName();
    //} ?> --}}
    {{-- <ul>
        @foreach ($articles as $article)
            <li>{{ $article['title'] }}</li>
        @endforeach
    </ul> --}}
    <div>
        @yield('content')
    </div>
</body>
</html>