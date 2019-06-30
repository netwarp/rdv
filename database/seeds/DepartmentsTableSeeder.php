<?php

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
        DB::connection('mongodb')->collection('departments')->truncate();

        $departments = database_path('resources/fr.json');
        $departments = File::get($departments);
        $departments = json_decode($departments);


        foreach ($departments as $department) {
            unset($department->id);
            unset($department->region_code);
            DB::connection('mongodb')->collection('departments')->insert( (array) $department );
        }
    }
}
