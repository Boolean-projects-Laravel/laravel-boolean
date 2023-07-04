@extends('layouts.base')

@section('contents')
    <div class="offset-2 container-sm">
        <div class="card container-fluid ">
            <h2>prova</h2>
            <span>data fine</span>
            <div class="btn-group col-2" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">Espandi</button>
                <button type="button" class="btn btn-outline-primary">Modifica</button>
            </div>
        </div>
        <div class="collapse">
            <h2></h2>
            <div>
                data 
                bottoni
            </div>
            <div>
                descrizxion
            </div>
            <img src="" alt="">
        </div>
    </div>
@endsection

{{-- @style(['color: red' => $todo['expire_date'] >= date('Y-m-d')]) --}}