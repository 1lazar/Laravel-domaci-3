<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarCollection;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $cars = Car::all();
        return new CarCollection($cars);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        //
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year_of_car' => 'required|integer|min:4',
            'price_of_car' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $car = Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'year_of_car' => $request->year_of_car,
            'price_of_car' => $request->price_of_car
        ]);

        return response()->json(['Car created', new CarResource($car)]);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Car  $car
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Car $car)
    {
        // $car = Car::find($car_id);
        // if(is_null($car)){
        //     return response()->json('Data not found', 404);
        // }
        // return response()->json($car);
        return new CarResource($car);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Car  $car
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Car $car)
    {
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Car  $car
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, Car $car)
    {
        $validator = Validator::make($request->all(), [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year_of_car' => 'required|integer|min:4',
            'price_of_car' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year_of_car = $request->year_of_car;
        $car->price_of_car = $request->price_of_car;

        $car->save();

        return response()->json(['Car updated', new CarResource($car)]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Car  $car
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json("Car deleted");
    }
}
