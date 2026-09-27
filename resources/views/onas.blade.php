@extends('layout.layout')
@section('tytul', 'Strona o nas')
@section('podtytul', 'Strona O nas')
@section('tresc')
    <div>Treść strony O nas 
        <br>
       @isset($zadania)
       <ol>
        @foreach ($zadania as $zadanie)
            <li>{{$zadanie}}</li>
        @endforeach        
        </ol>           
       @endisset
    </div>
@endsection