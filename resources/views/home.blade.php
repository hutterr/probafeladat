@extends('welcome')

@section('content')
    <h1 class="text-center py-4">Projektek</h1>
    @if(count($projektek) > 0)
        @foreach($projektek as $projekt)
        <div class="card mx-auto" style="width: 50%;">
                <div class="card-body">
                <h2 class="card-title ">{{$projekt->nev}}</h2>
                <h6 class="card-subtitle mb-2 text-muted">{{$projekt->statusz}}</h6>
                <p class="card-text">{{$projekt->leiras}}</p>
                <a href="/projekt/{{$projekt->id}}" class="btn btn-primary">Projekt megnyitása</a>
                    
                </div>
            </div>
        @endforeach
    
    @else 
        <h1>Nincsenek még projektek!</h1>
    
    @endif
@endsection