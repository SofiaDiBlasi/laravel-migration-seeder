<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i = 0 ; $i < 10; $i++){

            $newTrain = new Trains();
            $newTrain->timestamps = $faker->unixTime();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city() ;
            $newTrain->stazione_di_arrivo = $faker->city() ;
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->uuid();
            $newTrain->numero_carrozze = $faker->randomDigit();
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }

}
