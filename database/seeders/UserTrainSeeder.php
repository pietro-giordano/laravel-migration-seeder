<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class UserTrainSeeder extends Seeder
{
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run(Faker $faker)
      {
            // $faker = Faker\Factory::create('it_IT');
            for ($i = 0; $i < 30; $i++) {
                  $newTrain = new Train();
                  $newTrain->azienda = $faker->name();
                  $newTrain->data_partenza = $faker->date('Y-m-d');
                  $newTrain->data_arrivo = $faker->date('Y-m-d');
                  $newTrain->stazione_partenza = $faker->name();
                  $newTrain->stazione_arrivo = $faker->name();
                  $newTrain->orario_partenza = $faker->time();
                  $newTrain->orario_arrivo = $faker->time();
                  $newTrain->codice_treno = $faker->name();
                  $newTrain->numero_carrozze = $faker->randomDigit();
                  $newTrain->in_orario = $faker->numberBetween(0, 1);
                  $newTrain->cancellato = $faker->numberBetween(0, 1);
                  $newTrain->save();
            }
      }
}
