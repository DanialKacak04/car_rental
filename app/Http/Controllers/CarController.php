<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(5);

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    public function create()
    {
        $cars = Car::paginate(5);

        return view('cars.create', [
            'cars' => $cars
        ]);

    }
    public function store(Request  $request)
    {
        $car = new Car;
        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->seater = $request->seater;
        $car->price = $request->price;
        $car->save();

        return $car;
    }
    public function edit($id)
    {
        $car = Car::find($id);

        return $car;
    }

}
