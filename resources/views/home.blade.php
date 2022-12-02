<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon mini-blog</title>
</head>
<body>
    <h1>Nos articles</h1>
    {{-- <?// if (DB::connection()->getPdo()) {
       // echo "Connexion réussi à la base de données =>"
        //DatabaseName();
    //} ?> --}}
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article['title'] }}</li>
        @endforeach
    </ul>
    <div>
        @yield('content')
    </div>
</body>
</html>