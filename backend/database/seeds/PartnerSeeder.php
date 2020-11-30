<?php

use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'partner_name' => 'tiktok',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_tiktok_white.png',
                'link' => 'https://www.tiktok.com',
            ],
            [
                'partner_name' => 'botbanhang',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_botbanhang.png',
                'link' => 'https://botbanhang.vn/',
            ],
            [
                'partner_name' => 'fnbvn',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_fnbvn_red.png',
                'link' => 'https://www.facebook.com/fnbvn.academy',
            ],
            [
                'partner_name' => 'bigbom',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_bigbom.png',
                'link' => 'https://bigbom.com/',
            ],
            [
                'partner_name' => 'kas',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_kas.png',
                'link' => 'https://kas.pro.vn/',
            ],
            [
                'partner_name' => 'ladipage',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo-ladipage.png',
                'link' => 'https://ladipage.vn/',
            ],
            [
                'partner_name' => 'cnvloyalty',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo-cnv-loyalty.png',
                'link' => 'https://cnvloyalty.com/',
            ]
        ]);
    }
}
