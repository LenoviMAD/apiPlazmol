<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipality')->insert([
            [
                'id' => 1,
                'idState' => 1,
                'municipality' => 'Alto Orinoco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'idState' => 1,
                'municipality' => 'Atabapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'idState' => 1,
                'municipality' => 'Atures',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'idState' => 1,
                'municipality' => 'Autana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'idState' => 1,
                'municipality' => 'Manapiare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'idState' => 1,
                'municipality' => 'Maroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'idState' => 1,
                'municipality' => 'Río Negro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'idState' => 2,
                'municipality' => 'Anaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'idState' => 2,
                'municipality' => 'Aragua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'idState' => 2,
                'municipality' => 'Manuel Ezequiel Bruzual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'idState' => 2,
                'municipality' => 'Diego Bautista Urbaneja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'idState' => 2,
                'municipality' => 'Fernando Peñalver',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'idState' => 2,
                'municipality' => 'Francisco Del Carmen Carvajal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'idState' => 2,
                'municipality' => 'General Sir Arthur McGregor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'idState' => 2,
                'municipality' => 'Guanta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'idState' => 2,
                'municipality' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'idState' => 2,
                'municipality' => 'José Gregorio Monagas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'idState' => 2,
                'municipality' => 'Juan Antonio Sotillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'idState' => 2,
                'municipality' => 'Juan Manuel Cajigal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'idState' => 2,
                'municipality' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'idState' => 2,
                'municipality' => 'Francisco de Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'idState' => 2,
                'municipality' => 'Pedro María Freites',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'idState' => 2,
                'municipality' => 'Píritu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'idState' => 2,
                'municipality' => 'San José de Guanipa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'idState' => 2,
                'municipality' => 'San Juan de Capistrano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'idState' => 2,
                'municipality' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'idState' => 2,
                'municipality' => 'Simón Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'idState' => 2,
                'municipality' => 'Simón Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'idState' => 3,
                'municipality' => 'Achaguas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'idState' => 3,
                'municipality' => 'Biruaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'idState' => 3,
                'municipality' => 'Muñóz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'idState' => 3,
                'municipality' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'idState' => 3,
                'municipality' => 'Pedro Camejo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'idState' => 3,
                'municipality' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'idState' => 3,
                'municipality' => 'San Fernando',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'idState' => 4,
                'municipality' => 'Atanasio Girardot',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'idState' => 4,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'idState' => 4,
                'municipality' => 'Camatagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'idState' => 4,
                'municipality' => 'Francisco Linares Alcántara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'idState' => 4,
                'municipality' => 'José Ángel Lamas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'idState' => 4,
                'municipality' => 'José Félix Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'idState' => 4,
                'municipality' => 'José Rafael Revenga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'idState' => 4,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'idState' => 4,
                'municipality' => 'Mario Briceño Iragorry',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'idState' => 4,
                'municipality' => 'Ocumare de la Costa de Oro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'idState' => 4,
                'municipality' => 'San Casimiro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'idState' => 4,
                'municipality' => 'San Sebastián',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'idState' => 4,
                'municipality' => 'Santiago Mariño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'idState' => 4,
                'municipality' => 'Santos Michelena',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'idState' => 4,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'idState' => 4,
                'municipality' => 'Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'idState' => 4,
                'municipality' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'idState' => 4,
                'municipality' => 'Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'idState' => 5,
                'municipality' => 'Alberto Arvelo Torrealba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'idState' => 5,
                'municipality' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'idState' => 5,
                'municipality' => 'Antonio José de Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'idState' => 5,
                'municipality' => 'Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'idState' => 5,
                'municipality' => 'Barinas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'idState' => 5,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'idState' => 5,
                'municipality' => 'Cruz Paredes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'idState' => 5,
                'municipality' => 'Ezequiel Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'idState' => 5,
                'municipality' => 'Obispos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'idState' => 5,
                'municipality' => 'Pedraza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'idState' => 5,
                'municipality' => 'Rojas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'idState' => 5,
                'municipality' => 'Sosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'idState' => 6,
                'municipality' => 'Caroní',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'idState' => 6,
                'municipality' => 'Cedeño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'idState' => 6,
                'municipality' => 'El Callao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'idState' => 6,
                'municipality' => 'Gran Sabana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'idState' => 6,
                'municipality' => 'Heres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'idState' => 6,
                'municipality' => 'Piar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'idState' => 6,
                'municipality' => 'Angostura (Raúl Leoni)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'idState' => 6,
                'municipality' => 'Roscio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'idState' => 6,
                'municipality' => 'Sifontes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'idState' => 6,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'idState' => 6,
                'municipality' => 'Padre Pedro Chien',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'idState' => 7,
                'municipality' => 'Bejuma',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'idState' => 7,
                'municipality' => 'Carlos Arvelo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'idState' => 7,
                'municipality' => 'Diego Ibarra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'idState' => 7,
                'municipality' => 'Guacara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'idState' => 7,
                'municipality' => 'Juan José Mora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'idState' => 7,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'idState' => 7,
                'municipality' => 'Los Guayos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'idState' => 7,
                'municipality' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'idState' => 7,
                'municipality' => 'Montalbán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'idState' => 7,
                'municipality' => 'Naguanagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'idState' => 7,
                'municipality' => 'Puerto Cabello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'idState' => 7,
                'municipality' => 'San Diego',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'idState' => 7,
                'municipality' => 'San Joaquín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'idState' => 7,
                'municipality' => 'Valencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'idState' => 8,
                'municipality' => 'Anzoátegui',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'idState' => 8,
                'municipality' => 'Tinaquillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'idState' => 8,
                'municipality' => 'Girardot',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'idState' => 8,
                'municipality' => 'Lima Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'idState' => 8,
                'municipality' => 'Pao de San Juan Bautista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'idState' => 8,
                'municipality' => 'Ricaurte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'idState' => 8,
                'municipality' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'idState' => 8,
                'municipality' => 'San Carlos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'idState' => 8,
                'municipality' => 'Tinaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'idState' => 9,
                'municipality' => 'Antonio Díaz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'idState' => 9,
                'municipality' => 'Casacoima',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'idState' => 9,
                'municipality' => 'Pedernales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'idState' => 9,
                'municipality' => 'Tucupita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'idState' => 10,
                'municipality' => 'Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'idState' => 10,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'idState' => 10,
                'municipality' => 'Buchivacoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'idState' => 10,
                'municipality' => 'Cacique Manaure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'idState' => 10,
                'municipality' => 'Carirubana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'idState' => 10,
                'municipality' => 'Colina',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'idState' => 10,
                'municipality' => 'Dabajuro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'idState' => 10,
                'municipality' => 'Democracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'idState' => 10,
                'municipality' => 'Falcón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'idState' => 10,
                'municipality' => 'Federación',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'idState' => 10,
                'municipality' => 'Jacura',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'idState' => 10,
                'municipality' => 'José Laurencio Silva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'idState' => 10,
                'municipality' => 'Los Taques',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'idState' => 10,
                'municipality' => 'Mauroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'idState' => 10,
                'municipality' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'idState' => 10,
                'municipality' => 'Monseñor Iturriza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'idState' => 10,
                'municipality' => 'Palmasola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'idState' => 10,
                'municipality' => 'Petit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'idState' => 10,
                'municipality' => 'Píritu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'idState' => 10,
                'municipality' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'idState' => 10,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'idState' => 10,
                'municipality' => 'Tocópero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 126,
                'idState' => 10,
                'municipality' => 'Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 127,
                'idState' => 10,
                'municipality' => 'Urumaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 128,
                'idState' => 10,
                'municipality' => 'Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 129,
                'idState' => 11,
                'municipality' => 'Camaguán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 130,
                'idState' => 11,
                'municipality' => 'Chaguaramas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 131,
                'idState' => 11,
                'municipality' => 'El Socorro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 132,
                'idState' => 11,
                'municipality' => 'José Félix Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 133,
                'idState' => 11,
                'municipality' => 'José Tadeo Monagas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 134,
                'idState' => 11,
                'municipality' => 'Juan Germán Roscio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 135,
                'idState' => 11,
                'municipality' => 'Julián Mellado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 136,
                'idState' => 11,
                'municipality' => 'Las Mercedes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 137,
                'idState' => 11,
                'municipality' => 'Leonardo Infante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 138,
                'idState' => 11,
                'municipality' => 'Pedro Zaraza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 139,
                'idState' => 11,
                'municipality' => 'Ortíz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 140,
                'idState' => 11,
                'municipality' => 'San Gerónimo de Guayabal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 141,
                'idState' => 11,
                'municipality' => 'San José de Guaribe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 142,
                'idState' => 11,
                'municipality' => 'Santa María de Ipire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 143,
                'idState' => 11,
                'municipality' => 'Sebastián Francisco de Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 144,
                'idState' => 12,
                'municipality' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 145,
                'idState' => 12,
                'municipality' => 'Crespo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 146,
                'idState' => 12,
                'municipality' => 'Iribarren',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 147,
                'idState' => 12,
                'municipality' => 'Jiménez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 148,
                'idState' => 12,
                'municipality' => 'Morán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 149,
                'idState' => 12,
                'municipality' => 'Palavecino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 150,
                'idState' => 12,
                'municipality' => 'Simón Planas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 151,
                'idState' => 12,
                'municipality' => 'Torres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 152,
                'idState' => 12,
                'municipality' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 179,
                'idState' => 13,
                'municipality' => 'Alberto Adriani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 180,
                'idState' => 13,
                'municipality' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 181,
                'idState' => 13,
                'municipality' => 'Antonio Pinto Salinas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 182,
                'idState' => 13,
                'municipality' => 'Aricagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 183,
                'idState' => 13,
                'municipality' => 'Arzobispo Chacón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 184,
                'idState' => 13,
                'municipality' => 'Campo Elías',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 185,
                'idState' => 13,
                'municipality' => 'Caracciolo Parra Olmedo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 186,
                'idState' => 13,
                'municipality' => 'Cardenal Quintero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 187,
                'idState' => 13,
                'municipality' => 'Guaraque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 188,
                'idState' => 13,
                'municipality' => 'Julio César Salas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 189,
                'idState' => 13,
                'municipality' => 'Justo Briceño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 190,
                'idState' => 13,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 191,
                'idState' => 13,
                'municipality' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 192,
                'idState' => 13,
                'municipality' => 'Obispo Ramos de Lora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 193,
                'idState' => 13,
                'municipality' => 'Padre Noguera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 194,
                'idState' => 13,
                'municipality' => 'Pueblo Llano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 195,
                'idState' => 13,
                'municipality' => 'Rangel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 196,
                'idState' => 13,
                'municipality' => 'Rivas Dávila',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 197,
                'idState' => 13,
                'municipality' => 'Santos Marquina',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 198,
                'idState' => 13,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 199,
                'idState' => 13,
                'municipality' => 'Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 200,
                'idState' => 13,
                'municipality' => 'Tulio Febres Cordero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 201,
                'idState' => 13,
                'municipality' => 'Zea',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 223,
                'idState' => 14,
                'municipality' => 'Acevedo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 224,
                'idState' => 14,
                'municipality' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 225,
                'idState' => 14,
                'municipality' => 'Baruta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 226,
                'idState' => 14,
                'municipality' => 'Brión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 227,
                'idState' => 14,
                'municipality' => 'Buroz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 228,
                'idState' => 14,
                'municipality' => 'Carrizal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 229,
                'idState' => 14,
                'municipality' => 'Chacao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 230,
                'idState' => 14,
                'municipality' => 'Cristóbal Rojas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 231,
                'idState' => 14,
                'municipality' => 'El Hatillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 232,
                'idState' => 14,
                'municipality' => 'Guaicaipuro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 233,
                'idState' => 14,
                'municipality' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 234,
                'idState' => 14,
                'municipality' => 'Lander',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 235,
                'idState' => 14,
                'municipality' => 'Los Salias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 236,
                'idState' => 14,
                'municipality' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 237,
                'idState' => 14,
                'municipality' => 'Paz Castillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 238,
                'idState' => 14,
                'municipality' => 'Pedro Gual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 239,
                'idState' => 14,
                'municipality' => 'Plaza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 240,
                'idState' => 14,
                'municipality' => 'Simón Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 241,
                'idState' => 14,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 242,
                'idState' => 14,
                'municipality' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 243,
                'idState' => 14,
                'municipality' => 'Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 258,
                'idState' => 15,
                'municipality' => 'Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 259,
                'idState' => 15,
                'municipality' => 'Aguasay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 260,
                'idState' => 15,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 261,
                'idState' => 15,
                'municipality' => 'Caripe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 262,
                'idState' => 15,
                'municipality' => 'Cedeño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 263,
                'idState' => 15,
                'municipality' => 'Ezequiel Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 264,
                'idState' => 15,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 265,
                'idState' => 15,
                'municipality' => 'Maturín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 266,
                'idState' => 15,
                'municipality' => 'Piar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 267,
                'idState' => 15,
                'municipality' => 'Punceres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 268,
                'idState' => 15,
                'municipality' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 269,
                'idState' => 15,
                'municipality' => 'Sotillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 270,
                'idState' => 15,
                'municipality' => 'Uracoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 271,
                'idState' => 16,
                'municipality' => 'Antolín del Campo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 272,
                'idState' => 16,
                'municipality' => 'Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 273,
                'idState' => 16,
                'municipality' => 'García',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 274,
                'idState' => 16,
                'municipality' => 'Gómez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 275,
                'idState' => 16,
                'municipality' => 'Maneiro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 276,
                'idState' => 16,
                'municipality' => 'Marcano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 277,
                'idState' => 16,
                'municipality' => 'Mariño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 278,
                'idState' => 16,
                'municipality' => 'Península de Macanao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 279,
                'idState' => 16,
                'municipality' => 'Tubores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 280,
                'idState' => 16,
                'municipality' => 'Villalba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 281,
                'idState' => 16,
                'municipality' => 'Díaz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 282,
                'idState' => 17,
                'municipality' => 'Agua Blanca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 283,
                'idState' => 17,
                'municipality' => 'Araure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 284,
                'idState' => 17,
                'municipality' => 'Esteller',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 285,
                'idState' => 17,
                'municipality' => 'Guanare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 286,
                'idState' => 17,
                'municipality' => 'Guanarito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 287,
                'idState' => 17,
                'municipality' => 'Monseñor José Vicente de Unda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 288,
                'idState' => 17,
                'municipality' => 'Ospino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 289,
                'idState' => 17,
                'municipality' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 290,
                'idState' => 17,
                'municipality' => 'Papelón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 291,
                'idState' => 17,
                'municipality' => 'San Genaro de Boconoíto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 292,
                'idState' => 17,
                'municipality' => 'San Rafael de Onoto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 293,
                'idState' => 17,
                'municipality' => 'Santa Rosalía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 294,
                'idState' => 17,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 295,
                'idState' => 17,
                'municipality' => 'Turén',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 296,
                'idState' => 18,
                'municipality' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 297,
                'idState' => 18,
                'municipality' => 'Andrés Mata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 298,
                'idState' => 18,
                'municipality' => 'Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 299,
                'idState' => 18,
                'municipality' => 'Benítez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 300,
                'idState' => 18,
                'municipality' => 'Bermúdez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 301,
                'idState' => 18,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 302,
                'idState' => 18,
                'municipality' => 'Cajigal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 303,
                'idState' => 18,
                'municipality' => 'Cruz Salmerón Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 304,
                'idState' => 18,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 305,
                'idState' => 18,
                'municipality' => 'Mariño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 306,
                'idState' => 18,
                'municipality' => 'Mejía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 307,
                'idState' => 18,
                'municipality' => 'Montes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 308,
                'idState' => 18,
                'municipality' => 'Ribero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 309,
                'idState' => 18,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 310,
                'idState' => 18,
                'municipality' => 'Valdéz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 341,
                'idState' => 19,
                'municipality' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 342,
                'idState' => 19,
                'municipality' => 'Antonio Rómulo Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 343,
                'idState' => 19,
                'municipality' => 'Ayacucho',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 344,
                'idState' => 19,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 345,
                'idState' => 19,
                'municipality' => 'Cárdenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 346,
                'idState' => 19,
                'municipality' => 'Córdoba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 347,
                'idState' => 19,
                'municipality' => 'Fernández Feo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 348,
                'idState' => 19,
                'municipality' => 'Francisco de Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 349,
                'idState' => 19,
                'municipality' => 'García de Hevia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 350,
                'idState' => 19,
                'municipality' => 'Guásimos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 351,
                'idState' => 19,
                'municipality' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 352,
                'idState' => 19,
                'municipality' => 'Jáuregui',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 353,
                'idState' => 19,
                'municipality' => 'José María Vargas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 354,
                'idState' => 19,
                'municipality' => 'Junín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 355,
                'idState' => 19,
                'municipality' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 356,
                'idState' => 19,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 357,
                'idState' => 19,
                'municipality' => 'Lobatera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 358,
                'idState' => 19,
                'municipality' => 'Michelena',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 359,
                'idState' => 19,
                'municipality' => 'Panamericano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 360,
                'idState' => 19,
                'municipality' => 'Pedro María Ureña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 361,
                'idState' => 19,
                'municipality' => 'Rafael Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 362,
                'idState' => 19,
                'municipality' => 'Samuel Darío Maldonado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 363,
                'idState' => 19,
                'municipality' => 'San Cristóbal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 364,
                'idState' => 19,
                'municipality' => 'Seboruco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 365,
                'idState' => 19,
                'municipality' => 'Simón Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 366,
                'idState' => 19,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 367,
                'idState' => 19,
                'municipality' => 'Torbes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 368,
                'idState' => 19,
                'municipality' => 'Uribante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 369,
                'idState' => 19,
                'municipality' => 'San Judas Tadeo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 370,
                'idState' => 20,
                'municipality' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 371,
                'idState' => 20,
                'municipality' => 'Boconó',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 372,
                'idState' => 20,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 373,
                'idState' => 20,
                'municipality' => 'Candelaria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 374,
                'idState' => 20,
                'municipality' => 'Carache',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 375,
                'idState' => 20,
                'municipality' => 'Escuque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 376,
                'idState' => 20,
                'municipality' => 'José Felipe Márquez Cañizalez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 377,
                'idState' => 20,
                'municipality' => 'Juan Vicente Campos Elías',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 378,
                'idState' => 20,
                'municipality' => 'La Ceiba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 379,
                'idState' => 20,
                'municipality' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 380,
                'idState' => 20,
                'municipality' => 'Monte Carmelo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 381,
                'idState' => 20,
                'municipality' => 'Motatán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 382,
                'idState' => 20,
                'municipality' => 'Pampán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 383,
                'idState' => 20,
                'municipality' => 'Pampanito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 384,
                'idState' => 20,
                'municipality' => 'Rafael Rangel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 385,
                'idState' => 20,
                'municipality' => 'San Rafael de Carvajal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 386,
                'idState' => 20,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 387,
                'idState' => 20,
                'municipality' => 'Trujillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 388,
                'idState' => 20,
                'municipality' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 389,
                'idState' => 20,
                'municipality' => 'Valera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 390,
                'idState' => 21,
                'municipality' => 'Vargas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 391,
                'idState' => 22,
                'municipality' => 'Arístides Bastidas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 392,
                'idState' => 22,
                'municipality' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 407,
                'idState' => 22,
                'municipality' => 'Bruzual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 408,
                'idState' => 22,
                'municipality' => 'Cocorote',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 409,
                'idState' => 22,
                'municipality' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 410,
                'idState' => 22,
                'municipality' => 'José Antonio Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 411,
                'idState' => 22,
                'municipality' => 'La Trinidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 412,
                'idState' => 22,
                'municipality' => 'Manuel Monge',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 413,
                'idState' => 22,
                'municipality' => 'Nirgua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 414,
                'idState' => 22,
                'municipality' => 'Peña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 415,
                'idState' => 22,
                'municipality' => 'San Felipe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 416,
                'idState' => 22,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 417,
                'idState' => 22,
                'municipality' => 'Urachiche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 418,
                'idState' => 22,
                'municipality' => 'José Joaquín Veroes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 441,
                'idState' => 23,
                'municipality' => 'Almirante Padilla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 442,
                'idState' => 23,
                'municipality' => 'Baralt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 443,
                'idState' => 23,
                'municipality' => 'Cabimas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 444,
                'idState' => 23,
                'municipality' => 'Catatumbo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 445,
                'idState' => 23,
                'municipality' => 'Colón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 446,
                'idState' => 23,
                'municipality' => 'Francisco Javier Pulgar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 447,
                'idState' => 23,
                'municipality' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 448,
                'idState' => 23,
                'municipality' => 'Jesús Enrique Losada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 449,
                'idState' => 23,
                'municipality' => 'Jesús María Semprún',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 450,
                'idState' => 23,
                'municipality' => 'La Cañada de Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 451,
                'idState' => 23,
                'municipality' => 'Lagunillas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 452,
                'idState' => 23,
                'municipality' => 'Machiques de Perijá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 453,
                'idState' => 23,
                'municipality' => 'Mara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 454,
                'idState' => 23,
                'municipality' => 'Maracaibo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 455,
                'idState' => 23,
                'municipality' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 456,
                'idState' => 23,
                'municipality' => 'Rosario de Perijá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 457,
                'idState' => 23,
                'municipality' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 458,
                'idState' => 23,
                'municipality' => 'Santa Rita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 459,
                'idState' => 23,
                'municipality' => 'Simón Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 460,
                'idState' => 23,
                'municipality' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 461,
                'idState' => 23,
                'municipality' => 'Valmore Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 462,
                'idState' => 24,
                'municipality' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}