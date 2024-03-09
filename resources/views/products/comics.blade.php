<div>
   @extends('layouts.main')
   @section('title', 'Comic')

   @section('main-content')
   <div class="separator">
      <div class="comic-container">
         <div class="thumb">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
         </div>
      </div>
   </div>
   @endsection
</div>