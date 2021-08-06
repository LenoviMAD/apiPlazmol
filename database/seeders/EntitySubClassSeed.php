<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EntitySubClassSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 Bancos 
        //2 Modalidad de pago 
        //3 Categorias (Se agregaran manual)
        //4 Presentación 
        //5 Moneda 
        //6 Iva 
        //7 Descuentos
        DB::table('entitySubClass')->insert([

            //Bancos
            [
                'idEntityClass' => 1,
                'code' => '0156',
                'description' => "100%BANCO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0196',
                'description' => "ABN AMRO BANK",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0172',
                'description' => "BANCAMIGA BANCO MICROFINANCIERO, C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0171',
                'description' => "BANCO ACTIVO BANCO COMERCIAL, C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0166',
                'description' => "BANCO AGRICOLA",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0175',
                'description' => "BANCO BICENTENARIO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0128',
                'description' => "BANCO CARONI, C.A. BANCO UNIVERSAL",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0164',
                'description' => "BANCO DE DESARROLLO DEL MICROEMPRESARIO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0102',
                'description' => "BANCO DE VENEZUELA S.A.I.C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0114',
                'description' => "BANCO DEL CARIBE C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0149',
                'description' => "BANCO DEL PUEBLO SOBERANO C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0163',
                'description' => "BANCO DEL TESORO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0176',
                'description' => "BANCO ESPIRITO SANTO, S.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0115',
                'description' => "BANCO EXTERIOR C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0003',
                'description' => "BANCO INDUSTRIAL DE VENEZUELA.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0173',
                'description' => "BANCO INTERNACIONAL DE DESARROLLO, C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0105',
                'description' => "BANCO MERCANTIL C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0191',
                'description' => "BANCO NACIONAL DE CREDITO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0116',
                'description' => "BANCO OCCIDENTAL DE DESCUENTO.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0138',
                'description' => "BANCO PLAZA",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0108',
                'description' => "BANCO PROVINCIAL BBVA",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0104',
                'description' => "BANCO VENEZOLANO DE CREDITO S.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0168',
                'description' => "BANCRECER S.A. BANCO DE DESARROLLO",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0134',
                'description' => "BANESCO BANCO UNIVERSAL",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0177',
                'description' => "BANFANB",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0146',
                'description' => "BANGENTE",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0174',
                'description' => "BANPLUS BANCO COMERCIAL C.A",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0190',
                'description' => "CITIBANK.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0121',
                'description' => "CORP BANCA.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0157',
                'description' => "DELSUR BANCO UNIVERSAL",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0151',
                'description' => "FONDO COMUN",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0601',
                'description' => "INSTITUTO MUNICIPAL DE CRÉDITO POPULAR",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0169',
                'description' => "MIBANCO BANCO DE DESARROLLO, C.A.",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 1,
                'code' => '0137',
                'description' => "SOFITASA",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            //Modalidad de pago
            [
                'idEntityClass' => 2,
                'code' => '01',
                'description' => "Pago móvil",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 2,
                'code' => '02',
                'description' => "Transferencia",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            // [
            //     'idEntityClass' => 2,
            //     'code' => '03',
            //     'description' => "Transferencia (Nacional)",
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ],
            // [
            //     'idEntityClass' => 2,
            //     'code' => '04',
            //     'description' => "Transferencia (Internacional)",
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s')
            // ],
            [
                'idEntityClass' => 2,
                'code' => '03',
                'description' => "Efectivo $",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 2,
                'code' => '04',
                'description' => "Efectivo Nacional",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 2,
                'code' => '05',
                'description' => "Tarjeta debito/credito",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 2,
                'code' => '06',
                'description' => "Otro",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            //Presentacion 
            [
                'idEntityClass' => 4,
                'code' => '01',
                'description' => "Unidad",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 4,
                'code' => '02',
                'description' => "Blister (06 Unidades)",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 4,
                'code' => '03',
                'description' => "Blister (12 Unidades)",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //Moneda
            [
                'idEntityClass' => 5,
                'code' => '01',
                'description' => "Bolivar Soberano (Bs. S)",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 5,
                'code' => '02',
                'description' => "Dolar",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 5,
                'code' => '03',
                'description' => "Euro",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //Iva
            [
                'idEntityClass' => 6,
                'code' => '01',
                'description' => "16%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            //Descuento
            [
                'idEntityClass' => 7,
                'code' => '01',
                'description' => "5%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 7,
                'code' => '02',
                'description' => "10%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 7,
                'code' => '03',
                'description' => "15%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 7,
                'code' => '04',
                'description' => "20%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'idEntityClass' => 7,
                'code' => '05',
                'description' => "25%",
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}