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
//            KHỞI TẠO BAN ĐẦU
//            [
//                'name' => 'role-list',
//                'display_name' => 'Xem Danh Sách Quyền',
//                'description' => 'Được Xem Danh Sách Quyền',
//				'category_permission_id'=>1
//            ],
//            [
//                'name' => 'role-create',
//                'display_name' => 'Tạo Quyền Mới',
//                'description' => 'Được Tạo Quyền Mới',
//				'category_permission_id'=>1
//            ],
//            [
//                'name' => 'role-edit',
//                'display_name' => 'Cập Nhật Quyền',
//                'description' => 'Được Cập Nhật Quyền',
//				'category_permission_id'=>1
//            ],
//            [
//                'name' => 'role-delete',
//                'display_name' => 'Xóa Quyền',
//                'description' => 'Được Xóa Quyền',
//				'category_permission_id'=>1
//            ]
//            ,
//            [
//                'name' => 'user-list',
//                'display_name' => 'Xem Danh Sách Users',
//                'description' => 'Được Xem Danh Sách Users',
//				'category_permission_id'=>2
//            ],
//            [
//                'name' => 'user-create',
//                'display_name' => 'Tạo User',
//                'description' => 'Được Tạo User Mới',
//				'category_permission_id'=>2
//            ],
//            [
//                'name' => 'user-edit',
//                'display_name' => 'Cập Nhật User',
//                'description' => 'Được Cập Nhật User',
//				'category_permission_id'=>2
//            ],
//            [
//                'name' => 'user-delete',
//                'display_name' => 'Xóa user',
//                'description' => 'Được Xóa User',
//				'category_permission_id'=>2
//            ],
//            KẾT THÚC KHỞI TẠO BAN ĐẦU
            [
                'name' => 'news-list',
                'display_name' => 'Xem Toàn Bộ Tin Tức',
                'description' => 'Được Xem Toàn Bộ Tin Tức',
                'category_permission_id'=>4
            ],
            [
                'name' => 'news-create',
                'display_name' => 'Tạo Tin Tức Mới',
                'description' => 'Được Tin Tức Mới',
                'category_permission_id'=>4
            ],
            [
                'name' => 'news-edit',
                'display_name' => 'Cập Nhật Tin Tức',
                'description' => 'Được Cập Nhật Tin Tức',
                'category_permission_id'=>4
            ],
            [
                'name' => 'news-delete',
                'display_name' => 'Xóa Tin Tức',
                'description' => 'Được Xóa Tin Tức',
                'category_permission_id'=>4
            ]

        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
