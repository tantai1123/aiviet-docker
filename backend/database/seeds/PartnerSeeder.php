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
                'partner_name' => 'google',
                'image' => 'thumbs/image/logo/doitac/400x400-0-logo_google.png',
                'link' => 'https://www.google.com',
            ],

        ]);
    }
}
