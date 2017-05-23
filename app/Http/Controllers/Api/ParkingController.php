<?php

namespace App\Http\Controllers\Api;

use App\Parking;
use App\Transformers\ParkingTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParkingController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parking = Parking::take(10)->get();

        return $this->respondWithCollection($parking, new ParkingTransformer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = $request->input('main');
//
//        DB::table('parking')->insert([
//            'client_id'        => $data['client_id'],
//            'parking_price_id' => $data['parking_price_id'],
//            'check_in_time'    => $data['check_in_time'],
//            'check_out_time'   => $data['check_out_time'],
//        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parking = Parking::find($id);

        if (!$parking) {
            return $this->errorNotFound();
        }

        return $this->respondWithItem($parking, new ParkingTransformer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
