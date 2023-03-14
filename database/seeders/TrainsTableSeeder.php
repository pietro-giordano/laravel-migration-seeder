<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
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
                  $newTrain->azienda = $faker->company();
                  $newTrain->stazione_partenza = $faker->city();
                  $newTrain->stazione_arrivo = $faker->city();
                  $newTrain->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
                  $newTrain->orario_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
                  $newTrain->codice_treno = $faker->bothify('?????-#####');
                  $newTrain->n_carrozze = $faker->numberBetween(3, 15);
                  $newTrain->in_orario = $faker->boolean();
                  $newTrain->cancellato = $faker->boolean();
                  $newTrain->save();
            }
      }
}
