<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['description' => 'AMAZONAS'],
            ['description' => 'ANTIOQUIA'],
            ['description' => 'ARAUCA'],
            ['description' => 'ATLÁNTICO'],
            ['description' => 'BOLÍVAR'],
            ['description' => 'BOYACÁ'],
            ['description' => 'CALDAS'],
            ['description' => 'CAQUETÁ'],
            ['description' => 'CASANARE'],
            ['description' => 'CAUCA'],
            ['description' => 'CESAR'],
            ['description' => 'CHOCÓ'],
            ['description' => 'CÓRDOBA'],
            ['description' => 'CUNDINAMARCA'],
            ['description' => 'GUAINÍA'],
            ['description' => 'GUAVIARE'],
            ['description' => 'HUILA'],
            ['description' => 'LA GUAJIRA'],
            ['description' => 'MAGDALENA'],
            ['description' => 'META'],
            ['description' => 'NARIÑO'],
            ['description' => 'NORTE DE SANTANDER'],
            ['description' => 'PUTUMAYO'],
            ['description' => 'QUINDÍO'],
            ['description' => 'RISARALDA'],
            ['description' => 'SAN ANDRÉS Y ROVIDENCIA'],
            ['description' => 'SANTANDER'],
            ['description' => 'SUCRE'],
            ['description' => 'TOLIMA'],
            ['description' => 'VALLE DEL CAUCA'],
            ['description' => 'VAUPÉS'],
            ['description' => 'VICHADA'],
        ];

        foreach ($departments as $key => $value) {
            Department::create($value);
        }
    }
}
