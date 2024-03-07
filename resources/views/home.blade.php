<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Importazione Vite e Sass --}}
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    {{--Header--}}
    @include('includes.header')
    {{--Main--}}
    <main>
    {{--Jumbotron--}}
       @include('includes.jumbotron')
        <!--CARDS-CONTAINER-->
        <section id="comics-list" class="small-container card-container">
            <button class="series">CURRENT SERIES</button>
            <button class="load">LOAD MORE</button>
            <ul class="cards-list">
                @foreach ( $comics as $comic )
                <!--SINGLE-CARD-->
                <li class="comic-book-card" v-for="book in comicBook">
                    <a href="#">
                        <img src="{{$comic['thumb']}}" alt="#">
                    </a>
                    <h3>{{ $comic['series'] }}</h3>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
    <footer>
        <!--DC-FOOTER-->
        <section id="shop" class="dc-info">
            <div class="info-links small-container">
                @foreach ( $footerBuyLinks as $footerBuyLink)
                <div class="links-card">
                    <img src= "{{$footerBuyLink['src'] }}" alt="{{$footerBuyLink['text']}}">
                    <a href="#">{{ $footerBuyLink['text'] }}</a>
                </div>
                @endforeach
            </div>
        </section>
       

    </footer>
    
</body>
</html>