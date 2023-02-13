<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $reservations = Reservation::all();
        //return new ReservationCollection($reservations);
        return response()->json($reservations);
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
            'time_from' => 'required|string|max:10',
            'time_to' => 'required|string|max:10',
            'car_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $reservation = Reservation::create([
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'car_id' => $request->car_id
        ]);

        return response()->json(['Reservation created', new ReservationResource($reservation)]);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Reservation  $reservation
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Reservation $reservation)
    {
        return new ReservationResource($reservation);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Reservation  $reservation
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Reservation $reservation)
    {
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Reservation  $reservation
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, Reservation $reservation)
    {
        $validator = Validator::make($request->all(), [
            'time_from' => 'required|string|max:10',
            'time_to' => 'required|string|max:10',
            'car_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $reservation->time_from = $request->time_from;
        $reservation->time_to = $request->time_to;
        $reservation->car_id = $request->car_id;

        $reservation->save();

        return response()->json(['Reservation updated', new ReservationResource($reservation)]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Reservation  $reservation
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json("Reservation deleted");
    }
}
