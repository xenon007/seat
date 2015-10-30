<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Seat\Services\database\seeds\NotificationTypesSeeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

        $this->call(NotificationTypesSeeder::class);

        Model::reguard();
    }
}
