<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run() {
       // $faker = Faker\Factory::create();
    
       // for($i = 0; $i < 1000; $i++) {
            //App\Sinhvien::create([                
               // 'name' => $faker->name,
                //'email' => $faker->email,
                //'password' => Hash::make('123456'),
            //]);
       // }
       DB::table('hochams')->insert([
        'maHH' => '1',
        'tenHH' => 'Giáo Sư'
    ]);
    DB::table('hochams')->insert([
        'maHH' => '2',
        'tenHH' => 'Phó Giáo Sư'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '1',
        'tenHV' => 'Cử Nhân'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '2',
        'tenHV' => 'Kỹ Sư'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '3',
        'tenHV' => 'Thạc Sĩ'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '4',
        'tenHV' => 'Tiến Sĩ'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '5',
        'tenHV' => 'Cao Đẳng'
    ]);
    DB::table('hocvis')->insert([
        'maHV' => '6',
        'tenHV' => 'Trung Cấp'
    ]);
    DB::table('khoas')->insert([
        'maKhoa' => '1',
        'tenKhoa' => 'Khoa Công Nghệ Thông Tin'
    ]);
    DB::table('khoas')->insert([
        'maKhoa' => '2',
        'tenKhoa' => 'Khoa Công Nghệ Thực Phẩm'
    ]);
    DB::table('khoas')->insert([
        'maKhoa' => '3',
        'tenKhoa' => 'Khoa Xây Dựng'
    ]);
    DB::table('khoahocs')->insert([
        'khoa' => '1',
    ]);
    DB::table('khoahocs')->insert([
        'khoa' => '2',
    ]);
    DB::table('khoahocs')->insert([
        'khoa' => '3',
    ]);
    DB::table('khoahocs')->insert([
        'khoa' => '4',
    ]);
    DB::table('khoahocs')->insert([
        'khoa' => '5',
    ]);
    DB::table('nganhs')->insert([
        'maNganh' => '1',
        'maKhoa' => '1',
        'tenNganh' => 'Công Nghệ Thông Tin',
        'soNamDT' => '4',
    ]);
    DB::table('nganhs')->insert([
        'maNganh' => '2',
        'maKhoa' => '2',
        'tenNganh' => 'Thực Phẩm',
        'soNamDT' => '4',
    ]);
    DB::table('nganhs')->insert([
        'maNganh' => '3',
        'maKhoa' => '3',
        'tenNganh' => 'Xây Dựng',
        'soNamDT' => '4',
    ]);
    DB::table('chuyennganhs')->insert([
        'maCN' => '1',
        'tenCN' => 'Kỹ thuật phần mềm',        
        'maNganh' => '1',
    ]);
    DB::table('chuyennganhs')->insert([
        'maCN' => '2',
        'tenCN' => 'Khoa học máy tính',        
        'maNganh' => '1',
    ]);
    DB::table('chuyennganhs')->insert([
        'maCN' => '3',
        'tenCN' => 'Hệ thống thông tin',        
        'maNganh' => '1',
    ]);
    DB::table('lopchuyennganhs')->insert([
        'maLop' => '1',
        'maCN' => '1',
        'khoa' => '1',
        'nhiemKy' => '2017-2021',   
    ]);
    DB::table('lopchuyennganhs')->insert([
        'maLop' => '2',
        'maCN' => '2',
        'khoa' => '1',
        'nhiemKy' => '2017-2021',   
    ]);
    DB::table('lopchuyennganhs')->insert([
        'maLop' => '3',
        'maCN' => '3',
        'khoa' => '1',
        'nhiemKy' => '2017-2021',   
    ]);
    }
}
