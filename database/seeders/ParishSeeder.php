<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parish')->insert([
            [
                'id' => 1,
                'idMunicipality' => 1,
                'parish' => 'Alto Orinoco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'idMunicipality' => 1,
                'parish' => 'Huachamacare Acanaña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'idMunicipality' => 1,
                'parish' => 'Marawaka Toky Shamanaña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'idMunicipality' => 1,
                'parish' => 'Mavaka Mavaka',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'idMunicipality' => 1,
                'parish' => 'Sierra Parima Parimabé',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'idMunicipality' => 2,
                'parish' => 'Ucata Laja Lisa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'idMunicipality' => 2,
                'parish' => 'Yapacana Macuruco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'idMunicipality' => 2,
                'parish' => 'Caname Guarinuma',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'idMunicipality' => 3,
                'parish' => 'Fernando Girón Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'idMunicipality' => 3,
                'parish' => 'Luis Alberto Gómez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'idMunicipality' => 3,
                'parish' => 'Pahueña Limón de Parhueña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'idMunicipality' => 3,
                'parish' => 'Platanillal Platanillal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'idMunicipality' => 4,
                'parish' => 'Samariapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'idMunicipality' => 4,
                'parish' => 'Sipapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'idMunicipality' => 4,
                'parish' => 'Munduapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'idMunicipality' => 4,
                'parish' => 'Guayapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'idMunicipality' => 5,
                'parish' => 'Alto Ventuari',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'idMunicipality' => 5,
                'parish' => 'Medio Ventuari',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'idMunicipality' => 5,
                'parish' => 'Bajo Ventuari',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'idMunicipality' => 6,
                'parish' => 'Victorino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'idMunicipality' => 6,
                'parish' => 'Comunidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'idMunicipality' => 7,
                'parish' => 'Casiquiare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'idMunicipality' => 7,
                'parish' => 'Cocuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'idMunicipality' => 7,
                'parish' => 'San Carlos de Río Negro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'idMunicipality' => 7,
                'parish' => 'Solano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'idMunicipality' => 8,
                'parish' => 'Anaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'idMunicipality' => 8,
                'parish' => 'San Joaquín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'idMunicipality' => 9,
                'parish' => 'Cachipo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'idMunicipality' => 9,
                'parish' => 'Aragua de Barcelona',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'idMunicipality' => 11,
                'parish' => 'Lechería',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'idMunicipality' => 11,
                'parish' => 'El Morro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'idMunicipality' => 12,
                'parish' => 'Puerto Píritu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'idMunicipality' => 12,
                'parish' => 'San Miguel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'idMunicipality' => 12,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'idMunicipality' => 13,
                'parish' => 'Valle de Guanape',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'idMunicipality' => 13,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'idMunicipality' => 14,
                'parish' => 'El Chaparro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'idMunicipality' => 14,
                'parish' => 'Tomás Alfaro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'idMunicipality' => 14,
                'parish' => 'Calatrava',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'idMunicipality' => 15,
                'parish' => 'Guanta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'idMunicipality' => 15,
                'parish' => 'Chorrerón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'idMunicipality' => 16,
                'parish' => 'Mamo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'idMunicipality' => 16,
                'parish' => 'Soledad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'idMunicipality' => 17,
                'parish' => 'Mapire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'idMunicipality' => 17,
                'parish' => 'Piar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'idMunicipality' => 17,
                'parish' => 'Santa Clara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'idMunicipality' => 17,
                'parish' => 'San Diego de Cabrutica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'idMunicipality' => 17,
                'parish' => 'Uverito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'idMunicipality' => 17,
                'parish' => 'Zuata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'idMunicipality' => 18,
                'parish' => 'Puerto La Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'idMunicipality' => 18,
                'parish' => 'Pozuelos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'idMunicipality' => 19,
                'parish' => 'Onoto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'idMunicipality' => 19,
                'parish' => 'San Pablo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'idMunicipality' => 20,
                'parish' => 'San Mateo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'idMunicipality' => 20,
                'parish' => 'El Carito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'idMunicipality' => 20,
                'parish' => 'Santa Inés',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'idMunicipality' => 20,
                'parish' => 'La Romereña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'idMunicipality' => 21,
                'parish' => 'Atapirire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 59,
                'idMunicipality' => 21,
                'parish' => 'Boca del Pao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'idMunicipality' => 21,
                'parish' => 'El Pao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'idMunicipality' => 21,
                'parish' => 'Pariaguán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'idMunicipality' => 22,
                'parish' => 'Cantaura',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'idMunicipality' => 22,
                'parish' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'idMunicipality' => 22,
                'parish' => 'Santa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'idMunicipality' => 22,
                'parish' => 'Urica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'idMunicipality' => 23,
                'parish' => 'Píritu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'idMunicipality' => 23,
                'parish' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'idMunicipality' => 24,
                'parish' => 'San José de Guanipa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'idMunicipality' => 25,
                'parish' => 'Boca de Uchire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'idMunicipality' => 25,
                'parish' => 'Boca de Chávez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'idMunicipality' => 26,
                'parish' => 'Pueblo Nuevo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'idMunicipality' => 26,
                'parish' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'idMunicipality' => 27,
                'parish' => 'Bergantín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'idMunicipality' => 27,
                'parish' => 'Caigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'idMunicipality' => 27,
                'parish' => 'El Carmen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'idMunicipality' => 27,
                'parish' => 'El Pilar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'idMunicipality' => 27,
                'parish' => 'Naricual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'idMunicipality' => 27,
                'parish' => 'San Crsitóbal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'idMunicipality' => 28,
                'parish' => 'Edmundo Barrios',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'idMunicipality' => 28,
                'parish' => 'Miguel Otero Silva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'idMunicipality' => 29,
                'parish' => 'Achaguas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'idMunicipality' => 29,
                'parish' => 'Apurito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'idMunicipality' => 29,
                'parish' => 'El Yagual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'idMunicipality' => 29,
                'parish' => 'Guachara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'idMunicipality' => 29,
                'parish' => 'Mucuritas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'idMunicipality' => 29,
                'parish' => 'Queseras del medio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'idMunicipality' => 30,
                'parish' => 'Biruaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'idMunicipality' => 31,
                'parish' => 'Bruzual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 89,
                'idMunicipality' => 31,
                'parish' => 'Mantecal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'idMunicipality' => 31,
                'parish' => 'Quintero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'idMunicipality' => 31,
                'parish' => 'Rincón Hondo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'idMunicipality' => 31,
                'parish' => 'San Vicente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'idMunicipality' => 32,
                'parish' => 'Guasdualito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'idMunicipality' => 32,
                'parish' => 'Aramendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'idMunicipality' => 32,
                'parish' => 'El Amparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'idMunicipality' => 32,
                'parish' => 'San Camilo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'idMunicipality' => 32,
                'parish' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'idMunicipality' => 33,
                'parish' => 'San Juan de Payara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'idMunicipality' => 33,
                'parish' => 'Codazzi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'idMunicipality' => 33,
                'parish' => 'Cunaviche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'idMunicipality' => 34,
                'parish' => 'Elorza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'idMunicipality' => 34,
                'parish' => 'La Trinidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'idMunicipality' => 35,
                'parish' => 'San Fernando',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'idMunicipality' => 35,
                'parish' => 'El Recreo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'idMunicipality' => 35,
                'parish' => 'Peñalver',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'idMunicipality' => 35,
                'parish' => 'San Rafael de Atamaica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'idMunicipality' => 36,
                'parish' => 'Pedro José Ovalles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'idMunicipality' => 36,
                'parish' => 'Joaquín Crespo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'idMunicipality' => 36,
                'parish' => 'José Casanova Godoy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'idMunicipality' => 36,
                'parish' => 'Madre María de San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'idMunicipality' => 36,
                'parish' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 112,
                'idMunicipality' => 36,
                'parish' => 'Los Tacarigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'idMunicipality' => 36,
                'parish' => 'Las Delicias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'idMunicipality' => 36,
                'parish' => 'Choroní',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'idMunicipality' => 37,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'idMunicipality' => 38,
                'parish' => 'Camatagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'idMunicipality' => 38,
                'parish' => 'Carmen de Cura',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'idMunicipality' => 39,
                'parish' => 'Santa Rita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'idMunicipality' => 39,
                'parish' => 'Francisco de Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'idMunicipality' => 39,
                'parish' => 'Moseñor Feliciano González',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'idMunicipality' => 40,
                'parish' => 'Santa Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'idMunicipality' => 41,
                'parish' => 'José Félix Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'idMunicipality' => 41,
                'parish' => 'Castor Nieves Ríos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'idMunicipality' => 41,
                'parish' => 'Las Guacamayas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'idMunicipality' => 41,
                'parish' => 'Pao de Zárate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 126,
                'idMunicipality' => 41,
                'parish' => 'Zuata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 127,
                'idMunicipality' => 42,
                'parish' => 'José Rafael Revenga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 128,
                'idMunicipality' => 43,
                'parish' => 'Palo Negro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 129,
                'idMunicipality' => 43,
                'parish' => 'San Martín de Porres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 130,
                'idMunicipality' => 44,
                'parish' => 'El Limón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 131,
                'idMunicipality' => 44,
                'parish' => 'Caña de Azúcar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 132,
                'idMunicipality' => 45,
                'parish' => 'Ocumare de la Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 133,
                'idMunicipality' => 46,
                'parish' => 'San Casimiro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 134,
                'idMunicipality' => 46,
                'parish' => 'Güiripa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 135,
                'idMunicipality' => 46,
                'parish' => 'Ollas de Caramacate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 136,
                'idMunicipality' => 46,
                'parish' => 'Valle Morín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 137,
                'idMunicipality' => 47,
                'parish' => 'San Sebastían',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 138,
                'idMunicipality' => 48,
                'parish' => 'Turmero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 139,
                'idMunicipality' => 48,
                'parish' => 'Arevalo Aponte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 140,
                'idMunicipality' => 48,
                'parish' => 'Chuao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 141,
                'idMunicipality' => 48,
                'parish' => 'Samán de Güere',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 142,
                'idMunicipality' => 48,
                'parish' => 'Alfredo Pacheco Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 143,
                'idMunicipality' => 49,
                'parish' => 'Santos Michelena',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 144,
                'idMunicipality' => 49,
                'parish' => 'Tiara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 145,
                'idMunicipality' => 50,
                'parish' => 'Cagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 146,
                'idMunicipality' => 50,
                'parish' => 'Bella Vista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 147,
                'idMunicipality' => 51,
                'parish' => 'Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 148,
                'idMunicipality' => 52,
                'parish' => 'Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 149,
                'idMunicipality' => 52,
                'parish' => 'Las Peñitas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 150,
                'idMunicipality' => 52,
                'parish' => 'San Francisco de Cara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 151,
                'idMunicipality' => 52,
                'parish' => 'Taguay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 152,
                'idMunicipality' => 53,
                'parish' => 'Zamora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 153,
                'idMunicipality' => 53,
                'parish' => 'Magdaleno',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 154,
                'idMunicipality' => 53,
                'parish' => 'San Francisco de Asís',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 155,
                'idMunicipality' => 53,
                'parish' => 'Valles de Tucutunemo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 156,
                'idMunicipality' => 53,
                'parish' => 'Augusto Mijares',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 157,
                'idMunicipality' => 54,
                'parish' => 'Sabaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 158,
                'idMunicipality' => 54,
                'parish' => 'Juan Antonio Rodríguez Domínguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 159,
                'idMunicipality' => 55,
                'parish' => 'El Cantón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 160,
                'idMunicipality' => 55,
                'parish' => 'Santa Cruz de Guacas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 161,
                'idMunicipality' => 55,
                'parish' => 'Puerto Vivas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 162,
                'idMunicipality' => 56,
                'parish' => 'Ticoporo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 163,
                'idMunicipality' => 56,
                'parish' => 'Nicolás Pulido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 164,
                'idMunicipality' => 56,
                'parish' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 165,
                'idMunicipality' => 57,
                'parish' => 'Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 166,
                'idMunicipality' => 57,
                'parish' => 'Guadarrama',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 167,
                'idMunicipality' => 57,
                'parish' => 'La Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 168,
                'idMunicipality' => 57,
                'parish' => 'San Antonio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 169,
                'idMunicipality' => 58,
                'parish' => 'Barinas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 170,
                'idMunicipality' => 58,
                'parish' => 'Alberto Arvelo Larriva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 171,
                'idMunicipality' => 58,
                'parish' => 'San Silvestre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 172,
                'idMunicipality' => 58,
                'parish' => 'Santa Inés',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 173,
                'idMunicipality' => 58,
                'parish' => 'Santa Lucía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 174,
                'idMunicipality' => 58,
                'parish' => 'Torumos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 175,
                'idMunicipality' => 58,
                'parish' => 'El Carmen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 176,
                'idMunicipality' => 58,
                'parish' => 'Rómulo Betancourt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 177,
                'idMunicipality' => 58,
                'parish' => 'Corazón de Jesús',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 178,
                'idMunicipality' => 58,
                'parish' => 'Ramón Ignacio Méndez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 179,
                'idMunicipality' => 58,
                'parish' => 'Alto Barinas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 180,
                'idMunicipality' => 58,
                'parish' => 'Manuel Palacio Fajardo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 181,
                'idMunicipality' => 58,
                'parish' => 'Juan Antonio Rodríguez Domínguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 182,
                'idMunicipality' => 58,
                'parish' => 'Dominga Ortiz de Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 183,
                'idMunicipality' => 59,
                'parish' => 'Barinitas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 184,
                'idMunicipality' => 59,
                'parish' => 'Altamira de Cáceres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 185,
                'idMunicipality' => 59,
                'parish' => 'Calderas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 186,
                'idMunicipality' => 60,
                'parish' => 'Barrancas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 187,
                'idMunicipality' => 60,
                'parish' => 'El Socorro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 188,
                'idMunicipality' => 60,
                'parish' => 'Mazparrito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 189,
                'idMunicipality' => 61,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 190,
                'idMunicipality' => 61,
                'parish' => 'Pedro Briceño Méndez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 191,
                'idMunicipality' => 61,
                'parish' => 'Ramón Ignacio Méndez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 192,
                'idMunicipality' => 61,
                'parish' => 'José Ignacio del Pumar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 193,
                'idMunicipality' => 62,
                'parish' => 'Obispos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 194,
                'idMunicipality' => 62,
                'parish' => 'Guasimitos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 195,
                'idMunicipality' => 62,
                'parish' => 'El Real',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 196,
                'idMunicipality' => 62,
                'parish' => 'La Luz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 197,
                'idMunicipality' => 63,
                'parish' => 'Ciudad Bolívia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 198,
                'idMunicipality' => 63,
                'parish' => 'José Ignacio Briceño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 199,
                'idMunicipality' => 63,
                'parish' => 'José Félix Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 200,
                'idMunicipality' => 63,
                'parish' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 201,
                'idMunicipality' => 64,
                'parish' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 202,
                'idMunicipality' => 64,
                'parish' => 'Dolores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 203,
                'idMunicipality' => 64,
                'parish' => 'Santa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 204,
                'idMunicipality' => 64,
                'parish' => 'Palacio Fajardo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 205,
                'idMunicipality' => 65,
                'parish' => 'Ciudad de Nutrias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 206,
                'idMunicipality' => 65,
                'parish' => 'El Regalo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 207,
                'idMunicipality' => 65,
                'parish' => 'Puerto Nutrias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 208,
                'idMunicipality' => 65,
                'parish' => 'Santa Catalina',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 209,
                'idMunicipality' => 66,
                'parish' => 'Cachamay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 210,
                'idMunicipality' => 66,
                'parish' => 'Chirica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 211,
                'idMunicipality' => 66,
                'parish' => 'Dalla Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 212,
                'idMunicipality' => 66,
                'parish' => 'Once de Abril',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 213,
                'idMunicipality' => 66,
                'parish' => 'Simón Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 214,
                'idMunicipality' => 66,
                'parish' => 'Unare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 215,
                'idMunicipality' => 66,
                'parish' => 'Universidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 216,
                'idMunicipality' => 66,
                'parish' => 'Vista al Sol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 217,
                'idMunicipality' => 66,
                'parish' => 'Pozo Verde',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 218,
                'idMunicipality' => 66,
                'parish' => 'Yocoima',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 219,
                'idMunicipality' => 66,
                'parish' => '5 de Julio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 220,
                'idMunicipality' => 67,
                'parish' => 'Cedeño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 221,
                'idMunicipality' => 67,
                'parish' => 'Altagracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 222,
                'idMunicipality' => 67,
                'parish' => 'Ascensión Farreras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 223,
                'idMunicipality' => 67,
                'parish' => 'Guaniamo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 224,
                'idMunicipality' => 67,
                'parish' => 'La Urbana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 225,
                'idMunicipality' => 67,
                'parish' => 'Pijiguaos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 226,
                'idMunicipality' => 68,
                'parish' => 'El Callao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 227,
                'idMunicipality' => 69,
                'parish' => 'Gran Sabana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 228,
                'idMunicipality' => 69,
                'parish' => 'Ikabarú',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 229,
                'idMunicipality' => 70,
                'parish' => 'Catedral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 230,
                'idMunicipality' => 70,
                'parish' => 'Zea',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 231,
                'idMunicipality' => 70,
                'parish' => 'Orinoco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 232,
                'idMunicipality' => 70,
                'parish' => 'José Antonio Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 233,
                'idMunicipality' => 70,
                'parish' => 'Marhuanta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 234,
                'idMunicipality' => 70,
                'parish' => 'Agua Salada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 235,
                'idMunicipality' => 70,
                'parish' => 'Vista Hermosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 236,
                'idMunicipality' => 70,
                'parish' => 'La Sabanita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 237,
                'idMunicipality' => 70,
                'parish' => 'Panapana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 238,
                'idMunicipality' => 71,
                'parish' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 239,
                'idMunicipality' => 71,
                'parish' => 'Pedro Cova',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 240,
                'idMunicipality' => 72,
                'parish' => 'Raúl Leoni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 241,
                'idMunicipality' => 72,
                'parish' => 'Barceloneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 242,
                'idMunicipality' => 72,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 243,
                'idMunicipality' => 72,
                'parish' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 244,
                'idMunicipality' => 73,
                'parish' => 'Roscio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 245,
                'idMunicipality' => 73,
                'parish' => 'Salóm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 246,
                'idMunicipality' => 74,
                'parish' => 'Sifontes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 247,
                'idMunicipality' => 74,
                'parish' => 'Dalla Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 248,
                'idMunicipality' => 74,
                'parish' => 'San Isidro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 249,
                'idMunicipality' => 75,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 250,
                'idMunicipality' => 75,
                'parish' => 'Aripao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 251,
                'idMunicipality' => 75,
                'parish' => 'Guarataro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 252,
                'idMunicipality' => 75,
                'parish' => 'Las Majadas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 253,
                'idMunicipality' => 75,
                'parish' => 'Moitaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 254,
                'idMunicipality' => 76,
                'parish' => 'Padre Pedro Chien',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 255,
                'idMunicipality' => 76,
                'parish' => 'Río Grande',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 256,
                'idMunicipality' => 77,
                'parish' => 'Bejuma',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 257,
                'idMunicipality' => 77,
                'parish' => 'Canoabo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 258,
                'idMunicipality' => 77,
                'parish' => 'Simón Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 259,
                'idMunicipality' => 78,
                'parish' => 'Güigüe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 260,
                'idMunicipality' => 78,
                'parish' => 'Carabobo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 261,
                'idMunicipality' => 78,
                'parish' => 'Tacarigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 262,
                'idMunicipality' => 79,
                'parish' => 'Mariara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 263,
                'idMunicipality' => 79,
                'parish' => 'Aguas Calientes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 264,
                'idMunicipality' => 80,
                'parish' => 'Ciudad Alianza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 265,
                'idMunicipality' => 80,
                'parish' => 'Guacara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 266,
                'idMunicipality' => 80,
                'parish' => 'Yagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 267,
                'idMunicipality' => 81,
                'parish' => 'Morón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 268,
                'idMunicipality' => 81,
                'parish' => 'Yagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 269,
                'idMunicipality' => 82,
                'parish' => 'Tocuyito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 270,
                'idMunicipality' => 82,
                'parish' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 271,
                'idMunicipality' => 83,
                'parish' => 'Los Guayos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 272,
                'idMunicipality' => 84,
                'parish' => 'Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 273,
                'idMunicipality' => 85,
                'parish' => 'Montalbán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 274,
                'idMunicipality' => 86,
                'parish' => 'Naguanagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 275,
                'idMunicipality' => 87,
                'parish' => 'Bartolomé Salóm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 276,
                'idMunicipality' => 87,
                'parish' => 'Democracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 277,
                'idMunicipality' => 87,
                'parish' => 'Fraternidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 278,
                'idMunicipality' => 87,
                'parish' => 'Goaigoaza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 279,
                'idMunicipality' => 87,
                'parish' => 'Juan José Flores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 280,
                'idMunicipality' => 87,
                'parish' => 'Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 281,
                'idMunicipality' => 87,
                'parish' => 'Borburata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 282,
                'idMunicipality' => 87,
                'parish' => 'Patanemo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 283,
                'idMunicipality' => 88,
                'parish' => 'San Diego',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 284,
                'idMunicipality' => 89,
                'parish' => 'San Joaquín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 285,
                'idMunicipality' => 90,
                'parish' => 'Candelaria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 286,
                'idMunicipality' => 90,
                'parish' => 'Catedral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 287,
                'idMunicipality' => 90,
                'parish' => 'El Socorro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 288,
                'idMunicipality' => 90,
                'parish' => 'Miguel Peña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 289,
                'idMunicipality' => 90,
                'parish' => 'Rafael Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 290,
                'idMunicipality' => 90,
                'parish' => 'San Blas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 291,
                'idMunicipality' => 90,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 292,
                'idMunicipality' => 90,
                'parish' => 'Santa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 293,
                'idMunicipality' => 90,
                'parish' => 'Negro Primero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 294,
                'idMunicipality' => 91,
                'parish' => 'Cojedes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 295,
                'idMunicipality' => 91,
                'parish' => 'Juan de Mata Suárez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 296,
                'idMunicipality' => 92,
                'parish' => 'Tinaquillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 297,
                'idMunicipality' => 93,
                'parish' => 'El Baúl',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 298,
                'idMunicipality' => 93,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 299,
                'idMunicipality' => 94,
                'parish' => 'La Aguadita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 300,
                'idMunicipality' => 94,
                'parish' => 'Macapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 301,
                'idMunicipality' => 95,
                'parish' => 'El Pao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 302,
                'idMunicipality' => 96,
                'parish' => 'El Amparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 303,
                'idMunicipality' => 96,
                'parish' => 'Libertad de Cojedes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 304,
                'idMunicipality' => 97,
                'parish' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 305,
                'idMunicipality' => 98,
                'parish' => 'San Carlos de Austria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 306,
                'idMunicipality' => 98,
                'parish' => 'Juan Ángel Bravo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 307,
                'idMunicipality' => 98,
                'parish' => 'Manuel Manrique',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 308,
                'idMunicipality' => 99,
                'parish' => 'General en Jefe José Laurencio Silva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 309,
                'idMunicipality' => 100,
                'parish' => 'Curiapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 310,
                'idMunicipality' => 100,
                'parish' => 'Almirante Luis Brión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 311,
                'idMunicipality' => 100,
                'parish' => 'Francisco Aniceto Lugo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 312,
                'idMunicipality' => 100,
                'parish' => 'Manuel Renaud',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 313,
                'idMunicipality' => 100,
                'parish' => 'Padre Barral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 314,
                'idMunicipality' => 100,
                'parish' => 'Santos de Abelgas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 315,
                'idMunicipality' => 101,
                'parish' => 'Imataca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 316,
                'idMunicipality' => 101,
                'parish' => 'Cinco de Julio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 317,
                'idMunicipality' => 101,
                'parish' => 'Juan Bautista Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 318,
                'idMunicipality' => 101,
                'parish' => 'Manuel Piar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 319,
                'idMunicipality' => 101,
                'parish' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 320,
                'idMunicipality' => 102,
                'parish' => 'Pedernales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 321,
                'idMunicipality' => 102,
                'parish' => 'Luis Beltrán Prieto Figueroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 322,
                'idMunicipality' => 103,
                'parish' => 'San José (Delta Amacuro)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 323,
                'idMunicipality' => 103,
                'parish' => 'José Vidal Marcano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 324,
                'idMunicipality' => 103,
                'parish' => 'Juan Millán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 325,
                'idMunicipality' => 103,
                'parish' => 'Leonardo Ruíz Pineda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 326,
                'idMunicipality' => 103,
                'parish' => 'Mariscal Antonio José de Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 327,
                'idMunicipality' => 103,
                'parish' => 'Monseñor Argimiro García',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 328,
                'idMunicipality' => 103,
                'parish' => 'San Rafael (Delta Amacuro)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 329,
                'idMunicipality' => 103,
                'parish' => 'Virgen del Valle',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 330,
                'idMunicipality' => 10,
                'parish' => 'Clarines',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 331,
                'idMunicipality' => 10,
                'parish' => 'Guanape',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 332,
                'idMunicipality' => 10,
                'parish' => 'Sabana de Uchire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 333,
                'idMunicipality' => 104,
                'parish' => 'Capadare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 334,
                'idMunicipality' => 104,
                'parish' => 'La Pastora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 335,
                'idMunicipality' => 104,
                'parish' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 336,
                'idMunicipality' => 104,
                'parish' => 'San Juan de los Cayos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 337,
                'idMunicipality' => 105,
                'parish' => 'Aracua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 338,
                'idMunicipality' => 105,
                'parish' => 'La Peña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 339,
                'idMunicipality' => 105,
                'parish' => 'San Luis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 340,
                'idMunicipality' => 106,
                'parish' => 'Bariro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 341,
                'idMunicipality' => 106,
                'parish' => 'Borojó',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 342,
                'idMunicipality' => 106,
                'parish' => 'Capatárida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 343,
                'idMunicipality' => 106,
                'parish' => 'Guajiro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 344,
                'idMunicipality' => 106,
                'parish' => 'Seque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 345,
                'idMunicipality' => 106,
                'parish' => 'Zazárida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 346,
                'idMunicipality' => 106,
                'parish' => 'Valle de Eroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 347,
                'idMunicipality' => 107,
                'parish' => 'Cacique Manaure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 348,
                'idMunicipality' => 108,
                'parish' => 'Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 349,
                'idMunicipality' => 108,
                'parish' => 'Carirubana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 350,
                'idMunicipality' => 108,
                'parish' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 351,
                'idMunicipality' => 108,
                'parish' => 'Urbana Punta Cardón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 352,
                'idMunicipality' => 109,
                'parish' => 'La Vela de Coro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 353,
                'idMunicipality' => 109,
                'parish' => 'Acurigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 354,
                'idMunicipality' => 109,
                'parish' => 'Guaibacoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 355,
                'idMunicipality' => 109,
                'parish' => 'Las Calderas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 356,
                'idMunicipality' => 109,
                'parish' => 'Macoruca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 357,
                'idMunicipality' => 110,
                'parish' => 'Dabajuro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 358,
                'idMunicipality' => 111,
                'parish' => 'Agua Clara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 359,
                'idMunicipality' => 111,
                'parish' => 'Avaria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 360,
                'idMunicipality' => 111,
                'parish' => 'Pedregal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 361,
                'idMunicipality' => 111,
                'parish' => 'Piedra Grande',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 362,
                'idMunicipality' => 111,
                'parish' => 'Purureche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 363,
                'idMunicipality' => 112,
                'parish' => 'Adaure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 364,
                'idMunicipality' => 112,
                'parish' => 'Adícora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 365,
                'idMunicipality' => 112,
                'parish' => 'Baraived',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 366,
                'idMunicipality' => 112,
                'parish' => 'Buena Vista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 367,
                'idMunicipality' => 112,
                'parish' => 'Jadacaquiva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 368,
                'idMunicipality' => 112,
                'parish' => 'El Vínculo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 369,
                'idMunicipality' => 112,
                'parish' => 'El Hato',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 370,
                'idMunicipality' => 112,
                'parish' => 'Moruy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 371,
                'idMunicipality' => 112,
                'parish' => 'Pueblo Nuevo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 372,
                'idMunicipality' => 113,
                'parish' => 'Agua Larga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 373,
                'idMunicipality' => 113,
                'parish' => 'El Paují',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 374,
                'idMunicipality' => 113,
                'parish' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 375,
                'idMunicipality' => 113,
                'parish' => 'Mapararí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 376,
                'idMunicipality' => 114,
                'parish' => 'Agua Linda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 377,
                'idMunicipality' => 114,
                'parish' => 'Araurima',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 378,
                'idMunicipality' => 114,
                'parish' => 'Jacura',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 379,
                'idMunicipality' => 115,
                'parish' => 'Tucacas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 380,
                'idMunicipality' => 115,
                'parish' => 'Boca de Aroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 381,
                'idMunicipality' => 116,
                'parish' => 'Los Taques',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 382,
                'idMunicipality' => 116,
                'parish' => 'Judibana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 383,
                'idMunicipality' => 117,
                'parish' => 'Mene de Mauroa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 384,
                'idMunicipality' => 117,
                'parish' => 'San Félix',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 385,
                'idMunicipality' => 117,
                'parish' => 'Casigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 386,
                'idMunicipality' => 118,
                'parish' => 'Guzmán Guillermo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 387,
                'idMunicipality' => 118,
                'parish' => 'Mitare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 388,
                'idMunicipality' => 118,
                'parish' => 'Río Seco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 389,
                'idMunicipality' => 118,
                'parish' => 'Sabaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 390,
                'idMunicipality' => 118,
                'parish' => 'San Antonio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 391,
                'idMunicipality' => 118,
                'parish' => 'San Gabriel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 392,
                'idMunicipality' => 118,
                'parish' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 393,
                'idMunicipality' => 119,
                'parish' => 'Boca del Tocuyo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 394,
                'idMunicipality' => 119,
                'parish' => 'Chichiriviche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 395,
                'idMunicipality' => 119,
                'parish' => 'Tocuyo de la Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 396,
                'idMunicipality' => 120,
                'parish' => 'Palmasola',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 397,
                'idMunicipality' => 121,
                'parish' => 'Cabure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 398,
                'idMunicipality' => 121,
                'parish' => 'Colina',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 399,
                'idMunicipality' => 121,
                'parish' => 'Curimagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 400,
                'idMunicipality' => 122,
                'parish' => 'San José de la Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 401,
                'idMunicipality' => 122,
                'parish' => 'Píritu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 402,
                'idMunicipality' => 123,
                'parish' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 403,
                'idMunicipality' => 124,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 404,
                'idMunicipality' => 124,
                'parish' => 'Pecaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 405,
                'idMunicipality' => 125,
                'parish' => 'Tocópero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 406,
                'idMunicipality' => 126,
                'parish' => 'El Charal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 407,
                'idMunicipality' => 126,
                'parish' => 'Las Vegas del Tuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 408,
                'idMunicipality' => 126,
                'parish' => 'Santa Cruz de Bucaral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 409,
                'idMunicipality' => 127,
                'parish' => 'Bruzual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 410,
                'idMunicipality' => 127,
                'parish' => 'Urumaco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 411,
                'idMunicipality' => 128,
                'parish' => 'Puerto Cumarebo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 412,
                'idMunicipality' => 128,
                'parish' => 'La Ciénaga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 413,
                'idMunicipality' => 128,
                'parish' => 'La Soledad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 414,
                'idMunicipality' => 128,
                'parish' => 'Pueblo Cumarebo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 415,
                'idMunicipality' => 128,
                'parish' => 'Zazárida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 416,
                'idMunicipality' => 113,
                'parish' => 'Churuguara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 417,
                'idMunicipality' => 129,
                'parish' => 'Camaguán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 418,
                'idMunicipality' => 129,
                'parish' => 'Puerto Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 419,
                'idMunicipality' => 129,
                'parish' => 'Uverito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 420,
                'idMunicipality' => 130,
                'parish' => 'Chaguaramas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 421,
                'idMunicipality' => 131,
                'parish' => 'El Socorro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 422,
                'idMunicipality' => 132,
                'parish' => 'Tucupido',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 423,
                'idMunicipality' => 132,
                'parish' => 'San Rafael de Laya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 424,
                'idMunicipality' => 133,
                'parish' => 'Altagracia de Orituco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 425,
                'idMunicipality' => 133,
                'parish' => 'San Rafael de Orituco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 426,
                'idMunicipality' => 133,
                'parish' => 'San Francisco Javier de Lezama',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 427,
                'idMunicipality' => 133,
                'parish' => 'Paso Real de Macaira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 428,
                'idMunicipality' => 133,
                'parish' => 'Carlos Soublette',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 429,
                'idMunicipality' => 133,
                'parish' => 'San Francisco de Macaira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 430,
                'idMunicipality' => 133,
                'parish' => 'Libertad de Orituco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 431,
                'idMunicipality' => 134,
                'parish' => 'Cantaclaro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 432,
                'idMunicipality' => 134,
                'parish' => 'San Juan de los Morros',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 433,
                'idMunicipality' => 134,
                'parish' => 'Parapara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 434,
                'idMunicipality' => 135,
                'parish' => 'El Sombrero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 435,
                'idMunicipality' => 135,
                'parish' => 'Sosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 436,
                'idMunicipality' => 136,
                'parish' => 'Las Mercedes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 437,
                'idMunicipality' => 136,
                'parish' => 'Cabruta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 438,
                'idMunicipality' => 136,
                'parish' => 'Santa Rita de Manapire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 439,
                'idMunicipality' => 137,
                'parish' => 'Valle de la Pascua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 440,
                'idMunicipality' => 137,
                'parish' => 'Espino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 441,
                'idMunicipality' => 138,
                'parish' => 'San José de Unare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 442,
                'idMunicipality' => 138,
                'parish' => 'Zaraza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 443,
                'idMunicipality' => 139,
                'parish' => 'San José de Tiznados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 444,
                'idMunicipality' => 139,
                'parish' => 'San Francisco de Tiznados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 445,
                'idMunicipality' => 139,
                'parish' => 'San Lorenzo de Tiznados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 446,
                'idMunicipality' => 139,
                'parish' => 'Ortiz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 447,
                'idMunicipality' => 140,
                'parish' => 'Guayabal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 448,
                'idMunicipality' => 140,
                'parish' => 'Cazorla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 449,
                'idMunicipality' => 141,
                'parish' => 'San José de Guaribe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 450,
                'idMunicipality' => 141,
                'parish' => 'Uveral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 451,
                'idMunicipality' => 142,
                'parish' => 'Santa María de Ipire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 452,
                'idMunicipality' => 142,
                'parish' => 'Altamira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 453,
                'idMunicipality' => 143,
                'parish' => 'El Calvario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 454,
                'idMunicipality' => 143,
                'parish' => 'El Rastro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 455,
                'idMunicipality' => 143,
                'parish' => 'Guardatinajas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 456,
                'idMunicipality' => 143,
                'parish' => 'Capital Urbana Calabozo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 457,
                'idMunicipality' => 144,
                'parish' => 'Quebrada Honda de Guache',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 458,
                'idMunicipality' => 144,
                'parish' => 'Pío Tamayo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 459,
                'idMunicipality' => 144,
                'parish' => 'Yacambú',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 460,
                'idMunicipality' => 145,
                'parish' => 'Fréitez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 461,
                'idMunicipality' => 145,
                'parish' => 'José María Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 462,
                'idMunicipality' => 146,
                'parish' => 'Catedral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 463,
                'idMunicipality' => 146,
                'parish' => 'Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 464,
                'idMunicipality' => 146,
                'parish' => 'El Cují',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 465,
                'idMunicipality' => 146,
                'parish' => 'Juan de Villegas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 466,
                'idMunicipality' => 146,
                'parish' => 'Santa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 467,
                'idMunicipality' => 146,
                'parish' => 'Tamaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 468,
                'idMunicipality' => 146,
                'parish' => 'Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 469,
                'idMunicipality' => 146,
                'parish' => 'Aguedo Felipe Alvarado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 470,
                'idMunicipality' => 146,
                'parish' => 'Buena Vista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 471,
                'idMunicipality' => 146,
                'parish' => 'Juárez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 472,
                'idMunicipality' => 147,
                'parish' => 'Juan Bautista Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 473,
                'idMunicipality' => 147,
                'parish' => 'Cuara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 474,
                'idMunicipality' => 147,
                'parish' => 'Diego de Lozada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 475,
                'idMunicipality' => 147,
                'parish' => 'Paraíso de San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 476,
                'idMunicipality' => 147,
                'parish' => 'San Miguel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 477,
                'idMunicipality' => 147,
                'parish' => 'Tintorero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 478,
                'idMunicipality' => 147,
                'parish' => 'José Bernardo Dorante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 479,
                'idMunicipality' => 147,
                'parish' => 'Coronel Mariano Peraza ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 480,
                'idMunicipality' => 148,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 481,
                'idMunicipality' => 148,
                'parish' => 'Anzoátegui',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 482,
                'idMunicipality' => 148,
                'parish' => 'Guarico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 483,
                'idMunicipality' => 148,
                'parish' => 'Hilario Luna y Luna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 484,
                'idMunicipality' => 148,
                'parish' => 'Humocaro Alto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 485,
                'idMunicipality' => 148,
                'parish' => 'Humocaro Bajo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 486,
                'idMunicipality' => 148,
                'parish' => 'La Candelaria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 487,
                'idMunicipality' => 148,
                'parish' => 'Morán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 488,
                'idMunicipality' => 149,
                'parish' => 'Cabudare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 489,
                'idMunicipality' => 149,
                'parish' => 'José Gregorio Bastidas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 490,
                'idMunicipality' => 149,
                'parish' => 'Agua Viva',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 491,
                'idMunicipality' => 150,
                'parish' => 'Sarare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 492,
                'idMunicipality' => 150,
                'parish' => 'Buría',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 493,
                'idMunicipality' => 150,
                'parish' => 'Gustavo Vegas León',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 494,
                'idMunicipality' => 151,
                'parish' => 'Trinidad Samuel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 495,
                'idMunicipality' => 151,
                'parish' => 'Antonio Díaz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 496,
                'idMunicipality' => 151,
                'parish' => 'Camacaro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 497,
                'idMunicipality' => 151,
                'parish' => 'Castañeda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 498,
                'idMunicipality' => 151,
                'parish' => 'Cecilio Zubillaga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 499,
                'idMunicipality' => 151,
                'parish' => 'Chiquinquirá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 500,
                'idMunicipality' => 151,
                'parish' => 'El Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 501,
                'idMunicipality' => 151,
                'parish' => 'Espinoza de los Monteros',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 502,
                'idMunicipality' => 151,
                'parish' => 'Lara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 503,
                'idMunicipality' => 151,
                'parish' => 'Las Mercedes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 504,
                'idMunicipality' => 151,
                'parish' => 'Manuel Morillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 505,
                'idMunicipality' => 151,
                'parish' => 'Montaña Verde',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 506,
                'idMunicipality' => 151,
                'parish' => 'Montes de Oca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 507,
                'idMunicipality' => 151,
                'parish' => 'Torres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 508,
                'idMunicipality' => 151,
                'parish' => 'Heriberto Arroyo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 509,
                'idMunicipality' => 151,
                'parish' => 'Reyes Vargas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 510,
                'idMunicipality' => 151,
                'parish' => 'Altagracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 511,
                'idMunicipality' => 152,
                'parish' => 'Siquisique',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 512,
                'idMunicipality' => 152,
                'parish' => 'Moroturo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 513,
                'idMunicipality' => 152,
                'parish' => 'San Miguel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 514,
                'idMunicipality' => 152,
                'parish' => 'Xaguas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 515,
                'idMunicipality' => 179,
                'parish' => 'Presidente Betancourt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 516,
                'idMunicipality' => 179,
                'parish' => 'Presidente Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 517,
                'idMunicipality' => 179,
                'parish' => 'Presidente Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 518,
                'idMunicipality' => 179,
                'parish' => 'Gabriel Picón González',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 519,
                'idMunicipality' => 179,
                'parish' => 'Héctor Amable Mora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 520,
                'idMunicipality' => 179,
                'parish' => 'José Nucete Sardi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 521,
                'idMunicipality' => 179,
                'parish' => 'Pulido Méndez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 522,
                'idMunicipality' => 180,
                'parish' => 'La Azulita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 523,
                'idMunicipality' => 181,
                'parish' => 'Santa Cruz de Mora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 524,
                'idMunicipality' => 181,
                'parish' => 'Mesa Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 525,
                'idMunicipality' => 181,
                'parish' => 'Mesa de Las Palmas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 526,
                'idMunicipality' => 182,
                'parish' => 'Aricagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 527,
                'idMunicipality' => 182,
                'parish' => 'San Antonio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 528,
                'idMunicipality' => 183,
                'parish' => 'Canagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 529,
                'idMunicipality' => 183,
                'parish' => 'Capurí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 530,
                'idMunicipality' => 183,
                'parish' => 'Chacantá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 531,
                'idMunicipality' => 183,
                'parish' => 'El Molino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 532,
                'idMunicipality' => 183,
                'parish' => 'Guaimaral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 533,
                'idMunicipality' => 183,
                'parish' => 'Mucutuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 534,
                'idMunicipality' => 183,
                'parish' => 'Mucuchachí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 535,
                'idMunicipality' => 184,
                'parish' => 'Fernández Peña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 536,
                'idMunicipality' => 184,
                'parish' => 'Matriz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 537,
                'idMunicipality' => 184,
                'parish' => 'Montalbán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 538,
                'idMunicipality' => 184,
                'parish' => 'Acequias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 539,
                'idMunicipality' => 184,
                'parish' => 'Jají',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 540,
                'idMunicipality' => 184,
                'parish' => 'La Mesa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 541,
                'idMunicipality' => 184,
                'parish' => 'San José del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 542,
                'idMunicipality' => 185,
                'parish' => 'Tucaní',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 543,
                'idMunicipality' => 185,
                'parish' => 'Florencio Ramírez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 544,
                'idMunicipality' => 186,
                'parish' => 'Santo Domingo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 545,
                'idMunicipality' => 186,
                'parish' => 'Las Piedras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 546,
                'idMunicipality' => 187,
                'parish' => 'Guaraque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 547,
                'idMunicipality' => 187,
                'parish' => 'Mesa de Quintero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 548,
                'idMunicipality' => 187,
                'parish' => 'Río Negro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 549,
                'idMunicipality' => 188,
                'parish' => 'Arapuey',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 550,
                'idMunicipality' => 188,
                'parish' => 'Palmira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 551,
                'idMunicipality' => 189,
                'parish' => 'San Cristóbal de Torondoy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 552,
                'idMunicipality' => 189,
                'parish' => 'Torondoy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 553,
                'idMunicipality' => 190,
                'parish' => 'Antonio Spinetti Dini',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 554,
                'idMunicipality' => 190,
                'parish' => 'Arias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 555,
                'idMunicipality' => 190,
                'parish' => 'Caracciolo Parra Pérez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 556,
                'idMunicipality' => 190,
                'parish' => 'Domingo Peña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 557,
                'idMunicipality' => 190,
                'parish' => 'El Llano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 558,
                'idMunicipality' => 190,
                'parish' => 'Gonzalo Picón Febres',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 559,
                'idMunicipality' => 190,
                'parish' => 'Jacinto Plaza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 560,
                'idMunicipality' => 190,
                'parish' => 'Juan Rodríguez Suárez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 561,
                'idMunicipality' => 190,
                'parish' => 'Lasso de la Vega',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 562,
                'idMunicipality' => 190,
                'parish' => 'Mariano Picón Salas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 563,
                'idMunicipality' => 190,
                'parish' => 'Milla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 564,
                'idMunicipality' => 190,
                'parish' => 'Osuna Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 565,
                'idMunicipality' => 190,
                'parish' => 'Sagrario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 566,
                'idMunicipality' => 190,
                'parish' => 'El Morro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 567,
                'idMunicipality' => 190,
                'parish' => 'Los Nevados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 568,
                'idMunicipality' => 191,
                'parish' => 'Andrés Eloy Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 569,
                'idMunicipality' => 191,
                'parish' => 'La Venta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 570,
                'idMunicipality' => 191,
                'parish' => 'Piñango',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 571,
                'idMunicipality' => 191,
                'parish' => 'Timotes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 572,
                'idMunicipality' => 192,
                'parish' => 'Eloy Paredes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 573,
                'idMunicipality' => 192,
                'parish' => 'San Rafael de Alcázar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 574,
                'idMunicipality' => 192,
                'parish' => 'Santa Elena de Arenales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 575,
                'idMunicipality' => 193,
                'parish' => 'Santa María de Caparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 576,
                'idMunicipality' => 194,
                'parish' => 'Pueblo Llano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 577,
                'idMunicipality' => 195,
                'parish' => 'Cacute',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 578,
                'idMunicipality' => 195,
                'parish' => 'La Toma',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 579,
                'idMunicipality' => 195,
                'parish' => 'Mucuchíes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 580,
                'idMunicipality' => 195,
                'parish' => 'Mucurubá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 581,
                'idMunicipality' => 195,
                'parish' => 'San Rafael',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 582,
                'idMunicipality' => 196,
                'parish' => 'Gerónimo Maldonado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 583,
                'idMunicipality' => 196,
                'parish' => 'Bailadores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 584,
                'idMunicipality' => 197,
                'parish' => 'Tabay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 585,
                'idMunicipality' => 198,
                'parish' => 'Chiguará',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 586,
                'idMunicipality' => 198,
                'parish' => 'Estánquez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 587,
                'idMunicipality' => 198,
                'parish' => 'Lagunillas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 588,
                'idMunicipality' => 198,
                'parish' => 'La Trampa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 589,
                'idMunicipality' => 198,
                'parish' => 'Pueblo Nuevo del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 590,
                'idMunicipality' => 198,
                'parish' => 'San Juan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 591,
                'idMunicipality' => 199,
                'parish' => 'El Amparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 592,
                'idMunicipality' => 199,
                'parish' => 'El Llano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 593,
                'idMunicipality' => 199,
                'parish' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 594,
                'idMunicipality' => 199,
                'parish' => 'Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 595,
                'idMunicipality' => 200,
                'parish' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 596,
                'idMunicipality' => 200,
                'parish' => 'María de la Concepción Palacios Blanco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 597,
                'idMunicipality' => 200,
                'parish' => 'Nueva Bolivia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 598,
                'idMunicipality' => 200,
                'parish' => 'Santa Apolonia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 599,
                'idMunicipality' => 201,
                'parish' => 'Caño El Tigre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 600,
                'idMunicipality' => 201,
                'parish' => 'Zea',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 601,
                'idMunicipality' => 223,
                'parish' => 'Aragüita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 602,
                'idMunicipality' => 223,
                'parish' => 'Arévalo González',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 603,
                'idMunicipality' => 223,
                'parish' => 'Capaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 604,
                'idMunicipality' => 223,
                'parish' => 'Caucagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 605,
                'idMunicipality' => 223,
                'parish' => 'Panaquire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 606,
                'idMunicipality' => 223,
                'parish' => 'Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 607,
                'idMunicipality' => 223,
                'parish' => 'El Café',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 608,
                'idMunicipality' => 223,
                'parish' => 'Marizapa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 609,
                'idMunicipality' => 224,
                'parish' => 'Cumbo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 610,
                'idMunicipality' => 224,
                'parish' => 'San José de Barlovento',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 611,
                'idMunicipality' => 225,
                'parish' => 'El Cafetal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 612,
                'idMunicipality' => 225,
                'parish' => 'Las Minas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 613,
                'idMunicipality' => 225,
                'parish' => 'Nuestra Señora del Rosario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 614,
                'idMunicipality' => 226,
                'parish' => 'Higuerote',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 615,
                'idMunicipality' => 226,
                'parish' => 'Curiepe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 616,
                'idMunicipality' => 226,
                'parish' => 'Tacarigua de Brión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 617,
                'idMunicipality' => 227,
                'parish' => 'Mamporal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 618,
                'idMunicipality' => 228,
                'parish' => 'Carrizal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 619,
                'idMunicipality' => 229,
                'parish' => 'Chacao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 620,
                'idMunicipality' => 230,
                'parish' => 'Charallave',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 621,
                'idMunicipality' => 230,
                'parish' => 'Las Brisas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 622,
                'idMunicipality' => 231,
                'parish' => 'El Hatillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 623,
                'idMunicipality' => 232,
                'parish' => 'Altagracia de la Montaña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 624,
                'idMunicipality' => 232,
                'parish' => 'Cecilio Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 625,
                'idMunicipality' => 232,
                'parish' => 'Los Teques',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 626,
                'idMunicipality' => 232,
                'parish' => 'El Jarillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 627,
                'idMunicipality' => 232,
                'parish' => 'San Pedro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 628,
                'idMunicipality' => 232,
                'parish' => 'Tácata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 629,
                'idMunicipality' => 232,
                'parish' => 'Paracotos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 630,
                'idMunicipality' => 233,
                'parish' => 'Cartanal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 631,
                'idMunicipality' => 233,
                'parish' => 'Santa Teresa del Tuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 632,
                'idMunicipality' => 234,
                'parish' => 'La Democracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 633,
                'idMunicipality' => 234,
                'parish' => 'Ocumare del Tuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 634,
                'idMunicipality' => 234,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 635,
                'idMunicipality' => 235,
                'parish' => 'San Antonio de los Altos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 636,
                'idMunicipality' => 236,
                'parish' => 'Río Chico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 637,
                'idMunicipality' => 236,
                'parish' => 'El Guapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 638,
                'idMunicipality' => 236,
                'parish' => 'Tacarigua de la Laguna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 639,
                'idMunicipality' => 236,
                'parish' => 'Paparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 640,
                'idMunicipality' => 236,
                'parish' => 'San Fernando del Guapo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 641,
                'idMunicipality' => 237,
                'parish' => 'Santa Lucía del Tuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 642,
                'idMunicipality' => 238,
                'parish' => 'Cúpira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 643,
                'idMunicipality' => 238,
                'parish' => 'Machurucuto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 644,
                'idMunicipality' => 239,
                'parish' => 'Guarenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 645,
                'idMunicipality' => 240,
                'parish' => 'San Antonio de Yare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 646,
                'idMunicipality' => 240,
                'parish' => 'San Francisco de Yare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 647,
                'idMunicipality' => 241,
                'parish' => 'Leoncio Martínez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 648,
                'idMunicipality' => 241,
                'parish' => 'Petare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 649,
                'idMunicipality' => 241,
                'parish' => 'Caucagüita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 650,
                'idMunicipality' => 241,
                'parish' => 'Filas de Mariche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 651,
                'idMunicipality' => 241,
                'parish' => 'La Dolorita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 652,
                'idMunicipality' => 242,
                'parish' => 'Cúa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 653,
                'idMunicipality' => 242,
                'parish' => 'Nueva Cúa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 654,
                'idMunicipality' => 243,
                'parish' => 'Guatire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 655,
                'idMunicipality' => 243,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 656,
                'idMunicipality' => 258,
                'parish' => 'San Antonio de Maturín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 657,
                'idMunicipality' => 258,
                'parish' => 'San Francisco de Maturín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 658,
                'idMunicipality' => 259,
                'parish' => 'Aguasay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 659,
                'idMunicipality' => 260,
                'parish' => 'Caripito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 660,
                'idMunicipality' => 261,
                'parish' => 'El Guácharo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 661,
                'idMunicipality' => 261,
                'parish' => 'La Guanota',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 662,
                'idMunicipality' => 261,
                'parish' => 'Sabana de Piedra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 663,
                'idMunicipality' => 261,
                'parish' => 'San Agustín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 664,
                'idMunicipality' => 261,
                'parish' => 'Teresen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 665,
                'idMunicipality' => 261,
                'parish' => 'Caripe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 666,
                'idMunicipality' => 262,
                'parish' => 'Areo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 667,
                'idMunicipality' => 262,
                'parish' => 'Capital Cedeño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 668,
                'idMunicipality' => 262,
                'parish' => 'San Félix de Cantalicio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 669,
                'idMunicipality' => 262,
                'parish' => 'Viento Fresco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 670,
                'idMunicipality' => 263,
                'parish' => 'El Tejero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 671,
                'idMunicipality' => 263,
                'parish' => 'Punta de Mata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 672,
                'idMunicipality' => 264,
                'parish' => 'Chaguaramas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 673,
                'idMunicipality' => 264,
                'parish' => 'Las Alhuacas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 674,
                'idMunicipality' => 264,
                'parish' => 'Tabasca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 675,
                'idMunicipality' => 264,
                'parish' => 'Temblador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 676,
                'idMunicipality' => 265,
                'parish' => 'Alto de los Godos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 677,
                'idMunicipality' => 265,
                'parish' => 'Boquerón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 678,
                'idMunicipality' => 265,
                'parish' => 'Las Cocuizas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 679,
                'idMunicipality' => 265,
                'parish' => 'La Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 680,
                'idMunicipality' => 265,
                'parish' => 'San Simón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 681,
                'idMunicipality' => 265,
                'parish' => 'El Corozo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 682,
                'idMunicipality' => 265,
                'parish' => 'El Furrial',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 683,
                'idMunicipality' => 265,
                'parish' => 'Jusepín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 684,
                'idMunicipality' => 265,
                'parish' => 'La Pica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 685,
                'idMunicipality' => 265,
                'parish' => 'San Vicente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 686,
                'idMunicipality' => 266,
                'parish' => 'Aparicio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 687,
                'idMunicipality' => 266,
                'parish' => 'Aragua de Maturín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 688,
                'idMunicipality' => 266,
                'parish' => 'Chaguamal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 689,
                'idMunicipality' => 266,
                'parish' => 'El Pinto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 690,
                'idMunicipality' => 266,
                'parish' => 'Guanaguana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 691,
                'idMunicipality' => 266,
                'parish' => 'La Toscana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 692,
                'idMunicipality' => 266,
                'parish' => 'Taguaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 693,
                'idMunicipality' => 267,
                'parish' => 'Cachipo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 694,
                'idMunicipality' => 267,
                'parish' => 'Quiriquire',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 695,
                'idMunicipality' => 268,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 696,
                'idMunicipality' => 269,
                'parish' => 'Barrancas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 697,
                'idMunicipality' => 269,
                'parish' => 'Los Barrancos de Fajardo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 698,
                'idMunicipality' => 270,
                'parish' => 'Uracoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 699,
                'idMunicipality' => 271,
                'parish' => 'Antolín del Campo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 700,
                'idMunicipality' => 272,
                'parish' => 'Arismendi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 701,
                'idMunicipality' => 273,
                'parish' => 'García',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 702,
                'idMunicipality' => 273,
                'parish' => 'Francisco Fajardo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 703,
                'idMunicipality' => 274,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 704,
                'idMunicipality' => 274,
                'parish' => 'Guevara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 705,
                'idMunicipality' => 274,
                'parish' => 'Matasiete',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 706,
                'idMunicipality' => 274,
                'parish' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 707,
                'idMunicipality' => 274,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 708,
                'idMunicipality' => 275,
                'parish' => 'Aguirre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 709,
                'idMunicipality' => 275,
                'parish' => 'Maneiro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 710,
                'idMunicipality' => 276,
                'parish' => 'Adrián',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 711,
                'idMunicipality' => 276,
                'parish' => 'Juan Griego',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 712,
                'idMunicipality' => 276,
                'parish' => 'Yaguaraparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 713,
                'idMunicipality' => 277,
                'parish' => 'Porlamar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 714,
                'idMunicipality' => 278,
                'parish' => 'San Francisco de Macanao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 715,
                'idMunicipality' => 278,
                'parish' => 'Boca de Río',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 716,
                'idMunicipality' => 279,
                'parish' => 'Tubores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 717,
                'idMunicipality' => 279,
                'parish' => 'Los Baleales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 718,
                'idMunicipality' => 280,
                'parish' => 'Vicente Fuentes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 719,
                'idMunicipality' => 280,
                'parish' => 'Villalba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 720,
                'idMunicipality' => 281,
                'parish' => 'San Juan Bautista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 721,
                'idMunicipality' => 281,
                'parish' => 'Zabala',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 722,
                'idMunicipality' => 283,
                'parish' => 'Capital Araure',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 723,
                'idMunicipality' => 283,
                'parish' => 'Río Acarigua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 724,
                'idMunicipality' => 284,
                'parish' => 'Capital Esteller',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 725,
                'idMunicipality' => 284,
                'parish' => 'Uveral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 726,
                'idMunicipality' => 285,
                'parish' => 'Guanare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 727,
                'idMunicipality' => 285,
                'parish' => 'Córdoba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 728,
                'idMunicipality' => 285,
                'parish' => 'San José de la Montaña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 729,
                'idMunicipality' => 285,
                'parish' => 'San Juan de Guanaguanare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 730,
                'idMunicipality' => 285,
                'parish' => 'Virgen de la Coromoto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 731,
                'idMunicipality' => 286,
                'parish' => 'Guanarito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 732,
                'idMunicipality' => 286,
                'parish' => 'Trinidad de la Capilla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 733,
                'idMunicipality' => 286,
                'parish' => 'Divina Pastora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 734,
                'idMunicipality' => 287,
                'parish' => 'Monseñor José Vicente de Unda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 735,
                'idMunicipality' => 287,
                'parish' => 'Peña Blanca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 736,
                'idMunicipality' => 288,
                'parish' => 'Capital Ospino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 737,
                'idMunicipality' => 288,
                'parish' => 'Aparición',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 738,
                'idMunicipality' => 288,
                'parish' => 'La Estación',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 739,
                'idMunicipality' => 289,
                'parish' => 'Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 740,
                'idMunicipality' => 289,
                'parish' => 'Payara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 741,
                'idMunicipality' => 289,
                'parish' => 'Pimpinela',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 742,
                'idMunicipality' => 289,
                'parish' => 'Ramón Peraza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 743,
                'idMunicipality' => 290,
                'parish' => 'Papelón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 744,
                'idMunicipality' => 290,
                'parish' => 'Caño Delgadito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 745,
                'idMunicipality' => 291,
                'parish' => 'San Genaro de Boconoito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 746,
                'idMunicipality' => 291,
                'parish' => 'Antolín Tovar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 747,
                'idMunicipality' => 292,
                'parish' => 'San Rafael de Onoto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 748,
                'idMunicipality' => 292,
                'parish' => 'Santa Fe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 749,
                'idMunicipality' => 292,
                'parish' => 'Thermo Morles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 750,
                'idMunicipality' => 293,
                'parish' => 'Santa Rosalía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 751,
                'idMunicipality' => 293,
                'parish' => 'Florida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 752,
                'idMunicipality' => 294,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 753,
                'idMunicipality' => 294,
                'parish' => 'Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 754,
                'idMunicipality' => 294,
                'parish' => 'San Rafael de Palo Alzado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 755,
                'idMunicipality' => 294,
                'parish' => 'Uvencio Antonio Velásquez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 756,
                'idMunicipality' => 294,
                'parish' => 'San José de Saguaz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 757,
                'idMunicipality' => 294,
                'parish' => 'Villa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 758,
                'idMunicipality' => 295,
                'parish' => 'Turén',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 759,
                'idMunicipality' => 295,
                'parish' => 'Canelones',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 760,
                'idMunicipality' => 295,
                'parish' => 'Santa Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 761,
                'idMunicipality' => 295,
                'parish' => 'San Isidro Labrador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 762,
                'idMunicipality' => 296,
                'parish' => 'Mariño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 763,
                'idMunicipality' => 296,
                'parish' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 764,
                'idMunicipality' => 297,
                'parish' => 'San José de Aerocuar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 765,
                'idMunicipality' => 297,
                'parish' => 'Tavera Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 766,
                'idMunicipality' => 298,
                'parish' => 'Río Caribe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 767,
                'idMunicipality' => 298,
                'parish' => 'Antonio José de Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 768,
                'idMunicipality' => 298,
                'parish' => 'El Morro de Puerto Santo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 769,
                'idMunicipality' => 298,
                'parish' => 'Puerto Santo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 770,
                'idMunicipality' => 298,
                'parish' => 'San Juan de las Galdonas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 771,
                'idMunicipality' => 299,
                'parish' => 'El Pilar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 772,
                'idMunicipality' => 299,
                'parish' => 'El Rincón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 773,
                'idMunicipality' => 299,
                'parish' => 'General Francisco Antonio Váquez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 774,
                'idMunicipality' => 299,
                'parish' => 'Guaraúnos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 775,
                'idMunicipality' => 299,
                'parish' => 'Tunapuicito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 776,
                'idMunicipality' => 299,
                'parish' => 'Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 777,
                'idMunicipality' => 300,
                'parish' => 'Santa Catalina',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 778,
                'idMunicipality' => 300,
                'parish' => 'Santa Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 779,
                'idMunicipality' => 300,
                'parish' => 'Santa Teresa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 780,
                'idMunicipality' => 300,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 781,
                'idMunicipality' => 300,
                'parish' => 'Maracapana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 782,
                'idMunicipality' => 302,
                'parish' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 783,
                'idMunicipality' => 302,
                'parish' => 'El Paujil',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 784,
                'idMunicipality' => 302,
                'parish' => 'Yaguaraparo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 785,
                'idMunicipality' => 303,
                'parish' => 'Cruz Salmerón Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 786,
                'idMunicipality' => 303,
                'parish' => 'Chacopata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 787,
                'idMunicipality' => 303,
                'parish' => 'Manicuare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 788,
                'idMunicipality' => 304,
                'parish' => 'Tunapuy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 789,
                'idMunicipality' => 304,
                'parish' => 'Campo Elías',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 790,
                'idMunicipality' => 305,
                'parish' => 'Irapa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 791,
                'idMunicipality' => 305,
                'parish' => 'Campo Claro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 792,
                'idMunicipality' => 305,
                'parish' => 'Maraval',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 793,
                'idMunicipality' => 305,
                'parish' => 'San Antonio de Irapa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 794,
                'idMunicipality' => 305,
                'parish' => 'Soro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 795,
                'idMunicipality' => 306,
                'parish' => 'Mejía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 796,
                'idMunicipality' => 307,
                'parish' => 'Cumanacoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 797,
                'idMunicipality' => 307,
                'parish' => 'Arenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 798,
                'idMunicipality' => 307,
                'parish' => 'Aricagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 799,
                'idMunicipality' => 307,
                'parish' => 'Cogollar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 800,
                'idMunicipality' => 307,
                'parish' => 'San Fernando',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 801,
                'idMunicipality' => 307,
                'parish' => 'San Lorenzo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 802,
                'idMunicipality' => 308,
                'parish' => 'Villa Frontado (Muelle de Cariaco)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 803,
                'idMunicipality' => 308,
                'parish' => 'Catuaro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 804,
                'idMunicipality' => 308,
                'parish' => 'Rendón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 805,
                'idMunicipality' => 308,
                'parish' => 'San Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 806,
                'idMunicipality' => 308,
                'parish' => 'Santa María',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 807,
                'idMunicipality' => 309,
                'parish' => 'Altagracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 808,
                'idMunicipality' => 309,
                'parish' => 'Santa Inés',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 809,
                'idMunicipality' => 309,
                'parish' => 'Valentín Valiente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 810,
                'idMunicipality' => 309,
                'parish' => 'Ayacucho',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 811,
                'idMunicipality' => 309,
                'parish' => 'San Juan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 812,
                'idMunicipality' => 309,
                'parish' => 'Raúl Leoni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 813,
                'idMunicipality' => 309,
                'parish' => 'Gran Mariscal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 814,
                'idMunicipality' => 310,
                'parish' => 'Cristóbal Colón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 815,
                'idMunicipality' => 310,
                'parish' => 'Bideau',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 816,
                'idMunicipality' => 310,
                'parish' => 'Punta de Piedras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 817,
                'idMunicipality' => 310,
                'parish' => 'Güiria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 818,
                'idMunicipality' => 341,
                'parish' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 819,
                'idMunicipality' => 342,
                'parish' => 'Antonio Rómulo Costa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 820,
                'idMunicipality' => 343,
                'parish' => 'Ayacucho',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 821,
                'idMunicipality' => 343,
                'parish' => 'Rivas Berti',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 822,
                'idMunicipality' => 343,
                'parish' => 'San Pedro del Río',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 823,
                'idMunicipality' => 344,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 824,
                'idMunicipality' => 344,
                'parish' => 'Palotal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 825,
                'idMunicipality' => 344,
                'parish' => 'General Juan Vicente Gómez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 826,
                'idMunicipality' => 344,
                'parish' => 'Isaías Medina Angarita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 827,
                'idMunicipality' => 345,
                'parish' => 'Cárdenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 828,
                'idMunicipality' => 345,
                'parish' => 'Amenodoro Ángel Lamus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 829,
                'idMunicipality' => 345,
                'parish' => 'La Florida',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 830,
                'idMunicipality' => 346,
                'parish' => 'Córdoba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 831,
                'idMunicipality' => 347,
                'parish' => 'Fernández Feo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 832,
                'idMunicipality' => 347,
                'parish' => 'Alberto Adriani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 833,
                'idMunicipality' => 347,
                'parish' => 'Santo Domingo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 834,
                'idMunicipality' => 348,
                'parish' => 'Francisco de Miranda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 835,
                'idMunicipality' => 349,
                'parish' => 'García de Hevia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 836,
                'idMunicipality' => 349,
                'parish' => 'Boca de Grita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 837,
                'idMunicipality' => 349,
                'parish' => 'José Antonio Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 838,
                'idMunicipality' => 350,
                'parish' => 'Guásimos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 839,
                'idMunicipality' => 351,
                'parish' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 840,
                'idMunicipality' => 351,
                'parish' => 'Juan Germán Roscio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 841,
                'idMunicipality' => 351,
                'parish' => 'Román Cárdenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 842,
                'idMunicipality' => 352,
                'parish' => 'Jáuregui',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 843,
                'idMunicipality' => 352,
                'parish' => 'Emilio Constantino Guerrero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 844,
                'idMunicipality' => 352,
                'parish' => 'Monseñor Miguel Antonio Salas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 845,
                'idMunicipality' => 353,
                'parish' => 'José María Vargas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 846,
                'idMunicipality' => 354,
                'parish' => 'Junín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 847,
                'idMunicipality' => 354,
                'parish' => 'La Petrólea',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 848,
                'idMunicipality' => 354,
                'parish' => 'Quinimarí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 849,
                'idMunicipality' => 354,
                'parish' => 'Bramón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 850,
                'idMunicipality' => 355,
                'parish' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 851,
                'idMunicipality' => 355,
                'parish' => 'Cipriano Castro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 852,
                'idMunicipality' => 355,
                'parish' => 'Manuel Felipe Rugeles',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 853,
                'idMunicipality' => 356,
                'parish' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 854,
                'idMunicipality' => 356,
                'parish' => 'Doradas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 855,
                'idMunicipality' => 356,
                'parish' => 'Emeterio Ochoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 856,
                'idMunicipality' => 356,
                'parish' => 'San Joaquín de Navay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 857,
                'idMunicipality' => 357,
                'parish' => 'Lobatera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 858,
                'idMunicipality' => 357,
                'parish' => 'Constitución',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 859,
                'idMunicipality' => 358,
                'parish' => 'Michelena',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 860,
                'idMunicipality' => 359,
                'parish' => 'Panamericano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 861,
                'idMunicipality' => 359,
                'parish' => 'La Palmita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 862,
                'idMunicipality' => 360,
                'parish' => 'Pedro María Ureña',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 863,
                'idMunicipality' => 360,
                'parish' => 'Nueva Arcadia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 864,
                'idMunicipality' => 361,
                'parish' => 'Delicias',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 865,
                'idMunicipality' => 361,
                'parish' => 'Pecaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 866,
                'idMunicipality' => 362,
                'parish' => 'Samuel Darío Maldonado',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 867,
                'idMunicipality' => 362,
                'parish' => 'Boconó',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 868,
                'idMunicipality' => 362,
                'parish' => 'Hernández',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 869,
                'idMunicipality' => 363,
                'parish' => 'La Concordia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 870,
                'idMunicipality' => 363,
                'parish' => 'San Juan Bautista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 871,
                'idMunicipality' => 363,
                'parish' => 'Pedro María Morantes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 872,
                'idMunicipality' => 363,
                'parish' => 'San Sebastián',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 873,
                'idMunicipality' => 363,
                'parish' => 'Dr. Francisco Romero Lobo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 874,
                'idMunicipality' => 364,
                'parish' => 'Seboruco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 875,
                'idMunicipality' => 365,
                'parish' => 'Simón Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 876,
                'idMunicipality' => 366,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 877,
                'idMunicipality' => 366,
                'parish' => 'Eleazar López Contreras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 878,
                'idMunicipality' => 366,
                'parish' => 'San Pablo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 879,
                'idMunicipality' => 367,
                'parish' => 'Torbes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 880,
                'idMunicipality' => 368,
                'parish' => 'Uribante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 881,
                'idMunicipality' => 368,
                'parish' => 'Cárdenas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 882,
                'idMunicipality' => 368,
                'parish' => 'Juan Pablo Peñalosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 883,
                'idMunicipality' => 368,
                'parish' => 'Potosí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 884,
                'idMunicipality' => 369,
                'parish' => 'San Judas Tadeo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 885,
                'idMunicipality' => 370,
                'parish' => 'Araguaney',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 886,
                'idMunicipality' => 370,
                'parish' => 'El Jaguito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 887,
                'idMunicipality' => 370,
                'parish' => 'La Esperanza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 888,
                'idMunicipality' => 370,
                'parish' => 'Santa Isabel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 889,
                'idMunicipality' => 371,
                'parish' => 'Boconó',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 890,
                'idMunicipality' => 371,
                'parish' => 'El Carmen',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 891,
                'idMunicipality' => 371,
                'parish' => 'Mosquey',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 892,
                'idMunicipality' => 371,
                'parish' => 'Ayacucho',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 893,
                'idMunicipality' => 371,
                'parish' => 'Burbusay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 894,
                'idMunicipality' => 371,
                'parish' => 'General Ribas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 895,
                'idMunicipality' => 371,
                'parish' => 'Guaramacal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 896,
                'idMunicipality' => 371,
                'parish' => 'Vega de Guaramacal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 897,
                'idMunicipality' => 371,
                'parish' => 'Monseñor Jáuregui',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 898,
                'idMunicipality' => 371,
                'parish' => 'Rafael Rangel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 899,
                'idMunicipality' => 371,
                'parish' => 'San Miguel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 900,
                'idMunicipality' => 371,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 901,
                'idMunicipality' => 372,
                'parish' => 'Sabana Grande',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 902,
                'idMunicipality' => 372,
                'parish' => 'Cheregüé',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 903,
                'idMunicipality' => 372,
                'parish' => 'Granados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 904,
                'idMunicipality' => 373,
                'parish' => 'Arnoldo Gabaldón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 905,
                'idMunicipality' => 373,
                'parish' => 'Bolivia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 906,
                'idMunicipality' => 373,
                'parish' => 'Carrillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 907,
                'idMunicipality' => 373,
                'parish' => 'Cegarra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 908,
                'idMunicipality' => 373,
                'parish' => 'Chejendé',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 909,
                'idMunicipality' => 373,
                'parish' => 'Manuel Salvador Ulloa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 910,
                'idMunicipality' => 373,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 911,
                'idMunicipality' => 374,
                'parish' => 'Carache',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 912,
                'idMunicipality' => 374,
                'parish' => 'La Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 913,
                'idMunicipality' => 374,
                'parish' => 'Cuicas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 914,
                'idMunicipality' => 374,
                'parish' => 'Panamericana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 915,
                'idMunicipality' => 374,
                'parish' => 'Santa Cruz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 916,
                'idMunicipality' => 375,
                'parish' => 'Escuque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 917,
                'idMunicipality' => 375,
                'parish' => 'La Unión',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 918,
                'idMunicipality' => 375,
                'parish' => 'Santa Rita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 919,
                'idMunicipality' => 375,
                'parish' => 'Sabana Libre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 920,
                'idMunicipality' => 376,
                'parish' => 'El Socorro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 921,
                'idMunicipality' => 376,
                'parish' => 'Los Caprichos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 922,
                'idMunicipality' => 376,
                'parish' => 'Antonio José de Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 923,
                'idMunicipality' => 377,
                'parish' => 'Campo Elías',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 924,
                'idMunicipality' => 377,
                'parish' => 'Arnoldo Gabaldón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 925,
                'idMunicipality' => 378,
                'parish' => 'Santa Apolonia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 926,
                'idMunicipality' => 378,
                'parish' => 'El Progreso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 927,
                'idMunicipality' => 378,
                'parish' => 'La Ceiba',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 928,
                'idMunicipality' => 378,
                'parish' => 'Tres de Febrero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 929,
                'idMunicipality' => 379,
                'parish' => 'El Dividive',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 930,
                'idMunicipality' => 379,
                'parish' => 'Agua Santa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 931,
                'idMunicipality' => 379,
                'parish' => 'Agua Caliente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 932,
                'idMunicipality' => 379,
                'parish' => 'El Cenizo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 933,
                'idMunicipality' => 379,
                'parish' => 'Valerita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 934,
                'idMunicipality' => 380,
                'parish' => 'Monte Carmelo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 935,
                'idMunicipality' => 380,
                'parish' => 'Buena Vista',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 936,
                'idMunicipality' => 380,
                'parish' => 'Santa María del Horcón',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 937,
                'idMunicipality' => 381,
                'parish' => 'Motatán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 938,
                'idMunicipality' => 381,
                'parish' => 'El Baño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 939,
                'idMunicipality' => 381,
                'parish' => 'Jalisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 940,
                'idMunicipality' => 382,
                'parish' => 'Pampán',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 941,
                'idMunicipality' => 382,
                'parish' => 'Flor de Patria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 942,
                'idMunicipality' => 382,
                'parish' => 'La Paz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 943,
                'idMunicipality' => 382,
                'parish' => 'Santa Ana',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 944,
                'idMunicipality' => 383,
                'parish' => 'Pampanito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 945,
                'idMunicipality' => 383,
                'parish' => 'La Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 946,
                'idMunicipality' => 383,
                'parish' => 'Pampanito II',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 947,
                'idMunicipality' => 384,
                'parish' => 'Betijoque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 948,
                'idMunicipality' => 384,
                'parish' => 'José Gregorio Hernández',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 949,
                'idMunicipality' => 384,
                'parish' => 'La Pueblita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 950,
                'idMunicipality' => 384,
                'parish' => 'Los Cedros',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 951,
                'idMunicipality' => 385,
                'parish' => 'Carvajal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 952,
                'idMunicipality' => 385,
                'parish' => 'Campo Alegre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 953,
                'idMunicipality' => 385,
                'parish' => 'Antonio Nicolás Briceño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 954,
                'idMunicipality' => 385,
                'parish' => 'José Leonardo Suárez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 955,
                'idMunicipality' => 386,
                'parish' => 'Sabana de Mendoza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 956,
                'idMunicipality' => 386,
                'parish' => 'Junín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 957,
                'idMunicipality' => 386,
                'parish' => 'Valmore Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 958,
                'idMunicipality' => 386,
                'parish' => 'El Paraíso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 959,
                'idMunicipality' => 387,
                'parish' => 'Andrés Linares',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 960,
                'idMunicipality' => 387,
                'parish' => 'Chiquinquirá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 961,
                'idMunicipality' => 387,
                'parish' => 'Cristóbal Mendoza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 962,
                'idMunicipality' => 387,
                'parish' => 'Cruz Carrillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 963,
                'idMunicipality' => 387,
                'parish' => 'Matriz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 964,
                'idMunicipality' => 387,
                'parish' => 'Monseñor Carrillo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 965,
                'idMunicipality' => 387,
                'parish' => 'Tres Esquinas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 966,
                'idMunicipality' => 388,
                'parish' => 'Cabimbú',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 967,
                'idMunicipality' => 388,
                'parish' => 'Jajó',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 968,
                'idMunicipality' => 388,
                'parish' => 'La Mesa de Esnujaque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 969,
                'idMunicipality' => 388,
                'parish' => 'Santiago',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 970,
                'idMunicipality' => 388,
                'parish' => 'Tuñame',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 971,
                'idMunicipality' => 388,
                'parish' => 'La Quebrada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 972,
                'idMunicipality' => 389,
                'parish' => 'Juan Ignacio Montilla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 973,
                'idMunicipality' => 389,
                'parish' => 'La Beatriz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 974,
                'idMunicipality' => 389,
                'parish' => 'La Puerta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 975,
                'idMunicipality' => 389,
                'parish' => 'Mendoza del Valle de Momboy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 976,
                'idMunicipality' => 389,
                'parish' => 'Mercedes Díaz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 977,
                'idMunicipality' => 389,
                'parish' => 'San Luis',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 978,
                'idMunicipality' => 390,
                'parish' => 'Caraballeda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 979,
                'idMunicipality' => 390,
                'parish' => 'Carayaca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 980,
                'idMunicipality' => 390,
                'parish' => 'Carlos Soublette',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 981,
                'idMunicipality' => 390,
                'parish' => 'Caruao Chuspa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 982,
                'idMunicipality' => 390,
                'parish' => 'Catia La Mar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 983,
                'idMunicipality' => 390,
                'parish' => 'El Junko',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 984,
                'idMunicipality' => 390,
                'parish' => 'La Guaira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 985,
                'idMunicipality' => 390,
                'parish' => 'Macuto',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 986,
                'idMunicipality' => 390,
                'parish' => 'Maiquetía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 987,
                'idMunicipality' => 390,
                'parish' => 'Naiguatá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 988,
                'idMunicipality' => 390,
                'parish' => 'Urimare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 989,
                'idMunicipality' => 391,
                'parish' => 'Arístides Bastidas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 990,
                'idMunicipality' => 392,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 991,
                'idMunicipality' => 407,
                'parish' => 'Chivacoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 992,
                'idMunicipality' => 407,
                'parish' => 'Campo Elías',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 993,
                'idMunicipality' => 408,
                'parish' => 'Cocorote',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 994,
                'idMunicipality' => 409,
                'parish' => 'Independencia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 995,
                'idMunicipality' => 410,
                'parish' => 'José Antonio Páez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 996,
                'idMunicipality' => 411,
                'parish' => 'La Trinidad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 997,
                'idMunicipality' => 412,
                'parish' => 'Manuel Monge',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 998,
                'idMunicipality' => 413,
                'parish' => 'Salóm',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 999,
                'idMunicipality' => 413,
                'parish' => 'Temerla',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1000,
                'idMunicipality' => 413,
                'parish' => 'Nirgua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1001,
                'idMunicipality' => 414,
                'parish' => 'San Andrés',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1002,
                'idMunicipality' => 414,
                'parish' => 'Yaritagua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1003,
                'idMunicipality' => 415,
                'parish' => 'San Javier',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1004,
                'idMunicipality' => 415,
                'parish' => 'Albarico',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1005,
                'idMunicipality' => 415,
                'parish' => 'San Felipe',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1006,
                'idMunicipality' => 416,
                'parish' => 'Sucre',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1007,
                'idMunicipality' => 417,
                'parish' => 'Urachiche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1008,
                'idMunicipality' => 418,
                'parish' => 'El Guayabo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1009,
                'idMunicipality' => 418,
                'parish' => 'Farriar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1010,
                'idMunicipality' => 441,
                'parish' => 'Isla de Toas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1011,
                'idMunicipality' => 441,
                'parish' => 'Monagas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1012,
                'idMunicipality' => 442,
                'parish' => 'San Timoteo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1013,
                'idMunicipality' => 442,
                'parish' => 'General Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1014,
                'idMunicipality' => 442,
                'parish' => 'Libertador',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1015,
                'idMunicipality' => 442,
                'parish' => 'Marcelino Briceño',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1016,
                'idMunicipality' => 442,
                'parish' => 'Pueblo Nuevo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1017,
                'idMunicipality' => 442,
                'parish' => 'Manuel Guanipa Matos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1018,
                'idMunicipality' => 443,
                'parish' => 'Ambrosio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1019,
                'idMunicipality' => 443,
                'parish' => 'Carmen Herrera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1020,
                'idMunicipality' => 443,
                'parish' => 'La Rosa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1021,
                'idMunicipality' => 443,
                'parish' => 'Germán Ríos Linares',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1022,
                'idMunicipality' => 443,
                'parish' => 'San Benito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1023,
                'idMunicipality' => 443,
                'parish' => 'Rómulo Betancourt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1024,
                'idMunicipality' => 443,
                'parish' => 'Jorge Hernández',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1025,
                'idMunicipality' => 443,
                'parish' => 'Punta Gorda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1026,
                'idMunicipality' => 443,
                'parish' => 'Arístides Calvani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1027,
                'idMunicipality' => 444,
                'parish' => 'Encontrados',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1028,
                'idMunicipality' => 444,
                'parish' => 'Udón Pérez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1029,
                'idMunicipality' => 445,
                'parish' => 'Moralito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1030,
                'idMunicipality' => 445,
                'parish' => 'San Carlos del Zulia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1031,
                'idMunicipality' => 445,
                'parish' => 'Santa Cruz del Zulia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1032,
                'idMunicipality' => 445,
                'parish' => 'Santa Bárbara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1033,
                'idMunicipality' => 445,
                'parish' => 'Urribarrí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1034,
                'idMunicipality' => 446,
                'parish' => 'Carlos Quevedo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1035,
                'idMunicipality' => 446,
                'parish' => 'Francisco Javier Pulgar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1036,
                'idMunicipality' => 446,
                'parish' => 'Simón Rodríguez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1037,
                'idMunicipality' => 446,
                'parish' => 'Guamo-Gavilanes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1038,
                'idMunicipality' => 448,
                'parish' => 'La Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1039,
                'idMunicipality' => 448,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1040,
                'idMunicipality' => 448,
                'parish' => 'Mariano Parra León',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1041,
                'idMunicipality' => 448,
                'parish' => 'José Ramón Yépez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1042,
                'idMunicipality' => 449,
                'parish' => 'Jesús María Semprún',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1043,
                'idMunicipality' => 449,
                'parish' => 'Barí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1044,
                'idMunicipality' => 450,
                'parish' => 'Concepción',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1045,
                'idMunicipality' => 450,
                'parish' => 'Andrés Bello',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1046,
                'idMunicipality' => 450,
                'parish' => 'Chiquinquirá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1047,
                'idMunicipality' => 450,
                'parish' => 'El Carmelo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1048,
                'idMunicipality' => 450,
                'parish' => 'Potreritos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1049,
                'idMunicipality' => 451,
                'parish' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1050,
                'idMunicipality' => 451,
                'parish' => 'Alonso de Ojeda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1051,
                'idMunicipality' => 451,
                'parish' => 'Venezuela',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1052,
                'idMunicipality' => 451,
                'parish' => 'Eleazar López Contreras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1053,
                'idMunicipality' => 451,
                'parish' => 'Campo Lara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1054,
                'idMunicipality' => 452,
                'parish' => 'Bartolomé de las Casas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1055,
                'idMunicipality' => 452,
                'parish' => 'Libertad',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1056,
                'idMunicipality' => 452,
                'parish' => 'Río Negro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1057,
                'idMunicipality' => 452,
                'parish' => 'San José de Perijá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1058,
                'idMunicipality' => 453,
                'parish' => 'San Rafael',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1059,
                'idMunicipality' => 453,
                'parish' => 'La Sierrita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1060,
                'idMunicipality' => 453,
                'parish' => 'Las Parcelas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1061,
                'idMunicipality' => 453,
                'parish' => 'Luis de Vicente',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1062,
                'idMunicipality' => 453,
                'parish' => 'Monseñor Marcos Sergio Godoy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1063,
                'idMunicipality' => 453,
                'parish' => 'Ricaurte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1064,
                'idMunicipality' => 453,
                'parish' => 'Tamare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1065,
                'idMunicipality' => 454,
                'parish' => 'Antonio Borjas Romero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1066,
                'idMunicipality' => 454,
                'parish' => 'Bolívar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1067,
                'idMunicipality' => 454,
                'parish' => 'Cacique Mara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1068,
                'idMunicipality' => 454,
                'parish' => 'Carracciolo Parra Pérez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1069,
                'idMunicipality' => 454,
                'parish' => 'Cecilio Acosta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1070,
                'idMunicipality' => 454,
                'parish' => 'Cristo de Aranza',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1071,
                'idMunicipality' => 454,
                'parish' => 'Coquivacoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1072,
                'idMunicipality' => 454,
                'parish' => 'Chiquinquirá',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1073,
                'idMunicipality' => 454,
                'parish' => 'Francisco Eugenio Bustamante',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1074,
                'idMunicipality' => 454,
                'parish' => 'Idelfonzo Vásquez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1075,
                'idMunicipality' => 454,
                'parish' => 'Juana de Ávila',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1076,
                'idMunicipality' => 454,
                'parish' => 'Luis Hurtado Higuera',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1077,
                'idMunicipality' => 454,
                'parish' => 'Manuel Dagnino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1078,
                'idMunicipality' => 454,
                'parish' => 'Olegario Villalobos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1079,
                'idMunicipality' => 454,
                'parish' => 'Raúl Leoni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1080,
                'idMunicipality' => 454,
                'parish' => 'Santa Lucía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1081,
                'idMunicipality' => 454,
                'parish' => 'Venancio Pulgar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1082,
                'idMunicipality' => 454,
                'parish' => 'San Isidro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1083,
                'idMunicipality' => 455,
                'parish' => 'Altagracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1084,
                'idMunicipality' => 455,
                'parish' => 'Faría',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1085,
                'idMunicipality' => 455,
                'parish' => 'Ana María Campos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1086,
                'idMunicipality' => 455,
                'parish' => 'San Antonio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1087,
                'idMunicipality' => 455,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1088,
                'idMunicipality' => 456,
                'parish' => 'Donaldo García',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1089,
                'idMunicipality' => 456,
                'parish' => 'El Rosario',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1090,
                'idMunicipality' => 456,
                'parish' => 'Sixto Zambrano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1091,
                'idMunicipality' => 457,
                'parish' => 'San Francisco',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1092,
                'idMunicipality' => 457,
                'parish' => 'El Bajo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1093,
                'idMunicipality' => 457,
                'parish' => 'Domitila Flores',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1094,
                'idMunicipality' => 457,
                'parish' => 'Francisco Ochoa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1095,
                'idMunicipality' => 457,
                'parish' => 'Los Cortijos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1096,
                'idMunicipality' => 457,
                'parish' => 'Marcial Hernández',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1097,
                'idMunicipality' => 458,
                'parish' => 'Santa Rita',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1098,
                'idMunicipality' => 458,
                'parish' => 'El Mene',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1099,
                'idMunicipality' => 458,
                'parish' => 'Pedro Lucas Urribarrí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1100,
                'idMunicipality' => 458,
                'parish' => 'José Cenobio Urribarrí',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1101,
                'idMunicipality' => 459,
                'parish' => 'Rafael Maria Baralt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1102,
                'idMunicipality' => 459,
                'parish' => 'Manuel Manrique',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1103,
                'idMunicipality' => 459,
                'parish' => 'Rafael Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1104,
                'idMunicipality' => 460,
                'parish' => 'Bobures',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1105,
                'idMunicipality' => 460,
                'parish' => 'Gibraltar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1106,
                'idMunicipality' => 460,
                'parish' => 'Heras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1107,
                'idMunicipality' => 460,
                'parish' => 'Monseñor Arturo Álvarez',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1108,
                'idMunicipality' => 460,
                'parish' => 'Rómulo Gallegos',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1109,
                'idMunicipality' => 460,
                'parish' => 'El Batey',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1110,
                'idMunicipality' => 461,
                'parish' => 'Rafael Urdaneta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1111,
                'idMunicipality' => 461,
                'parish' => 'La Victoria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1112,
                'idMunicipality' => 461,
                'parish' => 'Raúl Cuenca',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1113,
                'idMunicipality' => 447,
                'parish' => 'Sinamaica',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1114,
                'idMunicipality' => 447,
                'parish' => 'Alta Guajira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1115,
                'idMunicipality' => 447,
                'parish' => 'Elías Sánchez Rubio',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1116,
                'idMunicipality' => 447,
                'parish' => 'Guajira',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1117,
                'idMunicipality' => 462,
                'parish' => 'Altagracia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1118,
                'idMunicipality' => 462,
                'parish' => 'Antímano',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1119,
                'idMunicipality' => 462,
                'parish' => 'Caricuao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1120,
                'idMunicipality' => 462,
                'parish' => 'Catedral',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1121,
                'idMunicipality' => 462,
                'parish' => 'Coche',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1122,
                'idMunicipality' => 462,
                'parish' => 'El Junquito',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1123,
                'idMunicipality' => 462,
                'parish' => 'El Paraíso',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1124,
                'idMunicipality' => 462,
                'parish' => 'El Recreo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1125,
                'idMunicipality' => 462,
                'parish' => 'El Valle',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1126,
                'idMunicipality' => 462,
                'parish' => 'La Candelaria',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1127,
                'idMunicipality' => 462,
                'parish' => 'La Pastora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1128,
                'idMunicipality' => 462,
                'parish' => 'La Vega',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1129,
                'idMunicipality' => 462,
                'parish' => 'Macarao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1130,
                'idMunicipality' => 462,
                'parish' => 'San Agustín',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1131,
                'idMunicipality' => 462,
                'parish' => 'San Bernardino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1132,
                'idMunicipality' => 462,
                'parish' => 'San José',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1133,
                'idMunicipality' => 462,
                'parish' => 'San Juan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1134,
                'idMunicipality' => 462,
                'parish' => 'San Pedro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1135,
                'idMunicipality' => 462,
                'parish' => 'Santa Rosalía',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1136,
                'idMunicipality' => 462,
                'parish' => 'Santa Teresa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1137,
                'idMunicipality' => 462,
                'parish' => 'Sucre (Catia)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1138,
                'idMunicipality' => 462,
                'parish' => '23 de enero',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ]);
    }
}