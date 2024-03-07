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