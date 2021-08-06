<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModulesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(RelationRolesModulesSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(ParishSeeder::class);
        $this->call(EntityClassSeed::class);
        $this->call(EntitySubClassSeed::class);
    }
}