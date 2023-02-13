<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $customer = Customer::all();
        //return response()->json($customer);
        return new CustomerCollection($customer);
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
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'birthdate' => 'required|string|max:10',
            'car_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthdate' => $request->birthdate,
            'car_id' => $request->car_id
        ]);

        return response()->json(['Customer created', new CustomerResource($customer)]);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Customer $customer)
    {
        //
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'birthdate' => 'required|string|max:10',
            'car_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->birthdate = $request->birthdate;
        $customer->car_id = $request->car_id;

        $customer->save();

        return response()->json(['Guest updated', new CustomerResource($customer)]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Customer  $customer
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json("Customer deleted");
    }
}
