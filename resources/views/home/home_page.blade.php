<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Grupo Mansion</title>
    @vite(['resources/css/home_page.css', 'resources/js/home_page.js'])
</head>

<body>
    <header>
        <x-navbar></x-navbar>

    </header>
    <main id="main-content">
        <div class="cont-cards">
            <div class="card">
                <div class="card-content-sup">
                    <p>Descuento</p>
                </div>
                <div class="card-content">
                    <div class="card-content-img">
                        <img class="card-img"
                            src="https://elcomercio.pe/resizer/gj5JbwxkmqRAa4HSpfOHEIUBf7k=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/6FUBT6XQXNHHNFOMCHIT7I34NA.jpg"
                            alt="">
                    </div>
                    <div class="card-content-sub">
                        <title>Nevera</title>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore odit eos necessitatibus est
                            architecto? Aperiam iusto itaque culpa eveniet temporibus accusamus voluptas eum, vitae
                            laudantium quia eaque inventore numquam quidem!
                        </p>
                        <div class="card-content-sub-sub">
                            <p>precio viejo | precio nuevo</p>

                        </div>
                    </div>
                </div>
                <div class="footer">
        <a class="clickMe" href="{{route('product_detail_page')}}">COmprar</a>
                </div>
            </div>

        </div>
    </main>
    <script src="{{ mix('resources/js/home_page.js') }}"></script>

</body>

</html>
