<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'info@manueldellagala.it',
                'email_verified_at' => '2025-04-18 16:09:38',
                'password' => '$2y$12$6oRsmlv2.H0.Ku4dEgK8XO5CJuX6PBS2v9XZ4NM5yoCD.RfpMs.S6',
                'remember_token' => '4jZPxF69sfKKmyuDP8gtY0SgPejKUauqc97xrgk3DerLRyCsWrAQ70OeHIdW',
                'current_team_id' => 1,
                'profile_photo_path' => 'profile-photos/6FJRiRCJps7jwRm7OSKaBGMxnEnnLiGlgJCJ4cAo.png',
                'created_at' => '2025-03-30 09:58:54',
                'updated_at' => '2025-03-30 09:59:45',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'xxx',
                'email' => 'xxx@email.com',
                'email_verified_at' => '2025-04-18 16:09:38',
                'password' => '$2y$12$QI.DPykBm.R754cAFfgdfOcSrVfTqcbPOOQNThu7YDZpA864J3krK',
                'remember_token' => 'arq1dum59SaMAWnJec7KUavgNf7BrqcluHvgv5ldX1dJ0vdSRJZnGmob17EF',
                'current_team_id' => 1,
                'profile_photo_path' => NULL,
                'created_at' => '2025-03-30 10:37:29',
                'updated_at' => '2025-03-30 11:33:28',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'mdg',
                'email' => 'manuel@manueldellagala.it',
                'email_verified_at' => '2025-04-18 15:11:54',
                'password' => '$2y$12$dkq1bkpV4/DgcSjU8qGuXejn2qodTTgUjMH0N5L4/Xgi9OYRAp7cq',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2025-04-18 15:11:07',
                'updated_at' => '2025-04-18 15:11:54',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'm gmail',
                'email' => 'manuel.dellagala@gmail.com',
                'email_verified_at' => '2025-04-19 20:35:27',
                'password' => '$2y$12$btf71RNAvGpNWiYT4UDNxuGB7wtSgTCHx1mWLpzwMfB25bXZFiFZO',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2025-04-18 15:58:48',
                'updated_at' => '2025-04-22 19:50:42',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
            ),
        ));
        
        
    }
}