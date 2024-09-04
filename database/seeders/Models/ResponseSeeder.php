<?php

namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database see
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --model-mode --models=Response
         *
         */

        // rt
        $newData0 = \App\Models\Response::create([
            'id' => 69,
            'region_id' => 30,
            'r105' => '12',
            'r106' => '12',
            'r107' => 'Manado',
            'r109' => 'Brian',
            'r110' => '13',
            'r111' => '2',
            'r112' => 'Bahagia',
            'r113' => '2',
            'r114' => 'Dase12',
            'r115' => '1',
            'pcl' => 'SHERYL JESSICA TATONTOS',
            'pml' => 'ANASTASYA WOWOMPANSING',

            'r301A' => '1',
            'r301B' => '1',
            'r302' => '30m',
            'r303' => '2',
            'r304' => '1',
            'r305' => '3',
            'r306A' => '2',
            'r306B' => null,
            'r307A' => '1',
            'r307B' => '1',
            'r308' => '4',
            'r309A' => '1',
            'r309B' => '1',
            'r310' => '1',

            'r501' => '2',
            'r501A' => '2',
            'r501B' => '2',
            'r501C' => '2',
            'r501D' => '2',
            'r501E' => '2',
            'r501F' => '2',
            'r501G' => '2',
            'r502' => '1',
            'r502A' => '2',
            'r502B' => '1',
            'r502C' => '1',
            'r502D' => '2',
            'r502E' => '2',
            'r502F' => '2',
            'r502G' => '2',
            'r502H' => '1',
            'r502I' => '2',
            'r502J' => '2',
            'r502K' => '2',
            'r502L' => '2',
            'r502M' => '2',
            'r502N' => '1',
            'r503' => '1',
            'r503A' => '1',
            'r503B' => '1',
            'r504' => '2',
            'r505' => '4',
            'r506' => '1',


            'docState' => 'C',
            'submit_status' => 2,
            'updated_at' => '2024-07-17',
            'created_at' => '2024-07-17',
        ]);
        // art
        $newData1 = \App\Models\ResponseArt::create([
            'id' => 1,
            'response_id' => 69,

            'r402' => '1',
            'nama_art' => 'Brian',
            'no_art' => '1',
            'r403' => '7171031204980001',
            'r404' => '1',
            'r405' => '1',
            'r406' => '1998-04-12',
            'r407' => '26',
            'r408' => '2',
            'r409' => '1',
            'r410' => null,
            'r411' => '4',
            'r412' => '3',
            'r413' => '19',
            'r413' => null,
            'r415' => '19',
            'r416A' => '1',
            'r416B' => '78 jam',
            'r417' => '14',
            'r418' => '1',
            'r419' => '3',
            'r420A' => '1',
            'r420B' => '1',
            'r421' => '14',
            'r422' => '1',
            'r423' => '1',
            'r424' => '1',
            'r425' => '2',
            'r426' => '5',
            'r427' => '3',
            'r428A' => '2',
            'r428B' => '2',
            'r428C' => '2',
            'r428D' => '2',
            'r428E' => '2',
            'r428F' => '2',
            'r428G' => '2',
            'r428H' => '2',
            'r428I' => '4',
            'r428J' => '3',
            'r429' => null,
            'r430' => '1',
            'r431A' => '2',
            'r431B' => '2',
            'r431C' => '2',
            'r431D' => '2',
            'r431E' => '2',
            'r431F' => '1',


        ]);
    }
}
