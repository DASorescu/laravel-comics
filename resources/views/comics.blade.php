<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc-comics</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"type="text/css">
</head>
<body>
    @include('includes.header')
    @include('includes.jumbotron')
    <main>
        <section class="container">
            <div class="row">
                <ul class="comic-cards-section">
                    @foreach($comics as $comic)
                    <li>
                        <div class="card">
                            <figure>
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </figure>
                            <p>{{$comic['title']}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="button-section">
                <button>LOAD MORE</button>
            </div>
        </section>
        <section class="banner ">
            <div class="container">
                <ul>
                    <li><img src="../images/buy-comics-digital-comics.png" alt="buy">
                        <p>DIGITAL COMICS</p>
                    </li>
                    <li><img src="../images/buy-comics-merchandise.png" alt="buy">
                        <p>DC MERCHANDISE</p>
                    </li>
                    <li><img src="../images/buy-comics-subscriptions.png" alt="buy">
                        <p>SUBSCRIPTION</p>
                    </li>
                    <li><img src="../images/buy-comics-shop-locator.png" alt="buy">
                        <p>COMIC SHOP LOCATOR</p>
                    </li>
                    <li><img src="../images/buy-dc-power-visa.svg" alt="buy">
                        <p>DC POWER VISA </p>
                    </li>
                </ul>

            </div>
        </section>
    </main>
    @include('includes.footer')
</body>
    
</html>
