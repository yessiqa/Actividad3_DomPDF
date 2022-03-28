<!DOCTYPE HTML>
<html>
    <head>
        <title>Actividad 3 - Generador de PDF</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>
    <h1>{{ $title }}</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>

    <h6>{{ $date }}</h6>
</body>
</html>