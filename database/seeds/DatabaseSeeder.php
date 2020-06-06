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

        $loaikhachhang = [
            [
                'lkh_ten' => 'Khách hàng thường',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'lkh_ten' => 'Khách hàng VIP',
                'created_at' => $now,
                'updated_at' => $now
            ] 
        ];

        DB::table('loaikhachhang')->insert($loaikhachhang);

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
                'nv_ten' => 'Lê Ngọc Đức',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'ducb1605271',
                'q_id'     => 1
            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Lương Quốc Bình',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'binhb1605202@student.ctu.edu.vn',
                'q_id'     => 2
            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Đỗ Thị Ngọc Nguyên',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'nguyenb1605292@student.ctu.edu.vn',
                'q_id'     => 2
            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Đặng Thị Tường Vy',
                'nv_diachi' => 'Vĩnh Long',
                'nv_sdt' => '0837068434',
                'nv_email' => 'vyb1605319@student.ctu.edu.vn',
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
                'cd_id' => rand(1,8),
                'cdp_id' => rand(1,8),
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 2',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cd_id' => rand(1,8),
                'cdp_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 3',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => rand(1,5),
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 4',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => rand(1,5),
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 5',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 6',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 7',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 8',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 9',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 10',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 11',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 12',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 13',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 14',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 15',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 16',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 17',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 18',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 19',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 20',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('sanpham')->insert($sanpham);

        
    }
}
