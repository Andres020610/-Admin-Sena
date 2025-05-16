<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Computador</title>
</head>
<body>
    <h1>Crear Computador</h1>
    <form action="{{ route('computers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <label for="number">Número:</label>
            <input type="text" id="number" name="number" required>

            <label for="brand">Marca:</label>
            <input type="text" id="brand" name="brand">

        <br>
        <button type="submit">Guardar Computador</button>
    </form>
   

</body>
</html>
