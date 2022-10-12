<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station'=> 'firenze',
                'departure_time' => '09:00',
                'arrival_time'=> '12:00',
                'train_code' => '002100',
                'train_length'=> 3,
                'in_time' => rand(0,1),
                'deleted' => rand(0,1),
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma Termini',
                'arrival_station'=> 'bologna',
                'departure_time'=> '11:00',
                'arrival_time'=> '17:00',
                'train_code' => '0600',
                'train_length'=> 3,
                'in_time' => rand(0,1),
                'deleted' => rand(0,1),
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train ();
            $newTrain->company = $train ['company'];
            $newTrain->departure_station = $train ['departure_station'];
            $newTrain->arrival_station = $train ['arrival_station'];
            $newTrain->departure_time = $train ['departure_time'];
            $newTrain->arrival_time = $train ['arrival_time'];
            $newTrain->train_code = $train ['train_code'];
            $newTrain->train_length = $train ['train_length'];
            $newTrain->in_time = $train ['in_time'];
            $newTrain->deleted = $train ['deleted'];

            $newTrain->save();
            
        }
    }
}
