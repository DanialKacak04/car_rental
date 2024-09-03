@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Car
        </div>

        <div class="card-body">

            <form action="/cars/{{ $car->id }}/update" method="post" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="model" class="form-label">
                        Model
                    </label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">
                        Brand
                    </label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
                </div>

                <div class="mb-3">
                    <label for="seater" class="form-label">
                        Seater
                    </label>
                    <input type="number" class="form-control" id="seater" name="seater" value="{{ $car->seater }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">
                        Price
                    </label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $car->price }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">
                        Image
                    </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
