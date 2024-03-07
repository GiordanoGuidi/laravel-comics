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
        <!--UPPER FOOTER-->
        <div class="upper-footer small-container">
            <!--COL-->
            @foreach ($upperFooterLinks as $upperFooterLink)
                <div class="col">
                    <!--SINGLE LINKS LIST CREATE DYNAMICALLY-->
                    <h4>{{ $upperFooterLink['title'] }}</h4>
                    <ul class="list-links">
                        @foreach ($upperFooterLink['links'] as $link)
                        <li>
                            <a href="{{$link['url']}}">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            <div class="bg-footer">
                <img src="{{Vite::asset('config/assets/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
        <!--BOTTOM-FOOTER-->
    <div class="bottom-footer">
        <div class="bottom-footer-info small-container">
            <!--SIGN BUTTON-->
            <a href="" class="fw-bold sign-button">SIGN UP NOW!</a>
            <div class="d-flex align-center">
                <span class="c-blue">FOLLOW US</span>
                <!--ICON LIST-->
                <ul class="icon-list">
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('config/assets/img/footer-facebook.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('config/assets/img/footer-periscope.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('config/assets/img/footer-pinterest.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('config/assets/img/footer-twitter.png')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('config/assets/img/footer-youtube.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
       

    </footer>
    
</body>
</html>