<?php

use Illuminate\Database\Seeder;
use App\about;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(about::class, 1)->create();
    }
}
