@extends("layouts.app")

@section("content")

    <h1>Vendredi</h1>

    @foreach ($noms as $item)

        <h3>{{$item->actu}}</h3>
        
    @endforeach
    
@endsection