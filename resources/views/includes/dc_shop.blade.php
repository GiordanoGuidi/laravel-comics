<!--DC-FOOTER-->
<section id="shop" class="dc-info">
    <div class="info-links small-container">
        @foreach ( $footerBuyLinks as $footerBuyLink)
        <div class="links-card">
            <img src= "{{Vite::asset('resources/img/' . $footerBuyLink['src']) }}" alt="">
            <a href="#">{{ $footerBuyLink['text'] }}</a>
        </div>
        @endforeach
    </div>
</section>