
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="/public/build/css/estilos.css">
    <article>
        <a href="{{route('proveedor')}}">
            <section>
                <h2>create proveedor</h2>
            </section>
        </a>
        <a href="{{route('categoria')}}">
            <section>
                <h2>create category</h2>
            </section>
        </a>
    </article>
    
    <form action="{{route('add_producto')}}" method="POST">
        <input type="text" name="price" placeholder="Name product">
        <input type="text" name="quantity" placeholder="Price product">
        <input type="submit" value="Add product">
        <select name="" id="">
            <opcion value="" @disabled>select categorias</opcion>
            foreach($categorias as $categoria)
            <option value="{{ $categoria->id}}" distabled{{$categoria->nombre}}</option>
            @endforeach
        </select>
        <select name=""id="">
            <option value="" @disabled>Select Proveedores</option>
            foreach($proveedores as $proveedor)
            <option value="{{$proveedor->id}}" distabled{{$proveedor->nombre}}></option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="Nombre producto">
    </form>
    <h2>Products</h2>
    <table>
        <thead>
            <th>id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Create date</th>
            <th colspan="2">Actions</th>
        </thead>
        <tbody>
            <?php foreach($productos as $producto) :?>
                <tr>
                    <td>{{$producto->'id'}}</td>
                    <td>{{$producto->'nombre'}}</td>
                    <td>{{ $producto->'precio'}}</td>
                    <td>{{$producto->'stock'}}</td>
                    <td>{{$producto->created_at->format('Y-m-H-i-s')}}</td>
                    <td>
                        <a href="{{route('editar_producto', $producto->id)}}">Edit</a>
                        <a href="{{route('delete_producto', $producto->id)}}">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    
</body>
</html>