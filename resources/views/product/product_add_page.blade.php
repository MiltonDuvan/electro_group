<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <form action="{{route('product_confirm')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="cover_image">Imagen de Portada:</label>
                    <input type="file" name="cover_image" id="cover_image" required>
                </div>
                <div>
                    <label for="image1">Imagen Adicional:</label>
                    <input type="file" name="image1" id="image1">
                </div>
                <div>
                    <label for="image2">Imagen Adicional:</label>
                    <input type="file" name="image2" id="image2">
                </div>
                <div>
                    <label for="image3">Imagen Adicional:</label>
                    <input type="file" name="image3" id="image3">
                </div>
                <div>
                    <label class="form-label" for="nameInput">Nombre del producto</label>
                    <input class="form-control" id="nameInput" name="name" type="text" required>
                </div>
                <div>
                    <label class="form-label" for="descriptionInput">Descripcion</label>
                    <input class="form-control" id="descriptionInput" name="description" type="text" required>
                </div>
                <div>
                    <label class="form-label" for="priceInput">Precio</label>
                    <input class="form-control" id="priceInput" name="price" type="number" step="0.01" min="0" required>
                </div>
                <div>
                    <label class="form-label" for="brandInput">Marca</label>
                    <input class="form-control" id="brandInput" name="brand" type="text" required>
                </div>
                <div>
                    <label class="form-label" for="stockInput">Cantidad</label>
                    <input class="form-control" id="stockInput" name="stock" type="number" step="1" min="1" required>
                </div>
                <div>
                    <button>Agregar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
