<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    <link rel="stylesheet" href="/public/build/css/estilos.css">
    <a href="{{route('home')}}">
    <section>
        <h2>Crear producto</h2>
    </section>
    </a>
    <form action="{{route('add_proveedor')}}" method="post">
        <input type="text" name="nombre" placeholder="Nombre Proveedor"> 
        <input type="text" name="direccion" placeholder="Direccion Proveedor">
        <input type="text" name="telefono" placeholder="Telefono Proveedor">
        <input type="email" name="correo" placeholder="Correo Proveedor">
        <input type="text" name="contacto" placeholder="Contacto Proveedor">
        <input type="text" name="descripcion" placeholder="Descripcion Proveedor">
        <textarea name="descripcion" cols="30" rows="10">

        </textarea>
        <input type="submit" value="Crear Proveedor">
    </form>
    <h2>lista proveedores</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contacto</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor) 
                <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>{{ $proveedor->contacto }}</td>
                    <td>
                        <a href="{{ route('editar_provedor', $proveedor->id) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('delete_proveedor', $proveedor->id) }}">Eliminar</a>
                </tr>
                
            @endforeach
    
    


</body>
</html>