<x-layout>


    <div class="container mt-4 ">
        <div class="row">
            @foreach ($mangas as $manga)    
            <div class="col-12 col-md-4 d-flex justify-content-center my-3">
               <x-card
               img="{{$manga['img']}}"
               title="{{$manga['title']}}"
               sinossi="{{$manga['sinossi']}}"
               punteggio="{{$manga['punteggio']}}"
               />
            </div>
            @endforeach
        </div>
    </div>



</x-layout>