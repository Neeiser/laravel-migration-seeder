<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $trainData = [
                'nome_azienda'          => $faker-> words(1, true),
                'stazione_di_partenza'  => $faker-> words(1, true),
                'stazione_di_arrivo'    => $faker-> words(1, true),
                'orario_di_partenza'    => $faker-> time('H:i'),
                'orario_di_arrivo'      => $faker-> time('H:i'),
                'codice_treno'          => $faker-> randomNumber(5, true),
                'numero_tarrozze'       => $faker-> randomDigitNotNull(),
                'in_orario'             => rand(0, 1),
                'cancellato'            => rand(0, 1),
            ];

            $train = new Train();
            $train -> fill($trainData);
            $train -> save();
        }
    }
}
