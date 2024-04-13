<x-layout>


    <div class="container mt-4 ">
        <div class="row">
            @foreach ($animes as $anime)    
            <div class="col-12 col-md-4 d-flex justify-content-center my-3">
               <x-card
               img="{{$anime['img']}}"
               title="{{$anime['title']}}"
               sinossi="{{$anime['sinossi']}}"
               punteggio="{{$anime['punteggio']}}">
               <a class="btn btn-primary" href="{{route('animeDettaglio', ['id' =>$anime['id']])}}">View all</a>
               </x-card>
            </div>
            @endforeach
        </div>
    </div>


</x-layout>