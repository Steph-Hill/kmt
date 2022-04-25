@extends("layouts.app")

@section("content")
    
    <h1>Jeudi</h1>


        @foreach ($actus as $item)
            
            <h3>{{$item->actu}}</h3>


        @endforeach

@endsection