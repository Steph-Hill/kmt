@extends("layouts.app")

@section("content")


    <h1>Details</h1>

    @foreach ($detail as $item)

        <h2>{{$item->id}}</h2>
        
    @endforeach
    
@endsection