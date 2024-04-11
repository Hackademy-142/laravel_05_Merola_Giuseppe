<x-layout>
    
    <div class="container mt-4 ">
        <div class="row">
            @foreach ($generi as $genere)    
            <div class="col-12 col-md-3 d-flex justify-content-center my-3">
                <a href="{{route('mangaID', ['id' => $genere['mal_id']])}}" class="btn btn-primary w-75 ">
                    {{$genere['name']}}
                </a>
            </div>
            @endforeach
        </div>
    </div>


</x-layout>