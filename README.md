<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre la api
Esta api esta hecha con el framework laravel del lenguaje de php, tiene una base de datos mysql. Esta api consta de poder crear un vehiculo con su placa, marca, tipo de vehiculo, propietario y la cedula del propietario, las placas son unicas, así que se tiene validado para que no se puedan ingresar dos placas iguales, también hace busqueda por propietario, cedula o placa del vehiculo, muestra la cantidad de vehiculos registrados por cada marca.

## Modelo de la base de datos
Tabla de Vehiculos
```
id => unique, auto_increment
placa => unique, varchar
marca => enum ("Honda", "Akt", "Yamaha", "Chevrolet", "Renault", "Mazda")
tipo_vehiculo => enum ('carro', 'camioneta', 'moto')
propietario => varchar
cedula_propietario => varchar
```

## Estructira de carpetas

| Carpetas | Informacion |
| ------ | ------ |
| app/Http/Controllers | En esta carpeta se almacena los controladores de la aplicacion |
| app/Models/Model | En esta carpeta se almacena el modelo Vehiculo |
| database/migations | En esta carpeta se almacena, con ayuda de un orm (eloquent), todas nuestras tablas que van en la base de datos |
| routes | En esta carpeta se almacenan todas las rutas de nuestra aplicacion |
| tests | En esta carpeta se almacenan todos los test de nuestra app |

## Utilizando tests
En la carpeta tests/Feature esta un archivo que dice ExampleTests.php, ahí se hicieron los test de la app los cuales son:
```
test_get_vehicles
test_get_vehicle_by_brand
test_get_vehicle_by
test_create_vehicle
```
Y se ejecutan con el comando:
```
./vendor/bin/phpunit --filter [nombre_del_test]
```

## Clonando repositorio
```
git clone https://github.com/santi280403/api_laravel.git
cd api_laravel
npm install
```
Configura en las variables de entorno la base de datos y ejecuta
```
php artisan migrate --seed
```
Ejecuta el server
```
php artisan serve
```


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
