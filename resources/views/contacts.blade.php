@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-home text-center mt-3">
                    <!-- recupero le chiavi dal file PageController -->
                    <h2 class="my-5">{{$title}}</h2>
                    <p>{{$description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection