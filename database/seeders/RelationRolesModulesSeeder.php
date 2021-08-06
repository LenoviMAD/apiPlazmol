<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RelationRolesModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modulesRolesRelation')->insert([
            //SUPERUSUARIO
        	[
	        	'idRoles' => 1,
	        	'idModules' => 1,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 2,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 3,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 4,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 5,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 6,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 7,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 8,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 1,
	        	'idModules' => 9,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
            //ADMINISTRADOR
        	[
	        	'idRoles' => 2,
	        	'idModules' => 1,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 2,
	        	'idModules' => 2,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 2,
	        	'idModules' => 5,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 2,
	        	'idModules' => 7,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 2,
	        	'idModules' => 9,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
            //EMPLEADO
        	[
	        	'idRoles' => 3,
	        	'idModules' => 2,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 3,
	        	'idModules' => 5,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 3,
	        	'idModules' => 9,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
            //Vendedor
        	[
	        	'idRoles' => 4,
	        	'idModules' => 1,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 4,
	        	'idModules' => 3,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
            //Cliente
        	[
	        	'idRoles' => 5,
	        	'idModules' => 1,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 5,
	        	'idModules' => 3,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 5,
	        	'idModules' => 4,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ],
        	[
	        	'idRoles' => 5,
	        	'idModules' => 8,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
            ]

        ]);
    }
}
