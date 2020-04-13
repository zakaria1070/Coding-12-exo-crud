<?php

use Illuminate\Database\Seeder;
use App\portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(portfolio::class,6)->create();
    }
}
