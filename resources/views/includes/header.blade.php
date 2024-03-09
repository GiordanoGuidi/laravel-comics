<header>
    <nav class="upper-header">
        <div class="small-container flex-end gap-50">
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </nav>
    <nav class="small-container">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
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