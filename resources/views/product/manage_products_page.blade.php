<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Administrar Productos</title>
    @vite(['resources/css/product/manage_product.css'])
</head>

<body>
    <main>
        <div>
            <a type="button" href="{{ route('product_add_page') }}">Nuevo Producto</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>MARCA</th>
                        <th>CANTIDAD</th>
                        <th>IMAGEN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->stock }}</td>
                            <td class="image-cell">
                                <img class="imgCover" src="/image/{{ $product->cover_image }}">
                            </td>
                            <td>
                                <div>
                                    <a href="{{ route('edit_product_page', $product->id) }}">Editar</a>

                                    <form class="deleteForm"
                                        action="{{ route('destroy_product', ['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btnDelete" type="submit">Borrar</button>
                                    </form>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- ALERTA "SEGURO DESEA ELIMINAR EL REGISTRO" --}}

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            (function() {
                var forms = document.querySelectorAll('.deleteForm')
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            event.preventDefault()
                            event.stopPropagation()
                            Swal.fire({
                                title: '¿Estás seguro?',
                                text: "¡No podrás revertir esto!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Sí, borrarlo'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.submit();
                                    Swal.fire('¡Eliminado!', 'El producto ha sido eliminado.',
                                        'success')
                                }
                            })
                        }, false)
                    })
            })()
        </script>

    </main>
</body>

</html>
