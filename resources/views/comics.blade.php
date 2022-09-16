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
                                <img :src="{{$comic['thumb']}}" :alt="">
                            </figure>
                            <p>{{$comic['title']}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
    @include('includes.footer')
</body>
    
</html>
