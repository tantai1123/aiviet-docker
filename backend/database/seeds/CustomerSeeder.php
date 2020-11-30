<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'customer_name' => 'mescedes',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_mercedes.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vingroup',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vingroup.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vcci',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vcci.png',
                'link' => '',
            ],
            [
                'customer_name' => 'parisbaguett',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_parisbaguett.png',
                'link' => '',
            ],
            [
                'customer_name' => 'otokechicken',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_otokechicken.png',
                'link' => '',
            ],
            [
                'customer_name' => 'laotru',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_laotru.png',
                'link' => '',
            ],
            [
                'customer_name' => 'htv',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_htv.png',
                'link' => '',
            ],
            [
                'customer_name' => 'coccoc',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_coccoc.png',
                'link' => '',
            ],
            [
                'customer_name' => 'hoasen',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_hoasen.png',
                'link' => '',
            ],
            [
                'customer_name' => 'innisfree',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_innisfree.png',
                'link' => '',
            ],
            [
                'customer_name' => 'madrid',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_madrid.png',
                'link' => '',
            ],
            [
                'customer_name' => 'iqdental',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_iqdental.png',
                'link' => '',
            ],
            [
                'customer_name' => 'daichi',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_daichi.png',
                'link' => '',
            ],
            [
                'customer_name' => 'datxanh',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_datxanh.png',
                'link' => '',
            ],
            [
                'customer_name' => 'novaland',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_novaland.png',
                'link' => '',
            ],
            [
                'customer_name' => 'hungthinhphat',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_hungthinhphat.png',
                'link' => '',
            ],
            [
                'customer_name' => 'ford',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_ford.png',
                'link' => '',
            ],
            [
                'customer_name' => 'toyota',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_toyota.png',
                'link' => '',
            ],
            [
                'customer_name' => 'honda',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_honda.png',
                'link' => '',
            ],
            [
                'customer_name' => 'hyundai',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_hyundai.png',
                'link' => '',
            ]
        ]);
    }
}
