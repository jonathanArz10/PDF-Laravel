<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Listado de usuarios</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <th>{{ $user->id }}</th>
            <th>{{ $user->name }}</th>
            <th>{{ $user->email }}</th>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
