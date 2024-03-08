
@extends('layouts.main')


@section('main-content')
{{--Main--}}
{{--Jumbotron--}}
   @include('includes.jumbotron')
    <!--CARDS-CONTAINER-->
    <section id="comics-list" class="small-container card-container">
        <button class="series">CURRENT SERIES</button>
        <button class="load">LOAD MORE</button>
        <ul class="cards-list">
            @foreach ( $comics as $comic )
            <!--SINGLE-CARD-->
            <li class="comic-book-card">
                <a href="#">
                    <img src="{{$comic['thumb']}}" alt="#">
                </a>
                <h3>{{ $comic['series'] }}</h3>
            </li>
            @endforeach
        </ul>
    </section>
@endsection
</html>