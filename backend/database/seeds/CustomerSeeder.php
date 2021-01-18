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
                'customer_name' => 'hoasen',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_hoasen.png',
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
//            [
//                'customer_name' => 'ford',
//                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_ford.png',
//                'link' => '',
//            ],
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
                'customer_name' => 'comem',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_coMemHomelab.png',
                'link' => '',
            ],
            [
                'customer_name' => 'comfort',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_comfort.png',
                'link' => '',
            ],
            [
                'customer_name' => 'converse',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_converse.png',
                'link' => '',
            ],
            [
                'customer_name' => 'coopfood',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_coopfood.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'eden',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_eden.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'genuine',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_genuine-partner-group.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'google-partner',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_google-partner.png',
                'link' => '',
            ],
            [
                'customer_name' => 'invest',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_kg-invest.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'talaypu',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_khaokho-talaypu.png',
                'link' => '',
            ],
            [
                'customer_name' => 'kotra',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_kotra.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'millennials',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_millennials.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'nhg',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_nhg.png',
                'link' => '',
            ],
            [
                'customer_name' => 'cookie',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_the-cookieholic.jpg',
                'link' => '',
            ],
            [
                'customer_name' => 'tiktok',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_tiktok.png',
                'link' => '',
            ],
            [
                'customer_name' => 'traveloka',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_traveloka.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vinamilk',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vinamilk.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vissan',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vissan.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vivo',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vivo.png',
                'link' => '',
            ],
            [
                'customer_name' => 'vysa',
                'image' => 'thumbs/image/logo/khachhang/435x300-0-kh_vysa.png',
                'link' => '',
            ]
        ]);
    }
}
