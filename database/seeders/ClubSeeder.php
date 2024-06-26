<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            ['club_name' => 'Club one', 'user_id' => 2],
            ['club_name' => 'Club two', 'user_id' => 2],
            ['club_name' => 'Club three', 'user_id' => 2],
            ['club_name' => 'Club four', 'user_id' => 2],
            ['club_name' => 'Club five', 'user_id' => 2],
            ['club_name' => 'Club six', 'user_id' => 2],
            ['club_name' => 'Club seven', 'user_id' => 2],
            ['club_name' => 'Club eight', 'user_id' => 2],
        ]);
    }
}
