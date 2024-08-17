<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Modifier l'Auteur</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('author.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name_author">Nom de l'Auteur:</label>
            <input type="text" id="name_author" name="name_author" value="{{ old('name_author', $author->name_author) }}" required>

            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
