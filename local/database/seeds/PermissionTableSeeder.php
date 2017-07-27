<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Xem Danh Sách Quyền',
                'description' => 'Được Xem Danh Sách Quyền'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Tạo Quyền Mới',
                'description' => 'Được Tạo Quyền Mới'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Cập Nhật Quyền',
                'description' => 'Được Cập Nhật Quyền'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Xóa Quyền',
                'description' => 'Được Xóa Quyền'
            ]
            ,
            [
                'name' => 'user-list',
                'display_name' => 'Xem Danh Sách Users',
                'description' => 'Được Xem Danh Sách Users'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Tạo User',
                'description' => 'Được Tạo User Mới'
            ],
            [
                'name' => 'user-edit',
                'display_name' => 'Cập Nhật User',
                'description' => 'Được Cập Nhật User'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Xóa user',
                'description' => 'Được Xóa User'
            ]

        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
