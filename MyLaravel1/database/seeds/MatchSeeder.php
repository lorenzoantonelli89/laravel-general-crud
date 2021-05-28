<?php

use Illuminate\Database\Seeder;
use App\Matches;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Matches::class, 20)->create();
    }
}
