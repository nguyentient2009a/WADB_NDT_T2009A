<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class apartmentsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tableName = 'apartments';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'id'=> 1,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 2,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 3,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 4,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 5,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 6,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 7,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 8,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 9,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 10,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 11,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 12,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 13,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 14,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 15,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 16,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 17,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 18,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 19,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id'=> 20,
                'TenChungCu'=> 'Vinhomes Smart City',
                'DiaChi'=> 'Đại Mỗ, Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội',
                'GiaBan'=> '33tr/m2',
                'ThongTinChungCu'=> '1. Căn studio. Diện tích thông thủy 25m2 đến 28m2. Nội thất chủ đầu tư: 930 triệu chưa gồm phí thuế.',
                'HinhDaiDien'=> 'https://daibv.com/wp-content/uploads/2019/12/thiet-ke-can-studio.jpg',
                'TrangThaiBan'=> 'còn hàng',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],

            ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}