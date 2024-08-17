<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><div class="container">
    <h1>Liste des Auteurs</h1>
    @foreach($authors as $author)
        <div class="card my-3">
            <div class="card-header">
                {{ $author->name_author }}
            </div>
            <div class="card-body">
                <h5>Livres :</h5>
                <ul>
                    @foreach($author->books as $book)
                        <li>{{ $book->nom }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
