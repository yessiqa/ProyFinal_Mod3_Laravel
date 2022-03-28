<!DOCTYPE HTML>
<html>

<head>
    <title>Proyecto - Generador de PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>{{ $title }}</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>CI</th>
            <th>Nacionalidad</th>
            <th>Telefono</th>
            <th>Fecha</th>

        </tr>
        @foreach($clientes as $clie)
        <tr>
            <td>{{ $clie->nombre }}</td>
            <td>{{ $clie->ci }}</td>
            <td>{{ $clie->nacionalidad }}</td>
            <td>{{ $clie->telefono }}</td>
            <td>{{ $clie->created_at }}</td>

        </tr>
        @endforeach
    </table>

    
</body>

</html>