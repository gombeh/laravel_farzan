@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Motorbikes</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.motorbikes.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="model" class="col-md-4 col-form-label text-md-end">model</label>
                                <div class="col-md-6">
                                    <input id="model" type="text"
                                        class="form-control @error('model') is-invalid @enderror" name="model"
                                        value="{{ old('model') }}" required autocomplete="model" autofocus>
                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="color" class="col-md-4 col-form-label text-md-end">color</label>
                                <div class="col-md-6">
                                    <input id="color" type="text"
                                        class="form-control @error('color') is-invalid @enderror" name="color"
                                        value="{{ old('color') }}" required autocomplete="color" autofocus>
                                    @error('color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="weight" class="col-md-4 col-form-label text-md-end">weight</label>
                                <div class="col-md-6">
                                    <input id="weight" type="text"
                                        class="form-control @error('weight') is-invalid @enderror" name="weight"
                                        value="{{ old('weight') }}" required autocomplete="weight" autofocus>
                                    @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">price</label>
                                <div class="col-md-6">
                                    <input id="price" type="text"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        value="{{ old('price') }}" required autocomplete="price" autofocus>
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">image</label>
                                <div class="col-md-6">
                                    <input type="file" class="file-control" id="image" name="image" required>
                                    @error('image')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
