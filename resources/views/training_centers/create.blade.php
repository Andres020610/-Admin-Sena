<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Centro de Formación</title>
</head>
<body>
    <h1>Crear Centro de Formación</h1>
    <form action="{{ route('training_centers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="name">Nombre del Centro:</label>
            <input type="text" id="name" name="name" required>


            <label for="location">Ubicación:</label>
            <input type="text" id="location" name="location" required>

        <br>
        <button type="submit">Crear Centro</button>
    </form>

</body>
</html>
