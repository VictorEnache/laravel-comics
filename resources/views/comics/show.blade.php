@extends('layouts.app')

@section('content')

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

@endsection