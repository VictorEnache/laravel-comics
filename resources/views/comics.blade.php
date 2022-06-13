@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row fumetti">
            @foreach($fumetti as $index => $fumetto)
            <div class="col">
                <a href="{{route('single-comic', $index )}}">

                    <div class="card">
                        <div class="image">
                            <img src="{{$fumetto['thumb']}}" alt="">
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            {{$fumetto['series']}}
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.card -->
                </a>
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
