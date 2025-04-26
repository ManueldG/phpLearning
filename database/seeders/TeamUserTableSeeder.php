<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('team_user')->delete();
        
        \DB::table('team_user')->insert(array (
            0 => 
            array (
                'id' => 2,
                'team_id' => 1,
                'user_id' => 3,
                'role' => 'editor',
                'created_at' => '2025-03-30 11:33:14',
                'updated_at' => '2025-03-30 11:33:14',
            ),
        ));
        
        
    }
}