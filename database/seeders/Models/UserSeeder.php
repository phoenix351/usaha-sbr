<?php
namespace Database\Seeders\Models;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --model-mode --models=User
         *
         */

        
        $newData0 = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@monitoringbps.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'kabupaten' => '00',
            'status' => '3',
        ]);
       
        $newData6 = \App\Models\User::create([
            'name' => 'PML 7106',
            'email' => 'pml7106@monitoringbps.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'kabupaten' => '06',
            'status' => '1',
        ]);
               $newData21 = \App\Models\User::create([
            'name' => 'PCL 7106',
            'email' => 'pcl7106@monitoringbps.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'kabupaten' => '07',
            'status' => '2',
        ]);
       }
}