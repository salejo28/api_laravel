<?php

namespace Tests\Feature;

use App\Models\Vehiculo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_get_vehicles()
    {
        $response = $this->get('/api/vehiculos');

        $response->assertStatus(200);
    }

    public function test_get_vehicle_by_brand()
    {
        // The brands are Mazda Honda Akt Yamaha Chevrolet Renault Mazda
        $response = $this->get('/api/vehiculo/brand/Mazda');

        $response->assertStatus(200);
    }

    public function test_get_vehicle_by()
    {
        // Get vehicle by propietarie or identification (cedula) or license plate (placa)
        $response = $this->get('/api/vehiculo/santiago');

        $response->assertStatus(200);
    }

    public function test_create_vehicle()
    {
        // type vehicle carro, camioneta or moto
        // Brands is carro or camioneta (Mazda, Chevrolet, Renault) is moto (Honda, Akt, Yamaha)
        $this->post('/api/vehiculo', [
            'placa' => 'abd123',
            'tipo_vehiculo' => 'carro',
            'marca' => 'Mazda',
            'propietario' => 'Santiago',
            'cedula_propietario' => '1000954519'
        ]);


        $this->assertCount(Vehiculo::all()->count(), Vehiculo::all());
        $vehiculo = Vehiculo::first();

        $this->patch('/api/vehiculo' . $vehiculo->id, [
            'placa' => 'New Vehicle',
        ]);
    }
}
