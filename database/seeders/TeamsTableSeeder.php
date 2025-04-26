<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'name' => 'Manuel\'s Team',
                'personal_team' => 1,
                'created_at' => '2025-03-30 09:58:54',
                'updated_at' => '2025-03-30 09:58:54',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'name' => 'xxx\'s Team',
                'personal_team' => 1,
                'created_at' => '2025-03-30 10:37:29',
                'updated_at' => '2025-03-30 10:37:29',
            ),
            2 => 
            array (
                'id' => 6,
                'user_id' => 6,
                'name' => 'mdg\'s Team',
                'personal_team' => 1,
                'created_at' => '2025-04-18 15:11:07',
                'updated_at' => '2025-04-18 15:11:07',
            ),
            3 => 
            array (
                'id' => 7,
                'user_id' => 7,
                'name' => 'xxxx\'s Team',
                'personal_team' => 1,
                'created_at' => '2025-04-18 15:58:48',
                'updated_at' => '2025-04-18 15:58:48',
            ),
        ));
        
        
    }
}