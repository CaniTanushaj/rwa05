<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kategorija;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Kategorija::insert([
            ['Tip'=>'Terenac','slug'=>'terenci'],
            ['Tip'=>'Limuzina','slug'=>'limuzine'],
            ['Tip'=>'Pickup','slug'=>'pikapovi'],
            ['Tip'=>'Malo auto','slug'=>'maliauti'],

        ]);
    }
}
