@extends('layouts.main')
@section('footer')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Local</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit">criar</button>
    </form>
</div>

@endsection
