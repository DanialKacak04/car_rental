@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Car Details</div>

        <div class="card-body">
            <img src="{{ Storage::url($car->image) }}" class="object-fit-cover w-100 mb-3" alt="img" style="height: 200px">

            <div class="mb-3">
                <label for="model" class="form-label">
                    Model
                </label>

                <p>
                    {{ $car->model }}
                </p>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">
                    Brand
                </label>

                <p>
                    {{ $car->brand }}
                </p>
            </div>

            <div class="mb-3">
                <label for="seater" class="form-label">
                    Seater
                </label>

                <p>
                    {{ $car->seater }}
                </p>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">
                    Price
                </label>

                <p>
                    {{ $car->formattedPrice() }}
                </p>
            </div>
        </div>
    </div>

    <div class="mt-3 card">
        <div class="card-header">
            Manage Car
        </div>

        <div class="card-body">

            <div class="d-flex gap-2">
                <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">
                    Edit
                </a>

                <form action="/cars/{{ $car->id }}/delete" method="post">
                    @csrf

                    <button class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
