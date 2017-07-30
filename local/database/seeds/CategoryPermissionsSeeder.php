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
//KHỞI TẠO BAN ĐẦU
//            [
//                'name' => 'Role', // optional
//            ],
//
//            [
//                'name' => 'User', //
//            ],
            //KẾT THÚC KHỞI TẠO BAN ĐẦU
            [
                'name' => 'Tin Tức', //
            ],
        ];
        foreach ($category_permission as $key => $value) {
            CategoryPermission::create($value);
        }
    }
}
