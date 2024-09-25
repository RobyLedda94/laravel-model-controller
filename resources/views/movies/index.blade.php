@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-films text-center">
                    <h2 class="my-5">{{$title}}</h2>
                    <p class="mb-3">{{$description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection