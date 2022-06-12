@extends('layouts.app')

@section('content')
    @foreach($fumetti as $fumetto)
        <h3>{{$fumetto['title']}}</h3>
    @endforeach
@endsection
