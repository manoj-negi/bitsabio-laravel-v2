@extends('layouts.app')

@section('content')

<div class="col-lg-4">

    <div class="card-custom">

        <div class="icon-box">
            <i class="bi bi-gear-wide-connected text-primary"></i>
        </div>

        <h5>{{ $service->title }}</h5>

        <p>{{ $service->short_description }}</p>

        <div>
            {!! $service->description !!}
        </div>

    </div>

</div>

@endsection