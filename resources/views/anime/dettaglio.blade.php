<x-layout>

    <div class="container mt-4 ">
        <div class="row">
            @foreach ($animes as $anime)    
            <div class="col-12">
               <h1>{{$anime['title']}}</h1>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{$anime['img']}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <p>{{$anime['sinossi']}}</p>
                <p>{{$anime['punteggio']}}</p>
            </div>
            @endforeach
        </div>
    </div>



</x-layout>