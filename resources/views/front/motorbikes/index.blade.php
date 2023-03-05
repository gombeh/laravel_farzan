@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <select name="sort" id="sort" class="form-control">
                    <option value="newest" @if(request('sort') === 'newest') selected @endif>newest</option>
                    <option value="latest" @if(request('sort') === 'latest') selected @endif>latest</option>
                    <option value="max_price" @if(request('sort') === 'max_price') selected @endif>max price</option>
                    <option value="low_price" @if(request('sort') === 'low_price') selected @endif>low price</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="color">Color: </label>
                @foreach ($colors as $color)
                    <input type="checkbox" name="colors" id="colors" value="{{ $color }}" class="mr-2" @if(in_array($color, $selected_colors ?? [])) checked @endif> {{ $color }}
                @endforeach
            </div>
            <div class="col-md-12">
                <div class="card-group">
                    @foreach ($motorbikes as $motorbike)
                    <div class="card">
                        <img class="card-img-top" src="{{ $motorbike->image_url }}" alt="{{ $motorbike->model }}" width="400" height="400">
                        <div class="card-body">
                          <a href="{{ route('front.motorbikes.show', $motorbike)}}"><h5 class="card-title">{{ $motorbike->model }}</h5></a>
                          <p class="card-text"><small class="text-muted">{{ $motorbike->created_at->diffForHumans() }}</small></p>
                        </div>
                      </div>
                    @endforeach
            </div>
            <div>
                {{ $motorbikes->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        const sortElement = document.querySelector('#sort');
        const colorsElement = document.querySelectorAll('#colors');


        function changeSort(e) {
            const value = e.target.value;
            const searchParams = new URLSearchParams(window.location.search);
            searchParams.set("sort", value);
            window.location.search = searchParams.toString();
        }

        function changeFilter(e){
            const values = Array.from(colorsElement)
                .filter(colorsElement => colorsElement.checked)
                .map(colorElement => colorElement.value);
            const searchParams = new URLSearchParams(window.location.search);
            var arrStr = JSON.stringify(values);
            searchParams.set("colors", arrStr);
            window.location.search = searchParams.toString();
        }

        sortElement.addEventListener('change', changeSort);
        colorsElement.forEach(colorElement => colorElement.addEventListener('click', changeFilter));
    </script>
@endpush
