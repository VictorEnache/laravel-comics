@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row fumetti">
            @foreach($fumetti as $fumetto)
            <div class="col">
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
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
