<?php

use Illuminate\Database\Seeder;
use App\team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(team::class,4)->create();
    }
}
