@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($photos as $photo)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="{{ asset($photo->url) }}"height="255" class="card-img-top">
            <div class="card-body">
                <h1>{{$photo -> title}}</h1>
                <p class="card-text">{!! Str::limit($photo->description,100)!!}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href=" {{ route ('photos.show', $photo->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        <a href=""  class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-muted">{{ $photo->created_at->diffForHumans()}}</small>
                </div>
            </div>
        </div>
    </div>
 @endforeach
</div>
@endsection