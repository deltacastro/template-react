<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = new Carbon;
        $model = new Role;

        $data = [
            [
                'name' => 'super admin',
                'description' => 'Super administrador',
                'guard_name' => 'web',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

        $saved = $model->insertOrIgnore($data);
        $this->command->comment("Se crearon $saved registros para la tabla {$model->getTable()}");
    }
}
