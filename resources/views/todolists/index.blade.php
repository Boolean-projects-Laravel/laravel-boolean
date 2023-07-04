@extends('layouts.base')

@section('contents')
    <div class="offset-2 container-sm pt-4">

        <button type="button" class="btn btn-outline-primary mb-3"><a class="text-decoration-none text-dark" style="font-weight:700" href="{{ '/todolists/create' }}">Crea un nuovo promemoria</a></button>

        
        @foreach ($arrTodos as $key => $todo)
            <div class="card container-fluid flex-row align-items-center">
                <div class="col-10">
                    <h2>{{ $todo->title }}</h2>
                    <span @style(['color: red' => $todo->expire_date < date('Y-m-d')])>{{ $todo->expire_date }}</span>
                </div>

                <div class="btn-group col-2" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$key}}">Espandi</button>
                    <button type="button" class="btn btn-outline-primary">Modifica</button>
                </div>
            </div>
            
            <div class="collapse" id="collapseExample{{$key}}">
                <h2></h2>
                <div>
                    <span>{{ $todo->expire_date }}</span>
                    <button type="button" class="btn btn-outline-primary">Modifica</button>
                    <button type="button" class="btn btn-outline-primary">Comprimi</button>
                </div>
                <div>
                    <span>{{ $todo->details }}</span>
                </div>
                <img src="" alt="">
            </div>
        @endforeach
        
    </div>
@endsection

{{-- @style(['color: red' => $todo['expire_date'] >= date('Y-m-d')]) --}}