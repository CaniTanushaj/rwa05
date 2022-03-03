<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Auti;

class AutitablicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Auti::create([
        'Marka'=>'Mercedes',
        'slug'=>'mercedes-gclass',
        'Model'=>'G 350',
        'Kategorija'=>'Terenac',
        'Deskripcija'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
        'Kubikaza'=>2987,
        'Snaga'=>211,
        'Godina'=>2012,
        'Kilometraza'=>230000,
        'Gorivo'=>'Dizel',
        'Mjenjac'=>'Automatik',
        'CijenaRezervacije'=>100,
        'Dostupno'=>1,
        'Cijena'=>89999,
     ])->kategorijas()->attach(1);


     Auti::create([
        'Marka'=>'Audi',
        'slug'=>'audi-a5',
        'Model'=>'A5 3.0TDI',
        'Kategorija'=>'Limuzina',
        'Deskripcija'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
        'Kubikaza'=>2967,
        'Snaga'=>240,
        'Godina'=>2009,
        'Kilometraza'=>190000,
        'Gorivo'=>'Dizel',
        'Mjenjac'=>'Automatik',
        'CijenaRezervacije'=>50,
        'Dostupno'=>1,
        'Cijena'=>29999,
     ])->kategorijas()->attach(2);


     Auti::create([
        'Marka'=>'Toyota',
        'slug'=>'toyota-landcruiser',
        'Model'=>'Land Cruiser 4.7i v8',
        'Kategorija'=>'Terenac',
        'Deskripcija'=>'Jako pouzdan i mocan japanski auto sa legendarnom povjescu',
        'Kubikaza'=>4663,
        'Snaga'=>288,
        'Godina'=>2008,
        'Kilometraza'=>270000,
        'Gorivo'=>'Dizel',
        'Mjenjac'=>'Automatik',
        'CijenaRezervacije'=>100,
        'Dostupno'=>1,
        'Cijena'=>460000,
     ])->kategorijas()->attach(1);

     Auti::create([
      'Marka'=>'Nissan',
      'slug'=>'nissan-patrol',
      'Model'=>'Patrol V 3.0Di',
      'Kategorija'=>'Terenac',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>2998,
      'Snaga'=>170,
      'Godina'=>2002,
      'Kilometraza'=>215000,
      'Gorivo'=>'Dizel',
      'Mjenjac'=>'Manuelac',
      'CijenaRezervacije'=>30,
      'Dostupno'=>1,
      'Cijena'=>16999,
   ])->kategorijas()->attach(1);

   Auti::create([
      'Marka'=>'Renault',
      'slug'=>'renault-clio',
      'Model'=>'Klio 1.5dCi',
      'Kategorija'=>'Malo auto',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>1461,
      'Snaga'=>90,
      'Godina'=>2015,
      'Kilometraza'=>120000,
      'Gorivo'=>'Dizel',
      'Mjenjac'=>'Manuelac',
      'CijenaRezervacije'=>30,
      'Dostupno'=>1,
      'Cijena'=>15500,
   ])->kategorijas()->attach(4);

   Auti::create([
      'Marka'=>'Ford',
      'slug'=>'ford-focus',
      'Model'=>'Focus 1.6TDCi',
      'Kategorija'=>'Malo auto',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>1560,
      'Snaga'=>109,
      'Godina'=>2006,
      'Kilometraza'=>180000,
        'Gorivo'=>'Dizel',
        'Mjenjac'=>'Manuelac',
        'CijenaRezervacije'=>30,
        'Dostupno'=>1,
        'Cijena'=>8900,
   ])->kategorijas()->attach(4);

   Auti::create([
      'Marka'=>'Nissan',
      'slug'=>'nissan-navara',
      'Model'=>'Nevara 2.5Dci',
      'Kategorija'=>'Pickup',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>2488,
      'Snaga'=>174,
      'Godina'=>2006,
      'Kilometraza'=>235000,
        'Gorivo'=>'Dizel',
        'Mjenjac'=>'Automatik',
        'CijenaRezervacije'=>50,
        'Dostupno'=>1,
        'Cijena'=>17000,
   ])->kategorijas()->attach(3);

   Auti::create([
      'Marka'=>'Mercedes',
      'slug'=>'mercedes-sclass',
      'Model'=>'S 500',
      'Kategorija'=>'Limuzina',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>5461,
      'Snaga'=>388,
      'Godina'=>2007,
      'Kilometraza'=>190000,
      'Gorivo'=>'Dizel',
      'Mjenjac'=>'Automatik',
      'CijenaRezervacije'=>100,
      'Dostupno'=>1,
      'Cijena'=>370000,
   ])->kategorijas()->attach(2);

   Auti::create([
      'Marka'=>'Tesla',
      'slug'=>'tesla-model3',
      'Model'=>'Model 3 Standard',
      'Kategorija'=>'Limuzina',
      'Deskripcija'=>'Jako pouzdan i mocan njemacki auto sa legendarnom povjescu',
      'Kubikaza'=>0,
      'Snaga'=>325,
      'Godina'=>2017,
      'Kilometraza'=>70000,
        'Gorivo'=>'Struja',
        'Mjenjac'=>'Automatik',
        'CijenaRezervacije'=>100,
        'Dostupno'=>1,
        'Cijena'=>79000,
   ])->kategorijas()->attach(2);





    }
}
