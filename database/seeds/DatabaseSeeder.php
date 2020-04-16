<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $now = Carbon::now();

        $quyen = [
            [
                'q_ten' => 'Admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'q_ten' => 'Nhân viên bán hàng',
                'created_at' => $now,
                'updated_at' => $now
            ] 
        ];

        DB::table('quyen')->insert($quyen);
        //Nhân viên
        $user = [
            [
                'username' => 'admin1',
                'password' => bcrypt('12345'),
                'q_id'     => 1
            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('12345'),
                'q_id'     => 2
            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('12345'),
                'q_id'     => 2
            ],
        ];
        DB::table('nhanvien')->insert($user);

        //Loại sản phẩm
        $loaisp = [
            [
                'l_ten' => 'Loại 1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Loại 2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Loại 3',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('loai')->insert($loaisp);


        $congdungphu = [
            [
                'cdp_ten' => 'Công dụng 1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 3',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 4',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 5',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 6',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 7',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 8',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('congdungphu')->insert($congdungphu);

        $congdung = [
            [
                'cd_ten' => 'Công dụng 1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 3',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 4',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 5',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 6',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 7',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 8',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('congdung')->insert($congdung);


        $xuatxu = [
            [
                'xx_ten' => 'Việt Nam',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Trung Quốc',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Hàn Quốc',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Nhật Bản',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Thái Lan',
                'created_at' => $now,
                'updated_at' => $now
            ],
            
        ];
        DB::table('xuatxu')->insert($xuatxu);

        $sanpham = [
            [
                'sp_ten' => 'Sản phẩm 1',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => 1,
                'cd_id' => 1,
                'cdp_id' => rand(1,8),
                'xx_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 2',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => 1,
                'cd_id' => 1,
                'cdp_id' => rand(1,8),
                'xx_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 3',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => 3,
                'l_id' => 2,
                'cdp_id' => rand(1,8),
                'cd_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 4',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => 1,
                'l_id' => 3,
                'cdp_id' => rand(1,8),
                'cd_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 5',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => 1,
                'cdp_id' => rand(1,8),
                'cd_id' => 1,
                'xx_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 6',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => 1,
                'cdp_id' => rand(1,8),
                'cd_id' => 1,
                'xx_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            
        ];
        DB::table('sanpham')->insert($sanpham);

        
    }
}