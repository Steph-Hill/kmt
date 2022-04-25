@extends("layouts.app")

@section("content")

    <h1>Samedi</h1>

    @foreach ($mesNoms as $item)

         <h3>{{$item->actu}}</h3>
        
    @endforeach
    
@endsection