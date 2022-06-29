<?php

use App\Train;


use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain= new Train();
        $newTrain->company = 'Italo';
        $newTrain->departure = 'Verona';
        $newTrain->arrival = 'Reggio Calabria';
        $newTrain->departure_time = '09:00:00';
        $newTrain->arrival_time = '11:00:00';
        $newTrain->code = 'f34t';
        $newTrain->coach = '6';

        $newTrain->save(); 


    }
}
