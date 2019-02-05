@extends('welcome')

@section('content')
<div class="card mx-auto mt-3 " style="width: 40%;">
        <div class="card-body">
          <h2 class="card-title">{{$projekt->nev}}</h2>
        <h6 class="card-subtitle mb-2 text-muted my-3">{{$projekt->statusz}}</h6>
        <p class="card-text border py-3 px-3">{{$projekt->leiras}}</p>
        <table class="table">
            <tr>
                <td>Kapcsolattartó:</td>
                <td>{{$projekt->kapcsolattarto}}</td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td> {{$projekt->kapcsMail}}</td>
            </tr>
        <table>
        <a href='/projekt' class="btn btn-primary">Vissza</a>
        <a href='/projekt/{{$projekt->id}}/edit' class="btn btn-primary ml-2">Szerkesztés</a>
        {!!Form::open(['action' => ['ProjektController@destroy', $projekt->id],'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Törlés', ['class' => 'btn btn-danger ml-2'])}}
        {!!Form::close()!!}
        {!!Form::open(['action' => ['ProjektController@kapcsDestroy', $projekt->id],'method' => 'POST'])!!}            
            {{Form::submit('Kapcsolattartó törlése', ['class' => 'btn btn-danger ml-2'])}}
        {!!Form::close()!!}
        </div>
      </div>
@endsection