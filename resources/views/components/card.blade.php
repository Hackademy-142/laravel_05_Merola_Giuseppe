




<div class="card" style="width: 18rem;">
    <img src="{{$img}}" height="80%" class="card-img-top" alt="...">
    <div class="card-body position-relative">
      <h5 class="card-text text-center">{{$title}}</h5>
      <div class="col-12 mt-3 mb-5">
        <p class="text-truncate">{{$sinossi}}</p>
      </div>
      <div class="col-12">
        {{-- <a class="btn btn-primary" href="">View all</a> --}}
        {{$slot}}
      </div>
      <div class="col-12 mt-5 position-absolute punteggio">
        <p>Punteggio: {{$punteggio}} ⭐️</p>
      </div>
    </div>
  </div>