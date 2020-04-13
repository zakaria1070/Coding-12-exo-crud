<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(HeroSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SubscribeSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TeamSeeder::class);
    }
}
