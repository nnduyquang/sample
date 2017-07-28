<?php

use Illuminate\Database\Seeder;
use App\CategoryPermission;

class CategoryPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_permission = [

            [
                'name' => 'Role', // optional
            ],

            [
                'name' => 'User', //
            ],
        ];
        foreach ($category_permission as $key => $value) {
            CategoryPermission::create($value);
        }
    }
}
