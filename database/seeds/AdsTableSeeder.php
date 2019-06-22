<?php

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mongodb')->collection('ads')->truncate();

        Ad::insert([
            'currency' => 'bitcoin',
            'title' => 'Vend pour 50€ de btc à Paris',
            'message' => 'Telegram: toto',
            'price' => '100€ prix du marché',
            'type' => 'offer',
            'location' => 'Paris',
            'name' => 'toto',
            'email' => 'toto@toto.com',
        ]);

        Ad::insert([
            'currency' => 'ether',
            'title' => 'Achète pour 200€ de ether à Paris',
            'message' => 'Signal: toto',
            'price' => '200€ prix du marché',
            'type' => 'request',
            'location' => 'Paris',
            'name' => 'bob',
            'email' => 'bob@bob.com'
        ]);
    }
}
