@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($photos as $photo)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ asset($photo->url) }}"height="255" class="card-img-top">
            <div class="card-body">
                <h1>{{$photo -> title}}</h1>
                <p class="card-text">{!!$photo->description!!}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
 @endforeach
</div>
@endsection