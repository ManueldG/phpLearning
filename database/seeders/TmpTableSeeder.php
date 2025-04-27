<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TmpTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tmp')->delete();
        
        \DB::table('tmp')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Manuel',
                'email' => 'manuel@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$6oRsmlv2.H0.Ku4dEgK8XO5CJuX6PBS2v9XZ4NM5yoCD.RfpMs.S6',
                'remember_token' => 'FJpZdnnmDZHuPMq8OW0S41SPmpR7oOPmqjGskuMikdUTRploZKzaP3cVuDHp',
                'current_team_id' => 1,
                'profile_photo_path' => 'profile-photos/6FJRiRCJps7jwRm7OSKaBGMxnEnnLiGlgJCJ4cAo.png',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2025-03-30 09:58:54',
                'updated_at' => '2025-03-30 09:59:45',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'xxx',
                'email' => 'xxx@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$QI.DPykBm.R754cAFfgdfOcSrVfTqcbPOOQNThu7YDZpA864J3krK',
                'remember_token' => NULL,
                'current_team_id' => 1,
                'profile_photo_path' => NULL,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'created_at' => '2025-03-30 10:37:29',
                'updated_at' => '2025-03-30 11:33:28',
            ),
        ));
        
        
    }
}