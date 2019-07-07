<?php

use Illuminate\Database\Seeder;
use App\Models\Ad;
use Carbon\Carbon;

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

        $ad = new Ad;
        $ad->user_id = $_SESSION['users'][0]['_id'];
        $ad->currency = 'bitcoin';
        $ad->title = 'Vend pour 50€ de btc à Paris';
        $ad->slug = str_slug('Vend pour 50€ de btc à Paris');
        $ad->message = 'Telegram: toto';
        $ad->price = '50€ prix du marché';
        $ad->type = 'offer';
        $ad->location = 'Paris';
        $ad->name = 'toto';
        $ad->email = 'toto@toto.com';
        $ad->save();

        $ad = new Ad;
        $ad->user_id = $_SESSION['users'][1]['_id'];
        $ad->currency = 'bitcoin';
        $ad->title = 'Achète pour 200€ de btc à Paris';
        $ad->slug = str_slug('Achète pour 200€ de btc à Paris');
        $ad->message = 'Telegram: toto';
        $ad->price = '100€ prix du marché';
        $ad->type = 'request';
        $ad->location = 'Paris';
        $ad->name = 'bob';
        $ad->email = 'bob@bob.com';
        $ad->save();
    }
}
