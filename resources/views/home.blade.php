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
        <div class="jumbotron">
        </div>
        <!--CARDS-CONTAINER-->
        <section id="comics-list" class="small-container card-container">
            <button class="series">CURRENT SERIES</button>
            <button class="load">LOAD MORE</button>
            <ul class="cards-list">
                @foreach ( as )
                <!--SINGLE-CARD-->
                <li class="comic-book-card" v-for="book in comicBook">
                    <a :href="book.series">
                        <img :src=book.thumb :alt="book.series">
                    </a>
                    <h3>{{ book.series.toUpperCase() }}</h3>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
    
</body>
</html>