<?php

use Illuminate\Database\Seeder;
use App\subscribe;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(subscribe::class,1)->create();
    }
}
