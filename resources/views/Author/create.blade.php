<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Auteur</title>
</head>
<body>


    <form action="{{ route('author.store') }}" method="POST">
        <label for="name">Nom de l'Auteur :</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
