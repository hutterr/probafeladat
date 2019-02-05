@extends('welcome')

@section('content')
{!! Form::open(['action' => ['ProjektController@update',$projekt->id], 'method' =>'POST']) !!}
<div class="card mx-auto my-2" style="width: 50%;">
    <div class="card-body">
        <div class="form-group">
            {{Form::label('nev', 'Projekt név')}}
            {{Form::text('nev',$projekt->nev,['class'=>'form-control', 'placeholder'=> 'a projektnek a neve'])}}
        </div>
        <div class="form-group">
                {{Form::label('leiras', 'Leírás')}}
                {{Form::textarea('leiras',$projekt->leiras,['class'=>'form-control', 'placeholder'=> 'Leírás a feladathoz.'])}}
        </div>
        <div class="form-group">
                    {{Form::label('statusz', 'Státusz')}}
                    {{Form::select('statusz',['fejleszésre vár' => 'Fejleszésre vár', 'folyamatban' => 'Folyamatban', 'kész' => 'Kész'],$projekt->statusz,['class'=>'form-control', 'placeholder'=> 'Válassz az állapotok közül.'])}}
        </div>
        <div class="form-group">
                {{Form::label('kapcsolattarto', 'Kapcsolattartó neve')}}
                {{Form::text('kapcsolattarto',$projekt->kapcsolattarto,['class'=>'form-control', 'placeholder'=> ''])}}
    </div>
    <div class="form-group">
        {{Form::label('kapcsMail', 'Kapcsolattartó e-mail címe')}}
        {{Form::email('kapcsMail',$projekt->kapcsMail,['class'=>'form-control', 'placeholder'=> ''])}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Modósítás mentése',['class'=> 'btn btn-primary'])}}
        <a href='\projekt\{{$projekt->id}}' class="btn btn-danger ml-2">Mégse</a>
        </div>
    </div>
{!! Form::close() !!}
@endsection