<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <a href="{{route('home')}}">
    <section>
        <h2>Crear categoria</h2>
    </section>
    </a>
    <form action="{{route('edit_categoria')}}" method="post">
        <input type="text" name="nombre" placeholder="Nombre Categoria"> 
        <input type="text" name="descripcion" placeholder="Descripcion Categoria">
        <textarea name="descripcion" cols="30" rows="10">

        </textarea>
        <input type="submit" value="Cambiar categoria">
    </form>
    <h2>lista Categorias</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>descripcion</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria) 
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{ route('editar_categoria', $categoria->id) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('delete_categoria', $categoria->id) }}">Eliminar</a>
                </tr>
                
            @endforeach
    
    


</body>
</html>