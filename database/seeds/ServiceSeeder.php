<?php

use Illuminate\Database\Seeder;
use App\service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(service::class, 6)->create();
    }
}
