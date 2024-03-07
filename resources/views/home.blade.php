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
    <header>
        <nav class="small-container">
            <img src="{{Vite::asset('config/assets/img/dc-logo.png')}}" alt="">
            <!--LINKS-LIST-->
            <ul class="links-list">
                @forelse($links as $link)
                <li>{{$link['text']}}</li>
            @empty
                <h3>Non ci sono giocatori</h3>
            @endforelse
            </ul>
        </nav>
    </header>
    <main>
        <div class="jumbotron">
        </div>
    </main>
    
</body>
</html>