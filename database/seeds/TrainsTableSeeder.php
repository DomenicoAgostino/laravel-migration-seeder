<?php

use App\Train;

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i < 100; $i++){
            $newTrain= new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure =$faker->city;
            $newTrain->arrival =$faker->city;
            $newTrain->departure_time =$faker->time;
            $newTrain->arrival_time =$faker->time;
            $newTrain->code =$faker->regexify('[A-Z]{5}[0-4]{4}');
            $newTrain->coach =$faker->numberBetween(3, 12);

            dump($newTrain->company);
            $newTrain->save();
        }





        // $newTrain= new Train();
        // $newTrain->company = 'Italo';
        // $newTrain->departure = 'Verona';
        // $newTrain->arrival = 'Firenze';
        // $newTrain->departure_time = '09:00:00';
        // $newTrain->arrival_time = '11:00:00';
        // $newTrain->code = '01256';
        // $newTrain->coach = '6';

        
        // $newTrain->save(); 


    }
}
