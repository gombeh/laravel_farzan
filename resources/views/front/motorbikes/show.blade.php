@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ $motorbike->image_url }}" alt="{{ $motorbike->model }}" width="400" height="400">
                        <div class="card-body">
                          <h5 class="card-title">{{ $motorbike->model }}</h5>
                          <p>color: {{$motorbike->color}}</p>
                          <p>weight: {{$motorbike->weight}}</p>
                          <p>price: {{$motorbike->price}}</p>
                          <p class="card-text"><small class="text-muted">{{ $motorbike->created_at->diffForHumans() }}</small></p>
                        </div>
                      </div>
            </div>
        </div>
    </div>
@endsection
