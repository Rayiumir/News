<?php

namespace modules\Rayium\Role\Database\Seeders;

use Illuminate\Database\Seeder;
use modules\Rayium\Role\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Permission::$permissions as $row){
            \Spatie\Permission\Models\Permission::findOrCreate($row);
        }
    }
}
