<?php

use Illuminate\Database\Seeder;
use App\SarabandaChampion;


class SarabandaChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $champions = [
            'El Tigre',
            'Uomo Toro',
            'Uomo Gallo',
            'Uomo Cobra',
            'Uomo Gatto',
            'Uomo Gatto Vero',
            'Uomo Maiale',
            'Uomo Gabbiano',
            'Donna Pantera'
        ];

        foreach ($champions as $champion) {
            $champion_obj = new SarabandaChampion();
            $champion_obj->name = $champion;
            $champion_obj->save();
        }
    }
}
