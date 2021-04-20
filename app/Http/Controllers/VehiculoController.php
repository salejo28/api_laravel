<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vehiculo::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'placa' => 'required|unique:vehiculos,placa|max:6',
            'tipo_vehiculo' => 'required',
            'marca' => 'required',
            'propietario' => 'required',
            'cedula_propietario' => 'required|numeric'
        ]);

        if ($validation->fails()) {
            # code...
            $errors = $validation->errors();
            return response()->json($errors);
        }

        return Vehiculo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    public function search($by)
    {
        $count = Vehiculo::where('placa', $by)->orWhere('propietario', $by)->orWhere('cedula_propietario', $by)->count();

        if ($count == 0) {
            # code...
            return response()->json([
                "Message" => "Vehicle not found"
            ]);
        }

        return Vehiculo::where('placa', $by)->orWhere('propietario', $by)->orWhere('cedula_propietario', $by)->get();
    }

    public function getCountVehiclesByBrand($brand)
    {

        $count = Vehiculo::where('marca', $brand)->count();
        $res = [
            "Marca" => $brand,
            "Vehicles" => $count
        ];
        return response()->json($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        //
    }
}
