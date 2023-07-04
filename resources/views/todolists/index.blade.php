@extends('layouts.base')

@section('contents')
    <div class="offset-2 container-sm pt-4">

        <button type="button" class="btn btn-outline-primary mb-3"><a class="text-decoration-none text-dark" style="font-weight:700" href="{{ '/todolists/create' }}">Crea un nuovo promemoria</a></button>

        
        @foreach ($arrTodos as $key => $todo)
            <div class="card container-fluid">
                <div class=" d-flex flex-row align-items-center">
                    <div class="col-10">
                        <h2>{{ $todo->title }}</h2>
                        <span @style(['color: red' => $todo->expire_date < date('Y-m-d'), 'color: green; font-weight: bold' => $todo->expire_date >= date('Y-m-d')])>{{ $todo->expire_date }}</span>
                    </div>
                    <div class="btn-group col-2" role="group" aria-label="Basic outlined example">
                        @if($todo->details != null or $todo->images != null)
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$key}}">Espandi</button>
                    </div>
                </div>
                        <div class="collapse text-center pb-3" id="collapseExample{{$key}}">
                            @if ($todo->details != null)
                            <div>
                                <span>{{ $todo->details }}</span>
                            </div>
                            @elseif ($todo->image != null)
                                <img src="" alt="image">
                            @endif
                            <button type="button" class="btn btn-outline-primary">Modifica</button>
                        </div>
                    </div> 
                        @else
                        <button type="button" class="btn btn-outline-primary">Modifica</button>
                    </div>
                </div>
            </div>
                        @endif
        @endforeach
        
    </div>
@endsection

{{-- @style(['color: red' => $todo['expire_date'] >= date('Y-m-d')]) --}}