@extends('layouts.main')
@section('footer')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type='text' class="form-control" placeholder="Buscar... "    >
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="card-container" class="row">
        @foreach ($events as $event)
            <div class="card" style="width: 18rem;">
                <img src="/assets/img/showpvh.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">{{$event->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">LOCAL: {{$event->city}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Saiba mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
